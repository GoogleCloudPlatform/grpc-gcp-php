<?php
/*
 *
 * Copyright 2018 gRPC authors.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */
namespace Grpc\Gcp;

use Psr\Cache\CacheItemPoolInterface;

/**
 * Config is used to enable the support for the channel management.
 */
class Config
{
    private $hostname;
    private $gcp_call_invoker;
    private $cross_script_shmem_enabled;
    private $supported_sapis = ['fpm-fcgi', 'cli-server'];

    /**
     * @param string  $target The target API we want to manage the connection.
     * @param \Grpc\Gcp\ApiConfig   $conf
     * @param CacheItemPoolInterface $cacheItemPool A pool for storing configuration and channels
     *                                            cross requests within a single worker process.
     * @throws \RuntimeException When a failure occurs while attempting to attach to shared memory.
     */
    public function __construct($target, $conf = null, CacheItemPoolInterface $cacheItemPool = null)
    {
        if ($conf == null) {
            // If there is no configure file, use the default gRPC channel.
            $this->gcp_call_invoker = new \Grpc\DefaultCallInvoker();
            return;
        }

        $gcp_channel = null;
        $url_host = parse_url($target, PHP_URL_HOST);
        $this->hostname = $url_host ? $url_host : $target;
        $channel_pool_key = $this->hostname . '.gcp.channel.' . getmypid();

        $this->cross_script_shmem_enabled = $this->crossScriptShmemEnabled();

        if (!$cacheItemPool) {
            // If there is no cacheItemPool, use shared memory for
            // caching the configuration and channel pool.
            if (! extension_loaded('sysvshm')) {
                throw \RuntimeException(
                'sysvshm extension is required to use this ItemPool');
            }
            $channel_pool_key = intval(base_convert(sha1($channel_pool_key), 16, 10));
            $shm_id = $this->getShmem();
            if (shm_has_var($shm_id, $channel_pool_key)) {
                $shm_var = shm_get_var($shm_id, $channel_pool_key);
                $gcp_call_invoker = unserialize($shm_var);
            } else {
                $affinity_conf = $this->parseConfObject($conf);
                $gcp_call_invoker = new GCPCallInvoker($affinity_conf);
            }
            $this->gcp_call_invoker = $gcp_call_invoker;
            shm_detach($shm_id);

            register_shutdown_function(function ($gcp_call_invoker, $channel_pool_key, $shm_id) {
                $shm_id = $this->getShmem();
                if (! $this->cross_script_shmem_enabled) {
                    // Clean up memory if cross-script shared memory is not needed.
                    shm_remove($shm_id);
                } else {
                    // Push the current gcp_channel back into the pool when the script finishes.
                    if (!shm_put_var($shm_id, $channel_pool_key, serialize($gcp_call_invoker))) {
                        echo "[warning]: failed to update the item pool\n";
                    }
                }
                shm_detach($shm_id);
            }, $gcp_call_invoker, $channel_pool_key, $shm_id);
        } else {
            $item = $cacheItemPool->getItem($channel_pool_key);
            if ($item->isHit()) {
                // Channel pool for the $hostname API has already created.
                $gcp_call_invoker = unserialize($item->get());
            } else {
                $affinity_conf = $this->parseConfObject($conf);
                // Create GCP channel based on the information.
                $gcp_call_invoker = new GCPCallInvoker($affinity_conf);
            }
            $this->gcp_call_invoker = $gcp_call_invoker;
            register_shutdown_function(function ($gcp_call_invoker, $cacheItemPool, $item) {
                // Push the current gcp_channel back into the pool when the script finishes.
                $item->set(serialize($gcp_call_invoker));
                $cacheItemPool->save($item);
            }, $gcp_call_invoker, $cacheItemPool, $item);
        }
    }

    /**
     * @return \Grpc\CallInvoker The call invoker to be hooked into the gRPC
     */
    public function callInvoker()
    {
        return $this->gcp_call_invoker;
    }

    /**
     * @return string The URI of the endpoint
     */
    public function getTarget()
    {
        return $this->channel->getTarget();
    }

    private function parseConfObject($conf_object)
    {
        $config = json_decode($conf_object->serializeToJsonString(), true);
        if (isset($config['channelPool'])) {
            $affinity_conf['channelPool'] = $config['channelPool'];
        }
        $aff_by_method = array();
        if (isset($config['method'])) {
            for ($i = 0; $i < count($config['method']); $i++) {
                // In proto3, if the value is default, eg 0 for int, it won't be serialized.
                // Thus serialized string may not have `command` if the value is default 0(BOUND).
                if (!array_key_exists('command', $config['method'][$i]['affinity'])) {
                    $config['method'][$i]['affinity']['command'] = 'BOUND';
                }
                $aff_by_method[$config['method'][$i]['name'][0]] = $config['method'][$i]['affinity'];
            }
        }
        $affinity_conf['affinity_by_method'] = $aff_by_method;
        return $affinity_conf;
    }

    private function crossScriptShmemEnabled()
    {
        $force_enable_gcp = filter_var(
            getenv('ENABLE_GCP_CHANNEL_MANAGEMENT'),
            FILTER_VALIDATE_BOOLEAN
        );
        return in_array(php_sapi_name(), $this->supported_sapis) || $force_enable_gcp;
    }

    private function getShmem()
    {
        $shmid = shm_attach(getmypid(), 200000, 0600);
        if ($shmid === false) {
            throw new \RuntimeException(
                'Failed to attach to the shared memory'
            );
        }
        return $shmid;
    }
}

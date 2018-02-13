<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2017 Google Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
namespace Google\Devtools\Remoteworkers\V1test2;

/**
 * Design doc: https://goo.gl/oojM5H
 *
 * Loosely speaking, the Bots interface monitors a collection of workers (think
 * of them as "computers" for a moment). This collection is known as a "farm,"
 * and its purpose is to perform work on behalf of a client.
 *
 * Each worker runs a small program known as a "bot" that allows it to be
 * controlled by the server. This interface contains only methods that are
 * called by the bots themselves; admin functionality is out of scope for this
 * interface.
 *
 * More precisely, we use the term "worker" to refer to the physical "thing"
 * running the bot. We use the term "worker," and not "machine" or "computer,"
 * since a worker may consist of more than one machine - e.g., a computer with
 * multiple attached devices, or even a cluster of computers, with only one of
 * them running the bot. Conversely, a single machine may host several bots, in
 * which case each bot has a "worker" corresponding to the slice of the machine
 * being managed by that bot.
 *
 * The main resource in the Bots interface is not, surprisingly, a Bot - it is a
 * BotSession, which represents a period of time in which a bot is in continuous
 * contact with the server (see the BotSession message for more information).
 * The parent of a bot session can be thought of as an instance of a farm. That
 * is, one endpoint may be able to manage many farms for many users. For
 * example, for a farm managed through GCP, the parent resource will typically
 * take the form "projects/{project_id}". This is referred to below as "the farm
 * resource."
 */
class BotsClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * CreateBotSession is called when the bot first joins the farm, and
     * establishes a session ID to ensure that multiple machines do not register
     * using the same name accidentally.
     * @param \Google\Devtools\Remoteworkers\V1test2\CreateBotSessionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateBotSession(\Google\Devtools\Remoteworkers\V1test2\CreateBotSessionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.remoteworkers.v1test2.Bots/CreateBotSession',
        $argument,
        ['\Google\Devtools\Remoteworkers\V1test2\BotSession', 'decode'],
        $metadata, $options);
    }

    /**
     * UpdateBotSession must be called periodically by the bot (on a schedule
     * determined by the server) to let the server know about its status, and to
     * pick up new lease requests from the server.
     * @param \Google\Devtools\Remoteworkers\V1test2\UpdateBotSessionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateBotSession(\Google\Devtools\Remoteworkers\V1test2\UpdateBotSessionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.remoteworkers.v1test2.Bots/UpdateBotSession',
        $argument,
        ['\Google\Devtools\Remoteworkers\V1test2\BotSession', 'decode'],
        $metadata, $options);
    }

    /**
     * PostBotEventTemp may be called by the bot to indicate that some exceptional
     * event has occurred. This method is subject to change or removal in future
     * revisions of this API; we may simply want to replace it with StackDriver or
     * some other common interface.
     * @param \Google\Devtools\Remoteworkers\V1test2\PostBotEventTempRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function PostBotEventTemp(\Google\Devtools\Remoteworkers\V1test2\PostBotEventTempRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.devtools.remoteworkers.v1test2.Bots/PostBotEventTemp',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}

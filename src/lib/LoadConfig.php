<?php

function enable_grpc_php($config_file_path) {
    if(!array_key_exists('config', $GLOBALS)){
        $GLOBALS['config'] = parse_config($config);
    } else {
        $GLOBALS['config'] = load_protobuf_file($config_file_path);
    }
}
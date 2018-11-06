<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2018 Google LLC.
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
//
namespace Google\Api\Expr\V1alpha1;

/**
 * Access a CEL implementation from another process or machine.
 * A CEL implementation is decomposed as a parser, a static checker,
 * and an evaluator.  Every CEL implementation is expected to provide
 * a server for this API.  The API will be used for conformance testing,
 * utilities, and execution as a service.
 */
class CelServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Transforms CEL source text into a parsed representation.
     * @param \Google\Api\Expr\V1alpha1\ParseRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Parse(\Google\Api\Expr\V1alpha1\ParseRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.api.expr.v1alpha1.CelService/Parse',
        $argument,
        ['\Google\Api\Expr\V1alpha1\ParseResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Runs static checks on a parsed CEL representation and return
     * an annotated representation, or a set of issues.
     * @param \Google\Api\Expr\V1alpha1\CheckRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Check(\Google\Api\Expr\V1alpha1\CheckRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.api.expr.v1alpha1.CelService/Check',
        $argument,
        ['\Google\Api\Expr\V1alpha1\CheckResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Evaluates a parsed or annotation CEL representation given
     * values of external bindings.
     * @param \Google\Api\Expr\V1alpha1\EvalRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Eval(\Google\Api\Expr\V1alpha1\EvalRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.api.expr.v1alpha1.CelService/Eval',
        $argument,
        ['\Google\Api\Expr\V1alpha1\EvalResponse', 'decode'],
        $metadata, $options);
    }

}

<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2016 Google Inc.
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
namespace Google\Cloud\Billing\V1;

/**
 * Retrieves Google Cloud Console billing accounts and associates them with
 * projects.
 */
class CloudBillingClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Gets information about a billing account. The current authenticated user
     * must be an [owner of the billing
     * account](https://support.google.com/cloud/answer/4430947).
     * @param \Google\Cloud\Billing\V1\GetBillingAccountRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetBillingAccount(\Google\Cloud\Billing\V1\GetBillingAccountRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.billing.v1.CloudBilling/GetBillingAccount',
        $argument,
        ['\Google\Cloud\Billing\V1\BillingAccount', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists the billing accounts that the current authenticated user
     * [owns](https://support.google.com/cloud/answer/4430947).
     * @param \Google\Cloud\Billing\V1\ListBillingAccountsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListBillingAccounts(\Google\Cloud\Billing\V1\ListBillingAccountsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.billing.v1.CloudBilling/ListBillingAccounts',
        $argument,
        ['\Google\Cloud\Billing\V1\ListBillingAccountsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists the projects associated with a billing account. The current
     * authenticated user must be an [owner of the billing
     * account](https://support.google.com/cloud/answer/4430947).
     * @param \Google\Cloud\Billing\V1\ListProjectBillingInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListProjectBillingInfo(\Google\Cloud\Billing\V1\ListProjectBillingInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.billing.v1.CloudBilling/ListProjectBillingInfo',
        $argument,
        ['\Google\Cloud\Billing\V1\ListProjectBillingInfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets the billing information for a project. The current authenticated user
     * must have [permission to view the
     * project](https://cloud.google.com/docs/permissions-overview#h.bgs0oxofvnoo
     * ).
     * @param \Google\Cloud\Billing\V1\GetProjectBillingInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetProjectBillingInfo(\Google\Cloud\Billing\V1\GetProjectBillingInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.billing.v1.CloudBilling/GetProjectBillingInfo',
        $argument,
        ['\Google\Cloud\Billing\V1\ProjectBillingInfo', 'decode'],
        $metadata, $options);
    }

    /**
     * Sets or updates the billing account associated with a project. You specify
     * the new billing account by setting the `billing_account_name` in the
     * `ProjectBillingInfo` resource to the resource name of a billing account.
     * Associating a project with an open billing account enables billing on the
     * project and allows charges for resource usage. If the project already had a
     * billing account, this method changes the billing account used for resource
     * usage charges.
     *
     * *Note:* Incurred charges that have not yet been reported in the transaction
     * history of the Google Cloud Console may be billed to the new billing
     * account, even if the charge occurred before the new billing account was
     * assigned to the project.
     *
     * The current authenticated user must have ownership privileges for both the
     * [project](https://cloud.google.com/docs/permissions-overview#h.bgs0oxofvnoo
     * ) and the [billing
     * account](https://support.google.com/cloud/answer/4430947).
     *
     * You can disable billing on the project by setting the
     * `billing_account_name` field to empty. This action disassociates the
     * current billing account from the project. Any billable activity of your
     * in-use services will stop, and your application could stop functioning as
     * expected. Any unbilled charges to date will be billed to the previously
     * associated account. The current authenticated user must be either an owner
     * of the project or an owner of the billing account for the project.
     *
     * Note that associating a project with a *closed* billing account will have
     * much the same effect as disabling billing on the project: any paid
     * resources used by the project will be shut down. Thus, unless you wish to
     * disable billing, you should always call this method with the name of an
     * *open* billing account.
     * @param \Google\Cloud\Billing\V1\UpdateProjectBillingInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateProjectBillingInfo(\Google\Cloud\Billing\V1\UpdateProjectBillingInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.cloud.billing.v1.CloudBilling/UpdateProjectBillingInfo',
        $argument,
        ['\Google\Cloud\Billing\V1\ProjectBillingInfo', 'decode'],
        $metadata, $options);
    }

}

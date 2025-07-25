<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace TencentCloud\Tds\V20220801;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Tds\V20220801\Models as Models;

/**
 * @method Models\DescribeFinanceFraudUltimateResponse DescribeFinanceFraudUltimate(Models\DescribeFinanceFraudUltimateRequest $req) 查询设备标识及风险（金融旗舰版）
 * @method Models\DescribeFraudBaseResponse DescribeFraudBase(Models\DescribeFraudBaseRequest $req) 查询设备风险
 * @method Models\DescribeFraudPremiumResponse DescribeFraudPremium(Models\DescribeFraudPremiumRequest $req) 查询设备标识及风险
 * @method Models\DescribeFraudUltimateResponse DescribeFraudUltimate(Models\DescribeFraudUltimateRequest $req) 查询设备标识及风险（旗舰版）
 * @method Models\DescribeTrustedIDResponse DescribeTrustedID(Models\DescribeTrustedIDRequest $req) 查询设备标识
 */

class TdsClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "tds.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "tds";

    /**
     * @var string
     */
    protected $version = "2022-08-01";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("tds")."\\"."V20220801\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

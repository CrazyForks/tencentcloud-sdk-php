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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteVpc请求参数结构体
 *
 * @method string getVpcId() 获取VPC实例ID。可通过DescribeVpcs接口返回值中的VpcId获取。
 * @method void setVpcId(string $VpcId) 设置VPC实例ID。可通过DescribeVpcs接口返回值中的VpcId获取。
 * @method string getEcmRegion() 获取ECM 地域
 * @method void setEcmRegion(string $EcmRegion) 设置ECM 地域
 */
class DeleteVpcRequest extends AbstractModel
{
    /**
     * @var string VPC实例ID。可通过DescribeVpcs接口返回值中的VpcId获取。
     */
    public $VpcId;

    /**
     * @var string ECM 地域
     */
    public $EcmRegion;

    /**
     * @param string $VpcId VPC实例ID。可通过DescribeVpcs接口返回值中的VpcId获取。
     * @param string $EcmRegion ECM 地域
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("EcmRegion",$param) and $param["EcmRegion"] !== null) {
            $this->EcmRegion = $param["EcmRegion"];
        }
    }
}

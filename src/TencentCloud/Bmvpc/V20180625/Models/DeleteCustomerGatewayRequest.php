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
namespace TencentCloud\Bmvpc\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteCustomerGateway请求参数结构体
 *
 * @method string getCustomerGatewayId() 获取对端网关ID，例如：bmcgw-2wqq41m9，可通过DescribeCustomerGateways接口查询对端网关。
 * @method void setCustomerGatewayId(string $CustomerGatewayId) 设置对端网关ID，例如：bmcgw-2wqq41m9，可通过DescribeCustomerGateways接口查询对端网关。
 */
class DeleteCustomerGatewayRequest extends AbstractModel
{
    /**
     * @var string 对端网关ID，例如：bmcgw-2wqq41m9，可通过DescribeCustomerGateways接口查询对端网关。
     */
    public $CustomerGatewayId;

    /**
     * @param string $CustomerGatewayId 对端网关ID，例如：bmcgw-2wqq41m9，可通过DescribeCustomerGateways接口查询对端网关。
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
        if (array_key_exists("CustomerGatewayId",$param) and $param["CustomerGatewayId"] !== null) {
            $this->CustomerGatewayId = $param["CustomerGatewayId"];
        }
    }
}

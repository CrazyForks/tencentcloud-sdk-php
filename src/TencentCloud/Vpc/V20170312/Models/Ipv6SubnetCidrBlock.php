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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IPv6子网段对象。
 *
 * @method string getSubnetId() 获取子网实例`ID`。形如：`subnet-pxir56ns`。
 * @method void setSubnetId(string $SubnetId) 设置子网实例`ID`。形如：`subnet-pxir56ns`。
 * @method string getIpv6CidrBlock() 获取`IPv6`子网段。形如：`3402:4e00:20:1001::/64`。作为AssignIpv6SubnetCidrBlock接口入参时，该参数必填。
 * @method void setIpv6CidrBlock(string $Ipv6CidrBlock) 设置`IPv6`子网段。形如：`3402:4e00:20:1001::/64`。作为AssignIpv6SubnetCidrBlock接口入参时，该参数必填。
 */
class Ipv6SubnetCidrBlock extends AbstractModel
{
    /**
     * @var string 子网实例`ID`。形如：`subnet-pxir56ns`。
     */
    public $SubnetId;

    /**
     * @var string `IPv6`子网段。形如：`3402:4e00:20:1001::/64`。作为AssignIpv6SubnetCidrBlock接口入参时，该参数必填。
     */
    public $Ipv6CidrBlock;

    /**
     * @param string $SubnetId 子网实例`ID`。形如：`subnet-pxir56ns`。
     * @param string $Ipv6CidrBlock `IPv6`子网段。形如：`3402:4e00:20:1001::/64`。作为AssignIpv6SubnetCidrBlock接口入参时，该参数必填。
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
        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Ipv6CidrBlock",$param) and $param["Ipv6CidrBlock"] !== null) {
            $this->Ipv6CidrBlock = $param["Ipv6CidrBlock"];
        }
    }
}

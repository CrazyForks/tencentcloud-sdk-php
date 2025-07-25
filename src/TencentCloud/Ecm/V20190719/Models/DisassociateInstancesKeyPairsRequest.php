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
 * DisassociateInstancesKeyPairs请求参数结构体
 *
 * @method array getInstanceIds() 获取可以通过以下方式获取可用的实例ID：
通过登录控制台查询实例ID。
通过调用接口 DescribeInstances ，取返回信息中的 InstanceId 获取实例ID。
 * @method void setInstanceIds(array $InstanceIds) 设置可以通过以下方式获取可用的实例ID：
通过登录控制台查询实例ID。
通过调用接口 DescribeInstances ，取返回信息中的 InstanceId 获取实例ID。
 * @method array getKeyIds() 获取密钥对ID列表，每次请求批量密钥对的上限为100。密钥对ID形如：skey-11112222。

可以通过以下方式获取可用的密钥ID：
通过登录控制台查询密钥ID。
通过调用接口 DescribeKeyPairs ，取返回信息中的 KeyId 获取密钥对ID。
 * @method void setKeyIds(array $KeyIds) 设置密钥对ID列表，每次请求批量密钥对的上限为100。密钥对ID形如：skey-11112222。

可以通过以下方式获取可用的密钥ID：
通过登录控制台查询密钥ID。
通过调用接口 DescribeKeyPairs ，取返回信息中的 KeyId 获取密钥对ID。
 * @method boolean getForceStop() 获取是否对运行中的实例选择强制关机。建议对运行中的实例先手动关机，然后再解绑密钥。取值范围：
TRUE：表示在正常关机失败后进行强制关机。
FALSE：表示在正常关机失败后不进行强制关机。

默认取值：FALSE。
 * @method void setForceStop(boolean $ForceStop) 设置是否对运行中的实例选择强制关机。建议对运行中的实例先手动关机，然后再解绑密钥。取值范围：
TRUE：表示在正常关机失败后进行强制关机。
FALSE：表示在正常关机失败后不进行强制关机。

默认取值：FALSE。
 */
class DisassociateInstancesKeyPairsRequest extends AbstractModel
{
    /**
     * @var array 可以通过以下方式获取可用的实例ID：
通过登录控制台查询实例ID。
通过调用接口 DescribeInstances ，取返回信息中的 InstanceId 获取实例ID。
     */
    public $InstanceIds;

    /**
     * @var array 密钥对ID列表，每次请求批量密钥对的上限为100。密钥对ID形如：skey-11112222。

可以通过以下方式获取可用的密钥ID：
通过登录控制台查询密钥ID。
通过调用接口 DescribeKeyPairs ，取返回信息中的 KeyId 获取密钥对ID。
     */
    public $KeyIds;

    /**
     * @var boolean 是否对运行中的实例选择强制关机。建议对运行中的实例先手动关机，然后再解绑密钥。取值范围：
TRUE：表示在正常关机失败后进行强制关机。
FALSE：表示在正常关机失败后不进行强制关机。

默认取值：FALSE。
     */
    public $ForceStop;

    /**
     * @param array $InstanceIds 可以通过以下方式获取可用的实例ID：
通过登录控制台查询实例ID。
通过调用接口 DescribeInstances ，取返回信息中的 InstanceId 获取实例ID。
     * @param array $KeyIds 密钥对ID列表，每次请求批量密钥对的上限为100。密钥对ID形如：skey-11112222。

可以通过以下方式获取可用的密钥ID：
通过登录控制台查询密钥ID。
通过调用接口 DescribeKeyPairs ，取返回信息中的 KeyId 获取密钥对ID。
     * @param boolean $ForceStop 是否对运行中的实例选择强制关机。建议对运行中的实例先手动关机，然后再解绑密钥。取值范围：
TRUE：表示在正常关机失败后进行强制关机。
FALSE：表示在正常关机失败后不进行强制关机。

默认取值：FALSE。
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("KeyIds",$param) and $param["KeyIds"] !== null) {
            $this->KeyIds = $param["KeyIds"];
        }

        if (array_key_exists("ForceStop",$param) and $param["ForceStop"] !== null) {
            $this->ForceStop = $param["ForceStop"];
        }
    }
}

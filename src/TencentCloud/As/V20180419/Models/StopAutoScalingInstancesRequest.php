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
namespace TencentCloud\As\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * StopAutoScalingInstances请求参数结构体
 *
 * @method string getAutoScalingGroupId() 获取伸缩组ID。可以通过如下方式获取可用的伸缩组ID:
<li>通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 查询伸缩组ID。</li>
<li>通过调用接口 [DescribeAutoScalingGroups](https://cloud.tencent.com/document/api/377/20438) ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。</li>
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) 设置伸缩组ID。可以通过如下方式获取可用的伸缩组ID:
<li>通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 查询伸缩组ID。</li>
<li>通过调用接口 [DescribeAutoScalingGroups](https://cloud.tencent.com/document/api/377/20438) ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。</li>
 * @method array getInstanceIds() 获取待关闭的CVM实例ID列表。可以通过以下方式获取可用的实例ID：
<li>通过登录[控制台](https://console.cloud.tencent.com/cvm/index)查询实例ID。</li>
<li>通过调用接口 [DescribeInstances](https://cloud.tencent.com/document/api/213/15728) ，取返回信息中的 `InstanceId` 获取实例ID。</li>
 * @method void setInstanceIds(array $InstanceIds) 设置待关闭的CVM实例ID列表。可以通过以下方式获取可用的实例ID：
<li>通过登录[控制台](https://console.cloud.tencent.com/cvm/index)查询实例ID。</li>
<li>通过调用接口 [DescribeInstances](https://cloud.tencent.com/document/api/213/15728) ，取返回信息中的 `InstanceId` 获取实例ID。</li>
 * @method string getStoppedMode() 获取关闭的实例是否收费，取值为：  
KEEP_CHARGING：关机继续收费  
STOP_CHARGING：关机停止收费
默认为 KEEP_CHARGING
 * @method void setStoppedMode(string $StoppedMode) 设置关闭的实例是否收费，取值为：  
KEEP_CHARGING：关机继续收费  
STOP_CHARGING：关机停止收费
默认为 KEEP_CHARGING
 */
class StopAutoScalingInstancesRequest extends AbstractModel
{
    /**
     * @var string 伸缩组ID。可以通过如下方式获取可用的伸缩组ID:
<li>通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 查询伸缩组ID。</li>
<li>通过调用接口 [DescribeAutoScalingGroups](https://cloud.tencent.com/document/api/377/20438) ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。</li>
     */
    public $AutoScalingGroupId;

    /**
     * @var array 待关闭的CVM实例ID列表。可以通过以下方式获取可用的实例ID：
<li>通过登录[控制台](https://console.cloud.tencent.com/cvm/index)查询实例ID。</li>
<li>通过调用接口 [DescribeInstances](https://cloud.tencent.com/document/api/213/15728) ，取返回信息中的 `InstanceId` 获取实例ID。</li>
     */
    public $InstanceIds;

    /**
     * @var string 关闭的实例是否收费，取值为：  
KEEP_CHARGING：关机继续收费  
STOP_CHARGING：关机停止收费
默认为 KEEP_CHARGING
     */
    public $StoppedMode;

    /**
     * @param string $AutoScalingGroupId 伸缩组ID。可以通过如下方式获取可用的伸缩组ID:
<li>通过登录 [控制台](https://console.cloud.tencent.com/autoscaling/group) 查询伸缩组ID。</li>
<li>通过调用接口 [DescribeAutoScalingGroups](https://cloud.tencent.com/document/api/377/20438) ，取返回信息中的 AutoScalingGroupId 获取伸缩组ID。</li>
     * @param array $InstanceIds 待关闭的CVM实例ID列表。可以通过以下方式获取可用的实例ID：
<li>通过登录[控制台](https://console.cloud.tencent.com/cvm/index)查询实例ID。</li>
<li>通过调用接口 [DescribeInstances](https://cloud.tencent.com/document/api/213/15728) ，取返回信息中的 `InstanceId` 获取实例ID。</li>
     * @param string $StoppedMode 关闭的实例是否收费，取值为：  
KEEP_CHARGING：关机继续收费  
STOP_CHARGING：关机停止收费
默认为 KEEP_CHARGING
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
        if (array_key_exists("AutoScalingGroupId",$param) and $param["AutoScalingGroupId"] !== null) {
            $this->AutoScalingGroupId = $param["AutoScalingGroupId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("StoppedMode",$param) and $param["StoppedMode"] !== null) {
            $this->StoppedMode = $param["StoppedMode"];
        }
    }
}

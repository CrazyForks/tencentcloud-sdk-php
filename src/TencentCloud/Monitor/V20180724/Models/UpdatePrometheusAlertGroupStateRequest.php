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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdatePrometheusAlertGroupState请求参数结构体
 *
 * @method string getInstanceId() 获取Prometheus 实例 ID
 * @method void setInstanceId(string $InstanceId) 设置Prometheus 实例 ID
 * @method array getGroupIds() 获取告警分组ID列表，形如alert-xxxx
 * @method void setGroupIds(array $GroupIds) 设置告警分组ID列表，形如alert-xxxx
 * @method integer getGroupState() 获取告警分组状态
2 -- 启用
3 -- 禁用
 * @method void setGroupState(integer $GroupState) 设置告警分组状态
2 -- 启用
3 -- 禁用
 */
class UpdatePrometheusAlertGroupStateRequest extends AbstractModel
{
    /**
     * @var string Prometheus 实例 ID
     */
    public $InstanceId;

    /**
     * @var array 告警分组ID列表，形如alert-xxxx
     */
    public $GroupIds;

    /**
     * @var integer 告警分组状态
2 -- 启用
3 -- 禁用
     */
    public $GroupState;

    /**
     * @param string $InstanceId Prometheus 实例 ID
     * @param array $GroupIds 告警分组ID列表，形如alert-xxxx
     * @param integer $GroupState 告警分组状态
2 -- 启用
3 -- 禁用
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }

        if (array_key_exists("GroupState",$param) and $param["GroupState"] !== null) {
            $this->GroupState = $param["GroupState"];
        }
    }
}

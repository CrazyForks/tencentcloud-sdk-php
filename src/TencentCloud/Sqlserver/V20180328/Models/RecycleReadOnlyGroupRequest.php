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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RecycleReadOnlyGroup请求参数结构体
 *
 * @method string getInstanceId() 获取主实例的ID
 * @method void setInstanceId(string $InstanceId) 设置主实例的ID
 * @method string getReadOnlyGroupId() 获取只读组的ID
 * @method void setReadOnlyGroupId(string $ReadOnlyGroupId) 设置只读组的ID
 */
class RecycleReadOnlyGroupRequest extends AbstractModel
{
    /**
     * @var string 主实例的ID
     */
    public $InstanceId;

    /**
     * @var string 只读组的ID
     */
    public $ReadOnlyGroupId;

    /**
     * @param string $InstanceId 主实例的ID
     * @param string $ReadOnlyGroupId 只读组的ID
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

        if (array_key_exists("ReadOnlyGroupId",$param) and $param["ReadOnlyGroupId"] !== null) {
            $this->ReadOnlyGroupId = $param["ReadOnlyGroupId"];
        }
    }
}

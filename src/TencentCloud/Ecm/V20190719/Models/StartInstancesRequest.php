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
 * StartInstances请求参数结构体
 *
 * @method array getInstanceIdSet() 获取待开启的实例ID列表。在单次请求的过程中，单个region下的请求实例数上限为100。
 * @method void setInstanceIdSet(array $InstanceIdSet) 设置待开启的实例ID列表。在单次请求的过程中，单个region下的请求实例数上限为100。
 */
class StartInstancesRequest extends AbstractModel
{
    /**
     * @var array 待开启的实例ID列表。在单次请求的过程中，单个region下的请求实例数上限为100。
     */
    public $InstanceIdSet;

    /**
     * @param array $InstanceIdSet 待开启的实例ID列表。在单次请求的过程中，单个region下的请求实例数上限为100。
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
        if (array_key_exists("InstanceIdSet",$param) and $param["InstanceIdSet"] !== null) {
            $this->InstanceIdSet = $param["InstanceIdSet"];
        }
    }
}

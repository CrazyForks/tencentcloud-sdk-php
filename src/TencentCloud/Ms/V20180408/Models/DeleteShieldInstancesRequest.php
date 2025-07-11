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
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteShieldInstances请求参数结构体
 *
 * @method array getItemIds() 获取任务唯一标识ItemId的列表
 * @method void setItemIds(array $ItemIds) 设置任务唯一标识ItemId的列表
 */
class DeleteShieldInstancesRequest extends AbstractModel
{
    /**
     * @var array 任务唯一标识ItemId的列表
     */
    public $ItemIds;

    /**
     * @param array $ItemIds 任务唯一标识ItemId的列表
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
        if (array_key_exists("ItemIds",$param) and $param["ItemIds"] !== null) {
            $this->ItemIds = $param["ItemIds"];
        }
    }
}

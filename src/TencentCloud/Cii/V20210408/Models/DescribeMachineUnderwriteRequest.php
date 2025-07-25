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
namespace TencentCloud\Cii\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMachineUnderwrite请求参数结构体
 *
 * @method string getUnderwriteTaskId() 获取核保任务ID
 * @method void setUnderwriteTaskId(string $UnderwriteTaskId) 设置核保任务ID
 */
class DescribeMachineUnderwriteRequest extends AbstractModel
{
    /**
     * @var string 核保任务ID
     */
    public $UnderwriteTaskId;

    /**
     * @param string $UnderwriteTaskId 核保任务ID
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
        if (array_key_exists("UnderwriteTaskId",$param) and $param["UnderwriteTaskId"] !== null) {
            $this->UnderwriteTaskId = $param["UnderwriteTaskId"];
        }
    }
}

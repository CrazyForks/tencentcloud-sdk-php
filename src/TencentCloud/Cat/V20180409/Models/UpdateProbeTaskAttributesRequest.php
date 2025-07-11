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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateProbeTaskAttributes请求参数结构体
 *
 * @method string getTaskId() 获取任务 ID
 * @method void setTaskId(string $TaskId) 设置任务 ID
 * @method string getName() 获取任务名，该参数为空时不作任何修改。
 * @method void setName(string $Name) 设置任务名，该参数为空时不作任何修改。
 */
class UpdateProbeTaskAttributesRequest extends AbstractModel
{
    /**
     * @var string 任务 ID
     */
    public $TaskId;

    /**
     * @var string 任务名，该参数为空时不作任何修改。
     */
    public $Name;

    /**
     * @param string $TaskId 任务 ID
     * @param string $Name 任务名，该参数为空时不作任何修改。
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}

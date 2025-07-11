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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateAITaskStatus请求参数结构体
 *
 * @method string getTaskId() 获取AI 任务 ID
 * @method void setTaskId(string $TaskId) 设置AI 任务 ID
 * @method string getStatus() 获取AI 任务状态。"on"代表开启了 AI 分析任务，"off"代表停止AI分析任务
 * @method void setStatus(string $Status) 设置AI 任务状态。"on"代表开启了 AI 分析任务，"off"代表停止AI分析任务
 */
class UpdateAITaskStatusRequest extends AbstractModel
{
    /**
     * @var string AI 任务 ID
     */
    public $TaskId;

    /**
     * @var string AI 任务状态。"on"代表开启了 AI 分析任务，"off"代表停止AI分析任务
     */
    public $Status;

    /**
     * @param string $TaskId AI 任务 ID
     * @param string $Status AI 任务状态。"on"代表开启了 AI 分析任务，"off"代表停止AI分析任务
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}

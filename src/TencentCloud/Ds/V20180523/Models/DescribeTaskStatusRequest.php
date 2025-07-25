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
namespace TencentCloud\Ds\V20180523\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskStatus请求参数结构体
 *
 * @method string getModule() 获取模块名CommonMng
 * @method void setModule(string $Module) 设置模块名CommonMng
 * @method string getOperation() 获取操作名DescribeTaskStatus
 * @method void setOperation(string $Operation) 设置操作名DescribeTaskStatus
 * @method integer getTaskId() 获取任务ID
 * @method void setTaskId(integer $TaskId) 设置任务ID
 */
class DescribeTaskStatusRequest extends AbstractModel
{
    /**
     * @var string 模块名CommonMng
     */
    public $Module;

    /**
     * @var string 操作名DescribeTaskStatus
     */
    public $Operation;

    /**
     * @var integer 任务ID
     */
    public $TaskId;

    /**
     * @param string $Module 模块名CommonMng
     * @param string $Operation 操作名DescribeTaskStatus
     * @param integer $TaskId 任务ID
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }
    }
}

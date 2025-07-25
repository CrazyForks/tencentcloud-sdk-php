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
namespace TencentCloud\Acp\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务流步骤详情
 *
 * @method string getFlowNo() 获取流程编号
 * @method void setFlowNo(string $FlowNo) 设置流程编号
 * @method string getFlowName() 获取流程名称
 * @method void setFlowName(string $FlowName) 设置流程名称
 * @method integer getFlowStatus() 获取流程状态, 其他值:进行中, 2:成功, 3:失败
 * @method void setFlowStatus(integer $FlowStatus) 设置流程状态, 其他值:进行中, 2:成功, 3:失败
 * @method string getFlowStateDesc() 获取流程状态描述
 * @method void setFlowStateDesc(string $FlowStateDesc) 设置流程状态描述
 * @method string getStartTime() 获取流程启动时间
 * @method void setStartTime(string $StartTime) 设置流程启动时间
 * @method string getEndTime() 获取流程完成时间
 * @method void setEndTime(string $EndTime) 设置流程完成时间
 */
class TaskFlowStepsInfo extends AbstractModel
{
    /**
     * @var string 流程编号
     */
    public $FlowNo;

    /**
     * @var string 流程名称
     */
    public $FlowName;

    /**
     * @var integer 流程状态, 其他值:进行中, 2:成功, 3:失败
     */
    public $FlowStatus;

    /**
     * @var string 流程状态描述
     */
    public $FlowStateDesc;

    /**
     * @var string 流程启动时间
     */
    public $StartTime;

    /**
     * @var string 流程完成时间
     */
    public $EndTime;

    /**
     * @param string $FlowNo 流程编号
     * @param string $FlowName 流程名称
     * @param integer $FlowStatus 流程状态, 其他值:进行中, 2:成功, 3:失败
     * @param string $FlowStateDesc 流程状态描述
     * @param string $StartTime 流程启动时间
     * @param string $EndTime 流程完成时间
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
        if (array_key_exists("FlowNo",$param) and $param["FlowNo"] !== null) {
            $this->FlowNo = $param["FlowNo"];
        }

        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("FlowStatus",$param) and $param["FlowStatus"] !== null) {
            $this->FlowStatus = $param["FlowStatus"];
        }

        if (array_key_exists("FlowStateDesc",$param) and $param["FlowStateDesc"] !== null) {
            $this->FlowStateDesc = $param["FlowStateDesc"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}

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
namespace TencentCloud\Keewidb\V20220308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskList请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，如：kee-6ubh****。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，如：kee-6ubh****。
 * @method string getInstanceName() 获取实例名称。
 * @method void setInstanceName(string $InstanceName) 设置实例名称。
 * @method integer getLimit() 获取每页输出的任务列表大小。默认为 20，最多输出100条。
 * @method void setLimit(integer $Limit) 设置每页输出的任务列表大小。默认为 20，最多输出100条。
 * @method integer getOffset() 获取Offset：分页偏移量，取Limit整数倍。计算公式：offset=limit*(页码-1)。
 * @method void setOffset(integer $Offset) 设置Offset：分页偏移量，取Limit整数倍。计算公式：offset=limit*(页码-1)。
 * @method array getProjectIds() 获取项目ID。
 * @method void setProjectIds(array $ProjectIds) 设置项目ID。
 * @method array getTaskTypes() 获取任务类型。可设置为：FLOW_CREATE、FLOW_SETPWD、FLOW_CLOSE等。
 * @method void setTaskTypes(array $TaskTypes) 设置任务类型。可设置为：FLOW_CREATE、FLOW_SETPWD、FLOW_CLOSE等。
 * @method string getBeginTime() 获取起始时间。
 * @method void setBeginTime(string $BeginTime) 设置起始时间。
 * @method string getEndTime() 获取终止时间。
 * @method void setEndTime(string $EndTime) 设置终止时间。
 * @method array getTaskStatus() 获取任务状态。
 * @method void setTaskStatus(array $TaskStatus) 设置任务状态。
 */
class DescribeTaskListRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，如：kee-6ubh****。
     */
    public $InstanceId;

    /**
     * @var string 实例名称。
     */
    public $InstanceName;

    /**
     * @var integer 每页输出的任务列表大小。默认为 20，最多输出100条。
     */
    public $Limit;

    /**
     * @var integer Offset：分页偏移量，取Limit整数倍。计算公式：offset=limit*(页码-1)。
     */
    public $Offset;

    /**
     * @var array 项目ID。
     */
    public $ProjectIds;

    /**
     * @var array 任务类型。可设置为：FLOW_CREATE、FLOW_SETPWD、FLOW_CLOSE等。
     */
    public $TaskTypes;

    /**
     * @var string 起始时间。
     */
    public $BeginTime;

    /**
     * @var string 终止时间。
     */
    public $EndTime;

    /**
     * @var array 任务状态。
     */
    public $TaskStatus;

    /**
     * @param string $InstanceId 实例 ID，如：kee-6ubh****。
     * @param string $InstanceName 实例名称。
     * @param integer $Limit 每页输出的任务列表大小。默认为 20，最多输出100条。
     * @param integer $Offset Offset：分页偏移量，取Limit整数倍。计算公式：offset=limit*(页码-1)。
     * @param array $ProjectIds 项目ID。
     * @param array $TaskTypes 任务类型。可设置为：FLOW_CREATE、FLOW_SETPWD、FLOW_CLOSE等。
     * @param string $BeginTime 起始时间。
     * @param string $EndTime 终止时间。
     * @param array $TaskStatus 任务状态。
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("TaskTypes",$param) and $param["TaskTypes"] !== null) {
            $this->TaskTypes = $param["TaskTypes"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }
    }
}

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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 符合条件的伸缩活动相关信息。
 *
 * @method string getAutoScalingGroupId() 获取伸缩组ID。
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) 设置伸缩组ID。
 * @method string getActivityId() 获取伸缩活动ID。
 * @method void setActivityId(string $ActivityId) 设置伸缩活动ID。
 * @method string getActivityType() 获取伸缩活动类型。取值如下：
<li>SCALE_OUT：扩容活动</li>
<li>SCALE_IN：缩容活动</li>
<li>ATTACH_INSTANCES：添加实例</li>
<li>REMOVE_INSTANCES：销毁实例</li>
<li>DETACH_INSTANCES：移出实例</li>
<li>TERMINATE_INSTANCES_UNEXPECTEDLY：实例在CVM控制台被销毁</li>
<li>REPLACE_UNHEALTHY_INSTANCE：替换不健康实例</li>
<li>START_INSTANCES：开启实例</li>
<li>STOP_INSTANCES：关闭实例</li>
<li>INVOKE_COMMAND：执行命令</li>
 * @method void setActivityType(string $ActivityType) 设置伸缩活动类型。取值如下：
<li>SCALE_OUT：扩容活动</li>
<li>SCALE_IN：缩容活动</li>
<li>ATTACH_INSTANCES：添加实例</li>
<li>REMOVE_INSTANCES：销毁实例</li>
<li>DETACH_INSTANCES：移出实例</li>
<li>TERMINATE_INSTANCES_UNEXPECTEDLY：实例在CVM控制台被销毁</li>
<li>REPLACE_UNHEALTHY_INSTANCE：替换不健康实例</li>
<li>START_INSTANCES：开启实例</li>
<li>STOP_INSTANCES：关闭实例</li>
<li>INVOKE_COMMAND：执行命令</li>
 * @method string getStatusCode() 获取伸缩活动状态。取值如下
<li>INIT：初始化中</li>
<li>RUNNING：运行中</li>
<li>SUCCESSFUL：活动成功</li>
<li>PARTIALLY_SUCCESSFUL：活动部分成功</li>
<li>FAILED：活动失败</li>
<li>CANCELLED：活动取消</li>
 * @method void setStatusCode(string $StatusCode) 设置伸缩活动状态。取值如下
<li>INIT：初始化中</li>
<li>RUNNING：运行中</li>
<li>SUCCESSFUL：活动成功</li>
<li>PARTIALLY_SUCCESSFUL：活动部分成功</li>
<li>FAILED：活动失败</li>
<li>CANCELLED：活动取消</li>
 * @method string getStatusMessage() 获取伸缩活动状态描述。
 * @method void setStatusMessage(string $StatusMessage) 设置伸缩活动状态描述。
 * @method string getCause() 获取伸缩活动起因。
 * @method void setCause(string $Cause) 设置伸缩活动起因。
 * @method string getDescription() 获取伸缩活动描述。
 * @method void setDescription(string $Description) 设置伸缩活动描述。
 * @method string getStartTime() 获取伸缩活动开始时间，为 `UTC` 标准时间。
 * @method void setStartTime(string $StartTime) 设置伸缩活动开始时间，为 `UTC` 标准时间。
 * @method string getEndTime() 获取伸缩活动结束时间，为 `UTC` 标准时间。
 * @method void setEndTime(string $EndTime) 设置伸缩活动结束时间，为 `UTC` 标准时间。
 * @method string getCreatedTime() 获取伸缩活动创建时间，为 `UTC` 标准时间。
 * @method void setCreatedTime(string $CreatedTime) 设置伸缩活动创建时间，为 `UTC` 标准时间。
 * @method array getActivityRelatedInstanceSet() 获取该参数已废弃，请勿使用。
 * @method void setActivityRelatedInstanceSet(array $ActivityRelatedInstanceSet) 设置该参数已废弃，请勿使用。
 * @method string getStatusMessageSimplified() 获取伸缩活动状态简要描述。
 * @method void setStatusMessageSimplified(string $StatusMessageSimplified) 设置伸缩活动状态简要描述。
 * @method array getLifecycleActionResultSet() 获取伸缩活动中生命周期挂钩的执行结果。
 * @method void setLifecycleActionResultSet(array $LifecycleActionResultSet) 设置伸缩活动中生命周期挂钩的执行结果。
 * @method array getDetailedStatusMessageSet() 获取伸缩活动状态详细描述。
 * @method void setDetailedStatusMessageSet(array $DetailedStatusMessageSet) 设置伸缩活动状态详细描述。
 * @method array getInvocationResultSet() 获取执行命令结果。
 * @method void setInvocationResultSet(array $InvocationResultSet) 设置执行命令结果。
 * @method array getRelatedInstanceSet() 获取伸缩活动相关实例信息集合。
 * @method void setRelatedInstanceSet(array $RelatedInstanceSet) 设置伸缩活动相关实例信息集合。
 */
class Activity extends AbstractModel
{
    /**
     * @var string 伸缩组ID。
     */
    public $AutoScalingGroupId;

    /**
     * @var string 伸缩活动ID。
     */
    public $ActivityId;

    /**
     * @var string 伸缩活动类型。取值如下：
<li>SCALE_OUT：扩容活动</li>
<li>SCALE_IN：缩容活动</li>
<li>ATTACH_INSTANCES：添加实例</li>
<li>REMOVE_INSTANCES：销毁实例</li>
<li>DETACH_INSTANCES：移出实例</li>
<li>TERMINATE_INSTANCES_UNEXPECTEDLY：实例在CVM控制台被销毁</li>
<li>REPLACE_UNHEALTHY_INSTANCE：替换不健康实例</li>
<li>START_INSTANCES：开启实例</li>
<li>STOP_INSTANCES：关闭实例</li>
<li>INVOKE_COMMAND：执行命令</li>
     */
    public $ActivityType;

    /**
     * @var string 伸缩活动状态。取值如下
<li>INIT：初始化中</li>
<li>RUNNING：运行中</li>
<li>SUCCESSFUL：活动成功</li>
<li>PARTIALLY_SUCCESSFUL：活动部分成功</li>
<li>FAILED：活动失败</li>
<li>CANCELLED：活动取消</li>
     */
    public $StatusCode;

    /**
     * @var string 伸缩活动状态描述。
     */
    public $StatusMessage;

    /**
     * @var string 伸缩活动起因。
     */
    public $Cause;

    /**
     * @var string 伸缩活动描述。
     */
    public $Description;

    /**
     * @var string 伸缩活动开始时间，为 `UTC` 标准时间。
     */
    public $StartTime;

    /**
     * @var string 伸缩活动结束时间，为 `UTC` 标准时间。
     */
    public $EndTime;

    /**
     * @var string 伸缩活动创建时间，为 `UTC` 标准时间。
     */
    public $CreatedTime;

    /**
     * @var array 该参数已废弃，请勿使用。
     * @deprecated
     */
    public $ActivityRelatedInstanceSet;

    /**
     * @var string 伸缩活动状态简要描述。
     */
    public $StatusMessageSimplified;

    /**
     * @var array 伸缩活动中生命周期挂钩的执行结果。
     */
    public $LifecycleActionResultSet;

    /**
     * @var array 伸缩活动状态详细描述。
     */
    public $DetailedStatusMessageSet;

    /**
     * @var array 执行命令结果。
     */
    public $InvocationResultSet;

    /**
     * @var array 伸缩活动相关实例信息集合。
     */
    public $RelatedInstanceSet;

    /**
     * @param string $AutoScalingGroupId 伸缩组ID。
     * @param string $ActivityId 伸缩活动ID。
     * @param string $ActivityType 伸缩活动类型。取值如下：
<li>SCALE_OUT：扩容活动</li>
<li>SCALE_IN：缩容活动</li>
<li>ATTACH_INSTANCES：添加实例</li>
<li>REMOVE_INSTANCES：销毁实例</li>
<li>DETACH_INSTANCES：移出实例</li>
<li>TERMINATE_INSTANCES_UNEXPECTEDLY：实例在CVM控制台被销毁</li>
<li>REPLACE_UNHEALTHY_INSTANCE：替换不健康实例</li>
<li>START_INSTANCES：开启实例</li>
<li>STOP_INSTANCES：关闭实例</li>
<li>INVOKE_COMMAND：执行命令</li>
     * @param string $StatusCode 伸缩活动状态。取值如下
<li>INIT：初始化中</li>
<li>RUNNING：运行中</li>
<li>SUCCESSFUL：活动成功</li>
<li>PARTIALLY_SUCCESSFUL：活动部分成功</li>
<li>FAILED：活动失败</li>
<li>CANCELLED：活动取消</li>
     * @param string $StatusMessage 伸缩活动状态描述。
     * @param string $Cause 伸缩活动起因。
     * @param string $Description 伸缩活动描述。
     * @param string $StartTime 伸缩活动开始时间，为 `UTC` 标准时间。
     * @param string $EndTime 伸缩活动结束时间，为 `UTC` 标准时间。
     * @param string $CreatedTime 伸缩活动创建时间，为 `UTC` 标准时间。
     * @param array $ActivityRelatedInstanceSet 该参数已废弃，请勿使用。
     * @param string $StatusMessageSimplified 伸缩活动状态简要描述。
     * @param array $LifecycleActionResultSet 伸缩活动中生命周期挂钩的执行结果。
     * @param array $DetailedStatusMessageSet 伸缩活动状态详细描述。
     * @param array $InvocationResultSet 执行命令结果。
     * @param array $RelatedInstanceSet 伸缩活动相关实例信息集合。
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
        if (array_key_exists("AutoScalingGroupId",$param) and $param["AutoScalingGroupId"] !== null) {
            $this->AutoScalingGroupId = $param["AutoScalingGroupId"];
        }

        if (array_key_exists("ActivityId",$param) and $param["ActivityId"] !== null) {
            $this->ActivityId = $param["ActivityId"];
        }

        if (array_key_exists("ActivityType",$param) and $param["ActivityType"] !== null) {
            $this->ActivityType = $param["ActivityType"];
        }

        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("StatusMessage",$param) and $param["StatusMessage"] !== null) {
            $this->StatusMessage = $param["StatusMessage"];
        }

        if (array_key_exists("Cause",$param) and $param["Cause"] !== null) {
            $this->Cause = $param["Cause"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ActivityRelatedInstanceSet",$param) and $param["ActivityRelatedInstanceSet"] !== null) {
            $this->ActivityRelatedInstanceSet = [];
            foreach ($param["ActivityRelatedInstanceSet"] as $key => $value){
                $obj = new ActivtyRelatedInstance();
                $obj->deserialize($value);
                array_push($this->ActivityRelatedInstanceSet, $obj);
            }
        }

        if (array_key_exists("StatusMessageSimplified",$param) and $param["StatusMessageSimplified"] !== null) {
            $this->StatusMessageSimplified = $param["StatusMessageSimplified"];
        }

        if (array_key_exists("LifecycleActionResultSet",$param) and $param["LifecycleActionResultSet"] !== null) {
            $this->LifecycleActionResultSet = [];
            foreach ($param["LifecycleActionResultSet"] as $key => $value){
                $obj = new LifecycleActionResultInfo();
                $obj->deserialize($value);
                array_push($this->LifecycleActionResultSet, $obj);
            }
        }

        if (array_key_exists("DetailedStatusMessageSet",$param) and $param["DetailedStatusMessageSet"] !== null) {
            $this->DetailedStatusMessageSet = [];
            foreach ($param["DetailedStatusMessageSet"] as $key => $value){
                $obj = new DetailedStatusMessage();
                $obj->deserialize($value);
                array_push($this->DetailedStatusMessageSet, $obj);
            }
        }

        if (array_key_exists("InvocationResultSet",$param) and $param["InvocationResultSet"] !== null) {
            $this->InvocationResultSet = [];
            foreach ($param["InvocationResultSet"] as $key => $value){
                $obj = new InvocationResult();
                $obj->deserialize($value);
                array_push($this->InvocationResultSet, $obj);
            }
        }

        if (array_key_exists("RelatedInstanceSet",$param) and $param["RelatedInstanceSet"] !== null) {
            $this->RelatedInstanceSet = [];
            foreach ($param["RelatedInstanceSet"] as $key => $value){
                $obj = new RelatedInstance();
                $obj->deserialize($value);
                array_push($this->RelatedInstanceSet, $obj);
            }
        }
    }
}

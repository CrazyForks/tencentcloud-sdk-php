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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyScheduledSql请求参数结构体
 *
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method string getSrcTopicId() 获取源日志主题
 * @method void setSrcTopicId(string $SrcTopicId) 设置源日志主题
 * @method integer getEnableFlag() 获取任务启动状态.   1开启,  2关闭
 * @method void setEnableFlag(integer $EnableFlag) 设置任务启动状态.   1开启,  2关闭
 * @method ScheduledSqlResouceInfo getDstResource() 获取定时SQL分析的目标日志主题
 * @method void setDstResource(ScheduledSqlResouceInfo $DstResource) 设置定时SQL分析的目标日志主题
 * @method string getScheduledSqlContent() 获取查询语句
 * @method void setScheduledSqlContent(string $ScheduledSqlContent) 设置查询语句
 * @method integer getProcessPeriod() 获取调度周期(分钟)
 * @method void setProcessPeriod(integer $ProcessPeriod) 设置调度周期(分钟)
 * @method string getProcessTimeWindow() 获取单次查询的时间窗口. 例子中为近15分钟
 * @method void setProcessTimeWindow(string $ProcessTimeWindow) 设置单次查询的时间窗口. 例子中为近15分钟
 * @method integer getProcessDelay() 获取执行延迟(秒)
 * @method void setProcessDelay(integer $ProcessDelay) 设置执行延迟(秒)
 * @method string getSrcTopicRegion() 获取源topicId的地域信息
 * @method void setSrcTopicRegion(string $SrcTopicRegion) 设置源topicId的地域信息
 * @method string getName() 获取任务名称
 * @method void setName(string $Name) 设置任务名称
 * @method integer getSyntaxRule() 获取语法规则。 默认值为0。 0：Lucene语法，1：CQL语法
 * @method void setSyntaxRule(integer $SyntaxRule) 设置语法规则。 默认值为0。 0：Lucene语法，1：CQL语法
 */
class ModifyScheduledSqlRequest extends AbstractModel
{
    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var string 源日志主题
     */
    public $SrcTopicId;

    /**
     * @var integer 任务启动状态.   1开启,  2关闭
     */
    public $EnableFlag;

    /**
     * @var ScheduledSqlResouceInfo 定时SQL分析的目标日志主题
     */
    public $DstResource;

    /**
     * @var string 查询语句
     */
    public $ScheduledSqlContent;

    /**
     * @var integer 调度周期(分钟)
     */
    public $ProcessPeriod;

    /**
     * @var string 单次查询的时间窗口. 例子中为近15分钟
     */
    public $ProcessTimeWindow;

    /**
     * @var integer 执行延迟(秒)
     */
    public $ProcessDelay;

    /**
     * @var string 源topicId的地域信息
     */
    public $SrcTopicRegion;

    /**
     * @var string 任务名称
     */
    public $Name;

    /**
     * @var integer 语法规则。 默认值为0。 0：Lucene语法，1：CQL语法
     */
    public $SyntaxRule;

    /**
     * @param string $TaskId 任务ID
     * @param string $SrcTopicId 源日志主题
     * @param integer $EnableFlag 任务启动状态.   1开启,  2关闭
     * @param ScheduledSqlResouceInfo $DstResource 定时SQL分析的目标日志主题
     * @param string $ScheduledSqlContent 查询语句
     * @param integer $ProcessPeriod 调度周期(分钟)
     * @param string $ProcessTimeWindow 单次查询的时间窗口. 例子中为近15分钟
     * @param integer $ProcessDelay 执行延迟(秒)
     * @param string $SrcTopicRegion 源topicId的地域信息
     * @param string $Name 任务名称
     * @param integer $SyntaxRule 语法规则。 默认值为0。 0：Lucene语法，1：CQL语法
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

        if (array_key_exists("SrcTopicId",$param) and $param["SrcTopicId"] !== null) {
            $this->SrcTopicId = $param["SrcTopicId"];
        }

        if (array_key_exists("EnableFlag",$param) and $param["EnableFlag"] !== null) {
            $this->EnableFlag = $param["EnableFlag"];
        }

        if (array_key_exists("DstResource",$param) and $param["DstResource"] !== null) {
            $this->DstResource = new ScheduledSqlResouceInfo();
            $this->DstResource->deserialize($param["DstResource"]);
        }

        if (array_key_exists("ScheduledSqlContent",$param) and $param["ScheduledSqlContent"] !== null) {
            $this->ScheduledSqlContent = $param["ScheduledSqlContent"];
        }

        if (array_key_exists("ProcessPeriod",$param) and $param["ProcessPeriod"] !== null) {
            $this->ProcessPeriod = $param["ProcessPeriod"];
        }

        if (array_key_exists("ProcessTimeWindow",$param) and $param["ProcessTimeWindow"] !== null) {
            $this->ProcessTimeWindow = $param["ProcessTimeWindow"];
        }

        if (array_key_exists("ProcessDelay",$param) and $param["ProcessDelay"] !== null) {
            $this->ProcessDelay = $param["ProcessDelay"];
        }

        if (array_key_exists("SrcTopicRegion",$param) and $param["SrcTopicRegion"] !== null) {
            $this->SrcTopicRegion = $param["SrcTopicRegion"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SyntaxRule",$param) and $param["SyntaxRule"] !== null) {
            $this->SyntaxRule = $param["SyntaxRule"];
        }
    }
}

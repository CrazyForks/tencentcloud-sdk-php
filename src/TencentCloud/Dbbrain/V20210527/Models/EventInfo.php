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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 异常事件信息。
 *
 * @method integer getEventId() 获取事件 ID 。
 * @method void setEventId(integer $EventId) 设置事件 ID 。
 * @method string getDiagType() 获取诊断类型。
 * @method void setDiagType(string $DiagType) 设置诊断类型。
 * @method string getStartTime() 获取开始时间。
 * @method void setStartTime(string $StartTime) 设置开始时间。
 * @method string getEndTime() 获取结束时间。
 * @method void setEndTime(string $EndTime) 设置结束时间。
 * @method string getOutline() 获取概要。
 * @method void setOutline(string $Outline) 设置概要。
 * @method integer getSeverity() 获取严重程度。严重程度分为5级，按影响程度从高至低分别为：1：致命，2：严重，3：告警，4：提示，5：健康。
 * @method void setSeverity(integer $Severity) 设置严重程度。严重程度分为5级，按影响程度从高至低分别为：1：致命，2：严重，3：告警，4：提示，5：健康。
 * @method integer getScoreLost() 获取扣分。
 * @method void setScoreLost(integer $ScoreLost) 设置扣分。
 * @method string getMetric() 获取保留字段。
 * @method void setMetric(string $Metric) 设置保留字段。
 * @method integer getCount() 获取告警数目。
 * @method void setCount(integer $Count) 设置告警数目。
 */
class EventInfo extends AbstractModel
{
    /**
     * @var integer 事件 ID 。
     */
    public $EventId;

    /**
     * @var string 诊断类型。
     */
    public $DiagType;

    /**
     * @var string 开始时间。
     */
    public $StartTime;

    /**
     * @var string 结束时间。
     */
    public $EndTime;

    /**
     * @var string 概要。
     */
    public $Outline;

    /**
     * @var integer 严重程度。严重程度分为5级，按影响程度从高至低分别为：1：致命，2：严重，3：告警，4：提示，5：健康。
     */
    public $Severity;

    /**
     * @var integer 扣分。
     */
    public $ScoreLost;

    /**
     * @var string 保留字段。
     */
    public $Metric;

    /**
     * @var integer 告警数目。
     */
    public $Count;

    /**
     * @param integer $EventId 事件 ID 。
     * @param string $DiagType 诊断类型。
     * @param string $StartTime 开始时间。
     * @param string $EndTime 结束时间。
     * @param string $Outline 概要。
     * @param integer $Severity 严重程度。严重程度分为5级，按影响程度从高至低分别为：1：致命，2：严重，3：告警，4：提示，5：健康。
     * @param integer $ScoreLost 扣分。
     * @param string $Metric 保留字段。
     * @param integer $Count 告警数目。
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
        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("DiagType",$param) and $param["DiagType"] !== null) {
            $this->DiagType = $param["DiagType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Outline",$param) and $param["Outline"] !== null) {
            $this->Outline = $param["Outline"];
        }

        if (array_key_exists("Severity",$param) and $param["Severity"] !== null) {
            $this->Severity = $param["Severity"];
        }

        if (array_key_exists("ScoreLost",$param) and $param["ScoreLost"] !== null) {
            $this->ScoreLost = $param["ScoreLost"];
        }

        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}

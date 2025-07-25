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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 监控指标
 *
 * @method integer getMonitorId() 获取pk
 * @method void setMonitorId(integer $MonitorId) 设置pk
 * @method integer getMetricId() 获取监控指标ID
 * @method void setMetricId(integer $MetricId) 设置监控指标ID
 * @method integer getObjectTypeId() 获取监控指标对象类型ID
 * @method void setObjectTypeId(integer $ObjectTypeId) 设置监控指标对象类型ID
 * @method string getMetricName() 获取指标名称
 * @method void setMetricName(string $MetricName) 设置指标名称
 * @method string getMetricChineseName() 获取中文指标
 * @method void setMetricChineseName(string $MetricChineseName) 设置中文指标
 */
class TemplateMonitor extends AbstractModel
{
    /**
     * @var integer pk
     */
    public $MonitorId;

    /**
     * @var integer 监控指标ID
     */
    public $MetricId;

    /**
     * @var integer 监控指标对象类型ID
     */
    public $ObjectTypeId;

    /**
     * @var string 指标名称
     */
    public $MetricName;

    /**
     * @var string 中文指标
     */
    public $MetricChineseName;

    /**
     * @param integer $MonitorId pk
     * @param integer $MetricId 监控指标ID
     * @param integer $ObjectTypeId 监控指标对象类型ID
     * @param string $MetricName 指标名称
     * @param string $MetricChineseName 中文指标
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
        if (array_key_exists("MonitorId",$param) and $param["MonitorId"] !== null) {
            $this->MonitorId = $param["MonitorId"];
        }

        if (array_key_exists("MetricId",$param) and $param["MetricId"] !== null) {
            $this->MetricId = $param["MetricId"];
        }

        if (array_key_exists("ObjectTypeId",$param) and $param["ObjectTypeId"] !== null) {
            $this->ObjectTypeId = $param["ObjectTypeId"];
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("MetricChineseName",$param) and $param["MetricChineseName"] !== null) {
            $this->MetricChineseName = $param["MetricChineseName"];
        }
    }
}

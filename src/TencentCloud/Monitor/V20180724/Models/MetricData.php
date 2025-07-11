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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMetricData接口出参
 *
 * @method string getMetricName() 获取指标名
 * @method void setMetricName(string $MetricName) 设置指标名
 * @method array getPoints() 获取监控数据点
 * @method void setPoints(array $Points) 设置监控数据点
 */
class MetricData extends AbstractModel
{
    /**
     * @var string 指标名
     */
    public $MetricName;

    /**
     * @var array 监控数据点
     */
    public $Points;

    /**
     * @param string $MetricName 指标名
     * @param array $Points 监控数据点
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
        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("Points",$param) and $param["Points"] !== null) {
            $this->Points = [];
            foreach ($param["Points"] as $key => $value){
                $obj = new MetricDataPoint();
                $obj->deserialize($value);
                array_push($this->Points, $obj);
            }
        }
    }
}

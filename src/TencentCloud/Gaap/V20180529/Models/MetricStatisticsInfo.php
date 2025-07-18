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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单指标的统计数据
 *
 * @method string getMetricName() 获取指标名称
 * @method void setMetricName(string $MetricName) 设置指标名称
 * @method array getMetricData() 获取指标统计数据
 * @method void setMetricData(array $MetricData) 设置指标统计数据
 */
class MetricStatisticsInfo extends AbstractModel
{
    /**
     * @var string 指标名称
     */
    public $MetricName;

    /**
     * @var array 指标统计数据
     */
    public $MetricData;

    /**
     * @param string $MetricName 指标名称
     * @param array $MetricData 指标统计数据
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

        if (array_key_exists("MetricData",$param) and $param["MetricData"] !== null) {
            $this->MetricData = [];
            foreach ($param["MetricData"] as $key => $value){
                $obj = new StatisticsDataInfo();
                $obj->deserialize($value);
                array_push($this->MetricData, $obj);
            }
        }
    }
}

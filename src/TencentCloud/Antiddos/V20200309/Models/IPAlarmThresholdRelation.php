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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单IP告警阈值配置
 *
 * @method integer getAlarmType() 获取告警阈值类型，取值[
1(入流量告警阈值)
2(攻击清洗流量告警阈值)
]
 * @method void setAlarmType(integer $AlarmType) 设置告警阈值类型，取值[
1(入流量告警阈值)
2(攻击清洗流量告警阈值)
]
 * @method integer getAlarmThreshold() 获取告警阈值，单位Mbps，取值>=0；当作为输入参数时，设置0会删除告警阈值配置；
 * @method void setAlarmThreshold(integer $AlarmThreshold) 设置告警阈值，单位Mbps，取值>=0；当作为输入参数时，设置0会删除告警阈值配置；
 * @method array getInstanceDetailList() 获取告警阈值所属的资源实例
 * @method void setInstanceDetailList(array $InstanceDetailList) 设置告警阈值所属的资源实例
 */
class IPAlarmThresholdRelation extends AbstractModel
{
    /**
     * @var integer 告警阈值类型，取值[
1(入流量告警阈值)
2(攻击清洗流量告警阈值)
]
     */
    public $AlarmType;

    /**
     * @var integer 告警阈值，单位Mbps，取值>=0；当作为输入参数时，设置0会删除告警阈值配置；
     */
    public $AlarmThreshold;

    /**
     * @var array 告警阈值所属的资源实例
     */
    public $InstanceDetailList;

    /**
     * @param integer $AlarmType 告警阈值类型，取值[
1(入流量告警阈值)
2(攻击清洗流量告警阈值)
]
     * @param integer $AlarmThreshold 告警阈值，单位Mbps，取值>=0；当作为输入参数时，设置0会删除告警阈值配置；
     * @param array $InstanceDetailList 告警阈值所属的资源实例
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
        if (array_key_exists("AlarmType",$param) and $param["AlarmType"] !== null) {
            $this->AlarmType = $param["AlarmType"];
        }

        if (array_key_exists("AlarmThreshold",$param) and $param["AlarmThreshold"] !== null) {
            $this->AlarmThreshold = $param["AlarmThreshold"];
        }

        if (array_key_exists("InstanceDetailList",$param) and $param["InstanceDetailList"] !== null) {
            $this->InstanceDetailList = [];
            foreach ($param["InstanceDetailList"] as $key => $value){
                $obj = new InstanceRelation();
                $obj->deserialize($value);
                array_push($this->InstanceDetailList, $obj);
            }
        }
    }
}

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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 浏览器缓存规则配置，用于设置 MaxAge 默认值，默认为关闭状态
 *
 * @method string getSwitch() 获取浏览器缓存配置开关，取值有：
on：开启
off：关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSwitch(string $Switch) 设置浏览器缓存配置开关，取值有：
on：开启
off：关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMaxAgeRules() 获取MaxAge 规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxAgeRules(array $MaxAgeRules) 设置MaxAge 规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method MaxAgeCodeRule getMaxAgeCodeRule() 获取MaxAge 状态码相关规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxAgeCodeRule(MaxAgeCodeRule $MaxAgeCodeRule) 设置MaxAge 状态码相关规则
注意：此字段可能返回 null，表示取不到有效值。
 */
class MaxAge extends AbstractModel
{
    /**
     * @var string 浏览器缓存配置开关，取值有：
on：开启
off：关闭
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Switch;

    /**
     * @var array MaxAge 规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxAgeRules;

    /**
     * @var MaxAgeCodeRule MaxAge 状态码相关规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxAgeCodeRule;

    /**
     * @param string $Switch 浏览器缓存配置开关，取值有：
on：开启
off：关闭
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MaxAgeRules MaxAge 规则
注意：此字段可能返回 null，表示取不到有效值。
     * @param MaxAgeCodeRule $MaxAgeCodeRule MaxAge 状态码相关规则
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("MaxAgeRules",$param) and $param["MaxAgeRules"] !== null) {
            $this->MaxAgeRules = [];
            foreach ($param["MaxAgeRules"] as $key => $value){
                $obj = new MaxAgeRule();
                $obj->deserialize($value);
                array_push($this->MaxAgeRules, $obj);
            }
        }

        if (array_key_exists("MaxAgeCodeRule",$param) and $param["MaxAgeCodeRule"] !== null) {
            $this->MaxAgeCodeRule = new MaxAgeCodeRule();
            $this->MaxAgeCodeRule->deserialize($param["MaxAgeCodeRule"]);
        }
    }
}

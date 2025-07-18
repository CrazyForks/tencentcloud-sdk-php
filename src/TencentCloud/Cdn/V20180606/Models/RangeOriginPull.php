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
 * 分片回源配置，默认为开启状态
 *
 * @method string getSwitch() 获取分片回源配置开关，取值有：
on：开启
off：关闭
 * @method void setSwitch(string $Switch) 设置分片回源配置开关，取值有：
on：开启
off：关闭
 * @method array getRangeRules() 获取分路径分片回源配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRangeRules(array $RangeRules) 设置分路径分片回源配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class RangeOriginPull extends AbstractModel
{
    /**
     * @var string 分片回源配置开关，取值有：
on：开启
off：关闭
     */
    public $Switch;

    /**
     * @var array 分路径分片回源配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RangeRules;

    /**
     * @param string $Switch 分片回源配置开关，取值有：
on：开启
off：关闭
     * @param array $RangeRules 分路径分片回源配置
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

        if (array_key_exists("RangeRules",$param) and $param["RangeRules"] !== null) {
            $this->RangeRules = [];
            foreach ($param["RangeRules"] as $key => $value){
                $obj = new RangeOriginPullRule();
                $obj->deserialize($value);
                array_push($this->RangeRules, $obj);
            }
        }
    }
}

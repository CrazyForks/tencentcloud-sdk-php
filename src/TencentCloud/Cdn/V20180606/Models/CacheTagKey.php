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
 * 组成CacheKey的一部分
 *
 * @method string getSwitch() 获取使用CacheTag作为CacheKey的一部分配置开关，取值有
on：开启，使用CacheTag作为CacheKey的一部分
off：关闭，不使用CacheTag作为CacheKey的一部分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSwitch(string $Switch) 设置使用CacheTag作为CacheKey的一部分配置开关，取值有
on：开启，使用CacheTag作为CacheKey的一部分
off：关闭，不使用CacheTag作为CacheKey的一部分
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取自定义CacheTag的值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置自定义CacheTag的值
注意：此字段可能返回 null，表示取不到有效值。
 */
class CacheTagKey extends AbstractModel
{
    /**
     * @var string 使用CacheTag作为CacheKey的一部分配置开关，取值有
on：开启，使用CacheTag作为CacheKey的一部分
off：关闭，不使用CacheTag作为CacheKey的一部分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Switch;

    /**
     * @var string 自定义CacheTag的值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @param string $Switch 使用CacheTag作为CacheKey的一部分配置开关，取值有
on：开启，使用CacheTag作为CacheKey的一部分
off：关闭，不使用CacheTag作为CacheKey的一部分
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value 自定义CacheTag的值
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

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}

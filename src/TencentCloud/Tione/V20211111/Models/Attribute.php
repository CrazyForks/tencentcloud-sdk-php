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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 镜像属性
 *
 * @method string getType() 获取为‘List’时属性值取Values 否则取Value
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置为‘List’时属性值取Values 否则取Value
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKey() 获取属性key
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKey(string $Key) 设置属性key
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取属性值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置属性值
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getValues() 获取属性值列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValues(array $Values) 设置属性值列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class Attribute extends AbstractModel
{
    /**
     * @var string 为‘List’时属性值取Values 否则取Value
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 属性key
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Key;

    /**
     * @var string 属性值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var array 属性值列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Values;

    /**
     * @param string $Type 为‘List’时属性值取Values 否则取Value
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Key 属性key
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value 属性值
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Values 属性值列表
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}

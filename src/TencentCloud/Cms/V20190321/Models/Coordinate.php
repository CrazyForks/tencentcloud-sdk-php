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
namespace TencentCloud\Cms\V20190321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 坐标
 *
 * @method integer getWidth() 获取宽度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWidth(integer $Width) 设置宽度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCy() 获取左上角纵坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCy(integer $Cy) 设置左上角纵坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCx() 获取左上角横坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCx(integer $Cx) 设置左上角横坐标
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHeight() 获取高度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeight(integer $Height) 设置高度
注意：此字段可能返回 null，表示取不到有效值。
 */
class Coordinate extends AbstractModel
{
    /**
     * @var integer 宽度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Width;

    /**
     * @var integer 左上角纵坐标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cy;

    /**
     * @var integer 左上角横坐标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cx;

    /**
     * @var integer 高度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Height;

    /**
     * @param integer $Width 宽度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Cy 左上角纵坐标
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Cx 左上角横坐标
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Height 高度
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
        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Cy",$param) and $param["Cy"] !== null) {
            $this->Cy = $param["Cy"];
        }

        if (array_key_exists("Cx",$param) and $param["Cx"] !== null) {
            $this->Cx = $param["Cx"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }
    }
}

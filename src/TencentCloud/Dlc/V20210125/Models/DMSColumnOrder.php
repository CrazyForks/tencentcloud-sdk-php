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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 列排序对象
 *
 * @method string getCol() 获取列名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCol(string $Col) 设置列名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOrder() 获取排序
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrder(integer $Order) 设置排序
注意：此字段可能返回 null，表示取不到有效值。
 */
class DMSColumnOrder extends AbstractModel
{
    /**
     * @var string 列名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Col;

    /**
     * @var integer 排序
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Order;

    /**
     * @param string $Col 列名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Order 排序
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
        if (array_key_exists("Col",$param) and $param["Col"] !== null) {
            $this->Col = $param["Col"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}

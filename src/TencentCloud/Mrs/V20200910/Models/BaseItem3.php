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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 基础类型
 *
 * @method string getName() 获取类型
 * @method void setName(string $Name) 设置类型
 * @method string getSrc() 获取原始文本
 * @method void setSrc(string $Src) 设置原始文本
 * @method string getValue() 获取归一化后值
 * @method void setValue(string $Value) 设置归一化后值
 * @method array getCoords() 获取四点坐标
 * @method void setCoords(array $Coords) 设置四点坐标
 * @method integer getOrder() 获取第几次
 * @method void setOrder(integer $Order) 设置第几次
 */
class BaseItem3 extends AbstractModel
{
    /**
     * @var string 类型
     */
    public $Name;

    /**
     * @var string 原始文本
     */
    public $Src;

    /**
     * @var string 归一化后值
     */
    public $Value;

    /**
     * @var array 四点坐标
     */
    public $Coords;

    /**
     * @var integer 第几次
     */
    public $Order;

    /**
     * @param string $Name 类型
     * @param string $Src 原始文本
     * @param string $Value 归一化后值
     * @param array $Coords 四点坐标
     * @param integer $Order 第几次
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Src",$param) and $param["Src"] !== null) {
            $this->Src = $param["Src"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Coords",$param) and $param["Coords"] !== null) {
            $this->Coords = [];
            foreach ($param["Coords"] as $key => $value){
                $obj = new Coord();
                $obj->deserialize($value);
                array_push($this->Coords, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}

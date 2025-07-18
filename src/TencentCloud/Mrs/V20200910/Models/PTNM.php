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
 * pTNM
 *
 * @method string getName() 获取项目名称
 * @method void setName(string $Name) 设置项目名称
 * @method array getIndex() 获取索引
 * @method void setIndex(array $Index) 设置索引
 * @method string getSrc() 获取原文
 * @method void setSrc(string $Src) 设置原文
 * @method string getValue() 获取归一化值
 * @method void setValue(string $Value) 设置归一化值
 * @method string getPT() 获取pT
 * @method void setPT(string $PT) 设置pT
 * @method string getPN() 获取pN
 * @method void setPN(string $PN) 设置pN
 * @method string getPM() 获取pM
 * @method void setPM(string $PM) 设置pM
 * @method array getCoords() 获取原文对应坐标
 * @method void setCoords(array $Coords) 设置原文对应坐标
 */
class PTNM extends AbstractModel
{
    /**
     * @var string 项目名称
     */
    public $Name;

    /**
     * @var array 索引
     */
    public $Index;

    /**
     * @var string 原文
     */
    public $Src;

    /**
     * @var string 归一化值
     */
    public $Value;

    /**
     * @var string pT
     */
    public $PT;

    /**
     * @var string pN
     */
    public $PN;

    /**
     * @var string pM
     */
    public $PM;

    /**
     * @var array 原文对应坐标
     */
    public $Coords;

    /**
     * @param string $Name 项目名称
     * @param array $Index 索引
     * @param string $Src 原文
     * @param string $Value 归一化值
     * @param string $PT pT
     * @param string $PN pN
     * @param string $PM pM
     * @param array $Coords 原文对应坐标
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

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Src",$param) and $param["Src"] !== null) {
            $this->Src = $param["Src"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("PT",$param) and $param["PT"] !== null) {
            $this->PT = $param["PT"];
        }

        if (array_key_exists("PN",$param) and $param["PN"] !== null) {
            $this->PN = $param["PN"];
        }

        if (array_key_exists("PM",$param) and $param["PM"] !== null) {
            $this->PM = $param["PM"];
        }

        if (array_key_exists("Coords",$param) and $param["Coords"] !== null) {
            $this->Coords = [];
            foreach ($param["Coords"] as $key => $value){
                $obj = new Coord();
                $obj->deserialize($value);
                array_push($this->Coords, $obj);
            }
        }
    }
}

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
 * 家庭成员
 *
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method array getDetail() 获取成员列表
 * @method void setDetail(array $Detail) 设置成员列表
 * @method string getSrc() 获取原文
 * @method void setSrc(string $Src) 设置原文
 * @method string getValue() 获取对外输出值
 * @method void setValue(string $Value) 设置对外输出值
 */
class RelativeHistoryBlock extends AbstractModel
{
    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var array 成员列表
     */
    public $Detail;

    /**
     * @var string 原文
     */
    public $Src;

    /**
     * @var string 对外输出值
     */
    public $Value;

    /**
     * @param string $Name 名称
     * @param array $Detail 成员列表
     * @param string $Src 原文
     * @param string $Value 对外输出值
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

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = [];
            foreach ($param["Detail"] as $key => $value){
                $obj = new RelativeHistoryDetailBlock();
                $obj->deserialize($value);
                array_push($this->Detail, $obj);
            }
        }

        if (array_key_exists("Src",$param) and $param["Src"] !== null) {
            $this->Src = $param["Src"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}

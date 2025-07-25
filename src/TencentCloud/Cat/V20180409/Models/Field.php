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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 储存float类型字段
 *
 * @method integer getID() 获取自定义字段编号
 * @method void setID(integer $ID) 设置自定义字段编号
 * @method string getName() 获取自定义字段名称/说明
 * @method void setName(string $Name) 设置自定义字段名称/说明
 * @method float getValue() 获取字段值
 * @method void setValue(float $Value) 设置字段值
 */
class Field extends AbstractModel
{
    /**
     * @var integer 自定义字段编号
     */
    public $ID;

    /**
     * @var string 自定义字段名称/说明
     */
    public $Name;

    /**
     * @var float 字段值
     */
    public $Value;

    /**
     * @param integer $ID 自定义字段编号
     * @param string $Name 自定义字段名称/说明
     * @param float $Value 字段值
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}

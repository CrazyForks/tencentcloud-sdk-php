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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 过滤条件
 *
 * @method string getName() 获取过滤字段名
 * @method void setName(string $Name) 设置过滤字段名
 * @method string getValue() 获取过滤字段值
 * @method void setValue(string $Value) 设置过滤字段值
 * @method array getValues() 获取过滤字段值
 * @method void setValues(array $Values) 设置过滤字段值
 */
class Filter extends AbstractModel
{
    /**
     * @var string 过滤字段名
     */
    public $Name;

    /**
     * @var string 过滤字段值
     */
    public $Value;

    /**
     * @var array 过滤字段值
     */
    public $Values;

    /**
     * @param string $Name 过滤字段名
     * @param string $Value 过滤字段值
     * @param array $Values 过滤字段值
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

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}

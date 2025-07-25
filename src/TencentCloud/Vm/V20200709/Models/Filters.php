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
namespace TencentCloud\Vm\V20200709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频过滤条件
 *
 * @method string getName() 获取查询字段：
策略BizType
子账号SubUin
日期区间DateRange
 * @method void setName(string $Name) 设置查询字段：
策略BizType
子账号SubUin
日期区间DateRange
 * @method array getValues() 获取查询值
 * @method void setValues(array $Values) 设置查询值
 */
class Filters extends AbstractModel
{
    /**
     * @var string 查询字段：
策略BizType
子账号SubUin
日期区间DateRange
     */
    public $Name;

    /**
     * @var array 查询值
     */
    public $Values;

    /**
     * @param string $Name 查询字段：
策略BizType
子账号SubUin
日期区间DateRange
     * @param array $Values 查询值
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

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}

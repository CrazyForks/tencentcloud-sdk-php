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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeScreenEventsCnt请求参数结构体
 *
 * @method integer getBusinessType() 获取数据类型：0:待处理风险总数 1:影响资产总数，默认为0
 * @method void setBusinessType(integer $BusinessType) 设置数据类型：0:待处理风险总数 1:影响资产总数，默认为0
 */
class DescribeScreenEventsCntRequest extends AbstractModel
{
    /**
     * @var integer 数据类型：0:待处理风险总数 1:影响资产总数，默认为0
     */
    public $BusinessType;

    /**
     * @param integer $BusinessType 数据类型：0:待处理风险总数 1:影响资产总数，默认为0
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
        if (array_key_exists("BusinessType",$param) and $param["BusinessType"] !== null) {
            $this->BusinessType = $param["BusinessType"];
        }
    }
}

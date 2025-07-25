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
 * DescribeBaselineStrategyList请求参数结构体
 *
 * @method integer getLimit() 获取分页参数 最大100
 * @method void setLimit(integer $Limit) 设置分页参数 最大100
 * @method integer getOffset() 获取分页参数
 * @method void setOffset(integer $Offset) 设置分页参数
 * @method integer getEnabled() 获取规则开关，1：打开 0：关闭  2:全部
 * @method void setEnabled(integer $Enabled) 设置规则开关，1：打开 0：关闭  2:全部
 */
class DescribeBaselineStrategyListRequest extends AbstractModel
{
    /**
     * @var integer 分页参数 最大100
     */
    public $Limit;

    /**
     * @var integer 分页参数
     */
    public $Offset;

    /**
     * @var integer 规则开关，1：打开 0：关闭  2:全部
     */
    public $Enabled;

    /**
     * @param integer $Limit 分页参数 最大100
     * @param integer $Offset 分页参数
     * @param integer $Enabled 规则开关，1：打开 0：关闭  2:全部
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}

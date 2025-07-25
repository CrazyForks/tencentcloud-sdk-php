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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAutoAuthorizedRuleHost请求参数结构体
 *
 * @method integer getRuleId() 获取规则id
 * @method void setRuleId(integer $RuleId) 设置规则id
 * @method integer getLimit() 获取需要返回的数量，默认为全部；
 * @method void setLimit(integer $Limit) 设置需要返回的数量，默认为全部；
 * @method integer getOffset() 获取偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0
 * @method string getOrder() 获取排序字段
 * @method void setOrder(string $Order) 设置排序字段
 * @method string getBy() 获取排序方式，asc，desc
 * @method void setBy(string $By) 设置排序方式，asc，desc
 */
class DescribeAutoAuthorizedRuleHostRequest extends AbstractModel
{
    /**
     * @var integer 规则id
     */
    public $RuleId;

    /**
     * @var integer 需要返回的数量，默认为全部；
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0
     */
    public $Offset;

    /**
     * @var string 排序字段
     */
    public $Order;

    /**
     * @var string 排序方式，asc，desc
     */
    public $By;

    /**
     * @param integer $RuleId 规则id
     * @param integer $Limit 需要返回的数量，默认为全部；
     * @param integer $Offset 偏移量，默认为0
     * @param string $Order 排序字段
     * @param string $By 排序方式，asc，desc
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}

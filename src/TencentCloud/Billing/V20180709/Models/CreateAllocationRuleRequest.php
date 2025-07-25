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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAllocationRule请求参数结构体
 *
 * @method AllocationRulesSummary getRuleList() 获取公摊规则列表
 * @method void setRuleList(AllocationRulesSummary $RuleList) 设置公摊规则列表
 * @method string getMonth() 获取月份，不传默认当前月
 * @method void setMonth(string $Month) 设置月份，不传默认当前月
 */
class CreateAllocationRuleRequest extends AbstractModel
{
    /**
     * @var AllocationRulesSummary 公摊规则列表
     */
    public $RuleList;

    /**
     * @var string 月份，不传默认当前月
     */
    public $Month;

    /**
     * @param AllocationRulesSummary $RuleList 公摊规则列表
     * @param string $Month 月份，不传默认当前月
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
        if (array_key_exists("RuleList",$param) and $param["RuleList"] !== null) {
            $this->RuleList = new AllocationRulesSummary();
            $this->RuleList->deserialize($param["RuleList"]);
        }

        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }
    }
}

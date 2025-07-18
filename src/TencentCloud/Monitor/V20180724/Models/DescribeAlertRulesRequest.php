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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAlertRules请求参数结构体
 *
 * @method string getInstanceId() 获取Prometheus 实例 ID
 * @method void setInstanceId(string $InstanceId) 设置Prometheus 实例 ID
 * @method integer getLimit() 获取返回数量，默认为 20，最大值为 100
 * @method void setLimit(integer $Limit) 设置返回数量，默认为 20，最大值为 100
 * @method integer getOffset() 获取偏移量，默认为 0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为 0
 * @method string getRuleId() 获取规则 ID
 * @method void setRuleId(string $RuleId) 设置规则 ID
 * @method integer getRuleState() 获取规则状态码，取值如下：
<li>2=RuleEnabled</li>
<li>3=RuleDisabled</li>
 * @method void setRuleState(integer $RuleState) 设置规则状态码，取值如下：
<li>2=RuleEnabled</li>
<li>3=RuleDisabled</li>
 * @method string getRuleName() 获取规则名称
 * @method void setRuleName(string $RuleName) 设置规则名称
 * @method string getType() 获取报警策略模板分类
 * @method void setType(string $Type) 设置报警策略模板分类
 */
class DescribeAlertRulesRequest extends AbstractModel
{
    /**
     * @var string Prometheus 实例 ID
     */
    public $InstanceId;

    /**
     * @var integer 返回数量，默认为 20，最大值为 100
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为 0
     */
    public $Offset;

    /**
     * @var string 规则 ID
     */
    public $RuleId;

    /**
     * @var integer 规则状态码，取值如下：
<li>2=RuleEnabled</li>
<li>3=RuleDisabled</li>
     */
    public $RuleState;

    /**
     * @var string 规则名称
     */
    public $RuleName;

    /**
     * @var string 报警策略模板分类
     */
    public $Type;

    /**
     * @param string $InstanceId Prometheus 实例 ID
     * @param integer $Limit 返回数量，默认为 20，最大值为 100
     * @param integer $Offset 偏移量，默认为 0
     * @param string $RuleId 规则 ID
     * @param integer $RuleState 规则状态码，取值如下：
<li>2=RuleEnabled</li>
<li>3=RuleDisabled</li>
     * @param string $RuleName 规则名称
     * @param string $Type 报警策略模板分类
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleState",$param) and $param["RuleState"] !== null) {
            $this->RuleState = $param["RuleState"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}

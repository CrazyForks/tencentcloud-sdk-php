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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAuditRuleTemplates请求参数结构体
 *
 * @method array getRuleTemplateIds() 获取审计规则模板ID。
 * @method void setRuleTemplateIds(array $RuleTemplateIds) 设置审计规则模板ID。
 * @method array getRuleFilters() 获取修改后的审计规则。
 * @method void setRuleFilters(array $RuleFilters) 设置修改后的审计规则。
 * @method string getRuleTemplateName() 获取修改后的规则模板名称。
 * @method void setRuleTemplateName(string $RuleTemplateName) 设置修改后的规则模板名称。
 * @method string getDescription() 获取修改后的规则模板描述。
 * @method void setDescription(string $Description) 设置修改后的规则模板描述。
 * @method integer getAlarmLevel() 获取告警等级。1-低风险，2-中风险，3-高风险。
 * @method void setAlarmLevel(integer $AlarmLevel) 设置告警等级。1-低风险，2-中风险，3-高风险。
 * @method integer getAlarmPolicy() 获取告警策略。0-不告警，1-告警。
 * @method void setAlarmPolicy(integer $AlarmPolicy) 设置告警策略。0-不告警，1-告警。
 */
class ModifyAuditRuleTemplatesRequest extends AbstractModel
{
    /**
     * @var array 审计规则模板ID。
     */
    public $RuleTemplateIds;

    /**
     * @var array 修改后的审计规则。
     */
    public $RuleFilters;

    /**
     * @var string 修改后的规则模板名称。
     */
    public $RuleTemplateName;

    /**
     * @var string 修改后的规则模板描述。
     */
    public $Description;

    /**
     * @var integer 告警等级。1-低风险，2-中风险，3-高风险。
     */
    public $AlarmLevel;

    /**
     * @var integer 告警策略。0-不告警，1-告警。
     */
    public $AlarmPolicy;

    /**
     * @param array $RuleTemplateIds 审计规则模板ID。
     * @param array $RuleFilters 修改后的审计规则。
     * @param string $RuleTemplateName 修改后的规则模板名称。
     * @param string $Description 修改后的规则模板描述。
     * @param integer $AlarmLevel 告警等级。1-低风险，2-中风险，3-高风险。
     * @param integer $AlarmPolicy 告警策略。0-不告警，1-告警。
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
        if (array_key_exists("RuleTemplateIds",$param) and $param["RuleTemplateIds"] !== null) {
            $this->RuleTemplateIds = $param["RuleTemplateIds"];
        }

        if (array_key_exists("RuleFilters",$param) and $param["RuleFilters"] !== null) {
            $this->RuleFilters = [];
            foreach ($param["RuleFilters"] as $key => $value){
                $obj = new RuleFilters();
                $obj->deserialize($value);
                array_push($this->RuleFilters, $obj);
            }
        }

        if (array_key_exists("RuleTemplateName",$param) and $param["RuleTemplateName"] !== null) {
            $this->RuleTemplateName = $param["RuleTemplateName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("AlarmLevel",$param) and $param["AlarmLevel"] !== null) {
            $this->AlarmLevel = $param["AlarmLevel"];
        }

        if (array_key_exists("AlarmPolicy",$param) and $param["AlarmPolicy"] !== null) {
            $this->AlarmPolicy = $param["AlarmPolicy"];
        }
    }
}

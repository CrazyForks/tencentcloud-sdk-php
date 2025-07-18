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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRules请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method integer getRuleGroupId() 获取规则组id
 * @method void setRuleGroupId(integer $RuleGroupId) 设置规则组id
 * @method string getEngineType() 获取该规则运行的执行引擎，不传时会请求该数据源下默认的执行引擎
 * @method void setEngineType(string $EngineType) 设置该规则运行的执行引擎，不传时会请求该数据源下默认的执行引擎
 */
class DescribeRulesRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var integer 规则组id
     */
    public $RuleGroupId;

    /**
     * @var string 该规则运行的执行引擎，不传时会请求该数据源下默认的执行引擎
     */
    public $EngineType;

    /**
     * @param string $ProjectId 项目id
     * @param integer $RuleGroupId 规则组id
     * @param string $EngineType 该规则运行的执行引擎，不传时会请求该数据源下默认的执行引擎
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RuleGroupId",$param) and $param["RuleGroupId"] !== null) {
            $this->RuleGroupId = $param["RuleGroupId"];
        }

        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }
    }
}

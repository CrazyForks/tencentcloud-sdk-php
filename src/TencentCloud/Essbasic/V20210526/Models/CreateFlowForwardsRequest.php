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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateFlowForwards请求参数结构体
 *
 * @method string getTargetOpenId() 获取合同对应参与方需要修改的目标经办人对应的OpenId。

注意：`需要保证目标经办人已经加入企业且已实名`
 * @method void setTargetOpenId(string $TargetOpenId) 设置合同对应参与方需要修改的目标经办人对应的OpenId。

注意：`需要保证目标经办人已经加入企业且已实名`
 * @method array getFlowForwardInfos() 获取企业签署方的合同及对应签署方
 * @method void setFlowForwardInfos(array $FlowForwardInfos) 设置企业签署方的合同及对应签署方
 * @method Agent getAgent() 获取关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。此接口下面信息必填。<ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经经过实名认证
 * @method void setAgent(Agent $Agent) 设置关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。此接口下面信息必填。<ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经经过实名认证
 */
class CreateFlowForwardsRequest extends AbstractModel
{
    /**
     * @var string 合同对应参与方需要修改的目标经办人对应的OpenId。

注意：`需要保证目标经办人已经加入企业且已实名`
     */
    public $TargetOpenId;

    /**
     * @var array 企业签署方的合同及对应签署方
     */
    public $FlowForwardInfos;

    /**
     * @var Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。此接口下面信息必填。<ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经经过实名认证
     */
    public $Agent;

    /**
     * @param string $TargetOpenId 合同对应参与方需要修改的目标经办人对应的OpenId。

注意：`需要保证目标经办人已经加入企业且已实名`
     * @param array $FlowForwardInfos 企业签署方的合同及对应签署方
     * @param Agent $Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。此接口下面信息必填。<ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent. ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经经过实名认证
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
        if (array_key_exists("TargetOpenId",$param) and $param["TargetOpenId"] !== null) {
            $this->TargetOpenId = $param["TargetOpenId"];
        }

        if (array_key_exists("FlowForwardInfos",$param) and $param["FlowForwardInfos"] !== null) {
            $this->FlowForwardInfos = [];
            foreach ($param["FlowForwardInfos"] as $key => $value){
                $obj = new FlowForwardInfo();
                $obj->deserialize($value);
                array_push($this->FlowForwardInfos, $obj);
            }
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }
    }
}

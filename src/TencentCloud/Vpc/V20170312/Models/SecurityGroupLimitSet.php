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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户安全组配额限制。
 *
 * @method integer getSecurityGroupLimit() 获取每个项目每个地域可创建安全组数
 * @method void setSecurityGroupLimit(integer $SecurityGroupLimit) 设置每个项目每个地域可创建安全组数
 * @method integer getSecurityGroupPolicyLimit() 获取安全组下的最大规则数
 * @method void setSecurityGroupPolicyLimit(integer $SecurityGroupPolicyLimit) 设置安全组下的最大规则数
 * @method integer getReferedSecurityGroupLimit() 获取安全组下嵌套安全组规则数
 * @method void setReferedSecurityGroupLimit(integer $ReferedSecurityGroupLimit) 设置安全组下嵌套安全组规则数
 * @method integer getSecurityGroupInstanceLimit() 获取单安全组关联实例数
 * @method void setSecurityGroupInstanceLimit(integer $SecurityGroupInstanceLimit) 设置单安全组关联实例数
 * @method integer getInstanceSecurityGroupLimit() 获取实例关联安全组数
 * @method void setInstanceSecurityGroupLimit(integer $InstanceSecurityGroupLimit) 设置实例关联安全组数
 * @method integer getSecurityGroupExtendedPolicyLimit() 获取安全组展开后的规则数限制
 * @method void setSecurityGroupExtendedPolicyLimit(integer $SecurityGroupExtendedPolicyLimit) 设置安全组展开后的规则数限制
 * @method integer getSecurityGroupReferedCvmAndEniLimit() 获取被引用的安全组关联CVM、ENI的实例配额
 * @method void setSecurityGroupReferedCvmAndEniLimit(integer $SecurityGroupReferedCvmAndEniLimit) 设置被引用的安全组关联CVM、ENI的实例配额
 * @method integer getSecurityGroupReferedSvcLimit() 获取被引用的安全组关联数据库、LB等服务实例配额
 * @method void setSecurityGroupReferedSvcLimit(integer $SecurityGroupReferedSvcLimit) 设置被引用的安全组关联数据库、LB等服务实例配额
 */
class SecurityGroupLimitSet extends AbstractModel
{
    /**
     * @var integer 每个项目每个地域可创建安全组数
     */
    public $SecurityGroupLimit;

    /**
     * @var integer 安全组下的最大规则数
     */
    public $SecurityGroupPolicyLimit;

    /**
     * @var integer 安全组下嵌套安全组规则数
     */
    public $ReferedSecurityGroupLimit;

    /**
     * @var integer 单安全组关联实例数
     */
    public $SecurityGroupInstanceLimit;

    /**
     * @var integer 实例关联安全组数
     */
    public $InstanceSecurityGroupLimit;

    /**
     * @var integer 安全组展开后的规则数限制
     */
    public $SecurityGroupExtendedPolicyLimit;

    /**
     * @var integer 被引用的安全组关联CVM、ENI的实例配额
     */
    public $SecurityGroupReferedCvmAndEniLimit;

    /**
     * @var integer 被引用的安全组关联数据库、LB等服务实例配额
     */
    public $SecurityGroupReferedSvcLimit;

    /**
     * @param integer $SecurityGroupLimit 每个项目每个地域可创建安全组数
     * @param integer $SecurityGroupPolicyLimit 安全组下的最大规则数
     * @param integer $ReferedSecurityGroupLimit 安全组下嵌套安全组规则数
     * @param integer $SecurityGroupInstanceLimit 单安全组关联实例数
     * @param integer $InstanceSecurityGroupLimit 实例关联安全组数
     * @param integer $SecurityGroupExtendedPolicyLimit 安全组展开后的规则数限制
     * @param integer $SecurityGroupReferedCvmAndEniLimit 被引用的安全组关联CVM、ENI的实例配额
     * @param integer $SecurityGroupReferedSvcLimit 被引用的安全组关联数据库、LB等服务实例配额
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
        if (array_key_exists("SecurityGroupLimit",$param) and $param["SecurityGroupLimit"] !== null) {
            $this->SecurityGroupLimit = $param["SecurityGroupLimit"];
        }

        if (array_key_exists("SecurityGroupPolicyLimit",$param) and $param["SecurityGroupPolicyLimit"] !== null) {
            $this->SecurityGroupPolicyLimit = $param["SecurityGroupPolicyLimit"];
        }

        if (array_key_exists("ReferedSecurityGroupLimit",$param) and $param["ReferedSecurityGroupLimit"] !== null) {
            $this->ReferedSecurityGroupLimit = $param["ReferedSecurityGroupLimit"];
        }

        if (array_key_exists("SecurityGroupInstanceLimit",$param) and $param["SecurityGroupInstanceLimit"] !== null) {
            $this->SecurityGroupInstanceLimit = $param["SecurityGroupInstanceLimit"];
        }

        if (array_key_exists("InstanceSecurityGroupLimit",$param) and $param["InstanceSecurityGroupLimit"] !== null) {
            $this->InstanceSecurityGroupLimit = $param["InstanceSecurityGroupLimit"];
        }

        if (array_key_exists("SecurityGroupExtendedPolicyLimit",$param) and $param["SecurityGroupExtendedPolicyLimit"] !== null) {
            $this->SecurityGroupExtendedPolicyLimit = $param["SecurityGroupExtendedPolicyLimit"];
        }

        if (array_key_exists("SecurityGroupReferedCvmAndEniLimit",$param) and $param["SecurityGroupReferedCvmAndEniLimit"] !== null) {
            $this->SecurityGroupReferedCvmAndEniLimit = $param["SecurityGroupReferedCvmAndEniLimit"];
        }

        if (array_key_exists("SecurityGroupReferedSvcLimit",$param) and $param["SecurityGroupReferedSvcLimit"] !== null) {
            $this->SecurityGroupReferedSvcLimit = $param["SecurityGroupReferedSvcLimit"];
        }
    }
}

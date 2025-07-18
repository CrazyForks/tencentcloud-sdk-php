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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListPermissionPoliciesInRoleConfiguration请求参数结构体
 *
 * @method string getZoneId() 获取空间 ID
 * @method void setZoneId(string $ZoneId) 设置空间 ID
 * @method string getRoleConfigurationId() 获取权限配置 ID
 * @method void setRoleConfigurationId(string $RoleConfigurationId) 设置权限配置 ID
 * @method string getRolePolicyType() 获取权限策略类型。取值：  System：系统策略。复用 CAM 的系统策略。 Custom: 自定义策略。按照 CAM 权限策略语法和结构编写的自定义策略。
 * @method void setRolePolicyType(string $RolePolicyType) 设置权限策略类型。取值：  System：系统策略。复用 CAM 的系统策略。 Custom: 自定义策略。按照 CAM 权限策略语法和结构编写的自定义策略。
 * @method string getFilter() 获取按策略名称搜索
 * @method void setFilter(string $Filter) 设置按策略名称搜索
 */
class ListPermissionPoliciesInRoleConfigurationRequest extends AbstractModel
{
    /**
     * @var string 空间 ID
     */
    public $ZoneId;

    /**
     * @var string 权限配置 ID
     */
    public $RoleConfigurationId;

    /**
     * @var string 权限策略类型。取值：  System：系统策略。复用 CAM 的系统策略。 Custom: 自定义策略。按照 CAM 权限策略语法和结构编写的自定义策略。
     */
    public $RolePolicyType;

    /**
     * @var string 按策略名称搜索
     */
    public $Filter;

    /**
     * @param string $ZoneId 空间 ID
     * @param string $RoleConfigurationId 权限配置 ID
     * @param string $RolePolicyType 权限策略类型。取值：  System：系统策略。复用 CAM 的系统策略。 Custom: 自定义策略。按照 CAM 权限策略语法和结构编写的自定义策略。
     * @param string $Filter 按策略名称搜索
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("RoleConfigurationId",$param) and $param["RoleConfigurationId"] !== null) {
            $this->RoleConfigurationId = $param["RoleConfigurationId"];
        }

        if (array_key_exists("RolePolicyType",$param) and $param["RolePolicyType"] !== null) {
            $this->RolePolicyType = $param["RolePolicyType"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = $param["Filter"];
        }
    }
}

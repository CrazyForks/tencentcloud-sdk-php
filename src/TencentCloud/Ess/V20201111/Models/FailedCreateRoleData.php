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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 绑定角色失败信息
 *
 * @method string getUserId() 获取用户userId
 * @method void setUserId(string $UserId) 设置用户userId
 * @method array getRoleIds() 获取角色id列表
 * @method void setRoleIds(array $RoleIds) 设置角色id列表
 */
class FailedCreateRoleData extends AbstractModel
{
    /**
     * @var string 用户userId
     */
    public $UserId;

    /**
     * @var array 角色id列表
     */
    public $RoleIds;

    /**
     * @param string $UserId 用户userId
     * @param array $RoleIds 角色id列表
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("RoleIds",$param) and $param["RoleIds"] !== null) {
            $this->RoleIds = $param["RoleIds"];
        }
    }
}

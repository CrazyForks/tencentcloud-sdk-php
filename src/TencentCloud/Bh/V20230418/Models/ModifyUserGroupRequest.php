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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyUserGroup请求参数结构体
 *
 * @method integer getId() 获取用户组ID
 * @method void setId(integer $Id) 设置用户组ID
 * @method string getName() 获取用户组名
 * @method void setName(string $Name) 设置用户组名
 * @method string getDepartmentId() 获取用户组所属的部门ID，如：1.2.3
 * @method void setDepartmentId(string $DepartmentId) 设置用户组所属的部门ID，如：1.2.3
 */
class ModifyUserGroupRequest extends AbstractModel
{
    /**
     * @var integer 用户组ID
     */
    public $Id;

    /**
     * @var string 用户组名
     */
    public $Name;

    /**
     * @var string 用户组所属的部门ID，如：1.2.3
     */
    public $DepartmentId;

    /**
     * @param integer $Id 用户组ID
     * @param string $Name 用户组名
     * @param string $DepartmentId 用户组所属的部门ID，如：1.2.3
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DepartmentId",$param) and $param["DepartmentId"] !== null) {
            $this->DepartmentId = $param["DepartmentId"];
        }
    }
}

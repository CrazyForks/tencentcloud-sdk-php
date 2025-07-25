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
namespace TencentCloud\Chdfs\V20190718\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAccessGroup请求参数结构体
 *
 * @method string getAccessGroupId() 获取权限组ID
 * @method void setAccessGroupId(string $AccessGroupId) 设置权限组ID
 * @method string getAccessGroupName() 获取权限组名称
 * @method void setAccessGroupName(string $AccessGroupName) 设置权限组名称
 * @method string getDescription() 获取权限组描述
 * @method void setDescription(string $Description) 设置权限组描述
 */
class ModifyAccessGroupRequest extends AbstractModel
{
    /**
     * @var string 权限组ID
     */
    public $AccessGroupId;

    /**
     * @var string 权限组名称
     */
    public $AccessGroupName;

    /**
     * @var string 权限组描述
     */
    public $Description;

    /**
     * @param string $AccessGroupId 权限组ID
     * @param string $AccessGroupName 权限组名称
     * @param string $Description 权限组描述
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
        if (array_key_exists("AccessGroupId",$param) and $param["AccessGroupId"] !== null) {
            $this->AccessGroupId = $param["AccessGroupId"];
        }

        if (array_key_exists("AccessGroupName",$param) and $param["AccessGroupName"] !== null) {
            $this->AccessGroupName = $param["AccessGroupName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}

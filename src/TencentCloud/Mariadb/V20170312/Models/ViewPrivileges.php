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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视图权限信息
 *
 * @method string getDatabase() 获取数据库名
 * @method void setDatabase(string $Database) 设置数据库名
 * @method string getView() 获取数据库视图名
 * @method void setView(string $View) 设置数据库视图名
 * @method array getPrivileges() 获取权限信息
 * @method void setPrivileges(array $Privileges) 设置权限信息
 */
class ViewPrivileges extends AbstractModel
{
    /**
     * @var string 数据库名
     */
    public $Database;

    /**
     * @var string 数据库视图名
     */
    public $View;

    /**
     * @var array 权限信息
     */
    public $Privileges;

    /**
     * @param string $Database 数据库名
     * @param string $View 数据库视图名
     * @param array $Privileges 权限信息
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
        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("View",$param) and $param["View"] !== null) {
            $this->View = $param["View"];
        }

        if (array_key_exists("Privileges",$param) and $param["Privileges"] !== null) {
            $this->Privileges = $param["Privileges"];
        }
    }
}

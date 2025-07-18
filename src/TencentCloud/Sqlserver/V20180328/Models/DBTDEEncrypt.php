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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 开启、关闭TDE数据库加密
 *
 * @method string getDBName() 获取数据库名称
 * @method void setDBName(string $DBName) 设置数据库名称
 * @method string getEncryption() 获取enable-开启数据库TDE加密，disable-关闭数据库TDE加密
 * @method void setEncryption(string $Encryption) 设置enable-开启数据库TDE加密，disable-关闭数据库TDE加密
 */
class DBTDEEncrypt extends AbstractModel
{
    /**
     * @var string 数据库名称
     */
    public $DBName;

    /**
     * @var string enable-开启数据库TDE加密，disable-关闭数据库TDE加密
     */
    public $Encryption;

    /**
     * @param string $DBName 数据库名称
     * @param string $Encryption enable-开启数据库TDE加密，disable-关闭数据库TDE加密
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
        if (array_key_exists("DBName",$param) and $param["DBName"] !== null) {
            $this->DBName = $param["DBName"];
        }

        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = $param["Encryption"];
        }
    }
}

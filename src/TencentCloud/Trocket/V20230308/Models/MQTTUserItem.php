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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MQTT集群用户信息
 *
 * @method string getUsername() 获取用户名
 * @method void setUsername(string $Username) 设置用户名
 * @method string getPassword() 获取密码
 * @method void setPassword(string $Password) 设置密码
 * @method boolean getPermRead() 获取是否开启消费
 * @method void setPermRead(boolean $PermRead) 设置是否开启消费
 * @method boolean getPermWrite() 获取是否开启生产
 * @method void setPermWrite(boolean $PermWrite) 设置是否开启生产
 * @method string getRemark() 获取备注信息
 * @method void setRemark(string $Remark) 设置备注信息
 * @method integer getCreatedTime() 获取创建时间，秒为单位
 * @method void setCreatedTime(integer $CreatedTime) 设置创建时间，秒为单位
 * @method integer getModifiedTime() 获取修改时间，秒为单位
 * @method void setModifiedTime(integer $ModifiedTime) 设置修改时间，秒为单位
 */
class MQTTUserItem extends AbstractModel
{
    /**
     * @var string 用户名
     */
    public $Username;

    /**
     * @var string 密码
     */
    public $Password;

    /**
     * @var boolean 是否开启消费
     */
    public $PermRead;

    /**
     * @var boolean 是否开启生产
     */
    public $PermWrite;

    /**
     * @var string 备注信息
     */
    public $Remark;

    /**
     * @var integer 创建时间，秒为单位
     */
    public $CreatedTime;

    /**
     * @var integer 修改时间，秒为单位
     */
    public $ModifiedTime;

    /**
     * @param string $Username 用户名
     * @param string $Password 密码
     * @param boolean $PermRead 是否开启消费
     * @param boolean $PermWrite 是否开启生产
     * @param string $Remark 备注信息
     * @param integer $CreatedTime 创建时间，秒为单位
     * @param integer $ModifiedTime 修改时间，秒为单位
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
        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("PermRead",$param) and $param["PermRead"] !== null) {
            $this->PermRead = $param["PermRead"];
        }

        if (array_key_exists("PermWrite",$param) and $param["PermWrite"] !== null) {
            $this->PermWrite = $param["PermWrite"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }
    }
}

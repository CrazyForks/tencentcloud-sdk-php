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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReduceInstance请求参数结构体
 *
 * @method string getInstanceId() 获取集群ID
 * @method void setInstanceId(string $InstanceId) 设置集群ID
 * @method array getDelHosts() 获取节点列表
 * @method void setDelHosts(array $DelHosts) 设置节点列表
 * @method string getType() 获取角色（MATER/CORE），MASTER 对应 FE，CORE对应BE
 * @method void setType(string $Type) 设置角色（MATER/CORE），MASTER 对应 FE，CORE对应BE
 * @method integer getHaType() 获取缩容后集群高可用类型：0：非高可用，1：读高可用，2：读写高可用。
 * @method void setHaType(integer $HaType) 设置缩容后集群高可用类型：0：非高可用，1：读高可用，2：读写高可用。
 * @method boolean getCheckAuth() 获取前端鉴权使用
 * @method void setCheckAuth(boolean $CheckAuth) 设置前端鉴权使用
 */
class ReduceInstanceRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $InstanceId;

    /**
     * @var array 节点列表
     */
    public $DelHosts;

    /**
     * @var string 角色（MATER/CORE），MASTER 对应 FE，CORE对应BE
     */
    public $Type;

    /**
     * @var integer 缩容后集群高可用类型：0：非高可用，1：读高可用，2：读写高可用。
     */
    public $HaType;

    /**
     * @var boolean 前端鉴权使用
     */
    public $CheckAuth;

    /**
     * @param string $InstanceId 集群ID
     * @param array $DelHosts 节点列表
     * @param string $Type 角色（MATER/CORE），MASTER 对应 FE，CORE对应BE
     * @param integer $HaType 缩容后集群高可用类型：0：非高可用，1：读高可用，2：读写高可用。
     * @param boolean $CheckAuth 前端鉴权使用
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DelHosts",$param) and $param["DelHosts"] !== null) {
            $this->DelHosts = $param["DelHosts"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("HaType",$param) and $param["HaType"] !== null) {
            $this->HaType = $param["HaType"];
        }

        if (array_key_exists("CheckAuth",$param) and $param["CheckAuth"] !== null) {
            $this->CheckAuth = $param["CheckAuth"];
        }
    }
}

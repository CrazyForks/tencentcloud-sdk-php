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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateConfigFileGroup请求参数结构体
 *
 * @method string getInstanceId() 获取tse 实例 id
 * @method void setInstanceId(string $InstanceId) 设置tse 实例 id
 * @method ConfigFileGroup getConfigFileGroup() 获取配置文件组实体
 * @method void setConfigFileGroup(ConfigFileGroup $ConfigFileGroup) 设置配置文件组实体
 */
class CreateConfigFileGroupRequest extends AbstractModel
{
    /**
     * @var string tse 实例 id
     */
    public $InstanceId;

    /**
     * @var ConfigFileGroup 配置文件组实体
     */
    public $ConfigFileGroup;

    /**
     * @param string $InstanceId tse 实例 id
     * @param ConfigFileGroup $ConfigFileGroup 配置文件组实体
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

        if (array_key_exists("ConfigFileGroup",$param) and $param["ConfigFileGroup"] !== null) {
            $this->ConfigFileGroup = new ConfigFileGroup();
            $this->ConfigFileGroup->deserialize($param["ConfigFileGroup"]);
        }
    }
}

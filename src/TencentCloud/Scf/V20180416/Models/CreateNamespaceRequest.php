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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateNamespace请求参数结构体
 *
 * @method string getNamespace() 获取命名空间名称
 * @method void setNamespace(string $Namespace) 设置命名空间名称
 * @method string getDescription() 获取命名空间描述
 * @method void setDescription(string $Description) 设置命名空间描述
 * @method NamespaceResourceEnv getResourceEnv() 获取资源池配置
 * @method void setResourceEnv(NamespaceResourceEnv $ResourceEnv) 设置资源池配置
 */
class CreateNamespaceRequest extends AbstractModel
{
    /**
     * @var string 命名空间名称
     */
    public $Namespace;

    /**
     * @var string 命名空间描述
     */
    public $Description;

    /**
     * @var NamespaceResourceEnv 资源池配置
     */
    public $ResourceEnv;

    /**
     * @param string $Namespace 命名空间名称
     * @param string $Description 命名空间描述
     * @param NamespaceResourceEnv $ResourceEnv 资源池配置
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
        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ResourceEnv",$param) and $param["ResourceEnv"] !== null) {
            $this->ResourceEnv = new NamespaceResourceEnv();
            $this->ResourceEnv->deserialize($param["ResourceEnv"]);
        }
    }
}

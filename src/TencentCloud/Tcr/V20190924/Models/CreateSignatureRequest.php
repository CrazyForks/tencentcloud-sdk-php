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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSignature请求参数结构体
 *
 * @method string getRegistryId() 获取实例ID
 * @method void setRegistryId(string $RegistryId) 设置实例ID
 * @method string getNamespaceName() 获取命名空间名称
 * @method void setNamespaceName(string $NamespaceName) 设置命名空间名称
 * @method string getRepositoryName() 获取仓库名称
 * @method void setRepositoryName(string $RepositoryName) 设置仓库名称
 * @method string getImageVersion() 获取Tag名称
 * @method void setImageVersion(string $ImageVersion) 设置Tag名称
 */
class CreateSignatureRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $RegistryId;

    /**
     * @var string 命名空间名称
     */
    public $NamespaceName;

    /**
     * @var string 仓库名称
     */
    public $RepositoryName;

    /**
     * @var string Tag名称
     */
    public $ImageVersion;

    /**
     * @param string $RegistryId 实例ID
     * @param string $NamespaceName 命名空间名称
     * @param string $RepositoryName 仓库名称
     * @param string $ImageVersion Tag名称
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("RepositoryName",$param) and $param["RepositoryName"] !== null) {
            $this->RepositoryName = $param["RepositoryName"];
        }

        if (array_key_exists("ImageVersion",$param) and $param["ImageVersion"] !== null) {
            $this->ImageVersion = $param["ImageVersion"];
        }
    }
}

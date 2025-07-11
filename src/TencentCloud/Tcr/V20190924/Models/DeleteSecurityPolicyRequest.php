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
 * DeleteSecurityPolicy请求参数结构体
 *
 * @method string getRegistryId() 获取实例Id
 * @method void setRegistryId(string $RegistryId) 设置实例Id
 * @method integer getPolicyIndex() 获取白名单Id
 * @method void setPolicyIndex(integer $PolicyIndex) 设置白名单Id
 * @method string getPolicyVersion() 获取白名单版本
 * @method void setPolicyVersion(string $PolicyVersion) 设置白名单版本
 * @method string getCidrBlock() 获取网段或IP(互斥)
 * @method void setCidrBlock(string $CidrBlock) 设置网段或IP(互斥)
 */
class DeleteSecurityPolicyRequest extends AbstractModel
{
    /**
     * @var string 实例Id
     */
    public $RegistryId;

    /**
     * @var integer 白名单Id
     */
    public $PolicyIndex;

    /**
     * @var string 白名单版本
     */
    public $PolicyVersion;

    /**
     * @var string 网段或IP(互斥)
     */
    public $CidrBlock;

    /**
     * @param string $RegistryId 实例Id
     * @param integer $PolicyIndex 白名单Id
     * @param string $PolicyVersion 白名单版本
     * @param string $CidrBlock 网段或IP(互斥)
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

        if (array_key_exists("PolicyIndex",$param) and $param["PolicyIndex"] !== null) {
            $this->PolicyIndex = $param["PolicyIndex"];
        }

        if (array_key_exists("PolicyVersion",$param) and $param["PolicyVersion"] !== null) {
            $this->PolicyVersion = $param["PolicyVersion"];
        }

        if (array_key_exists("CidrBlock",$param) and $param["CidrBlock"] !== null) {
            $this->CidrBlock = $param["CidrBlock"];
        }
    }
}

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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryAcctInfo请求参数结构体
 *
 * @method string getMidasAppId() 获取聚鑫平台分配的支付MidasAppId
 * @method void setMidasAppId(string $MidasAppId) 设置聚鑫平台分配的支付MidasAppId
 * @method string getSubMchId() 获取业务平台的子商户Id，唯一
 * @method void setSubMchId(string $SubMchId) 设置业务平台的子商户Id，唯一
 * @method string getMidasSecretId() 获取由平台客服提供的计费密钥Id
 * @method void setMidasSecretId(string $MidasSecretId) 设置由平台客服提供的计费密钥Id
 * @method string getMidasSignature() 获取计费签名
 * @method void setMidasSignature(string $MidasSignature) 设置计费签名
 * @method string getEncryptType() 获取敏感信息加密类型:
RSA: rsa非对称加密，使用RSA-PKCS1-v1_5
AES: aes对称加密，使用AES256-CBC-PCKS7padding
缺省: RSA
 * @method void setEncryptType(string $EncryptType) 设置敏感信息加密类型:
RSA: rsa非对称加密，使用RSA-PKCS1-v1_5
AES: aes对称加密，使用AES256-CBC-PCKS7padding
缺省: RSA
 * @method string getMidasEnvironment() 获取环境名:
release: 现网环境
sandbox: 沙箱环境
development: 开发环境
缺省: release
 * @method void setMidasEnvironment(string $MidasEnvironment) 设置环境名:
release: 现网环境
sandbox: 沙箱环境
development: 开发环境
缺省: release
 */
class QueryAcctInfoRequest extends AbstractModel
{
    /**
     * @var string 聚鑫平台分配的支付MidasAppId
     */
    public $MidasAppId;

    /**
     * @var string 业务平台的子商户Id，唯一
     */
    public $SubMchId;

    /**
     * @var string 由平台客服提供的计费密钥Id
     */
    public $MidasSecretId;

    /**
     * @var string 计费签名
     */
    public $MidasSignature;

    /**
     * @var string 敏感信息加密类型:
RSA: rsa非对称加密，使用RSA-PKCS1-v1_5
AES: aes对称加密，使用AES256-CBC-PCKS7padding
缺省: RSA
     */
    public $EncryptType;

    /**
     * @var string 环境名:
release: 现网环境
sandbox: 沙箱环境
development: 开发环境
缺省: release
     */
    public $MidasEnvironment;

    /**
     * @param string $MidasAppId 聚鑫平台分配的支付MidasAppId
     * @param string $SubMchId 业务平台的子商户Id，唯一
     * @param string $MidasSecretId 由平台客服提供的计费密钥Id
     * @param string $MidasSignature 计费签名
     * @param string $EncryptType 敏感信息加密类型:
RSA: rsa非对称加密，使用RSA-PKCS1-v1_5
AES: aes对称加密，使用AES256-CBC-PCKS7padding
缺省: RSA
     * @param string $MidasEnvironment 环境名:
release: 现网环境
sandbox: 沙箱环境
development: 开发环境
缺省: release
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
        if (array_key_exists("MidasAppId",$param) and $param["MidasAppId"] !== null) {
            $this->MidasAppId = $param["MidasAppId"];
        }

        if (array_key_exists("SubMchId",$param) and $param["SubMchId"] !== null) {
            $this->SubMchId = $param["SubMchId"];
        }

        if (array_key_exists("MidasSecretId",$param) and $param["MidasSecretId"] !== null) {
            $this->MidasSecretId = $param["MidasSecretId"];
        }

        if (array_key_exists("MidasSignature",$param) and $param["MidasSignature"] !== null) {
            $this->MidasSignature = $param["MidasSignature"];
        }

        if (array_key_exists("EncryptType",$param) and $param["EncryptType"] !== null) {
            $this->EncryptType = $param["EncryptType"];
        }

        if (array_key_exists("MidasEnvironment",$param) and $param["MidasEnvironment"] !== null) {
            $this->MidasEnvironment = $param["MidasEnvironment"];
        }
    }
}

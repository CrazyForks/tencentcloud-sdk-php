<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CommitCertificateInformation请求参数结构体
 *
 * @method string getCertificateId() 获取证书 ID。
 * @method void setCertificateId(string $CertificateId) 设置证书 ID。
 * @method string getVerifyType() 获取域名验证方式，如 DNS,DNS_AUTO,FILE
 * @method void setVerifyType(string $VerifyType) 设置域名验证方式，如 DNS,DNS_AUTO,FILE
 */
class CommitCertificateInformationRequest extends AbstractModel
{
    /**
     * @var string 证书 ID。
     */
    public $CertificateId;

    /**
     * @var string 域名验证方式，如 DNS,DNS_AUTO,FILE
     */
    public $VerifyType;

    /**
     * @param string $CertificateId 证书 ID。
     * @param string $VerifyType 域名验证方式，如 DNS,DNS_AUTO,FILE
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
        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("VerifyType",$param) and $param["VerifyType"] !== null) {
            $this->VerifyType = $param["VerifyType"];
        }
    }
}

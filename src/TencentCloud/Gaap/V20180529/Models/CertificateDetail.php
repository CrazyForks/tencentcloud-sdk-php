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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 证书详情，包括证书ID， 证书名字，证书类型，证书内容以及密钥内容。
 *
 * @method string getCertificateId() 获取证书ID。
 * @method void setCertificateId(string $CertificateId) 设置证书ID。
 * @method integer getCertificateType() 获取证书类型。
 * @method void setCertificateType(integer $CertificateType) 设置证书类型。
 * @method string getCertificateAlias() 获取证书名字。
 * @method void setCertificateAlias(string $CertificateAlias) 设置证书名字。
 * @method string getCertificateContent() 获取证书内容。
 * @method void setCertificateContent(string $CertificateContent) 设置证书内容。
 * @method string getCertificateKey() 获取密钥内容。仅当证书类型为SSL证书时，返回该字段。
 * @method void setCertificateKey(string $CertificateKey) 设置密钥内容。仅当证书类型为SSL证书时，返回该字段。
 * @method integer getCreateTime() 获取创建时间，采用Unix时间戳的方式，表示从1970年1月1日（UTC/GMT的午夜）开始所经过的秒数。
 * @method void setCreateTime(integer $CreateTime) 设置创建时间，采用Unix时间戳的方式，表示从1970年1月1日（UTC/GMT的午夜）开始所经过的秒数。
 * @method integer getBeginTime() 获取证书生效起始时间，采用Unix时间戳的方式，表示从1970年1月1日（UTC/GMT的午夜）开始所经过的秒数。
 * @method void setBeginTime(integer $BeginTime) 设置证书生效起始时间，采用Unix时间戳的方式，表示从1970年1月1日（UTC/GMT的午夜）开始所经过的秒数。
 * @method integer getEndTime() 获取证书过期时间，采用Unix时间戳的方式，表示从1970年1月1日（UTC/GMT的午夜）开始所经过的秒数。
 * @method void setEndTime(integer $EndTime) 设置证书过期时间，采用Unix时间戳的方式，表示从1970年1月1日（UTC/GMT的午夜）开始所经过的秒数。
 * @method string getIssuerCN() 获取证书签发者通用名称。
 * @method void setIssuerCN(string $IssuerCN) 设置证书签发者通用名称。
 * @method string getSubjectCN() 获取证书主题通用名称。
 * @method void setSubjectCN(string $SubjectCN) 设置证书主题通用名称。
 */
class CertificateDetail extends AbstractModel
{
    /**
     * @var string 证书ID。
     */
    public $CertificateId;

    /**
     * @var integer 证书类型。
     */
    public $CertificateType;

    /**
     * @var string 证书名字。
     */
    public $CertificateAlias;

    /**
     * @var string 证书内容。
     */
    public $CertificateContent;

    /**
     * @var string 密钥内容。仅当证书类型为SSL证书时，返回该字段。
     */
    public $CertificateKey;

    /**
     * @var integer 创建时间，采用Unix时间戳的方式，表示从1970年1月1日（UTC/GMT的午夜）开始所经过的秒数。
     */
    public $CreateTime;

    /**
     * @var integer 证书生效起始时间，采用Unix时间戳的方式，表示从1970年1月1日（UTC/GMT的午夜）开始所经过的秒数。
     */
    public $BeginTime;

    /**
     * @var integer 证书过期时间，采用Unix时间戳的方式，表示从1970年1月1日（UTC/GMT的午夜）开始所经过的秒数。
     */
    public $EndTime;

    /**
     * @var string 证书签发者通用名称。
     */
    public $IssuerCN;

    /**
     * @var string 证书主题通用名称。
     */
    public $SubjectCN;

    /**
     * @param string $CertificateId 证书ID。
     * @param integer $CertificateType 证书类型。
     * @param string $CertificateAlias 证书名字。
     * @param string $CertificateContent 证书内容。
     * @param string $CertificateKey 密钥内容。仅当证书类型为SSL证书时，返回该字段。
     * @param integer $CreateTime 创建时间，采用Unix时间戳的方式，表示从1970年1月1日（UTC/GMT的午夜）开始所经过的秒数。
     * @param integer $BeginTime 证书生效起始时间，采用Unix时间戳的方式，表示从1970年1月1日（UTC/GMT的午夜）开始所经过的秒数。
     * @param integer $EndTime 证书过期时间，采用Unix时间戳的方式，表示从1970年1月1日（UTC/GMT的午夜）开始所经过的秒数。
     * @param string $IssuerCN 证书签发者通用名称。
     * @param string $SubjectCN 证书主题通用名称。
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

        if (array_key_exists("CertificateType",$param) and $param["CertificateType"] !== null) {
            $this->CertificateType = $param["CertificateType"];
        }

        if (array_key_exists("CertificateAlias",$param) and $param["CertificateAlias"] !== null) {
            $this->CertificateAlias = $param["CertificateAlias"];
        }

        if (array_key_exists("CertificateContent",$param) and $param["CertificateContent"] !== null) {
            $this->CertificateContent = $param["CertificateContent"];
        }

        if (array_key_exists("CertificateKey",$param) and $param["CertificateKey"] !== null) {
            $this->CertificateKey = $param["CertificateKey"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("IssuerCN",$param) and $param["IssuerCN"] !== null) {
            $this->IssuerCN = $param["IssuerCN"];
        }

        if (array_key_exists("SubjectCN",$param) and $param["SubjectCN"] !== null) {
            $this->SubjectCN = $param["SubjectCN"];
        }
    }
}

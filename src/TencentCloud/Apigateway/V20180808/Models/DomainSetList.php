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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务自定义域名列表
 *
 * @method string getDomainName() 获取域名名称。
 * @method void setDomainName(string $DomainName) 设置域名名称。
 * @method integer getStatus() 获取域名解析状态。1 表示正常解析，0 表示解析失败。
 * @method void setStatus(integer $Status) 设置域名解析状态。1 表示正常解析，0 表示解析失败。
 * @method string getCertificateId() 获取证书ID。
 * @method void setCertificateId(string $CertificateId) 设置证书ID。
 * @method boolean getIsDefaultMapping() 获取是否使用默认路径映射。
 * @method void setIsDefaultMapping(boolean $IsDefaultMapping) 设置是否使用默认路径映射。
 * @method string getProtocol() 获取自定义域名协议类型。
 * @method void setProtocol(string $Protocol) 设置自定义域名协议类型。
 * @method string getNetType() 获取网络类型（'INNER' 或 'OUTER'）。
 * @method void setNetType(string $NetType) 设置网络类型（'INNER' 或 'OUTER'）。
 * @method boolean getIsForcedHttps() 获取是否将HTTP请求强制跳转 HTTPS，默认为false。参数为 true时，API网关会将所有使用该自定义域名的 HTTP 协议的请求重定向至 HTTPS 协议进行转发。
 * @method void setIsForcedHttps(boolean $IsForcedHttps) 设置是否将HTTP请求强制跳转 HTTPS，默认为false。参数为 true时，API网关会将所有使用该自定义域名的 HTTP 协议的请求重定向至 HTTPS 协议进行转发。
 * @method boolean getRegistrationStatus() 获取域名备案注册状态
 * @method void setRegistrationStatus(boolean $RegistrationStatus) 设置域名备案注册状态
 */
class DomainSetList extends AbstractModel
{
    /**
     * @var string 域名名称。
     */
    public $DomainName;

    /**
     * @var integer 域名解析状态。1 表示正常解析，0 表示解析失败。
     */
    public $Status;

    /**
     * @var string 证书ID。
     */
    public $CertificateId;

    /**
     * @var boolean 是否使用默认路径映射。
     */
    public $IsDefaultMapping;

    /**
     * @var string 自定义域名协议类型。
     */
    public $Protocol;

    /**
     * @var string 网络类型（'INNER' 或 'OUTER'）。
     */
    public $NetType;

    /**
     * @var boolean 是否将HTTP请求强制跳转 HTTPS，默认为false。参数为 true时，API网关会将所有使用该自定义域名的 HTTP 协议的请求重定向至 HTTPS 协议进行转发。
     */
    public $IsForcedHttps;

    /**
     * @var boolean 域名备案注册状态
     */
    public $RegistrationStatus;

    /**
     * @param string $DomainName 域名名称。
     * @param integer $Status 域名解析状态。1 表示正常解析，0 表示解析失败。
     * @param string $CertificateId 证书ID。
     * @param boolean $IsDefaultMapping 是否使用默认路径映射。
     * @param string $Protocol 自定义域名协议类型。
     * @param string $NetType 网络类型（'INNER' 或 'OUTER'）。
     * @param boolean $IsForcedHttps 是否将HTTP请求强制跳转 HTTPS，默认为false。参数为 true时，API网关会将所有使用该自定义域名的 HTTP 协议的请求重定向至 HTTPS 协议进行转发。
     * @param boolean $RegistrationStatus 域名备案注册状态
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
        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("IsDefaultMapping",$param) and $param["IsDefaultMapping"] !== null) {
            $this->IsDefaultMapping = $param["IsDefaultMapping"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("IsForcedHttps",$param) and $param["IsForcedHttps"] !== null) {
            $this->IsForcedHttps = $param["IsForcedHttps"];
        }

        if (array_key_exists("RegistrationStatus",$param) and $param["RegistrationStatus"] !== null) {
            $this->RegistrationStatus = $param["RegistrationStatus"];
        }
    }
}

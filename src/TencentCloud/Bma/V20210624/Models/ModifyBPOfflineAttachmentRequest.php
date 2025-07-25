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
namespace TencentCloud\Bma\V20210624\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBPOfflineAttachment请求参数结构体
 *
 * @method string getLicenseName() 获取营业执照
 * @method void setLicenseName(string $LicenseName) 设置营业执照
 * @method string getAuthorizationName() 获取授权书
 * @method void setAuthorizationName(string $AuthorizationName) 设置授权书
 * @method string getBrandName() 获取商标名称
 * @method void setBrandName(string $BrandName) 设置商标名称
 * @method string getBrandCertificateName() 获取商标证明
 * @method void setBrandCertificateName(string $BrandCertificateName) 设置商标证明
 * @method string getTransferName() 获取商标转让证明
 * @method void setTransferName(string $TransferName) 设置商标转让证明
 */
class ModifyBPOfflineAttachmentRequest extends AbstractModel
{
    /**
     * @var string 营业执照
     */
    public $LicenseName;

    /**
     * @var string 授权书
     */
    public $AuthorizationName;

    /**
     * @var string 商标名称
     */
    public $BrandName;

    /**
     * @var string 商标证明
     */
    public $BrandCertificateName;

    /**
     * @var string 商标转让证明
     */
    public $TransferName;

    /**
     * @param string $LicenseName 营业执照
     * @param string $AuthorizationName 授权书
     * @param string $BrandName 商标名称
     * @param string $BrandCertificateName 商标证明
     * @param string $TransferName 商标转让证明
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
        if (array_key_exists("LicenseName",$param) and $param["LicenseName"] !== null) {
            $this->LicenseName = $param["LicenseName"];
        }

        if (array_key_exists("AuthorizationName",$param) and $param["AuthorizationName"] !== null) {
            $this->AuthorizationName = $param["AuthorizationName"];
        }

        if (array_key_exists("BrandName",$param) and $param["BrandName"] !== null) {
            $this->BrandName = $param["BrandName"];
        }

        if (array_key_exists("BrandCertificateName",$param) and $param["BrandCertificateName"] !== null) {
            $this->BrandCertificateName = $param["BrandCertificateName"];
        }

        if (array_key_exists("TransferName",$param) and $param["TransferName"] !== null) {
            $this->TransferName = $param["TransferName"];
        }
    }
}

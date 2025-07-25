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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PhoneVerificationCTCC请求参数结构体
 *
 * @method string getIdCard() 获取身份证号。
 * @method void setIdCard(string $IdCard) 设置身份证号。
 * @method string getName() 获取姓名。
 * @method void setName(string $Name) 设置姓名。
 * @method string getPhone() 获取手机号。
 * @method void setPhone(string $Phone) 设置手机号。
 * @method Encryption getEncryption() 获取敏感数据加密信息。
- 对传入信息（姓名、身份证号、手机号）有加密需求的用户可使用此参数，详情请点击左侧链接。
 * @method void setEncryption(Encryption $Encryption) 设置敏感数据加密信息。
- 对传入信息（姓名、身份证号、手机号）有加密需求的用户可使用此参数，详情请点击左侧链接。
 */
class PhoneVerificationCTCCRequest extends AbstractModel
{
    /**
     * @var string 身份证号。
     */
    public $IdCard;

    /**
     * @var string 姓名。
     */
    public $Name;

    /**
     * @var string 手机号。
     */
    public $Phone;

    /**
     * @var Encryption 敏感数据加密信息。
- 对传入信息（姓名、身份证号、手机号）有加密需求的用户可使用此参数，详情请点击左侧链接。
     */
    public $Encryption;

    /**
     * @param string $IdCard 身份证号。
     * @param string $Name 姓名。
     * @param string $Phone 手机号。
     * @param Encryption $Encryption 敏感数据加密信息。
- 对传入信息（姓名、身份证号、手机号）有加密需求的用户可使用此参数，详情请点击左侧链接。
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
        if (array_key_exists("IdCard",$param) and $param["IdCard"] !== null) {
            $this->IdCard = $param["IdCard"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = new Encryption();
            $this->Encryption->deserialize($param["Encryption"]);
        }
    }
}

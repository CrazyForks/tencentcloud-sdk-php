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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MLIDCardOCR返回参数结构体
 *
 * @method string getID() 获取身份证号
 * @method void setID(string $ID) 设置身份证号
 * @method string getName() 获取姓名
 * @method void setName(string $Name) 设置姓名
 * @method string getAddress() 获取地址
 * @method void setAddress(string $Address) 设置地址
 * @method string getSex() 获取性别
 * @method void setSex(string $Sex) 设置性别
 * @method array getWarn() 获取该字段已废弃， 将固定返回空数组，不建议使用。
 * @method void setWarn(array $Warn) 设置该字段已废弃， 将固定返回空数组，不建议使用。
 * @method string getImage() 获取证件图片
 * @method void setImage(string $Image) 设置证件图片
 * @method string getAdvancedInfo() 获取该字段已废弃， 将固定返回"1"，不建议使用。
 * @method void setAdvancedInfo(string $AdvancedInfo) 设置该字段已废弃， 将固定返回"1"，不建议使用。
 * @method string getType() 获取证件类型
MyKad  身份证
MyPR    永居证
MyTentera   军官证
MyKAS    临时身份证
POLIS  警察证
IKAD   劳工证
MyKid 儿童卡
 * @method void setType(string $Type) 设置证件类型
MyKad  身份证
MyPR    永居证
MyTentera   军官证
MyKAS    临时身份证
POLIS  警察证
IKAD   劳工证
MyKid 儿童卡
 * @method string getBirthday() 获取出生日期（目前该字段仅支持IKAD劳工证、MyKad 身份证）
 * @method void setBirthday(string $Birthday) 设置出生日期（目前该字段仅支持IKAD劳工证、MyKad 身份证）
 * @method string getMyKadNumber() 获取马来身份证背面号码
 * @method void setMyKadNumber(string $MyKadNumber) 设置马来身份证背面号码
 * @method array getWarnCardInfos() 获取告警码
-9101 证件边框不完整告警
-9102 证件复印件告警
-9103 证件翻拍告警
-9104 证件PS告警
-9107 证件反光告警
-9108 证件模糊告警
-9109 告警能力未开通
 * @method void setWarnCardInfos(array $WarnCardInfos) 设置告警码
-9101 证件边框不完整告警
-9102 证件复印件告警
-9103 证件翻拍告警
-9104 证件PS告警
-9107 证件反光告警
-9108 证件模糊告警
-9109 告警能力未开通
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class MLIDCardOCRResponse extends AbstractModel
{
    /**
     * @var string 身份证号
     */
    public $ID;

    /**
     * @var string 姓名
     */
    public $Name;

    /**
     * @var string 地址
     */
    public $Address;

    /**
     * @var string 性别
     */
    public $Sex;

    /**
     * @var array 该字段已废弃， 将固定返回空数组，不建议使用。
     * @deprecated
     */
    public $Warn;

    /**
     * @var string 证件图片
     */
    public $Image;

    /**
     * @var string 该字段已废弃， 将固定返回"1"，不建议使用。
     * @deprecated
     */
    public $AdvancedInfo;

    /**
     * @var string 证件类型
MyKad  身份证
MyPR    永居证
MyTentera   军官证
MyKAS    临时身份证
POLIS  警察证
IKAD   劳工证
MyKid 儿童卡
     */
    public $Type;

    /**
     * @var string 出生日期（目前该字段仅支持IKAD劳工证、MyKad 身份证）
     */
    public $Birthday;

    /**
     * @var string 马来身份证背面号码
     */
    public $MyKadNumber;

    /**
     * @var array 告警码
-9101 证件边框不完整告警
-9102 证件复印件告警
-9103 证件翻拍告警
-9104 证件PS告警
-9107 证件反光告警
-9108 证件模糊告警
-9109 告警能力未开通
     */
    public $WarnCardInfos;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ID 身份证号
     * @param string $Name 姓名
     * @param string $Address 地址
     * @param string $Sex 性别
     * @param array $Warn 该字段已废弃， 将固定返回空数组，不建议使用。
     * @param string $Image 证件图片
     * @param string $AdvancedInfo 该字段已废弃， 将固定返回"1"，不建议使用。
     * @param string $Type 证件类型
MyKad  身份证
MyPR    永居证
MyTentera   军官证
MyKAS    临时身份证
POLIS  警察证
IKAD   劳工证
MyKid 儿童卡
     * @param string $Birthday 出生日期（目前该字段仅支持IKAD劳工证、MyKad 身份证）
     * @param string $MyKadNumber 马来身份证背面号码
     * @param array $WarnCardInfos 告警码
-9101 证件边框不完整告警
-9102 证件复印件告警
-9103 证件翻拍告警
-9104 证件PS告警
-9107 证件反光告警
-9108 证件模糊告警
-9109 告警能力未开通
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("Warn",$param) and $param["Warn"] !== null) {
            $this->Warn = $param["Warn"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("AdvancedInfo",$param) and $param["AdvancedInfo"] !== null) {
            $this->AdvancedInfo = $param["AdvancedInfo"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }

        if (array_key_exists("MyKadNumber",$param) and $param["MyKadNumber"] !== null) {
            $this->MyKadNumber = $param["MyKadNumber"];
        }

        if (array_key_exists("WarnCardInfos",$param) and $param["WarnCardInfos"] !== null) {
            $this->WarnCardInfos = $param["WarnCardInfos"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

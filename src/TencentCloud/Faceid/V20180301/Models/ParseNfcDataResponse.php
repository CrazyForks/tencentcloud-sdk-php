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
 * ParseNfcData返回参数结构体
 *
 * @method string getResultCode() 获取结果码。
- 取值范围：0为首次查询成功，-1为查询失败。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultCode(string $ResultCode) 设置结果码。
- 取值范围：0为首次查询成功，-1为查询失败。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIdNum() 获取身份证号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdNum(string $IdNum) 设置身份证号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取姓名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置姓名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPicture() 获取照片。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPicture(string $Picture) 设置照片。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBirthDate() 获取出生日期。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBirthDate(string $BirthDate) 设置出生日期。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBeginTime() 获取有效期起始时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBeginTime(string $BeginTime) 设置有效期起始时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取有效期结束时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置有效期结束时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddress() 获取住址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddress(string $Address) 设置住址。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNation() 获取民族。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNation(string $Nation) 设置民族。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSex() 获取性别。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSex(string $Sex) 设置性别。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIdType() 获取类型。
- 取值范围：
01：身份证。 
03 ：中国护照。
04 ：军官证。
05 ：武警证。
06：港澳通行证 。
07 ：台胞证 。
08：外国护照 。
09 ：士兵证。
10 ：临时身份证。
11：户口本  。
12 ：警官证 。
13：外国人永久居留证。
14：港澳台居民居住证。
15：回乡证。
16：大陆居民来往台湾通行证。
99：其他证件。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdType(string $IdType) 设置类型。
- 取值范围：
01：身份证。 
03 ：中国护照。
04 ：军官证。
05 ：武警证。
06：港澳通行证 。
07 ：台胞证 。
08：外国护照 。
09 ：士兵证。
10 ：临时身份证。
11：户口本  。
12 ：警官证 。
13：外国人永久居留证。
14：港澳台居民居住证。
15：回乡证。
16：大陆居民来往台湾通行证。
99：其他证件。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnName() 获取英文姓名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnName(string $EnName) 设置英文姓名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSigningOrganization() 获取签发机关
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSigningOrganization(string $SigningOrganization) 设置签发机关
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOtherIdNum() 获取港澳台居民居住证，通行证号码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOtherIdNum(string $OtherIdNum) 设置港澳台居民居住证，通行证号码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNationality() 获取旅行证件国籍。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNationality(string $Nationality) 设置旅行证件国籍。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPersonalNumber() 获取旅行证件机读区第二行 29~42 位。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPersonalNumber(string $PersonalNumber) 设置旅行证件机读区第二行 29~42 位。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCheckMRTD() 获取旅行证件类的核验结果。
- JSON格式如下：
{"result_issuer ":"签发者证书合法性验证结果 ","result_paper":"证件安全对象合法性验证结果 ","result_data" :"防数据篡改验证结果 ","result_chip" :"防证书件芯片被复制验证结果"} 。
- 取值范围： 0:验证通过，1: 验证不通过，2: 未验证，3:部分通过，当4项核验结果都为0时，表示证件为真。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckMRTD(string $CheckMRTD) 设置旅行证件类的核验结果。
- JSON格式如下：
{"result_issuer ":"签发者证书合法性验证结果 ","result_paper":"证件安全对象合法性验证结果 ","result_data" :"防数据篡改验证结果 ","result_chip" :"防证书件芯片被复制验证结果"} 。
- 取值范围： 0:验证通过，1: 验证不通过，2: 未验证，3:部分通过，当4项核验结果都为0时，表示证件为真。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageA() 获取身份证照片面合成图片。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageA(string $ImageA) 设置身份证照片面合成图片。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageB() 获取身份证国徽面合成图片。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageB(string $ImageB) 设置身份证国徽面合成图片。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResultDescription() 获取对result code的结果描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultDescription(string $ResultDescription) 设置对result code的结果描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ParseNfcDataResponse extends AbstractModel
{
    /**
     * @var string 结果码。
- 取值范围：0为首次查询成功，-1为查询失败。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultCode;

    /**
     * @var string 身份证号。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdNum;

    /**
     * @var string 姓名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 照片。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Picture;

    /**
     * @var string 出生日期。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BirthDate;

    /**
     * @var string 有效期起始时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BeginTime;

    /**
     * @var string 有效期结束时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string 住址。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Address;

    /**
     * @var string 民族。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Nation;

    /**
     * @var string 性别。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Sex;

    /**
     * @var string 类型。
- 取值范围：
01：身份证。 
03 ：中国护照。
04 ：军官证。
05 ：武警证。
06：港澳通行证 。
07 ：台胞证 。
08：外国护照 。
09 ：士兵证。
10 ：临时身份证。
11：户口本  。
12 ：警官证 。
13：外国人永久居留证。
14：港澳台居民居住证。
15：回乡证。
16：大陆居民来往台湾通行证。
99：其他证件。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdType;

    /**
     * @var string 英文姓名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnName;

    /**
     * @var string 签发机关
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SigningOrganization;

    /**
     * @var string 港澳台居民居住证，通行证号码。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OtherIdNum;

    /**
     * @var string 旅行证件国籍。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Nationality;

    /**
     * @var string 旅行证件机读区第二行 29~42 位。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PersonalNumber;

    /**
     * @var string 旅行证件类的核验结果。
- JSON格式如下：
{"result_issuer ":"签发者证书合法性验证结果 ","result_paper":"证件安全对象合法性验证结果 ","result_data" :"防数据篡改验证结果 ","result_chip" :"防证书件芯片被复制验证结果"} 。
- 取值范围： 0:验证通过，1: 验证不通过，2: 未验证，3:部分通过，当4项核验结果都为0时，表示证件为真。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckMRTD;

    /**
     * @var string 身份证照片面合成图片。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageA;

    /**
     * @var string 身份证国徽面合成图片。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageB;

    /**
     * @var string 对result code的结果描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultDescription;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ResultCode 结果码。
- 取值范围：0为首次查询成功，-1为查询失败。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IdNum 身份证号。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 姓名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Picture 照片。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BirthDate 出生日期。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BeginTime 有效期起始时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 有效期结束时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Address 住址。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Nation 民族。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Sex 性别。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IdType 类型。
- 取值范围：
01：身份证。 
03 ：中国护照。
04 ：军官证。
05 ：武警证。
06：港澳通行证 。
07 ：台胞证 。
08：外国护照 。
09 ：士兵证。
10 ：临时身份证。
11：户口本  。
12 ：警官证 。
13：外国人永久居留证。
14：港澳台居民居住证。
15：回乡证。
16：大陆居民来往台湾通行证。
99：其他证件。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EnName 英文姓名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SigningOrganization 签发机关
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OtherIdNum 港澳台居民居住证，通行证号码。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Nationality 旅行证件国籍。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PersonalNumber 旅行证件机读区第二行 29~42 位。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CheckMRTD 旅行证件类的核验结果。
- JSON格式如下：
{"result_issuer ":"签发者证书合法性验证结果 ","result_paper":"证件安全对象合法性验证结果 ","result_data" :"防数据篡改验证结果 ","result_chip" :"防证书件芯片被复制验证结果"} 。
- 取值范围： 0:验证通过，1: 验证不通过，2: 未验证，3:部分通过，当4项核验结果都为0时，表示证件为真。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageA 身份证照片面合成图片。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageB 身份证国徽面合成图片。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResultDescription 对result code的结果描述。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ResultCode",$param) and $param["ResultCode"] !== null) {
            $this->ResultCode = $param["ResultCode"];
        }

        if (array_key_exists("IdNum",$param) and $param["IdNum"] !== null) {
            $this->IdNum = $param["IdNum"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Picture",$param) and $param["Picture"] !== null) {
            $this->Picture = $param["Picture"];
        }

        if (array_key_exists("BirthDate",$param) and $param["BirthDate"] !== null) {
            $this->BirthDate = $param["BirthDate"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Nation",$param) and $param["Nation"] !== null) {
            $this->Nation = $param["Nation"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("IdType",$param) and $param["IdType"] !== null) {
            $this->IdType = $param["IdType"];
        }

        if (array_key_exists("EnName",$param) and $param["EnName"] !== null) {
            $this->EnName = $param["EnName"];
        }

        if (array_key_exists("SigningOrganization",$param) and $param["SigningOrganization"] !== null) {
            $this->SigningOrganization = $param["SigningOrganization"];
        }

        if (array_key_exists("OtherIdNum",$param) and $param["OtherIdNum"] !== null) {
            $this->OtherIdNum = $param["OtherIdNum"];
        }

        if (array_key_exists("Nationality",$param) and $param["Nationality"] !== null) {
            $this->Nationality = $param["Nationality"];
        }

        if (array_key_exists("PersonalNumber",$param) and $param["PersonalNumber"] !== null) {
            $this->PersonalNumber = $param["PersonalNumber"];
        }

        if (array_key_exists("CheckMRTD",$param) and $param["CheckMRTD"] !== null) {
            $this->CheckMRTD = $param["CheckMRTD"];
        }

        if (array_key_exists("ImageA",$param) and $param["ImageA"] !== null) {
            $this->ImageA = $param["ImageA"];
        }

        if (array_key_exists("ImageB",$param) and $param["ImageB"] !== null) {
            $this->ImageB = $param["ImageB"];
        }

        if (array_key_exists("ResultDescription",$param) and $param["ResultDescription"] !== null) {
            $this->ResultDescription = $param["ResultDescription"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

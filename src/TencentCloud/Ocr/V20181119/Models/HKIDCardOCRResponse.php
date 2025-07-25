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
 * HKIDCardOCR返回参数结构体
 *
 * @method string getCnName() 获取中文姓名
 * @method void setCnName(string $CnName) 设置中文姓名
 * @method string getEnName() 获取英文姓名
 * @method void setEnName(string $EnName) 设置英文姓名
 * @method string getTelexCode() 获取中文姓名对应电码
 * @method void setTelexCode(string $TelexCode) 设置中文姓名对应电码
 * @method string getSex() 获取性别 ：“男M”或“女F”
 * @method void setSex(string $Sex) 设置性别 ：“男M”或“女F”
 * @method string getBirthday() 获取出生日期
 * @method void setBirthday(string $Birthday) 设置出生日期
 * @method integer getPermanent() 获取永久性居民身份证。
0：非永久；
1：永久；
-1：未知。
 * @method void setPermanent(integer $Permanent) 设置永久性居民身份证。
0：非永久；
1：永久；
-1：未知。
 * @method string getIdNum() 获取身份证号码
 * @method void setIdNum(string $IdNum) 设置身份证号码
 * @method string getSymbol() 获取证件符号，出生日期下的符号，例如"***AZ"
 * @method void setSymbol(string $Symbol) 设置证件符号，出生日期下的符号，例如"***AZ"
 * @method string getFirstIssueDate() 获取首次签发日期
 * @method void setFirstIssueDate(string $FirstIssueDate) 设置首次签发日期
 * @method string getCurrentIssueDate() 获取最近领用日期
 * @method void setCurrentIssueDate(string $CurrentIssueDate) 设置最近领用日期
 * @method integer getFakeDetectResult() 获取真假判断。
0：无法判断（图像模糊、不完整、反光、过暗等导致无法判断）；
1：假；
2：真。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFakeDetectResult(integer $FakeDetectResult) 设置真假判断。
0：无法判断（图像模糊、不完整、反光、过暗等导致无法判断）；
1：假；
2：真。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHeadImage() 获取Base64编码的证件左侧人像大图
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeadImage(string $HeadImage) 设置Base64编码的证件左侧人像大图
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSmallHeadImage() 获取Base64编码的证件右侧人像小图
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSmallHeadImage(string $SmallHeadImage) 设置Base64编码的证件右侧人像小图
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getWarningCode() 获取该字段已废弃， 将固定返回空数组，不建议使用。
This field is deprecated and will always return an empty array. Usage is not recommended.
 * @method void setWarningCode(array $WarningCode) 设置该字段已废弃， 将固定返回空数组，不建议使用。
This field is deprecated and will always return an empty array. Usage is not recommended.
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
 * @method string getWindowEmbeddedText() 获取证件透明视窗内的文本信息
 * @method void setWindowEmbeddedText(string $WindowEmbeddedText) 设置证件透明视窗内的文本信息
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class HKIDCardOCRResponse extends AbstractModel
{
    /**
     * @var string 中文姓名
     */
    public $CnName;

    /**
     * @var string 英文姓名
     */
    public $EnName;

    /**
     * @var string 中文姓名对应电码
     */
    public $TelexCode;

    /**
     * @var string 性别 ：“男M”或“女F”
     */
    public $Sex;

    /**
     * @var string 出生日期
     */
    public $Birthday;

    /**
     * @var integer 永久性居民身份证。
0：非永久；
1：永久；
-1：未知。
     */
    public $Permanent;

    /**
     * @var string 身份证号码
     */
    public $IdNum;

    /**
     * @var string 证件符号，出生日期下的符号，例如"***AZ"
     */
    public $Symbol;

    /**
     * @var string 首次签发日期
     */
    public $FirstIssueDate;

    /**
     * @var string 最近领用日期
     */
    public $CurrentIssueDate;

    /**
     * @var integer 真假判断。
0：无法判断（图像模糊、不完整、反光、过暗等导致无法判断）；
1：假；
2：真。
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $FakeDetectResult;

    /**
     * @var string Base64编码的证件左侧人像大图
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HeadImage;

    /**
     * @var string Base64编码的证件右侧人像小图
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SmallHeadImage;

    /**
     * @var array 该字段已废弃， 将固定返回空数组，不建议使用。
This field is deprecated and will always return an empty array. Usage is not recommended.
     * @deprecated
     */
    public $WarningCode;

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
     * @var string 证件透明视窗内的文本信息
     */
    public $WindowEmbeddedText;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $CnName 中文姓名
     * @param string $EnName 英文姓名
     * @param string $TelexCode 中文姓名对应电码
     * @param string $Sex 性别 ：“男M”或“女F”
     * @param string $Birthday 出生日期
     * @param integer $Permanent 永久性居民身份证。
0：非永久；
1：永久；
-1：未知。
     * @param string $IdNum 身份证号码
     * @param string $Symbol 证件符号，出生日期下的符号，例如"***AZ"
     * @param string $FirstIssueDate 首次签发日期
     * @param string $CurrentIssueDate 最近领用日期
     * @param integer $FakeDetectResult 真假判断。
0：无法判断（图像模糊、不完整、反光、过暗等导致无法判断）；
1：假；
2：真。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HeadImage Base64编码的证件左侧人像大图
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SmallHeadImage Base64编码的证件右侧人像小图
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $WarningCode 该字段已废弃， 将固定返回空数组，不建议使用。
This field is deprecated and will always return an empty array. Usage is not recommended.
     * @param array $WarnCardInfos 告警码
-9101 证件边框不完整告警
-9102 证件复印件告警
-9103 证件翻拍告警
-9104 证件PS告警
-9107 证件反光告警
-9108 证件模糊告警
-9109 告警能力未开通
     * @param string $WindowEmbeddedText 证件透明视窗内的文本信息
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
        if (array_key_exists("CnName",$param) and $param["CnName"] !== null) {
            $this->CnName = $param["CnName"];
        }

        if (array_key_exists("EnName",$param) and $param["EnName"] !== null) {
            $this->EnName = $param["EnName"];
        }

        if (array_key_exists("TelexCode",$param) and $param["TelexCode"] !== null) {
            $this->TelexCode = $param["TelexCode"];
        }

        if (array_key_exists("Sex",$param) and $param["Sex"] !== null) {
            $this->Sex = $param["Sex"];
        }

        if (array_key_exists("Birthday",$param) and $param["Birthday"] !== null) {
            $this->Birthday = $param["Birthday"];
        }

        if (array_key_exists("Permanent",$param) and $param["Permanent"] !== null) {
            $this->Permanent = $param["Permanent"];
        }

        if (array_key_exists("IdNum",$param) and $param["IdNum"] !== null) {
            $this->IdNum = $param["IdNum"];
        }

        if (array_key_exists("Symbol",$param) and $param["Symbol"] !== null) {
            $this->Symbol = $param["Symbol"];
        }

        if (array_key_exists("FirstIssueDate",$param) and $param["FirstIssueDate"] !== null) {
            $this->FirstIssueDate = $param["FirstIssueDate"];
        }

        if (array_key_exists("CurrentIssueDate",$param) and $param["CurrentIssueDate"] !== null) {
            $this->CurrentIssueDate = $param["CurrentIssueDate"];
        }

        if (array_key_exists("FakeDetectResult",$param) and $param["FakeDetectResult"] !== null) {
            $this->FakeDetectResult = $param["FakeDetectResult"];
        }

        if (array_key_exists("HeadImage",$param) and $param["HeadImage"] !== null) {
            $this->HeadImage = $param["HeadImage"];
        }

        if (array_key_exists("SmallHeadImage",$param) and $param["SmallHeadImage"] !== null) {
            $this->SmallHeadImage = $param["SmallHeadImage"];
        }

        if (array_key_exists("WarningCode",$param) and $param["WarningCode"] !== null) {
            $this->WarningCode = $param["WarningCode"];
        }

        if (array_key_exists("WarnCardInfos",$param) and $param["WarnCardInfos"] !== null) {
            $this->WarnCardInfos = $param["WarnCardInfos"];
        }

        if (array_key_exists("WindowEmbeddedText",$param) and $param["WindowEmbeddedText"] !== null) {
            $this->WindowEmbeddedText = $param["WindowEmbeddedText"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

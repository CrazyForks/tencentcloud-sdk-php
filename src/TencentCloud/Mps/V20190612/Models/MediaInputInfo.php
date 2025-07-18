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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 媒体处理的输入对象信息。
 *
 * @method string getType() 获取输入来源对象的类型，支持：
<li> COS：COS源</li>
<li> URL：URL源</li>
<li> AWS-S3：AWS 源，目前只支持转码任务 </li>
 * @method void setType(string $Type) 设置输入来源对象的类型，支持：
<li> COS：COS源</li>
<li> URL：URL源</li>
<li> AWS-S3：AWS 源，目前只支持转码任务 </li>
 * @method CosInputInfo getCosInputInfo() 获取当 Type 为 COS 时有效，则该项为必填，表示媒体处理 COS 对象信息。
 * @method void setCosInputInfo(CosInputInfo $CosInputInfo) 设置当 Type 为 COS 时有效，则该项为必填，表示媒体处理 COS 对象信息。
 * @method UrlInputInfo getUrlInputInfo() 获取当 Type 为 URL 时有效，则该项为必填，表示媒体处理 URL 对象信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrlInputInfo(UrlInputInfo $UrlInputInfo) 设置当 Type 为 URL 时有效，则该项为必填，表示媒体处理 URL 对象信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method S3InputInfo getS3InputInfo() 获取当 Type 为 AWS-S3 时有效，则该项为必填，表示媒体处理 AWS S3 对象信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setS3InputInfo(S3InputInfo $S3InputInfo) 设置当 Type 为 AWS-S3 时有效，则该项为必填，表示媒体处理 AWS S3 对象信息。
注意：此字段可能返回 null，表示取不到有效值。
 */
class MediaInputInfo extends AbstractModel
{
    /**
     * @var string 输入来源对象的类型，支持：
<li> COS：COS源</li>
<li> URL：URL源</li>
<li> AWS-S3：AWS 源，目前只支持转码任务 </li>
     */
    public $Type;

    /**
     * @var CosInputInfo 当 Type 为 COS 时有效，则该项为必填，表示媒体处理 COS 对象信息。
     */
    public $CosInputInfo;

    /**
     * @var UrlInputInfo 当 Type 为 URL 时有效，则该项为必填，表示媒体处理 URL 对象信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UrlInputInfo;

    /**
     * @var S3InputInfo 当 Type 为 AWS-S3 时有效，则该项为必填，表示媒体处理 AWS S3 对象信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $S3InputInfo;

    /**
     * @param string $Type 输入来源对象的类型，支持：
<li> COS：COS源</li>
<li> URL：URL源</li>
<li> AWS-S3：AWS 源，目前只支持转码任务 </li>
     * @param CosInputInfo $CosInputInfo 当 Type 为 COS 时有效，则该项为必填，表示媒体处理 COS 对象信息。
     * @param UrlInputInfo $UrlInputInfo 当 Type 为 URL 时有效，则该项为必填，表示媒体处理 URL 对象信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param S3InputInfo $S3InputInfo 当 Type 为 AWS-S3 时有效，则该项为必填，表示媒体处理 AWS S3 对象信息。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CosInputInfo",$param) and $param["CosInputInfo"] !== null) {
            $this->CosInputInfo = new CosInputInfo();
            $this->CosInputInfo->deserialize($param["CosInputInfo"]);
        }

        if (array_key_exists("UrlInputInfo",$param) and $param["UrlInputInfo"] !== null) {
            $this->UrlInputInfo = new UrlInputInfo();
            $this->UrlInputInfo->deserialize($param["UrlInputInfo"]);
        }

        if (array_key_exists("S3InputInfo",$param) and $param["S3InputInfo"] !== null) {
            $this->S3InputInfo = new S3InputInfo();
            $this->S3InputInfo->deserialize($param["S3InputInfo"]);
        }
    }
}

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
 * MixedInvoiceOCR请求参数结构体
 *
 * @method string getImageBase64() 获取图片的 Base64 值。支持的图片格式：PNG、JPG、JPEG、PDF，暂不支持 GIF 格式。支持的图片大小：所下载图片经Base64编码后不超过 10M。图片下载时间不超过 3 秒。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
 * @method void setImageBase64(string $ImageBase64) 设置图片的 Base64 值。支持的图片格式：PNG、JPG、JPEG、PDF，暂不支持 GIF 格式。支持的图片大小：所下载图片经Base64编码后不超过 10M。图片下载时间不超过 3 秒。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
 * @method string getImageUrl() 获取图片的 Url 地址。支持的图片格式：PNG、JPG、JPEG、PDF，暂不支持 GIF 格式。支持的图片大小：所下载图片经 Base64 编码后不超过 10M。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。
 * @method void setImageUrl(string $ImageUrl) 设置图片的 Url 地址。支持的图片格式：PNG、JPG、JPEG、PDF，暂不支持 GIF 格式。支持的图片大小：所下载图片经 Base64 编码后不超过 10M。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。
 * @method array getTypes() 获取需要识别的票据类型列表，为空或不填表示识别全部类型。
0：出租车发票
1：定额发票
2：火车票
3：增值税发票
5：机票行程单
8：通用机打发票
9：汽车票
10：轮船票
11：增值税发票（卷票 ）
12：购车发票
13：过路过桥费发票
15：非税发票
16：全电发票
----------------------
-1：其他发票,（只传入此类型时，图片均采用其他票类型进行识别）
 * @method void setTypes(array $Types) 设置需要识别的票据类型列表，为空或不填表示识别全部类型。
0：出租车发票
1：定额发票
2：火车票
3：增值税发票
5：机票行程单
8：通用机打发票
9：汽车票
10：轮船票
11：增值税发票（卷票 ）
12：购车发票
13：过路过桥费发票
15：非税发票
16：全电发票
----------------------
-1：其他发票,（只传入此类型时，图片均采用其他票类型进行识别）
 * @method string getReturnOther() 获取是否识别其他类型发票，默认为Yes
Yes：识别其他类型发票
No：不识别其他类型发票
 * @method void setReturnOther(string $ReturnOther) 设置是否识别其他类型发票，默认为Yes
Yes：识别其他类型发票
No：不识别其他类型发票
 * @method boolean getIsPdf() 获取是否开启PDF识别，默认值为true，开启后可同时支持图片和PDF的识别。
 * @method void setIsPdf(boolean $IsPdf) 设置是否开启PDF识别，默认值为true，开启后可同时支持图片和PDF的识别。
 * @method integer getPdfPageNumber() 获取需要识别的PDF页面的对应页码，仅支持PDF单页识别，当上传文件为PDF且IsPdf参数值为true时有效，默认值为1。
 * @method void setPdfPageNumber(integer $PdfPageNumber) 设置需要识别的PDF页面的对应页码，仅支持PDF单页识别，当上传文件为PDF且IsPdf参数值为true时有效，默认值为1。
 * @method boolean getReturnMultiplePage() 获取是否开启PDF多页识别，默认值为false，开启后可同时支持多页PDF的识别返回，仅支持返回文件前30页。开启后IsPDF和PdfPageNumber入参不进行控制。
 * @method void setReturnMultiplePage(boolean $ReturnMultiplePage) 设置是否开启PDF多页识别，默认值为false，开启后可同时支持多页PDF的识别返回，仅支持返回文件前30页。开启后IsPDF和PdfPageNumber入参不进行控制。
 */
class MixedInvoiceOCRRequest extends AbstractModel
{
    /**
     * @var string 图片的 Base64 值。支持的图片格式：PNG、JPG、JPEG、PDF，暂不支持 GIF 格式。支持的图片大小：所下载图片经Base64编码后不超过 10M。图片下载时间不超过 3 秒。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
     */
    public $ImageBase64;

    /**
     * @var string 图片的 Url 地址。支持的图片格式：PNG、JPG、JPEG、PDF，暂不支持 GIF 格式。支持的图片大小：所下载图片经 Base64 编码后不超过 10M。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。
     */
    public $ImageUrl;

    /**
     * @var array 需要识别的票据类型列表，为空或不填表示识别全部类型。
0：出租车发票
1：定额发票
2：火车票
3：增值税发票
5：机票行程单
8：通用机打发票
9：汽车票
10：轮船票
11：增值税发票（卷票 ）
12：购车发票
13：过路过桥费发票
15：非税发票
16：全电发票
----------------------
-1：其他发票,（只传入此类型时，图片均采用其他票类型进行识别）
     */
    public $Types;

    /**
     * @var string 是否识别其他类型发票，默认为Yes
Yes：识别其他类型发票
No：不识别其他类型发票
     */
    public $ReturnOther;

    /**
     * @var boolean 是否开启PDF识别，默认值为true，开启后可同时支持图片和PDF的识别。
     */
    public $IsPdf;

    /**
     * @var integer 需要识别的PDF页面的对应页码，仅支持PDF单页识别，当上传文件为PDF且IsPdf参数值为true时有效，默认值为1。
     */
    public $PdfPageNumber;

    /**
     * @var boolean 是否开启PDF多页识别，默认值为false，开启后可同时支持多页PDF的识别返回，仅支持返回文件前30页。开启后IsPDF和PdfPageNumber入参不进行控制。
     */
    public $ReturnMultiplePage;

    /**
     * @param string $ImageBase64 图片的 Base64 值。支持的图片格式：PNG、JPG、JPEG、PDF，暂不支持 GIF 格式。支持的图片大小：所下载图片经Base64编码后不超过 10M。图片下载时间不超过 3 秒。图片的 ImageUrl、ImageBase64 必须提供一个，如果都提供，只使用 ImageUrl。
     * @param string $ImageUrl 图片的 Url 地址。支持的图片格式：PNG、JPG、JPEG、PDF，暂不支持 GIF 格式。支持的图片大小：所下载图片经 Base64 编码后不超过 10M。图片下载时间不超过 3 秒。图片存储于腾讯云的 Url 可保障更高的下载速度和稳定性，建议图片存储于腾讯云。非腾讯云存储的 Url 速度和稳定性可能受一定影响。
     * @param array $Types 需要识别的票据类型列表，为空或不填表示识别全部类型。
0：出租车发票
1：定额发票
2：火车票
3：增值税发票
5：机票行程单
8：通用机打发票
9：汽车票
10：轮船票
11：增值税发票（卷票 ）
12：购车发票
13：过路过桥费发票
15：非税发票
16：全电发票
----------------------
-1：其他发票,（只传入此类型时，图片均采用其他票类型进行识别）
     * @param string $ReturnOther 是否识别其他类型发票，默认为Yes
Yes：识别其他类型发票
No：不识别其他类型发票
     * @param boolean $IsPdf 是否开启PDF识别，默认值为true，开启后可同时支持图片和PDF的识别。
     * @param integer $PdfPageNumber 需要识别的PDF页面的对应页码，仅支持PDF单页识别，当上传文件为PDF且IsPdf参数值为true时有效，默认值为1。
     * @param boolean $ReturnMultiplePage 是否开启PDF多页识别，默认值为false，开启后可同时支持多页PDF的识别返回，仅支持返回文件前30页。开启后IsPDF和PdfPageNumber入参不进行控制。
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
        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("Types",$param) and $param["Types"] !== null) {
            $this->Types = $param["Types"];
        }

        if (array_key_exists("ReturnOther",$param) and $param["ReturnOther"] !== null) {
            $this->ReturnOther = $param["ReturnOther"];
        }

        if (array_key_exists("IsPdf",$param) and $param["IsPdf"] !== null) {
            $this->IsPdf = $param["IsPdf"];
        }

        if (array_key_exists("PdfPageNumber",$param) and $param["PdfPageNumber"] !== null) {
            $this->PdfPageNumber = $param["PdfPageNumber"];
        }

        if (array_key_exists("ReturnMultiplePage",$param) and $param["ReturnMultiplePage"] !== null) {
            $this->ReturnMultiplePage = $param["ReturnMultiplePage"];
        }
    }
}

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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 通用混流输入参数。
 *
 * @method string getInputStreamName() 获取输入流名称。80字节以内，仅含字母、数字以及下划线的字符串。
当LayoutParams.InputType=0(音视频)/4(纯音频)/5(纯视频)时，该值为需要混流的流名称。
当LayoutParams.InputType=2(图片)/3(画布)时，该值仅用作标识输入，可用类似Canvas1、Pictrue1的名称。
 * @method void setInputStreamName(string $InputStreamName) 设置输入流名称。80字节以内，仅含字母、数字以及下划线的字符串。
当LayoutParams.InputType=0(音视频)/4(纯音频)/5(纯视频)时，该值为需要混流的流名称。
当LayoutParams.InputType=2(图片)/3(画布)时，该值仅用作标识输入，可用类似Canvas1、Pictrue1的名称。
 * @method CommonMixLayoutParams getLayoutParams() 获取输入流布局参数。
 * @method void setLayoutParams(CommonMixLayoutParams $LayoutParams) 设置输入流布局参数。
 * @method CommonMixCropParams getCropParams() 获取输入流裁剪参数。
 * @method void setCropParams(CommonMixCropParams $CropParams) 设置输入流裁剪参数。
 * @method MixPortraitSegmentParams getPortraitSegmentParams() 获取抠图参数。
 * @method void setPortraitSegmentParams(MixPortraitSegmentParams $PortraitSegmentParams) 设置抠图参数。
 */
class CommonMixInputParam extends AbstractModel
{
    /**
     * @var string 输入流名称。80字节以内，仅含字母、数字以及下划线的字符串。
当LayoutParams.InputType=0(音视频)/4(纯音频)/5(纯视频)时，该值为需要混流的流名称。
当LayoutParams.InputType=2(图片)/3(画布)时，该值仅用作标识输入，可用类似Canvas1、Pictrue1的名称。
     */
    public $InputStreamName;

    /**
     * @var CommonMixLayoutParams 输入流布局参数。
     */
    public $LayoutParams;

    /**
     * @var CommonMixCropParams 输入流裁剪参数。
     */
    public $CropParams;

    /**
     * @var MixPortraitSegmentParams 抠图参数。
     */
    public $PortraitSegmentParams;

    /**
     * @param string $InputStreamName 输入流名称。80字节以内，仅含字母、数字以及下划线的字符串。
当LayoutParams.InputType=0(音视频)/4(纯音频)/5(纯视频)时，该值为需要混流的流名称。
当LayoutParams.InputType=2(图片)/3(画布)时，该值仅用作标识输入，可用类似Canvas1、Pictrue1的名称。
     * @param CommonMixLayoutParams $LayoutParams 输入流布局参数。
     * @param CommonMixCropParams $CropParams 输入流裁剪参数。
     * @param MixPortraitSegmentParams $PortraitSegmentParams 抠图参数。
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
        if (array_key_exists("InputStreamName",$param) and $param["InputStreamName"] !== null) {
            $this->InputStreamName = $param["InputStreamName"];
        }

        if (array_key_exists("LayoutParams",$param) and $param["LayoutParams"] !== null) {
            $this->LayoutParams = new CommonMixLayoutParams();
            $this->LayoutParams->deserialize($param["LayoutParams"]);
        }

        if (array_key_exists("CropParams",$param) and $param["CropParams"] !== null) {
            $this->CropParams = new CommonMixCropParams();
            $this->CropParams->deserialize($param["CropParams"]);
        }

        if (array_key_exists("PortraitSegmentParams",$param) and $param["PortraitSegmentParams"] !== null) {
            $this->PortraitSegmentParams = new MixPortraitSegmentParams();
            $this->PortraitSegmentParams->deserialize($param["PortraitSegmentParams"]);
        }
    }
}

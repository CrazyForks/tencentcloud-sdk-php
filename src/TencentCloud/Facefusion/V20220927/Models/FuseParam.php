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
namespace TencentCloud\Facefusion\V20220927\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 融合参数
 *
 * @method ImageCodecParam getImageCodecParam() 获取图片编码参数
 * @method void setImageCodecParam(ImageCodecParam $ImageCodecParam) 设置图片编码参数
 */
class FuseParam extends AbstractModel
{
    /**
     * @var ImageCodecParam 图片编码参数
     */
    public $ImageCodecParam;

    /**
     * @param ImageCodecParam $ImageCodecParam 图片编码参数
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
        if (array_key_exists("ImageCodecParam",$param) and $param["ImageCodecParam"] !== null) {
            $this->ImageCodecParam = new ImageCodecParam();
            $this->ImageCodecParam->deserialize($param["ImageCodecParam"]);
        }
    }
}

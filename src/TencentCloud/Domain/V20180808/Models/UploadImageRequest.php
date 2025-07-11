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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UploadImage请求参数结构体
 *
 * @method string getImageFile() 获取资质照片，照片的base64编码。
 * @method void setImageFile(string $ImageFile) 设置资质照片，照片的base64编码。
 */
class UploadImageRequest extends AbstractModel
{
    /**
     * @var string 资质照片，照片的base64编码。
     */
    public $ImageFile;

    /**
     * @param string $ImageFile 资质照片，照片的base64编码。
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
        if (array_key_exists("ImageFile",$param) and $param["ImageFile"] !== null) {
            $this->ImageFile = $param["ImageFile"];
        }
    }
}

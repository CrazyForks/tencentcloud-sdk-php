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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddCustomPersonImage请求参数结构体
 *
 * @method string getPersonId() 获取自定义人物Id
 * @method void setPersonId(string $PersonId) 设置自定义人物Id
 * @method string getImageURL() 获取自定义人物图片地址
 * @method void setImageURL(string $ImageURL) 设置自定义人物图片地址
 * @method string getImage() 获取图片数据base64之后的结果
 * @method void setImage(string $Image) 设置图片数据base64之后的结果
 */
class AddCustomPersonImageRequest extends AbstractModel
{
    /**
     * @var string 自定义人物Id
     */
    public $PersonId;

    /**
     * @var string 自定义人物图片地址
     */
    public $ImageURL;

    /**
     * @var string 图片数据base64之后的结果
     */
    public $Image;

    /**
     * @param string $PersonId 自定义人物Id
     * @param string $ImageURL 自定义人物图片地址
     * @param string $Image 图片数据base64之后的结果
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
        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("ImageURL",$param) and $param["ImageURL"] !== null) {
            $this->ImageURL = $param["ImageURL"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }
    }
}

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
namespace TencentCloud\Tag\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateResourceTagValue请求参数结构体
 *
 * @method string getTagKey() 获取资源关联的标签键
 * @method void setTagKey(string $TagKey) 设置资源关联的标签键
 * @method string getTagValue() 获取修改后的标签值
 * @method void setTagValue(string $TagValue) 设置修改后的标签值
 * @method string getResource() 获取[ 资源六段式描述 ](https://cloud.tencent.com/document/product/598/10606)
 * @method void setResource(string $Resource) 设置[ 资源六段式描述 ](https://cloud.tencent.com/document/product/598/10606)
 */
class UpdateResourceTagValueRequest extends AbstractModel
{
    /**
     * @var string 资源关联的标签键
     */
    public $TagKey;

    /**
     * @var string 修改后的标签值
     */
    public $TagValue;

    /**
     * @var string [ 资源六段式描述 ](https://cloud.tencent.com/document/product/598/10606)
     */
    public $Resource;

    /**
     * @param string $TagKey 资源关联的标签键
     * @param string $TagValue 修改后的标签值
     * @param string $Resource [ 资源六段式描述 ](https://cloud.tencent.com/document/product/598/10606)
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
        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }

        if (array_key_exists("TagValue",$param) and $param["TagValue"] !== null) {
            $this->TagValue = $param["TagValue"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }
    }
}

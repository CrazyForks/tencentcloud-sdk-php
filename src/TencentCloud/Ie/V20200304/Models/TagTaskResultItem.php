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
namespace TencentCloud\Ie\V20200304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频标签识别结果项
 *
 * @method string getTag() 获取标签名称。
 * @method void setTag(string $Tag) 设置标签名称。
 * @method float getConfidence() 获取置信度，取值范围是 0 到 100。
 * @method void setConfidence(float $Confidence) 设置置信度，取值范围是 0 到 100。
 */
class TagTaskResultItem extends AbstractModel
{
    /**
     * @var string 标签名称。
     */
    public $Tag;

    /**
     * @var float 置信度，取值范围是 0 到 100。
     */
    public $Confidence;

    /**
     * @param string $Tag 标签名称。
     * @param float $Confidence 置信度，取值范围是 0 到 100。
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
        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }
    }
}

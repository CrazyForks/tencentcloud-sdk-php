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
namespace TencentCloud\Nlp\V20190408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 待分析的句子对
 *
 * @method string getSourceText() 获取需要与目标句子计算相似度的源句子。（仅支持UTF-8格式，不超过500字符）
 * @method void setSourceText(string $SourceText) 设置需要与目标句子计算相似度的源句子。（仅支持UTF-8格式，不超过500字符）
 * @method string getTargetText() 获取目标句子。（仅支持UTF-8格式，不超过500字符）

 * @method void setTargetText(string $TargetText) 设置目标句子。（仅支持UTF-8格式，不超过500字符）
 */
class SentencePair extends AbstractModel
{
    /**
     * @var string 需要与目标句子计算相似度的源句子。（仅支持UTF-8格式，不超过500字符）
     */
    public $SourceText;

    /**
     * @var string 目标句子。（仅支持UTF-8格式，不超过500字符）

     */
    public $TargetText;

    /**
     * @param string $SourceText 需要与目标句子计算相似度的源句子。（仅支持UTF-8格式，不超过500字符）
     * @param string $TargetText 目标句子。（仅支持UTF-8格式，不超过500字符）
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
        if (array_key_exists("SourceText",$param) and $param["SourceText"] !== null) {
            $this->SourceText = $param["SourceText"];
        }

        if (array_key_exists("TargetText",$param) and $param["TargetText"] !== null) {
            $this->TargetText = $param["TargetText"];
        }
    }
}

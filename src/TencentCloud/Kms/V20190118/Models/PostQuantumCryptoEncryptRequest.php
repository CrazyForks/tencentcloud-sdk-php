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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PostQuantumCryptoEncrypt请求参数结构体
 *
 * @method string getKeyId() 获取调用CreateKey生成的CMK全局唯一标识符
 * @method void setKeyId(string $KeyId) 设置调用CreateKey生成的CMK全局唯一标识符
 * @method string getPlainText() 获取被加密的明文数据，该字段必须使用base64编码，原文最大长度支持4K
 * @method void setPlainText(string $PlainText) 设置被加密的明文数据，该字段必须使用base64编码，原文最大长度支持4K
 */
class PostQuantumCryptoEncryptRequest extends AbstractModel
{
    /**
     * @var string 调用CreateKey生成的CMK全局唯一标识符
     */
    public $KeyId;

    /**
     * @var string 被加密的明文数据，该字段必须使用base64编码，原文最大长度支持4K
     */
    public $PlainText;

    /**
     * @param string $KeyId 调用CreateKey生成的CMK全局唯一标识符
     * @param string $PlainText 被加密的明文数据，该字段必须使用base64编码，原文最大长度支持4K
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
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("PlainText",$param) and $param["PlainText"] !== null) {
            $this->PlainText = $param["PlainText"];
        }
    }
}

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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateKeyPair请求参数结构体
 *
 * @method string getKeyName() 获取密钥对名称，可由数字，字母和下划线组成，长度不超过 25 个字符。
 * @method void setKeyName(string $KeyName) 设置密钥对名称，可由数字，字母和下划线组成，长度不超过 25 个字符。
 */
class CreateKeyPairRequest extends AbstractModel
{
    /**
     * @var string 密钥对名称，可由数字，字母和下划线组成，长度不超过 25 个字符。
     */
    public $KeyName;

    /**
     * @param string $KeyName 密钥对名称，可由数字，字母和下划线组成，长度不超过 25 个字符。
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
        if (array_key_exists("KeyName",$param) and $param["KeyName"] !== null) {
            $this->KeyName = $param["KeyName"];
        }
    }
}

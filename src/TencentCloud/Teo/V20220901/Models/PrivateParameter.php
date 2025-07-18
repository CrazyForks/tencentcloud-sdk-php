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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 对象存储源站私有鉴权参数
 *
 * @method string getName() 获取私有鉴权参数名称，取值有：
<li>AccessKeyId：鉴权参数 Access Key ID；</li>
<li>SecretAccessKey：鉴权参数 Secret Access Key；</li>
<li>SignatureVersion：鉴权版本，v2 或者 v4；</li>
<li>Region：存储桶地域。</li>
 * @method void setName(string $Name) 设置私有鉴权参数名称，取值有：
<li>AccessKeyId：鉴权参数 Access Key ID；</li>
<li>SecretAccessKey：鉴权参数 Secret Access Key；</li>
<li>SignatureVersion：鉴权版本，v2 或者 v4；</li>
<li>Region：存储桶地域。</li>
 * @method string getValue() 获取私有鉴权参数值。
 * @method void setValue(string $Value) 设置私有鉴权参数值。
 */
class PrivateParameter extends AbstractModel
{
    /**
     * @var string 私有鉴权参数名称，取值有：
<li>AccessKeyId：鉴权参数 Access Key ID；</li>
<li>SecretAccessKey：鉴权参数 Secret Access Key；</li>
<li>SignatureVersion：鉴权版本，v2 或者 v4；</li>
<li>Region：存储桶地域。</li>
     */
    public $Name;

    /**
     * @var string 私有鉴权参数值。
     */
    public $Value;

    /**
     * @param string $Name 私有鉴权参数名称，取值有：
<li>AccessKeyId：鉴权参数 Access Key ID；</li>
<li>SecretAccessKey：鉴权参数 Secret Access Key；</li>
<li>SignatureVersion：鉴权版本，v2 或者 v4；</li>
<li>Region：存储桶地域。</li>
     * @param string $Value 私有鉴权参数值。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}

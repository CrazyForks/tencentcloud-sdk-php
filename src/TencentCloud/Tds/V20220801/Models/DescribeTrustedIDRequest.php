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
namespace TencentCloud\Tds\V20220801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTrustedID请求参数结构体
 *
 * @method string getDeviceToken() 获取客户端通过SDK获取的设备Token
 * @method void setDeviceToken(string $DeviceToken) 设置客户端通过SDK获取的设备Token
 */
class DescribeTrustedIDRequest extends AbstractModel
{
    /**
     * @var string 客户端通过SDK获取的设备Token
     */
    public $DeviceToken;

    /**
     * @param string $DeviceToken 客户端通过SDK获取的设备Token
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
        if (array_key_exists("DeviceToken",$param) and $param["DeviceToken"] !== null) {
            $this->DeviceToken = $param["DeviceToken"];
        }
    }
}

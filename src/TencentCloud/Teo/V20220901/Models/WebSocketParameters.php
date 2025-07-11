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
 * WebSocket 配置。
 *
 * @method string getSwitch() 获取WebSocket 超时时间配置开关，取值有：
<li>on：使用 Timeout 作为 WebSocket 超时时间；</li>
<li>off：平台仍支持 WebSocket 连接，此时使用系统默认的 15 秒为超时时间。</li>
 * @method void setSwitch(string $Switch) 设置WebSocket 超时时间配置开关，取值有：
<li>on：使用 Timeout 作为 WebSocket 超时时间；</li>
<li>off：平台仍支持 WebSocket 连接，此时使用系统默认的 15 秒为超时时间。</li>
 * @method integer getTimeout() 获取超时时间，单位为秒，最大超时时间 120 秒。<br>注意：当 Switch 为 on 时，此字段必填，否则此字段不生效。
 * @method void setTimeout(integer $Timeout) 设置超时时间，单位为秒，最大超时时间 120 秒。<br>注意：当 Switch 为 on 时，此字段必填，否则此字段不生效。
 */
class WebSocketParameters extends AbstractModel
{
    /**
     * @var string WebSocket 超时时间配置开关，取值有：
<li>on：使用 Timeout 作为 WebSocket 超时时间；</li>
<li>off：平台仍支持 WebSocket 连接，此时使用系统默认的 15 秒为超时时间。</li>
     */
    public $Switch;

    /**
     * @var integer 超时时间，单位为秒，最大超时时间 120 秒。<br>注意：当 Switch 为 on 时，此字段必填，否则此字段不生效。
     */
    public $Timeout;

    /**
     * @param string $Switch WebSocket 超时时间配置开关，取值有：
<li>on：使用 Timeout 作为 WebSocket 超时时间；</li>
<li>off：平台仍支持 WebSocket 连接，此时使用系统默认的 15 秒为超时时间。</li>
     * @param integer $Timeout 超时时间，单位为秒，最大超时时间 120 秒。<br>注意：当 Switch 为 on 时，此字段必填，否则此字段不生效。
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }
    }
}

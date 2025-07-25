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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音频降噪控制信息
 *
 * @method string getSwitch() 获取音频降噪控制开关，可选值：
<li>ON：开启音频降噪；</li>
<li>OFF：关闭音频降噪。</li>
 * @method void setSwitch(string $Switch) 设置音频降噪控制开关，可选值：
<li>ON：开启音频降噪；</li>
<li>OFF：关闭音频降噪。</li>
 * @method string getType() 获取音频降噪类型，仅当音频降噪控制开关为 ON 时有效，可选值：
<li>weak：轻音频降噪；</li>
<li>normal：正常音频降噪；</li>
<li>strong：强音频降噪。</li>
默认值：weak。
 * @method void setType(string $Type) 设置音频降噪类型，仅当音频降噪控制开关为 ON 时有效，可选值：
<li>weak：轻音频降噪；</li>
<li>normal：正常音频降噪；</li>
<li>strong：强音频降噪。</li>
默认值：weak。
 */
class AudioDenoiseInfo extends AbstractModel
{
    /**
     * @var string 音频降噪控制开关，可选值：
<li>ON：开启音频降噪；</li>
<li>OFF：关闭音频降噪。</li>
     */
    public $Switch;

    /**
     * @var string 音频降噪类型，仅当音频降噪控制开关为 ON 时有效，可选值：
<li>weak：轻音频降噪；</li>
<li>normal：正常音频降噪；</li>
<li>strong：强音频降噪。</li>
默认值：weak。
     */
    public $Type;

    /**
     * @param string $Switch 音频降噪控制开关，可选值：
<li>ON：开启音频降噪；</li>
<li>OFF：关闭音频降噪。</li>
     * @param string $Type 音频降噪类型，仅当音频降噪控制开关为 ON 时有效，可选值：
<li>weak：轻音频降噪；</li>
<li>normal：正常音频降噪；</li>
<li>strong：强音频降噪。</li>
默认值：weak。
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}

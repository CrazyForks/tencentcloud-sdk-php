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
 * Hsts配置
 *
 * @method string getSwitch() 获取是否开启，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method void setSwitch(string $Switch) 设置是否开启，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method integer getMaxAge() 获取MaxAge 数值。单位为秒，最大值为1天。
 * @method void setMaxAge(integer $MaxAge) 设置MaxAge 数值。单位为秒，最大值为1天。
 * @method string getIncludeSubDomains() 获取是否包含子域名，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method void setIncludeSubDomains(string $IncludeSubDomains) 设置是否包含子域名，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method string getPreload() 获取是否开启预加载，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method void setPreload(string $Preload) 设置是否开启预加载，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 */
class Hsts extends AbstractModel
{
    /**
     * @var string 是否开启，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     */
    public $Switch;

    /**
     * @var integer MaxAge 数值。单位为秒，最大值为1天。
     */
    public $MaxAge;

    /**
     * @var string 是否包含子域名，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     */
    public $IncludeSubDomains;

    /**
     * @var string 是否开启预加载，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     */
    public $Preload;

    /**
     * @param string $Switch 是否开启，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     * @param integer $MaxAge MaxAge 数值。单位为秒，最大值为1天。
     * @param string $IncludeSubDomains 是否包含子域名，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     * @param string $Preload 是否开启预加载，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
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

        if (array_key_exists("MaxAge",$param) and $param["MaxAge"] !== null) {
            $this->MaxAge = $param["MaxAge"];
        }

        if (array_key_exists("IncludeSubDomains",$param) and $param["IncludeSubDomains"] !== null) {
            $this->IncludeSubDomains = $param["IncludeSubDomains"];
        }

        if (array_key_exists("Preload",$param) and $param["Preload"] !== null) {
            $this->Preload = $param["Preload"];
        }
    }
}

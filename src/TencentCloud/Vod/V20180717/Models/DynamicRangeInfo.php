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
 * 画面动态范围信息。
 *
 * @method string getType() 获取画面动态范围信息。可取值：
<li>SDR：Standard Dynamic Range 标准动态范围；</li>
<li>HDR：High Dynamic Range 高动态范围。</li>
 * @method void setType(string $Type) 设置画面动态范围信息。可取值：
<li>SDR：Standard Dynamic Range 标准动态范围；</li>
<li>HDR：High Dynamic Range 高动态范围。</li>
 * @method string getHDRType() 获取高动态范围类型，当 Type 为 HDR 时有效。目前支持的可取值：
<li>hdr10：表示 hdr10 标准；</li>
<li>hlg：表示 hlg 标准。</li>
 * @method void setHDRType(string $HDRType) 设置高动态范围类型，当 Type 为 HDR 时有效。目前支持的可取值：
<li>hdr10：表示 hdr10 标准；</li>
<li>hlg：表示 hlg 标准。</li>
 */
class DynamicRangeInfo extends AbstractModel
{
    /**
     * @var string 画面动态范围信息。可取值：
<li>SDR：Standard Dynamic Range 标准动态范围；</li>
<li>HDR：High Dynamic Range 高动态范围。</li>
     */
    public $Type;

    /**
     * @var string 高动态范围类型，当 Type 为 HDR 时有效。目前支持的可取值：
<li>hdr10：表示 hdr10 标准；</li>
<li>hlg：表示 hlg 标准。</li>
     */
    public $HDRType;

    /**
     * @param string $Type 画面动态范围信息。可取值：
<li>SDR：Standard Dynamic Range 标准动态范围；</li>
<li>HDR：High Dynamic Range 高动态范围。</li>
     * @param string $HDRType 高动态范围类型，当 Type 为 HDR 时有效。目前支持的可取值：
<li>hdr10：表示 hdr10 标准；</li>
<li>hlg：表示 hlg 标准。</li>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("HDRType",$param) and $param["HDRType"] !== null) {
            $this->HDRType = $param["HDRType"];
        }
    }
}

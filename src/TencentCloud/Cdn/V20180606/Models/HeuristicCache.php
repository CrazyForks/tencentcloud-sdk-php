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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 启发式缓存配置
 *
 * @method string getSwitch() 获取启发式缓存配置开关，取值有：
on：开启
off：关闭（默认）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSwitch(string $Switch) 设置启发式缓存配置开关，取值有：
on：开启
off：关闭（默认）
注意：此字段可能返回 null，表示取不到有效值。
 * @method CacheConfig getCacheConfig() 获取自定义启发式缓存时间配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCacheConfig(CacheConfig $CacheConfig) 设置自定义启发式缓存时间配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class HeuristicCache extends AbstractModel
{
    /**
     * @var string 启发式缓存配置开关，取值有：
on：开启
off：关闭（默认）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Switch;

    /**
     * @var CacheConfig 自定义启发式缓存时间配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CacheConfig;

    /**
     * @param string $Switch 启发式缓存配置开关，取值有：
on：开启
off：关闭（默认）
注意：此字段可能返回 null，表示取不到有效值。
     * @param CacheConfig $CacheConfig 自定义启发式缓存时间配置
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("CacheConfig",$param) and $param["CacheConfig"] !== null) {
            $this->CacheConfig = new CacheConfig();
            $this->CacheConfig->deserialize($param["CacheConfig"]);
        }
    }
}

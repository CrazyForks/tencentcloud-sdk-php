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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 后付费共享带宽包的当前计费用量
 *
 * @method float getBandwidthUsage() 获取当前计费用量，单位为 Mbps
 * @method void setBandwidthUsage(float $BandwidthUsage) 设置当前计费用量，单位为 Mbps
 */
class BandwidthPackageBillBandwidth extends AbstractModel
{
    /**
     * @var float 当前计费用量，单位为 Mbps
     */
    public $BandwidthUsage;

    /**
     * @param float $BandwidthUsage 当前计费用量，单位为 Mbps
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
        if (array_key_exists("BandwidthUsage",$param) and $param["BandwidthUsage"] !== null) {
            $this->BandwidthUsage = $param["BandwidthUsage"];
        }
    }
}

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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyWafThreatenIntelligence请求参数结构体
 *
 * @method WafThreatenIntelligenceDetails getWafThreatenIntelligenceDetails() 获取配置WAF威胁情报封禁模块详情
 * @method void setWafThreatenIntelligenceDetails(WafThreatenIntelligenceDetails $WafThreatenIntelligenceDetails) 设置配置WAF威胁情报封禁模块详情
 */
class ModifyWafThreatenIntelligenceRequest extends AbstractModel
{
    /**
     * @var WafThreatenIntelligenceDetails 配置WAF威胁情报封禁模块详情
     */
    public $WafThreatenIntelligenceDetails;

    /**
     * @param WafThreatenIntelligenceDetails $WafThreatenIntelligenceDetails 配置WAF威胁情报封禁模块详情
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
        if (array_key_exists("WafThreatenIntelligenceDetails",$param) and $param["WafThreatenIntelligenceDetails"] !== null) {
            $this->WafThreatenIntelligenceDetails = new WafThreatenIntelligenceDetails();
            $this->WafThreatenIntelligenceDetails->deserialize($param["WafThreatenIntelligenceDetails"]);
        }
    }
}

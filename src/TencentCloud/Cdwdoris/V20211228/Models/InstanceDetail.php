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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance表detail字段
 *
 * @method boolean getEnableAlarmStrategy() 获取告警策略是否可用	
 * @method void setEnableAlarmStrategy(boolean $EnableAlarmStrategy) 设置告警策略是否可用	
 */
class InstanceDetail extends AbstractModel
{
    /**
     * @var boolean 告警策略是否可用	
     */
    public $EnableAlarmStrategy;

    /**
     * @param boolean $EnableAlarmStrategy 告警策略是否可用	
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
        if (array_key_exists("EnableAlarmStrategy",$param) and $param["EnableAlarmStrategy"] !== null) {
            $this->EnableAlarmStrategy = $param["EnableAlarmStrategy"];
        }
    }
}

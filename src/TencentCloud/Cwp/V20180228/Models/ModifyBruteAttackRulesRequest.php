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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBruteAttackRules请求参数结构体
 *
 * @method array getRules() 获取暴力破解判断规则
 * @method void setRules(array $Rules) 设置暴力破解判断规则
 */
class ModifyBruteAttackRulesRequest extends AbstractModel
{
    /**
     * @var array 暴力破解判断规则
     */
    public $Rules;

    /**
     * @param array $Rules 暴力破解判断规则
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
        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new BruteAttackRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }
    }
}

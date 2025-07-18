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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 健康检测规则
 *
 * @method string getName() 获取健康检测策略名称
 * @method void setName(string $Name) 设置健康检测策略名称
 * @method array getRules() 获取健康检测策略规则列表
 * @method void setRules(array $Rules) 设置健康检测策略规则列表
 */
class HealthCheckPolicy extends AbstractModel
{
    /**
     * @var string 健康检测策略名称
     */
    public $Name;

    /**
     * @var array 健康检测策略规则列表
     */
    public $Rules;

    /**
     * @param string $Name 健康检测策略名称
     * @param array $Rules 健康检测策略规则列表
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new HealthCheckPolicyRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }
    }
}

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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDDoSLevel请求参数结构体
 *
 * @method string getId() 获取资源ID
 * @method void setId(string $Id) 设置资源ID
 * @method string getBusiness() 获取DDoS防护子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版）
 * @method void setBusiness(string $Business) 设置DDoS防护子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版）
 * @method string getMethod() 获取=get表示读取防护等级；=set表示修改防护等级
 * @method void setMethod(string $Method) 设置=get表示读取防护等级；=set表示修改防护等级
 * @method string getDDoSLevel() 获取防护等级，取值[low,middle,high]；当Method=set时必填
 * @method void setDDoSLevel(string $DDoSLevel) 设置防护等级，取值[low,middle,high]；当Method=set时必填
 */
class ModifyDDoSLevelRequest extends AbstractModel
{
    /**
     * @var string 资源ID
     */
    public $Id;

    /**
     * @var string DDoS防护子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版）
     */
    public $Business;

    /**
     * @var string =get表示读取防护等级；=set表示修改防护等级
     */
    public $Method;

    /**
     * @var string 防护等级，取值[low,middle,high]；当Method=set时必填
     */
    public $DDoSLevel;

    /**
     * @param string $Id 资源ID
     * @param string $Business DDoS防护子产品代号（bgpip表示高防IP；bgp表示独享包；bgp-multip表示共享包；net表示高防IP专业版）
     * @param string $Method =get表示读取防护等级；=set表示修改防护等级
     * @param string $DDoSLevel 防护等级，取值[low,middle,high]；当Method=set时必填
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("DDoSLevel",$param) and $param["DDoSLevel"] !== null) {
            $this->DDoSLevel = $param["DDoSLevel"];
        }
    }
}

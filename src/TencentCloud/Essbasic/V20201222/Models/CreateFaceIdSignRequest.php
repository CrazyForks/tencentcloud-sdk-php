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
namespace TencentCloud\Essbasic\V20201222\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateFaceIdSign请求参数结构体
 *
 * @method Caller getCaller() 获取调用方信息; 必选
 * @method void setCaller(Caller $Caller) 设置调用方信息; 必选
 * @method array getValues() 获取除api_ticket之外的其它要参与签名的参数值,包括UserId
 * @method void setValues(array $Values) 设置除api_ticket之外的其它要参与签名的参数值,包括UserId
 */
class CreateFaceIdSignRequest extends AbstractModel
{
    /**
     * @var Caller 调用方信息; 必选
     */
    public $Caller;

    /**
     * @var array 除api_ticket之外的其它要参与签名的参数值,包括UserId
     */
    public $Values;

    /**
     * @param Caller $Caller 调用方信息; 必选
     * @param array $Values 除api_ticket之外的其它要参与签名的参数值,包括UserId
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
        if (array_key_exists("Caller",$param) and $param["Caller"] !== null) {
            $this->Caller = new Caller();
            $this->Caller->deserialize($param["Caller"]);
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}

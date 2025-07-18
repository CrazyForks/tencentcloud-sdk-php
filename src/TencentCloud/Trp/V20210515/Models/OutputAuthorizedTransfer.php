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
namespace TencentCloud\Trp\V20210515\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 业务出参
 *
 * @method integer getCode() 获取推送状态，0表示成功。
 * @method void setCode(integer $Code) 设置推送状态，0表示成功。
 * @method string getMessage() 获取错误码。
 * @method void setMessage(string $Message) 设置错误码。
 * @method string getValue() 获取错误信息描述。
 * @method void setValue(string $Value) 设置错误信息描述。
 */
class OutputAuthorizedTransfer extends AbstractModel
{
    /**
     * @var integer 推送状态，0表示成功。
     */
    public $Code;

    /**
     * @var string 错误码。
     */
    public $Message;

    /**
     * @var string 错误信息描述。
     */
    public $Value;

    /**
     * @param integer $Code 推送状态，0表示成功。
     * @param string $Message 错误码。
     * @param string $Value 错误信息描述。
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}

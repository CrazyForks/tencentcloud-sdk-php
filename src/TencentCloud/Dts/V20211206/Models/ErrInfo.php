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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 错误信息及其解决方案
 *
 * @method string getReason() 获取错误原因
 * @method void setReason(string $Reason) 设置错误原因
 * @method string getMessage() 获取错误信息
 * @method void setMessage(string $Message) 设置错误信息
 * @method string getSolution() 获取解决方案
 * @method void setSolution(string $Solution) 设置解决方案
 */
class ErrInfo extends AbstractModel
{
    /**
     * @var string 错误原因
     */
    public $Reason;

    /**
     * @var string 错误信息
     */
    public $Message;

    /**
     * @var string 解决方案
     */
    public $Solution;

    /**
     * @param string $Reason 错误原因
     * @param string $Message 错误信息
     * @param string $Solution 解决方案
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
        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Solution",$param) and $param["Solution"] !== null) {
            $this->Solution = $param["Solution"];
        }
    }
}

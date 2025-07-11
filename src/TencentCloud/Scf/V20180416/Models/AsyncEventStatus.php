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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 异步事件状态
 *
 * @method string getStatus() 获取异步事件状态，RUNNING 表示运行中, FINISHED 表示调用成功, ABORTED 表示调用终止, FAILED 表示调用失败。
 * @method void setStatus(string $Status) 设置异步事件状态，RUNNING 表示运行中, FINISHED 表示调用成功, ABORTED 表示调用终止, FAILED 表示调用失败。
 * @method integer getStatusCode() 获取请求状态码
 * @method void setStatusCode(integer $StatusCode) 设置请求状态码
 * @method string getInvokeRequestId() 获取异步执行请求 Id
 * @method void setInvokeRequestId(string $InvokeRequestId) 设置异步执行请求 Id
 */
class AsyncEventStatus extends AbstractModel
{
    /**
     * @var string 异步事件状态，RUNNING 表示运行中, FINISHED 表示调用成功, ABORTED 表示调用终止, FAILED 表示调用失败。
     */
    public $Status;

    /**
     * @var integer 请求状态码
     */
    public $StatusCode;

    /**
     * @var string 异步执行请求 Id
     */
    public $InvokeRequestId;

    /**
     * @param string $Status 异步事件状态，RUNNING 表示运行中, FINISHED 表示调用成功, ABORTED 表示调用终止, FAILED 表示调用失败。
     * @param integer $StatusCode 请求状态码
     * @param string $InvokeRequestId 异步执行请求 Id
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("InvokeRequestId",$param) and $param["InvokeRequestId"] !== null) {
            $this->InvokeRequestId = $param["InvokeRequestId"];
        }
    }
}

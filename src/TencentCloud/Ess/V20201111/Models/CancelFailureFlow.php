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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 撤销失败的流程信息
 *
 * @method string getFlowId() 获取合同流程ID，为32位字符串。
 * @method void setFlowId(string $FlowId) 设置合同流程ID，为32位字符串。
 * @method string getReason() 获取撤销失败原因
 * @method void setReason(string $Reason) 设置撤销失败原因
 */
class CancelFailureFlow extends AbstractModel
{
    /**
     * @var string 合同流程ID，为32位字符串。
     */
    public $FlowId;

    /**
     * @var string 撤销失败原因
     */
    public $Reason;

    /**
     * @param string $FlowId 合同流程ID，为32位字符串。
     * @param string $Reason 撤销失败原因
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
        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}

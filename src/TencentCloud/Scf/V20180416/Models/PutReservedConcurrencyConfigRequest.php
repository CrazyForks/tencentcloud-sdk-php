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
 * PutReservedConcurrencyConfig请求参数结构体
 *
 * @method string getFunctionName() 获取需要设置最大独占配额的函数的名称
 * @method void setFunctionName(string $FunctionName) 设置需要设置最大独占配额的函数的名称
 * @method integer getReservedConcurrencyMem() 获取函数最大独占配额，注：函数的最大独占配额内存总和上限：用户总并发内存配额 - 12800
 * @method void setReservedConcurrencyMem(integer $ReservedConcurrencyMem) 设置函数最大独占配额，注：函数的最大独占配额内存总和上限：用户总并发内存配额 - 12800
 * @method string getNamespace() 获取函数所属命名空间，默认为default
 * @method void setNamespace(string $Namespace) 设置函数所属命名空间，默认为default
 */
class PutReservedConcurrencyConfigRequest extends AbstractModel
{
    /**
     * @var string 需要设置最大独占配额的函数的名称
     */
    public $FunctionName;

    /**
     * @var integer 函数最大独占配额，注：函数的最大独占配额内存总和上限：用户总并发内存配额 - 12800
     */
    public $ReservedConcurrencyMem;

    /**
     * @var string 函数所属命名空间，默认为default
     */
    public $Namespace;

    /**
     * @param string $FunctionName 需要设置最大独占配额的函数的名称
     * @param integer $ReservedConcurrencyMem 函数最大独占配额，注：函数的最大独占配额内存总和上限：用户总并发内存配额 - 12800
     * @param string $Namespace 函数所属命名空间，默认为default
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
        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("ReservedConcurrencyMem",$param) and $param["ReservedConcurrencyMem"] !== null) {
            $this->ReservedConcurrencyMem = $param["ReservedConcurrencyMem"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }
    }
}

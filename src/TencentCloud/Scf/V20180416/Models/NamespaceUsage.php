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
 * 名称空间已使用信息
 *
 * @method array getFunctions() 获取函数数组
 * @method void setFunctions(array $Functions) 设置函数数组
 * @method string getNamespace() 获取命名空间名称
 * @method void setNamespace(string $Namespace) 设置命名空间名称
 * @method integer getFunctionsCount() 获取命名空间函数个数
 * @method void setFunctionsCount(integer $FunctionsCount) 设置命名空间函数个数
 * @method integer getTotalConcurrencyMem() 获取命名空间配额总量
 * @method void setTotalConcurrencyMem(integer $TotalConcurrencyMem) 设置命名空间配额总量
 * @method integer getTotalAllocatedConcurrencyMem() 获取命名空间并发使用量
 * @method void setTotalAllocatedConcurrencyMem(integer $TotalAllocatedConcurrencyMem) 设置命名空间并发使用量
 * @method integer getTotalAllocatedProvisionedMem() 获取命名空间预置使用量
 * @method void setTotalAllocatedProvisionedMem(integer $TotalAllocatedProvisionedMem) 设置命名空间预置使用量
 */
class NamespaceUsage extends AbstractModel
{
    /**
     * @var array 函数数组
     */
    public $Functions;

    /**
     * @var string 命名空间名称
     */
    public $Namespace;

    /**
     * @var integer 命名空间函数个数
     */
    public $FunctionsCount;

    /**
     * @var integer 命名空间配额总量
     */
    public $TotalConcurrencyMem;

    /**
     * @var integer 命名空间并发使用量
     */
    public $TotalAllocatedConcurrencyMem;

    /**
     * @var integer 命名空间预置使用量
     */
    public $TotalAllocatedProvisionedMem;

    /**
     * @param array $Functions 函数数组
     * @param string $Namespace 命名空间名称
     * @param integer $FunctionsCount 命名空间函数个数
     * @param integer $TotalConcurrencyMem 命名空间配额总量
     * @param integer $TotalAllocatedConcurrencyMem 命名空间并发使用量
     * @param integer $TotalAllocatedProvisionedMem 命名空间预置使用量
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
        if (array_key_exists("Functions",$param) and $param["Functions"] !== null) {
            $this->Functions = $param["Functions"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("FunctionsCount",$param) and $param["FunctionsCount"] !== null) {
            $this->FunctionsCount = $param["FunctionsCount"];
        }

        if (array_key_exists("TotalConcurrencyMem",$param) and $param["TotalConcurrencyMem"] !== null) {
            $this->TotalConcurrencyMem = $param["TotalConcurrencyMem"];
        }

        if (array_key_exists("TotalAllocatedConcurrencyMem",$param) and $param["TotalAllocatedConcurrencyMem"] !== null) {
            $this->TotalAllocatedConcurrencyMem = $param["TotalAllocatedConcurrencyMem"];
        }

        if (array_key_exists("TotalAllocatedProvisionedMem",$param) and $param["TotalAllocatedProvisionedMem"] !== null) {
            $this->TotalAllocatedProvisionedMem = $param["TotalAllocatedProvisionedMem"];
        }
    }
}

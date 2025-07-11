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
 * GetFunctionEventInvokeConfig请求参数结构体
 *
 * @method string getFunctionName() 获取函数名称
 * @method void setFunctionName(string $FunctionName) 设置函数名称
 * @method string getNamespace() 获取函数所属命名空间，默认为default
 * @method void setNamespace(string $Namespace) 设置函数所属命名空间，默认为default
 * @method string getQualifier() 获取函数版本，默认为$LATEST
 * @method void setQualifier(string $Qualifier) 设置函数版本，默认为$LATEST
 */
class GetFunctionEventInvokeConfigRequest extends AbstractModel
{
    /**
     * @var string 函数名称
     */
    public $FunctionName;

    /**
     * @var string 函数所属命名空间，默认为default
     */
    public $Namespace;

    /**
     * @var string 函数版本，默认为$LATEST
     */
    public $Qualifier;

    /**
     * @param string $FunctionName 函数名称
     * @param string $Namespace 函数所属命名空间，默认为default
     * @param string $Qualifier 函数版本，默认为$LATEST
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

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Qualifier",$param) and $param["Qualifier"] !== null) {
            $this->Qualifier = $param["Qualifier"];
        }
    }
}

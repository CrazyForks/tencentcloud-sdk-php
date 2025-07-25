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
 * DeleteFunction请求参数结构体
 *
 * @method string getFunctionName() 获取要删除的函数名称
 * @method void setFunctionName(string $FunctionName) 设置要删除的函数名称
 * @method string getNamespace() 获取函数所属命名空间
 * @method void setNamespace(string $Namespace) 设置函数所属命名空间
 * @method string getQualifier() 获取填写需要删除的版本号，不填默认删除函数下全部版本。
 * @method void setQualifier(string $Qualifier) 设置填写需要删除的版本号，不填默认删除函数下全部版本。
 */
class DeleteFunctionRequest extends AbstractModel
{
    /**
     * @var string 要删除的函数名称
     */
    public $FunctionName;

    /**
     * @var string 函数所属命名空间
     */
    public $Namespace;

    /**
     * @var string 填写需要删除的版本号，不填默认删除函数下全部版本。
     */
    public $Qualifier;

    /**
     * @param string $FunctionName 要删除的函数名称
     * @param string $Namespace 函数所属命名空间
     * @param string $Qualifier 填写需要删除的版本号，不填默认删除函数下全部版本。
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

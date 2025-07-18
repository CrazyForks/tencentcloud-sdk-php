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
 * GetFunction请求参数结构体
 *
 * @method string getFunctionName() 获取需要获取详情的函数名称，ResourceId和FunctionName只能传一个
 * @method void setFunctionName(string $FunctionName) 设置需要获取详情的函数名称，ResourceId和FunctionName只能传一个
 * @method string getQualifier() 获取函数的版本号
默认值: $LATEST
 * @method void setQualifier(string $Qualifier) 设置函数的版本号
默认值: $LATEST
 * @method string getNamespace() 获取函数所属命名空间
默认值: default
 * @method void setNamespace(string $Namespace) 设置函数所属命名空间
默认值: default
 * @method string getShowCode() 获取是否显示代码, TRUE表示显示代码，FALSE表示不显示代码,大于1M的入口文件不会显示
 * @method void setShowCode(string $ShowCode) 设置是否显示代码, TRUE表示显示代码，FALSE表示不显示代码,大于1M的入口文件不会显示
 */
class GetFunctionRequest extends AbstractModel
{
    /**
     * @var string 需要获取详情的函数名称，ResourceId和FunctionName只能传一个
     */
    public $FunctionName;

    /**
     * @var string 函数的版本号
默认值: $LATEST
     */
    public $Qualifier;

    /**
     * @var string 函数所属命名空间
默认值: default
     */
    public $Namespace;

    /**
     * @var string 是否显示代码, TRUE表示显示代码，FALSE表示不显示代码,大于1M的入口文件不会显示
     */
    public $ShowCode;

    /**
     * @param string $FunctionName 需要获取详情的函数名称，ResourceId和FunctionName只能传一个
     * @param string $Qualifier 函数的版本号
默认值: $LATEST
     * @param string $Namespace 函数所属命名空间
默认值: default
     * @param string $ShowCode 是否显示代码, TRUE表示显示代码，FALSE表示不显示代码,大于1M的入口文件不会显示
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

        if (array_key_exists("Qualifier",$param) and $param["Qualifier"] !== null) {
            $this->Qualifier = $param["Qualifier"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("ShowCode",$param) and $param["ShowCode"] !== null) {
            $this->ShowCode = $param["ShowCode"];
        }
    }
}

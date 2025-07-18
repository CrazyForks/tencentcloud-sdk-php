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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyStudioProduct请求参数结构体
 *
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getProductName() 获取产品名称
 * @method void setProductName(string $ProductName) 设置产品名称
 * @method string getProductDesc() 获取产品描述
 * @method void setProductDesc(string $ProductDesc) 设置产品描述
 * @method integer getModuleId() 获取模型ID
 * @method void setModuleId(integer $ModuleId) 设置模型ID
 * @method string getEnableProductScript() 获取是否打开二进制转Json功能, 取值为字符串 true/false
 * @method void setEnableProductScript(string $EnableProductScript) 设置是否打开二进制转Json功能, 取值为字符串 true/false
 * @method integer getBindStrategy() 获取传1或者2；1代表强踢，2代表非强踢。传其它值不做任何处理
 * @method void setBindStrategy(integer $BindStrategy) 设置传1或者2；1代表强踢，2代表非强踢。传其它值不做任何处理
 */
class ModifyStudioProductRequest extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 产品名称
     */
    public $ProductName;

    /**
     * @var string 产品描述
     */
    public $ProductDesc;

    /**
     * @var integer 模型ID
     */
    public $ModuleId;

    /**
     * @var string 是否打开二进制转Json功能, 取值为字符串 true/false
     */
    public $EnableProductScript;

    /**
     * @var integer 传1或者2；1代表强踢，2代表非强踢。传其它值不做任何处理
     */
    public $BindStrategy;

    /**
     * @param string $ProductId 产品ID
     * @param string $ProductName 产品名称
     * @param string $ProductDesc 产品描述
     * @param integer $ModuleId 模型ID
     * @param string $EnableProductScript 是否打开二进制转Json功能, 取值为字符串 true/false
     * @param integer $BindStrategy 传1或者2；1代表强踢，2代表非强踢。传其它值不做任何处理
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("ProductDesc",$param) and $param["ProductDesc"] !== null) {
            $this->ProductDesc = $param["ProductDesc"];
        }

        if (array_key_exists("ModuleId",$param) and $param["ModuleId"] !== null) {
            $this->ModuleId = $param["ModuleId"];
        }

        if (array_key_exists("EnableProductScript",$param) and $param["EnableProductScript"] !== null) {
            $this->EnableProductScript = $param["EnableProductScript"];
        }

        if (array_key_exists("BindStrategy",$param) and $param["BindStrategy"] !== null) {
            $this->BindStrategy = $param["BindStrategy"];
        }
    }
}

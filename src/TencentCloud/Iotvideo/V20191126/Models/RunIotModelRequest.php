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
namespace TencentCloud\Iotvideo\V20191126\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RunIotModel请求参数结构体
 *
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getIotModel() 获取物模型定义，json格式的字符串
 * @method void setIotModel(string $IotModel) 设置物模型定义，json格式的字符串
 */
class RunIotModelRequest extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 物模型定义，json格式的字符串
     */
    public $IotModel;

    /**
     * @param string $ProductId 产品ID
     * @param string $IotModel 物模型定义，json格式的字符串
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

        if (array_key_exists("IotModel",$param) and $param["IotModel"] !== null) {
            $this->IotModel = $param["IotModel"];
        }
    }
}

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
namespace TencentCloud\Ape\V20200513\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchDescribeOrderCertificate请求参数结构体
 *
 * @method array getOrderIds() 获取要下载授权书的订单id
 * @method void setOrderIds(array $OrderIds) 设置要下载授权书的订单id
 */
class BatchDescribeOrderCertificateRequest extends AbstractModel
{
    /**
     * @var array 要下载授权书的订单id
     */
    public $OrderIds;

    /**
     * @param array $OrderIds 要下载授权书的订单id
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
        if (array_key_exists("OrderIds",$param) and $param["OrderIds"] !== null) {
            $this->OrderIds = $param["OrderIds"];
        }
    }
}

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
 * TransferTWeCallDevice请求参数结构体
 *
 * @method string getTransferInDevice() 获取sn信息，product_deviceName
 * @method void setTransferInDevice(string $TransferInDevice) 设置sn信息，product_deviceName
 * @method string getTransferOutDevice() 获取sn信息，product_deviceName
 * @method void setTransferOutDevice(string $TransferOutDevice) 设置sn信息，product_deviceName
 */
class TransferTWeCallDeviceRequest extends AbstractModel
{
    /**
     * @var string sn信息，product_deviceName
     */
    public $TransferInDevice;

    /**
     * @var string sn信息，product_deviceName
     */
    public $TransferOutDevice;

    /**
     * @param string $TransferInDevice sn信息，product_deviceName
     * @param string $TransferOutDevice sn信息，product_deviceName
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
        if (array_key_exists("TransferInDevice",$param) and $param["TransferInDevice"] !== null) {
            $this->TransferInDevice = $param["TransferInDevice"];
        }

        if (array_key_exists("TransferOutDevice",$param) and $param["TransferOutDevice"] !== null) {
            $this->TransferOutDevice = $param["TransferOutDevice"];
        }
    }
}

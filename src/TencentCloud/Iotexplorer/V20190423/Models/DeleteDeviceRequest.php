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
 * DeleteDevice请求参数结构体
 *
 * @method string getProductId() 获取产品ID。
 * @method void setProductId(string $ProductId) 设置产品ID。
 * @method string getDeviceName() 获取设备名称。
 * @method void setDeviceName(string $DeviceName) 设置设备名称。
 * @method boolean getForceDelete() 获取是否删除绑定设备
 * @method void setForceDelete(boolean $ForceDelete) 设置是否删除绑定设备
 */
class DeleteDeviceRequest extends AbstractModel
{
    /**
     * @var string 产品ID。
     */
    public $ProductId;

    /**
     * @var string 设备名称。
     */
    public $DeviceName;

    /**
     * @var boolean 是否删除绑定设备
     */
    public $ForceDelete;

    /**
     * @param string $ProductId 产品ID。
     * @param string $DeviceName 设备名称。
     * @param boolean $ForceDelete 是否删除绑定设备
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

        if (array_key_exists("DeviceName",$param) and $param["DeviceName"] !== null) {
            $this->DeviceName = $param["DeviceName"];
        }

        if (array_key_exists("ForceDelete",$param) and $param["ForceDelete"] !== null) {
            $this->ForceDelete = $param["ForceDelete"];
        }
    }
}

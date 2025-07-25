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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserDevice请求参数结构体
 *
 * @method string getDeviceId() 获取设备ID（从获取设备列表接口ListDevices中获取）
 * @method void setDeviceId(string $DeviceId) 设置设备ID（从获取设备列表接口ListDevices中获取）
 */
class DescribeUserDeviceRequest extends AbstractModel
{
    /**
     * @var string 设备ID（从获取设备列表接口ListDevices中获取）
     */
    public $DeviceId;

    /**
     * @param string $DeviceId 设备ID（从获取设备列表接口ListDevices中获取）
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
        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }
    }
}

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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AttachNetworkInterface请求参数结构体
 *
 * @method string getNetworkInterfaceId() 获取弹性网卡实例ID，例如：eni-m6dyj72l。
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) 设置弹性网卡实例ID，例如：eni-m6dyj72l。
 * @method string getInstanceId() 获取实例ID。形如：ein-r8hr2upy。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。形如：ein-r8hr2upy。
 * @method string getEcmRegion() 获取ECM 地域，形如ap-xian-ecm。
 * @method void setEcmRegion(string $EcmRegion) 设置ECM 地域，形如ap-xian-ecm。
 */
class AttachNetworkInterfaceRequest extends AbstractModel
{
    /**
     * @var string 弹性网卡实例ID，例如：eni-m6dyj72l。
     */
    public $NetworkInterfaceId;

    /**
     * @var string 实例ID。形如：ein-r8hr2upy。
     */
    public $InstanceId;

    /**
     * @var string ECM 地域，形如ap-xian-ecm。
     */
    public $EcmRegion;

    /**
     * @param string $NetworkInterfaceId 弹性网卡实例ID，例如：eni-m6dyj72l。
     * @param string $InstanceId 实例ID。形如：ein-r8hr2upy。
     * @param string $EcmRegion ECM 地域，形如ap-xian-ecm。
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
        if (array_key_exists("NetworkInterfaceId",$param) and $param["NetworkInterfaceId"] !== null) {
            $this->NetworkInterfaceId = $param["NetworkInterfaceId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("EcmRegion",$param) and $param["EcmRegion"] !== null) {
            $this->EcmRegion = $param["EcmRegion"];
        }
    }
}

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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CVM和IP信息
 *
 * @method string getCkafkaInstanceId() 获取ckafka集群实例Id
 * @method void setCkafkaInstanceId(string $CkafkaInstanceId) 设置ckafka集群实例Id
 * @method string getInstanceId() 获取CVM实例ID
 * @method void setInstanceId(string $InstanceId) 设置CVM实例ID
 * @method string getIp() 获取IP地址
 * @method void setIp(string $Ip) 设置IP地址
 */
class CvmAndIpInfo extends AbstractModel
{
    /**
     * @var string ckafka集群实例Id
     */
    public $CkafkaInstanceId;

    /**
     * @var string CVM实例ID
     */
    public $InstanceId;

    /**
     * @var string IP地址
     */
    public $Ip;

    /**
     * @param string $CkafkaInstanceId ckafka集群实例Id
     * @param string $InstanceId CVM实例ID
     * @param string $Ip IP地址
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
        if (array_key_exists("CkafkaInstanceId",$param) and $param["CkafkaInstanceId"] !== null) {
            $this->CkafkaInstanceId = $param["CkafkaInstanceId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }
    }
}

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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 消息日志
 *
 * @method string getMsgId() 获取消息ID。
 * @method void setMsgId(string $MsgId) 设置消息ID。
 * @method string getProducerName() 获取生产者名称。
 * @method void setProducerName(string $ProducerName) 设置生产者名称。
 * @method string getProduceTime() 获取生产时间。
 * @method void setProduceTime(string $ProduceTime) 设置生产时间。
 * @method string getProducerAddr() 获取生产客户端地址。
 * @method void setProducerAddr(string $ProducerAddr) 设置生产客户端地址。
 */
class MsgLog extends AbstractModel
{
    /**
     * @var string 消息ID。
     */
    public $MsgId;

    /**
     * @var string 生产者名称。
     */
    public $ProducerName;

    /**
     * @var string 生产时间。
     */
    public $ProduceTime;

    /**
     * @var string 生产客户端地址。
     */
    public $ProducerAddr;

    /**
     * @param string $MsgId 消息ID。
     * @param string $ProducerName 生产者名称。
     * @param string $ProduceTime 生产时间。
     * @param string $ProducerAddr 生产客户端地址。
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
        if (array_key_exists("MsgId",$param) and $param["MsgId"] !== null) {
            $this->MsgId = $param["MsgId"];
        }

        if (array_key_exists("ProducerName",$param) and $param["ProducerName"] !== null) {
            $this->ProducerName = $param["ProducerName"];
        }

        if (array_key_exists("ProduceTime",$param) and $param["ProduceTime"] !== null) {
            $this->ProduceTime = $param["ProduceTime"];
        }

        if (array_key_exists("ProducerAddr",$param) and $param["ProducerAddr"] !== null) {
            $this->ProducerAddr = $param["ProducerAddr"];
        }
    }
}

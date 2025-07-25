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
 * 消费者组消费速度排行
 *
 * @method string getConsumerGroupName() 获取消费者组名称
 * @method void setConsumerGroupName(string $ConsumerGroupName) 设置消费者组名称
 * @method integer getSpeed() 获取消费速度 Count/Minute
 * @method void setSpeed(integer $Speed) 设置消费速度 Count/Minute
 */
class ConsumerGroupSpeed extends AbstractModel
{
    /**
     * @var string 消费者组名称
     */
    public $ConsumerGroupName;

    /**
     * @var integer 消费速度 Count/Minute
     */
    public $Speed;

    /**
     * @param string $ConsumerGroupName 消费者组名称
     * @param integer $Speed 消费速度 Count/Minute
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
        if (array_key_exists("ConsumerGroupName",$param) and $param["ConsumerGroupName"] !== null) {
            $this->ConsumerGroupName = $param["ConsumerGroupName"];
        }

        if (array_key_exists("Speed",$param) and $param["Speed"] !== null) {
            $this->Speed = $param["Speed"];
        }
    }
}

<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMessage请求参数结构体
 *
 * @method string getInstanceId() 获取集群ID
 * @method void setInstanceId(string $InstanceId) 设置集群ID
 * @method string getTopic() 获取主题名称
 * @method void setTopic(string $Topic) 设置主题名称
 * @method string getMsgId() 获取消息ID
 * @method void setMsgId(string $MsgId) 设置消息ID
 * @method integer getOffset() 获取查询起始位置
 * @method void setOffset(integer $Offset) 设置查询起始位置
 * @method integer getLimit() 获取查询结果限制数量
 * @method void setLimit(integer $Limit) 设置查询结果限制数量
 * @method boolean getQueryDeadLetterMessage() 获取是否是死信消息
 * @method void setQueryDeadLetterMessage(boolean $QueryDeadLetterMessage) 设置是否是死信消息
 * @method boolean getQueryDelayMessage() 获取是否是延时消息
 * @method void setQueryDelayMessage(boolean $QueryDelayMessage) 设置是否是延时消息
 */
class DescribeMessageRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $InstanceId;

    /**
     * @var string 主题名称
     */
    public $Topic;

    /**
     * @var string 消息ID
     */
    public $MsgId;

    /**
     * @var integer 查询起始位置
     */
    public $Offset;

    /**
     * @var integer 查询结果限制数量
     */
    public $Limit;

    /**
     * @var boolean 是否是死信消息
     */
    public $QueryDeadLetterMessage;

    /**
     * @var boolean 是否是延时消息
     */
    public $QueryDelayMessage;

    /**
     * @param string $InstanceId 集群ID
     * @param string $Topic 主题名称
     * @param string $MsgId 消息ID
     * @param integer $Offset 查询起始位置
     * @param integer $Limit 查询结果限制数量
     * @param boolean $QueryDeadLetterMessage 是否是死信消息
     * @param boolean $QueryDelayMessage 是否是延时消息
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("MsgId",$param) and $param["MsgId"] !== null) {
            $this->MsgId = $param["MsgId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("QueryDeadLetterMessage",$param) and $param["QueryDeadLetterMessage"] !== null) {
            $this->QueryDeadLetterMessage = $param["QueryDeadLetterMessage"];
        }

        if (array_key_exists("QueryDelayMessage",$param) and $param["QueryDelayMessage"] !== null) {
            $this->QueryDelayMessage = $param["QueryDelayMessage"];
        }
    }
}

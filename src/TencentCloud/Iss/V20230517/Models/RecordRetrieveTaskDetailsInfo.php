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
 * 录像取回任务详情基础信息
 *
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method integer getStartTime() 获取取回录像的开始时间 
 * @method void setStartTime(integer $StartTime) 设置取回录像的开始时间 
 * @method integer getEndTime() 获取取回录像的结束时间
 * @method void setEndTime(integer $EndTime) 设置取回录像的结束时间
 * @method integer getMode() 获取取回模式，1:极速模式，其他暂不支持
 * @method void setMode(integer $Mode) 设置取回模式，1:极速模式，其他暂不支持
 * @method integer getExpiration() 获取副本有效期
 * @method void setExpiration(integer $Expiration) 设置副本有效期
 * @method integer getStatus() 获取任务状态， 0:已取回，1:取回中，2:待取回
 * @method void setStatus(integer $Status) 设置任务状态， 0:已取回，1:取回中，2:待取回
 * @method integer getCapacity() 获取取回容量，单位MB
 * @method void setCapacity(integer $Capacity) 设置取回容量，单位MB
 * @method string getDescribe() 获取任务描述
 * @method void setDescribe(string $Describe) 设置任务描述
 * @method integer getChannelCount() 获取任务通道数量
 * @method void setChannelCount(integer $ChannelCount) 设置任务通道数量
 */
class RecordRetrieveTaskDetailsInfo extends AbstractModel
{
    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var integer 取回录像的开始时间 
     */
    public $StartTime;

    /**
     * @var integer 取回录像的结束时间
     */
    public $EndTime;

    /**
     * @var integer 取回模式，1:极速模式，其他暂不支持
     */
    public $Mode;

    /**
     * @var integer 副本有效期
     */
    public $Expiration;

    /**
     * @var integer 任务状态， 0:已取回，1:取回中，2:待取回
     */
    public $Status;

    /**
     * @var integer 取回容量，单位MB
     */
    public $Capacity;

    /**
     * @var string 任务描述
     */
    public $Describe;

    /**
     * @var integer 任务通道数量
     */
    public $ChannelCount;

    /**
     * @param string $TaskId 任务ID
     * @param string $TaskName 任务名称
     * @param integer $StartTime 取回录像的开始时间 
     * @param integer $EndTime 取回录像的结束时间
     * @param integer $Mode 取回模式，1:极速模式，其他暂不支持
     * @param integer $Expiration 副本有效期
     * @param integer $Status 任务状态， 0:已取回，1:取回中，2:待取回
     * @param integer $Capacity 取回容量，单位MB
     * @param string $Describe 任务描述
     * @param integer $ChannelCount 任务通道数量
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Expiration",$param) and $param["Expiration"] !== null) {
            $this->Expiration = $param["Expiration"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Capacity",$param) and $param["Capacity"] !== null) {
            $this->Capacity = $param["Capacity"];
        }

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
        }

        if (array_key_exists("ChannelCount",$param) and $param["ChannelCount"] !== null) {
            $this->ChannelCount = $param["ChannelCount"];
        }
    }
}

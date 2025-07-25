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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClientException请求参数结构体
 *
 * @method integer getExceptionType() 获取客户端异常类型 1:客户端离线，2:客户端卸载
 * @method void setExceptionType(integer $ExceptionType) 设置客户端异常类型 1:客户端离线，2:客户端卸载
 * @method integer getOffset() 获取分页的偏移量
 * @method void setOffset(integer $Offset) 设置分页的偏移量
 * @method integer getLimit() 获取分页单页限制数目，不为0，最大值100
 * @method void setLimit(integer $Limit) 设置分页单页限制数目，不为0，最大值100
 * @method string getStartTime() 获取起始时间 `2006-01-02 15:04:05` 格式
 * @method void setStartTime(string $StartTime) 设置起始时间 `2006-01-02 15:04:05` 格式
 * @method string getEndTime() 获取结束时间 `2006-01-02 15:04:05` 格式
 * @method void setEndTime(string $EndTime) 设置结束时间 `2006-01-02 15:04:05` 格式
 */
class DescribeClientExceptionRequest extends AbstractModel
{
    /**
     * @var integer 客户端异常类型 1:客户端离线，2:客户端卸载
     */
    public $ExceptionType;

    /**
     * @var integer 分页的偏移量
     */
    public $Offset;

    /**
     * @var integer 分页单页限制数目，不为0，最大值100
     */
    public $Limit;

    /**
     * @var string 起始时间 `2006-01-02 15:04:05` 格式
     */
    public $StartTime;

    /**
     * @var string 结束时间 `2006-01-02 15:04:05` 格式
     */
    public $EndTime;

    /**
     * @param integer $ExceptionType 客户端异常类型 1:客户端离线，2:客户端卸载
     * @param integer $Offset 分页的偏移量
     * @param integer $Limit 分页单页限制数目，不为0，最大值100
     * @param string $StartTime 起始时间 `2006-01-02 15:04:05` 格式
     * @param string $EndTime 结束时间 `2006-01-02 15:04:05` 格式
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
        if (array_key_exists("ExceptionType",$param) and $param["ExceptionType"] !== null) {
            $this->ExceptionType = $param["ExceptionType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}

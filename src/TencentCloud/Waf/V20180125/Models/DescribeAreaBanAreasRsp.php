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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAreaBanAreas接口的回包
 *
 * @method string getStatus() 获取状态 "0"：未开启地域封禁 "1"：开启地域封禁
 * @method void setStatus(string $Status) 设置状态 "0"：未开启地域封禁 "1"：开启地域封禁
 * @method string getSource() 获取数据来源 custom-自定义(默认)、batch-批量防护
 * @method void setSource(string $Source) 设置数据来源 custom-自定义(默认)、batch-批量防护
 * @method array getAreas() 获取字符串数据，配置的地域列表
 * @method void setAreas(array $Areas) 设置字符串数据，配置的地域列表
 * @method string getJobType() 获取定时任务类型
 * @method void setJobType(string $JobType) 设置定时任务类型
 * @method JobDateTime getJobDateTime() 获取定时任务详细配置
 * @method void setJobDateTime(JobDateTime $JobDateTime) 设置定时任务详细配置
 * @method string getCronType() 获取周期任务配置
 * @method void setCronType(string $CronType) 设置周期任务配置
 */
class DescribeAreaBanAreasRsp extends AbstractModel
{
    /**
     * @var string 状态 "0"：未开启地域封禁 "1"：开启地域封禁
     */
    public $Status;

    /**
     * @var string 数据来源 custom-自定义(默认)、batch-批量防护
     */
    public $Source;

    /**
     * @var array 字符串数据，配置的地域列表
     */
    public $Areas;

    /**
     * @var string 定时任务类型
     */
    public $JobType;

    /**
     * @var JobDateTime 定时任务详细配置
     */
    public $JobDateTime;

    /**
     * @var string 周期任务配置
     */
    public $CronType;

    /**
     * @param string $Status 状态 "0"：未开启地域封禁 "1"：开启地域封禁
     * @param string $Source 数据来源 custom-自定义(默认)、batch-批量防护
     * @param array $Areas 字符串数据，配置的地域列表
     * @param string $JobType 定时任务类型
     * @param JobDateTime $JobDateTime 定时任务详细配置
     * @param string $CronType 周期任务配置
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Areas",$param) and $param["Areas"] !== null) {
            $this->Areas = $param["Areas"];
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }

        if (array_key_exists("JobDateTime",$param) and $param["JobDateTime"] !== null) {
            $this->JobDateTime = new JobDateTime();
            $this->JobDateTime->deserialize($param["JobDateTime"]);
        }

        if (array_key_exists("CronType",$param) and $param["CronType"] !== null) {
            $this->CronType = $param["CronType"];
        }
    }
}

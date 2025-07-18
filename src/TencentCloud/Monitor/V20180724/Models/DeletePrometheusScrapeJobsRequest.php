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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeletePrometheusScrapeJobs请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID
 * @method void setInstanceId(string $InstanceId) 设置实例 ID
 * @method string getAgentId() 获取Agent ID(可通过 DescribePrometheusAgents 接口获取)
 * @method void setAgentId(string $AgentId) 设置Agent ID(可通过 DescribePrometheusAgents 接口获取)
 * @method array getJobIds() 获取任务 ID 列表(可通过 DescribePrometheusScrapeJobs 接口获取)
 * @method void setJobIds(array $JobIds) 设置任务 ID 列表(可通过 DescribePrometheusScrapeJobs 接口获取)
 */
class DeletePrometheusScrapeJobsRequest extends AbstractModel
{
    /**
     * @var string 实例 ID
     */
    public $InstanceId;

    /**
     * @var string Agent ID(可通过 DescribePrometheusAgents 接口获取)
     */
    public $AgentId;

    /**
     * @var array 任务 ID 列表(可通过 DescribePrometheusScrapeJobs 接口获取)
     */
    public $JobIds;

    /**
     * @param string $InstanceId 实例 ID
     * @param string $AgentId Agent ID(可通过 DescribePrometheusAgents 接口获取)
     * @param array $JobIds 任务 ID 列表(可通过 DescribePrometheusScrapeJobs 接口获取)
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

        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("JobIds",$param) and $param["JobIds"] !== null) {
            $this->JobIds = $param["JobIds"];
        }
    }
}

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
namespace TencentCloud\Cws\V20180312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMonitors请求参数结构体
 *
 * @method array getMonitorIds() 获取监控任务ID列表
 * @method void setMonitorIds(array $MonitorIds) 设置监控任务ID列表
 * @method array getFilters() 获取过滤条件
 * @method void setFilters(array $Filters) 设置过滤条件
 * @method integer getOffset() 获取偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0
 * @method integer getLimit() 获取返回数量，默认为10，最大值为100
 * @method void setLimit(integer $Limit) 设置返回数量，默认为10，最大值为100
 */
class DescribeMonitorsRequest extends AbstractModel
{
    /**
     * @var array 监控任务ID列表
     */
    public $MonitorIds;

    /**
     * @var array 过滤条件
     */
    public $Filters;

    /**
     * @var integer 偏移量，默认为0
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为10，最大值为100
     */
    public $Limit;

    /**
     * @param array $MonitorIds 监控任务ID列表
     * @param array $Filters 过滤条件
     * @param integer $Offset 偏移量，默认为0
     * @param integer $Limit 返回数量，默认为10，最大值为100
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
        if (array_key_exists("MonitorIds",$param) and $param["MonitorIds"] !== null) {
            $this->MonitorIds = $param["MonitorIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}

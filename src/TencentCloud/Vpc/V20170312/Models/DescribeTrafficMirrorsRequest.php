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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTrafficMirrors请求参数结构体
 *
 * @method array getTrafficMirrorIds() 获取流量镜像实例ID集合
 * @method void setTrafficMirrorIds(array $TrafficMirrorIds) 设置流量镜像实例ID集合
 * @method Filter getFilters() 获取流量镜像查询过滤调节。
vpc-id ：VPC实例ID，例如：vpc-f49l6u0z。
traffic-mirror-id：流量镜像实例ID。
traffic-mirror-name：流量镜像名称。
tag-key ：按照标签键进行过滤。
 * @method void setFilters(Filter $Filters) 设置流量镜像查询过滤调节。
vpc-id ：VPC实例ID，例如：vpc-f49l6u0z。
traffic-mirror-id：流量镜像实例ID。
traffic-mirror-name：流量镜像名称。
tag-key ：按照标签键进行过滤。
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100。
 */
class DescribeTrafficMirrorsRequest extends AbstractModel
{
    /**
     * @var array 流量镜像实例ID集合
     */
    public $TrafficMirrorIds;

    /**
     * @var Filter 流量镜像查询过滤调节。
vpc-id ：VPC实例ID，例如：vpc-f49l6u0z。
traffic-mirror-id：流量镜像实例ID。
traffic-mirror-name：流量镜像名称。
tag-key ：按照标签键进行过滤。
     */
    public $Filters;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，最大值为100。
     */
    public $Limit;

    /**
     * @param array $TrafficMirrorIds 流量镜像实例ID集合
     * @param Filter $Filters 流量镜像查询过滤调节。
vpc-id ：VPC实例ID，例如：vpc-f49l6u0z。
traffic-mirror-id：流量镜像实例ID。
traffic-mirror-name：流量镜像名称。
tag-key ：按照标签键进行过滤。
     * @param integer $Offset 偏移量，默认为0。
     * @param integer $Limit 返回数量，默认为20，最大值为100。
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
        if (array_key_exists("TrafficMirrorIds",$param) and $param["TrafficMirrorIds"] !== null) {
            $this->TrafficMirrorIds = $param["TrafficMirrorIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = new Filter();
            $this->Filters->deserialize($param["Filters"]);
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}

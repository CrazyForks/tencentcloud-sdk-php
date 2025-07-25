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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVpcCniPodLimits返回参数结构体
 *
 * @method integer getTotalCount() 获取机型数据数量
 * @method void setTotalCount(integer $TotalCount) 设置机型数据数量
 * @method array getPodLimitsInstanceSet() 获取机型信息及其可支持的最大VPC-CNI模式Pod数量信息
 * @method void setPodLimitsInstanceSet(array $PodLimitsInstanceSet) 设置机型信息及其可支持的最大VPC-CNI模式Pod数量信息
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVpcCniPodLimitsResponse extends AbstractModel
{
    /**
     * @var integer 机型数据数量
     */
    public $TotalCount;

    /**
     * @var array 机型信息及其可支持的最大VPC-CNI模式Pod数量信息
     */
    public $PodLimitsInstanceSet;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 机型数据数量
     * @param array $PodLimitsInstanceSet 机型信息及其可支持的最大VPC-CNI模式Pod数量信息
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("PodLimitsInstanceSet",$param) and $param["PodLimitsInstanceSet"] !== null) {
            $this->PodLimitsInstanceSet = [];
            foreach ($param["PodLimitsInstanceSet"] as $key => $value){
                $obj = new PodLimitsInstance();
                $obj->deserialize($value);
                array_push($this->PodLimitsInstanceSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

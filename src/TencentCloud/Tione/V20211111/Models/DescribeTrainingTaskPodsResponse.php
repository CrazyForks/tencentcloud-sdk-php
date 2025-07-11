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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTrainingTaskPods返回参数结构体
 *
 * @method array getPodNames() 获取pod名称列表
 * @method void setPodNames(array $PodNames) 设置pod名称列表
 * @method integer getTotalCount() 获取数量
 * @method void setTotalCount(integer $TotalCount) 设置数量
 * @method array getPodInfoList() 获取pod详细信息
 * @method void setPodInfoList(array $PodInfoList) 设置pod详细信息
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTrainingTaskPodsResponse extends AbstractModel
{
    /**
     * @var array pod名称列表
     */
    public $PodNames;

    /**
     * @var integer 数量
     */
    public $TotalCount;

    /**
     * @var array pod详细信息
     */
    public $PodInfoList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $PodNames pod名称列表
     * @param integer $TotalCount 数量
     * @param array $PodInfoList pod详细信息
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
        if (array_key_exists("PodNames",$param) and $param["PodNames"] !== null) {
            $this->PodNames = $param["PodNames"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("PodInfoList",$param) and $param["PodInfoList"] !== null) {
            $this->PodInfoList = [];
            foreach ($param["PodInfoList"] as $key => $value){
                $obj = new PodInfo();
                $obj->deserialize($value);
                array_push($this->PodInfoList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

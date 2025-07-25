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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRelayUsage返回参数结构体
 *
 * @method array getUsageKey() 获取用量类型，与UsageValue中各个位置的值对应。
 * @method void setUsageKey(array $UsageKey) 设置用量类型，与UsageValue中各个位置的值对应。
 * @method array getUsageList() 获取各个时间点用量明细。
 * @method void setUsageList(array $UsageList) 设置各个时间点用量明细。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRelayUsageResponse extends AbstractModel
{
    /**
     * @var array 用量类型，与UsageValue中各个位置的值对应。
     */
    public $UsageKey;

    /**
     * @var array 各个时间点用量明细。
     */
    public $UsageList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $UsageKey 用量类型，与UsageValue中各个位置的值对应。
     * @param array $UsageList 各个时间点用量明细。
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
        if (array_key_exists("UsageKey",$param) and $param["UsageKey"] !== null) {
            $this->UsageKey = $param["UsageKey"];
        }

        if (array_key_exists("UsageList",$param) and $param["UsageList"] !== null) {
            $this->UsageList = [];
            foreach ($param["UsageList"] as $key => $value){
                $obj = new TrtcUsage();
                $obj->deserialize($value);
                array_push($this->UsageList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

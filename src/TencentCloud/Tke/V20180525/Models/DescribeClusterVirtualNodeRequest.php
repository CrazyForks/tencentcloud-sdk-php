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
 * DescribeClusterVirtualNode请求参数结构体
 *
 * @method string getClusterId() 获取集群ID，通过DescribeClusters接口获取
 * @method void setClusterId(string $ClusterId) 设置集群ID，通过DescribeClusters接口获取
 * @method string getNodePoolId() 获取节点池ID，通过DescribeNodePools接口获取
 * @method void setNodePoolId(string $NodePoolId) 设置节点池ID，通过DescribeNodePools接口获取
 * @method array getNodeNames() 获取节点名称，可搜索DescribeClusterVirtualNode接口节点
 * @method void setNodeNames(array $NodeNames) 设置节点名称，可搜索DescribeClusterVirtualNode接口节点
 */
class DescribeClusterVirtualNodeRequest extends AbstractModel
{
    /**
     * @var string 集群ID，通过DescribeClusters接口获取
     */
    public $ClusterId;

    /**
     * @var string 节点池ID，通过DescribeNodePools接口获取
     */
    public $NodePoolId;

    /**
     * @var array 节点名称，可搜索DescribeClusterVirtualNode接口节点
     */
    public $NodeNames;

    /**
     * @param string $ClusterId 集群ID，通过DescribeClusters接口获取
     * @param string $NodePoolId 节点池ID，通过DescribeNodePools接口获取
     * @param array $NodeNames 节点名称，可搜索DescribeClusterVirtualNode接口节点
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("NodePoolId",$param) and $param["NodePoolId"] !== null) {
            $this->NodePoolId = $param["NodePoolId"];
        }

        if (array_key_exists("NodeNames",$param) and $param["NodeNames"] !== null) {
            $this->NodeNames = $param["NodeNames"];
        }
    }
}

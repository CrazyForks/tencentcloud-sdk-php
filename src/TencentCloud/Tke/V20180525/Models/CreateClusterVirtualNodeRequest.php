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
 * CreateClusterVirtualNode请求参数结构体
 *
 * @method string getClusterId() 获取集群ID，通过DescribeClusters接口获取
 * @method void setClusterId(string $ClusterId) 设置集群ID，通过DescribeClusters接口获取
 * @method string getNodePoolId() 获取虚拟节点所属节点池，通过DescribeNodePools接口获取
 * @method void setNodePoolId(string $NodePoolId) 设置虚拟节点所属节点池，通过DescribeNodePools接口获取
 * @method string getSubnetId() 获取虚拟节点所属子网，SubnetId、SubnetIds、VirtualNodes必选一个。
 * @method void setSubnetId(string $SubnetId) 设置虚拟节点所属子网，SubnetId、SubnetIds、VirtualNodes必选一个。
 * @method array getSubnetIds() 获取虚拟节点子网ID列表，SubnetId、SubnetIds、VirtualNodes必选一个。
 * @method void setSubnetIds(array $SubnetIds) 设置虚拟节点子网ID列表，SubnetId、SubnetIds、VirtualNodes必选一个。
 * @method array getVirtualNodes() 获取虚拟节点列表，SubnetId、SubnetIds、VirtualNodes必选一个。
 * @method void setVirtualNodes(array $VirtualNodes) 设置虚拟节点列表，SubnetId、SubnetIds、VirtualNodes必选一个。
 */
class CreateClusterVirtualNodeRequest extends AbstractModel
{
    /**
     * @var string 集群ID，通过DescribeClusters接口获取
     */
    public $ClusterId;

    /**
     * @var string 虚拟节点所属节点池，通过DescribeNodePools接口获取
     */
    public $NodePoolId;

    /**
     * @var string 虚拟节点所属子网，SubnetId、SubnetIds、VirtualNodes必选一个。
     */
    public $SubnetId;

    /**
     * @var array 虚拟节点子网ID列表，SubnetId、SubnetIds、VirtualNodes必选一个。
     */
    public $SubnetIds;

    /**
     * @var array 虚拟节点列表，SubnetId、SubnetIds、VirtualNodes必选一个。
     */
    public $VirtualNodes;

    /**
     * @param string $ClusterId 集群ID，通过DescribeClusters接口获取
     * @param string $NodePoolId 虚拟节点所属节点池，通过DescribeNodePools接口获取
     * @param string $SubnetId 虚拟节点所属子网，SubnetId、SubnetIds、VirtualNodes必选一个。
     * @param array $SubnetIds 虚拟节点子网ID列表，SubnetId、SubnetIds、VirtualNodes必选一个。
     * @param array $VirtualNodes 虚拟节点列表，SubnetId、SubnetIds、VirtualNodes必选一个。
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

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("VirtualNodes",$param) and $param["VirtualNodes"] !== null) {
            $this->VirtualNodes = [];
            foreach ($param["VirtualNodes"] as $key => $value){
                $obj = new VirtualNodeSpec();
                $obj->deserialize($value);
                array_push($this->VirtualNodes, $obj);
            }
        }
    }
}

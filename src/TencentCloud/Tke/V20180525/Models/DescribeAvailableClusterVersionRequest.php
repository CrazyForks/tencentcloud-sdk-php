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
 * DescribeAvailableClusterVersion请求参数结构体
 *
 * @method string getClusterId() 获取集群 Id。若只查询某个集群可升级的版本，需填写此项。
 * @method void setClusterId(string $ClusterId) 设置集群 Id。若只查询某个集群可升级的版本，需填写此项。
 * @method array getClusterIds() 获取集群 Id 列表。若查询多个集群可升级的版本，需填写此项。
 * @method void setClusterIds(array $ClusterIds) 设置集群 Id 列表。若查询多个集群可升级的版本，需填写此项。
 */
class DescribeAvailableClusterVersionRequest extends AbstractModel
{
    /**
     * @var string 集群 Id。若只查询某个集群可升级的版本，需填写此项。
     */
    public $ClusterId;

    /**
     * @var array 集群 Id 列表。若查询多个集群可升级的版本，需填写此项。
     */
    public $ClusterIds;

    /**
     * @param string $ClusterId 集群 Id。若只查询某个集群可升级的版本，需填写此项。
     * @param array $ClusterIds 集群 Id 列表。若查询多个集群可升级的版本，需填写此项。
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

        if (array_key_exists("ClusterIds",$param) and $param["ClusterIds"] !== null) {
            $this->ClusterIds = $param["ClusterIds"];
        }
    }
}

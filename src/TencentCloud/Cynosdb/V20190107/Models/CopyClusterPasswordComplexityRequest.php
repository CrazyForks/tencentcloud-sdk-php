<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CopyClusterPasswordComplexity请求参数结构体
 *
 * @method array getClusterIds() 获取复制集群ID数组
 * @method void setClusterIds(array $ClusterIds) 设置复制集群ID数组
 * @method string getSourceClusterId() 获取集群id
 * @method void setSourceClusterId(string $SourceClusterId) 设置集群id
 */
class CopyClusterPasswordComplexityRequest extends AbstractModel
{
    /**
     * @var array 复制集群ID数组
     */
    public $ClusterIds;

    /**
     * @var string 集群id
     */
    public $SourceClusterId;

    /**
     * @param array $ClusterIds 复制集群ID数组
     * @param string $SourceClusterId 集群id
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
        if (array_key_exists("ClusterIds",$param) and $param["ClusterIds"] !== null) {
            $this->ClusterIds = $param["ClusterIds"];
        }

        if (array_key_exists("SourceClusterId",$param) and $param["SourceClusterId"] !== null) {
            $this->SourceClusterId = $param["SourceClusterId"];
        }
    }
}
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
namespace TencentCloud\Tcm\V20210413\Models;
use TencentCloud\Common\AbstractModel;

/**
 * LinkPrometheus请求参数结构体
 *
 * @method string getMeshID() 获取网格ID
 * @method void setMeshID(string $MeshID) 设置网格ID
 * @method PrometheusConfig getPrometheus() 获取配置
 * @method void setPrometheus(PrometheusConfig $Prometheus) 设置配置
 */
class LinkPrometheusRequest extends AbstractModel
{
    /**
     * @var string 网格ID
     */
    public $MeshID;

    /**
     * @var PrometheusConfig 配置
     */
    public $Prometheus;

    /**
     * @param string $MeshID 网格ID
     * @param PrometheusConfig $Prometheus 配置
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
        if (array_key_exists("MeshID",$param) and $param["MeshID"] !== null) {
            $this->MeshID = $param["MeshID"];
        }

        if (array_key_exists("Prometheus",$param) and $param["Prometheus"] !== null) {
            $this->Prometheus = new PrometheusConfig();
            $this->Prometheus->deserialize($param["Prometheus"]);
        }
    }
}

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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群的版本相关信息
 *
 * @method string getFlink() 获取集群的Flink版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlink(string $Flink) 设置集群的Flink版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSupportedFlink() 获取集群支持的Flink版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportedFlink(array $SupportedFlink) 设置集群支持的Flink版本
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClusterVersion extends AbstractModel
{
    /**
     * @var string 集群的Flink版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Flink;

    /**
     * @var array 集群支持的Flink版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportedFlink;

    /**
     * @param string $Flink 集群的Flink版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SupportedFlink 集群支持的Flink版本
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Flink",$param) and $param["Flink"] !== null) {
            $this->Flink = $param["Flink"];
        }

        if (array_key_exists("SupportedFlink",$param) and $param["SupportedFlink"] !== null) {
            $this->SupportedFlink = $param["SupportedFlink"];
        }
    }
}

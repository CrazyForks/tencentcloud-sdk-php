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
 * 作业运行图
 *
 * @method array getNodes() 获取运行图的点集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodes(array $Nodes) 设置运行图的点集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEdges() 获取运行图的边集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEdges(array $Edges) 设置运行图的边集合
注意：此字段可能返回 null，表示取不到有效值。
 */
class JobGraph extends AbstractModel
{
    /**
     * @var array 运行图的点集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Nodes;

    /**
     * @var array 运行图的边集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Edges;

    /**
     * @param array $Nodes 运行图的点集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Edges 运行图的边集合
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
        if (array_key_exists("Nodes",$param) and $param["Nodes"] !== null) {
            $this->Nodes = [];
            foreach ($param["Nodes"] as $key => $value){
                $obj = new JobGraphNode();
                $obj->deserialize($value);
                array_push($this->Nodes, $obj);
            }
        }

        if (array_key_exists("Edges",$param) and $param["Edges"] !== null) {
            $this->Edges = [];
            foreach ($param["Edges"] as $key => $value){
                $obj = new JobGraphEdge();
                $obj->deserialize($value);
                array_push($this->Edges, $obj);
            }
        }
    }
}

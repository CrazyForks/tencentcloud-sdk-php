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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 比较表格的Meta信息
 *
 * @method string getSrcTableClusterId() 获取源表格的集群id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSrcTableClusterId(string $SrcTableClusterId) 设置源表格的集群id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSrcTableGroupId() 获取源表格的表格组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSrcTableGroupId(string $SrcTableGroupId) 设置源表格的表格组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSrcTableName() 获取源表格的表名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSrcTableName(string $SrcTableName) 设置源表格的表名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDstTableClusterId() 获取目标表格的集群id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDstTableClusterId(string $DstTableClusterId) 设置目标表格的集群id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDstTableGroupId() 获取目标表格的表格组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDstTableGroupId(string $DstTableGroupId) 设置目标表格的表格组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDstTableName() 获取目标表格的表名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDstTableName(string $DstTableName) 设置目标表格的表名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSrcTableInstanceId() 获取源表格的实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSrcTableInstanceId(string $SrcTableInstanceId) 设置源表格的实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDstTableInstanceId() 获取目标表格的实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDstTableInstanceId(string $DstTableInstanceId) 设置目标表格的实例id
注意：此字段可能返回 null，表示取不到有效值。
 */
class CompareTablesInfo extends AbstractModel
{
    /**
     * @var string 源表格的集群id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SrcTableClusterId;

    /**
     * @var string 源表格的表格组id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SrcTableGroupId;

    /**
     * @var string 源表格的表名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SrcTableName;

    /**
     * @var string 目标表格的集群id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DstTableClusterId;

    /**
     * @var string 目标表格的表格组id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DstTableGroupId;

    /**
     * @var string 目标表格的表名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DstTableName;

    /**
     * @var string 源表格的实例id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SrcTableInstanceId;

    /**
     * @var string 目标表格的实例id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DstTableInstanceId;

    /**
     * @param string $SrcTableClusterId 源表格的集群id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SrcTableGroupId 源表格的表格组id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SrcTableName 源表格的表名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DstTableClusterId 目标表格的集群id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DstTableGroupId 目标表格的表格组id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DstTableName 目标表格的表名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SrcTableInstanceId 源表格的实例id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DstTableInstanceId 目标表格的实例id
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
        if (array_key_exists("SrcTableClusterId",$param) and $param["SrcTableClusterId"] !== null) {
            $this->SrcTableClusterId = $param["SrcTableClusterId"];
        }

        if (array_key_exists("SrcTableGroupId",$param) and $param["SrcTableGroupId"] !== null) {
            $this->SrcTableGroupId = $param["SrcTableGroupId"];
        }

        if (array_key_exists("SrcTableName",$param) and $param["SrcTableName"] !== null) {
            $this->SrcTableName = $param["SrcTableName"];
        }

        if (array_key_exists("DstTableClusterId",$param) and $param["DstTableClusterId"] !== null) {
            $this->DstTableClusterId = $param["DstTableClusterId"];
        }

        if (array_key_exists("DstTableGroupId",$param) and $param["DstTableGroupId"] !== null) {
            $this->DstTableGroupId = $param["DstTableGroupId"];
        }

        if (array_key_exists("DstTableName",$param) and $param["DstTableName"] !== null) {
            $this->DstTableName = $param["DstTableName"];
        }

        if (array_key_exists("SrcTableInstanceId",$param) and $param["SrcTableInstanceId"] !== null) {
            $this->SrcTableInstanceId = $param["SrcTableInstanceId"];
        }

        if (array_key_exists("DstTableInstanceId",$param) and $param["DstTableInstanceId"] !== null) {
            $this->DstTableInstanceId = $param["DstTableInstanceId"];
        }
    }
}

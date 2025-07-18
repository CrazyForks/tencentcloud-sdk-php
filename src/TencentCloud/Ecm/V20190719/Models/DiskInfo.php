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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 磁盘信息
 *
 * @method string getDiskType() 获取磁盘类型：LOCAL_BASIC
 * @method void setDiskType(string $DiskType) 设置磁盘类型：LOCAL_BASIC
 * @method string getDiskId() 获取磁盘ID
 * @method void setDiskId(string $DiskId) 设置磁盘ID
 * @method integer getDiskSize() 获取磁盘大小（GB）
 * @method void setDiskSize(integer $DiskSize) 设置磁盘大小（GB）
 * @method boolean getDeleteWithInstance() 获取是否随实例删除。
 * @method void setDeleteWithInstance(boolean $DeleteWithInstance) 设置是否随实例删除。
 * @method string getSnapshotId() 获取快照ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSnapshotId(string $SnapshotId) 设置快照ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class DiskInfo extends AbstractModel
{
    /**
     * @var string 磁盘类型：LOCAL_BASIC
     */
    public $DiskType;

    /**
     * @var string 磁盘ID
     */
    public $DiskId;

    /**
     * @var integer 磁盘大小（GB）
     */
    public $DiskSize;

    /**
     * @var boolean 是否随实例删除。
     */
    public $DeleteWithInstance;

    /**
     * @var string 快照ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SnapshotId;

    /**
     * @param string $DiskType 磁盘类型：LOCAL_BASIC
     * @param string $DiskId 磁盘ID
     * @param integer $DiskSize 磁盘大小（GB）
     * @param boolean $DeleteWithInstance 是否随实例删除。
     * @param string $SnapshotId 快照ID
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
        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DeleteWithInstance",$param) and $param["DeleteWithInstance"] !== null) {
            $this->DeleteWithInstance = $param["DeleteWithInstance"];
        }

        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }
    }
}

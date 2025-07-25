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
namespace TencentCloud\Iotvideo\V20191126\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备物模型数据
 *
 * @method string getTid() 获取设备TID
 * @method void setTid(string $Tid) 设置设备TID
 * @method string getBranch() 获取物模型分支路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBranch(string $Branch) 设置物模型分支路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIotModel() 获取物模型数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIotModel(string $IotModel) 设置物模型数据
注意：此字段可能返回 null，表示取不到有效值。
 */
class DeviceModelData extends AbstractModel
{
    /**
     * @var string 设备TID
     */
    public $Tid;

    /**
     * @var string 物模型分支路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Branch;

    /**
     * @var string 物模型数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IotModel;

    /**
     * @param string $Tid 设备TID
     * @param string $Branch 物模型分支路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IotModel 物模型数据
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
        if (array_key_exists("Tid",$param) and $param["Tid"] !== null) {
            $this->Tid = $param["Tid"];
        }

        if (array_key_exists("Branch",$param) and $param["Branch"] !== null) {
            $this->Branch = $param["Branch"];
        }

        if (array_key_exists("IotModel",$param) and $param["IotModel"] !== null) {
            $this->IotModel = $param["IotModel"];
        }
    }
}

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
namespace TencentCloud\Api\V20201106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 可用区信息
 *
 * @method string getZone() 获取可用区名称，例如，ap-guangzhou-3
全网可用区名称如下：
<li> ap-chongqing-1 </li>
<li> ap-seoul-1 </li>
<li> ap-seoul-2 </li>
<li> ap-chengdu-1 </li>
<li> ap-chengdu-2 </li>
<li> ap-hongkong-1 </li>
<li> ap-hongkong-2 </li>
<li> ap-shenzhen-fsi-1 </li>
<li> ap-shenzhen-fsi-2 </li>
<li> ap-shenzhen-fsi-3 </li>
<li> ap-guangzhou-1（售罄）</li>
<li> ap-guangzhou-2（售罄）</li>
<li> ap-guangzhou-3 </li>
<li> ap-guangzhou-4 </li>
<li> ap-guangzhou-6 </li>
<li> ap-tokyo-1 </li>
<li> ap-singapore-1 </li>
<li> ap-singapore-2 </li>
<li> ap-shanghai-fsi-1 </li>
<li> ap-shanghai-fsi-2 </li>
<li> ap-shanghai-fsi-3 </li>
<li> ap-bangkok-1 </li>
<li> ap-shanghai-1（售罄） </li>
<li> ap-shanghai-2 </li>
<li> ap-shanghai-3 </li>
<li> ap-shanghai-4 </li>
<li> ap-shanghai-5 </li>
<li> ap-mumbai-1 </li>
<li> ap-mumbai-2 </li>
<li> eu-moscow-1 </li>
<li> ap-beijing-1 </li>
<li> ap-beijing-2 </li>
<li> ap-beijing-3 </li>
<li> ap-beijing-4 </li>
<li> ap-beijing-5 </li>
<li> na-siliconvalley-1 </li>
<li> na-siliconvalley-2 </li>
<li> eu-frankfurt-1 </li>
<li> na-toronto-1 </li>
<li> na-ashburn-1 </li>
<li> na-ashburn-2 </li>
<li> ap-nanjing-1 </li>
<li> ap-nanjing-2 </li>
 * @method void setZone(string $Zone) 设置可用区名称，例如，ap-guangzhou-3
全网可用区名称如下：
<li> ap-chongqing-1 </li>
<li> ap-seoul-1 </li>
<li> ap-seoul-2 </li>
<li> ap-chengdu-1 </li>
<li> ap-chengdu-2 </li>
<li> ap-hongkong-1 </li>
<li> ap-hongkong-2 </li>
<li> ap-shenzhen-fsi-1 </li>
<li> ap-shenzhen-fsi-2 </li>
<li> ap-shenzhen-fsi-3 </li>
<li> ap-guangzhou-1（售罄）</li>
<li> ap-guangzhou-2（售罄）</li>
<li> ap-guangzhou-3 </li>
<li> ap-guangzhou-4 </li>
<li> ap-guangzhou-6 </li>
<li> ap-tokyo-1 </li>
<li> ap-singapore-1 </li>
<li> ap-singapore-2 </li>
<li> ap-shanghai-fsi-1 </li>
<li> ap-shanghai-fsi-2 </li>
<li> ap-shanghai-fsi-3 </li>
<li> ap-bangkok-1 </li>
<li> ap-shanghai-1（售罄） </li>
<li> ap-shanghai-2 </li>
<li> ap-shanghai-3 </li>
<li> ap-shanghai-4 </li>
<li> ap-shanghai-5 </li>
<li> ap-mumbai-1 </li>
<li> ap-mumbai-2 </li>
<li> eu-moscow-1 </li>
<li> ap-beijing-1 </li>
<li> ap-beijing-2 </li>
<li> ap-beijing-3 </li>
<li> ap-beijing-4 </li>
<li> ap-beijing-5 </li>
<li> na-siliconvalley-1 </li>
<li> na-siliconvalley-2 </li>
<li> eu-frankfurt-1 </li>
<li> na-toronto-1 </li>
<li> na-ashburn-1 </li>
<li> na-ashburn-2 </li>
<li> ap-nanjing-1 </li>
<li> ap-nanjing-2 </li>
 * @method string getZoneName() 获取可用区描述，例如，广州三区
 * @method void setZoneName(string $ZoneName) 设置可用区描述，例如，广州三区
 * @method string getZoneId() 获取可用区ID
 * @method void setZoneId(string $ZoneId) 设置可用区ID
 * @method string getZoneState() 获取可用区状态，包含AVAILABLE和UNAVAILABLE。AVAILABLE代表可用，UNAVAILABLE代表不可用。
 * @method void setZoneState(string $ZoneState) 设置可用区状态，包含AVAILABLE和UNAVAILABLE。AVAILABLE代表可用，UNAVAILABLE代表不可用。
 * @method string getParentZone() 获取父级zone
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentZone(string $ParentZone) 设置父级zone
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentZoneId() 获取父级可用区ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentZoneId(string $ParentZoneId) 设置父级可用区ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentZoneName() 获取父级可用区描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentZoneName(string $ParentZoneName) 设置父级可用区描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZoneType() 获取zone类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneType(string $ZoneType) 设置zone类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMachineRoomTypeMC() 获取控制台类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMachineRoomTypeMC(string $MachineRoomTypeMC) 设置控制台类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getZoneIdMC() 获取和ZoneId一样，适用于控制台调用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneIdMC(string $ZoneIdMC) 设置和ZoneId一样，适用于控制台调用
注意：此字段可能返回 null，表示取不到有效值。
 */
class ZoneInfo extends AbstractModel
{
    /**
     * @var string 可用区名称，例如，ap-guangzhou-3
全网可用区名称如下：
<li> ap-chongqing-1 </li>
<li> ap-seoul-1 </li>
<li> ap-seoul-2 </li>
<li> ap-chengdu-1 </li>
<li> ap-chengdu-2 </li>
<li> ap-hongkong-1 </li>
<li> ap-hongkong-2 </li>
<li> ap-shenzhen-fsi-1 </li>
<li> ap-shenzhen-fsi-2 </li>
<li> ap-shenzhen-fsi-3 </li>
<li> ap-guangzhou-1（售罄）</li>
<li> ap-guangzhou-2（售罄）</li>
<li> ap-guangzhou-3 </li>
<li> ap-guangzhou-4 </li>
<li> ap-guangzhou-6 </li>
<li> ap-tokyo-1 </li>
<li> ap-singapore-1 </li>
<li> ap-singapore-2 </li>
<li> ap-shanghai-fsi-1 </li>
<li> ap-shanghai-fsi-2 </li>
<li> ap-shanghai-fsi-3 </li>
<li> ap-bangkok-1 </li>
<li> ap-shanghai-1（售罄） </li>
<li> ap-shanghai-2 </li>
<li> ap-shanghai-3 </li>
<li> ap-shanghai-4 </li>
<li> ap-shanghai-5 </li>
<li> ap-mumbai-1 </li>
<li> ap-mumbai-2 </li>
<li> eu-moscow-1 </li>
<li> ap-beijing-1 </li>
<li> ap-beijing-2 </li>
<li> ap-beijing-3 </li>
<li> ap-beijing-4 </li>
<li> ap-beijing-5 </li>
<li> na-siliconvalley-1 </li>
<li> na-siliconvalley-2 </li>
<li> eu-frankfurt-1 </li>
<li> na-toronto-1 </li>
<li> na-ashburn-1 </li>
<li> na-ashburn-2 </li>
<li> ap-nanjing-1 </li>
<li> ap-nanjing-2 </li>
     */
    public $Zone;

    /**
     * @var string 可用区描述，例如，广州三区
     */
    public $ZoneName;

    /**
     * @var string 可用区ID
     */
    public $ZoneId;

    /**
     * @var string 可用区状态，包含AVAILABLE和UNAVAILABLE。AVAILABLE代表可用，UNAVAILABLE代表不可用。
     */
    public $ZoneState;

    /**
     * @var string 父级zone
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentZone;

    /**
     * @var string 父级可用区ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentZoneId;

    /**
     * @var string 父级可用区描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentZoneName;

    /**
     * @var string zone类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneType;

    /**
     * @var string 控制台类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MachineRoomTypeMC;

    /**
     * @var string 和ZoneId一样，适用于控制台调用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneIdMC;

    /**
     * @param string $Zone 可用区名称，例如，ap-guangzhou-3
全网可用区名称如下：
<li> ap-chongqing-1 </li>
<li> ap-seoul-1 </li>
<li> ap-seoul-2 </li>
<li> ap-chengdu-1 </li>
<li> ap-chengdu-2 </li>
<li> ap-hongkong-1 </li>
<li> ap-hongkong-2 </li>
<li> ap-shenzhen-fsi-1 </li>
<li> ap-shenzhen-fsi-2 </li>
<li> ap-shenzhen-fsi-3 </li>
<li> ap-guangzhou-1（售罄）</li>
<li> ap-guangzhou-2（售罄）</li>
<li> ap-guangzhou-3 </li>
<li> ap-guangzhou-4 </li>
<li> ap-guangzhou-6 </li>
<li> ap-tokyo-1 </li>
<li> ap-singapore-1 </li>
<li> ap-singapore-2 </li>
<li> ap-shanghai-fsi-1 </li>
<li> ap-shanghai-fsi-2 </li>
<li> ap-shanghai-fsi-3 </li>
<li> ap-bangkok-1 </li>
<li> ap-shanghai-1（售罄） </li>
<li> ap-shanghai-2 </li>
<li> ap-shanghai-3 </li>
<li> ap-shanghai-4 </li>
<li> ap-shanghai-5 </li>
<li> ap-mumbai-1 </li>
<li> ap-mumbai-2 </li>
<li> eu-moscow-1 </li>
<li> ap-beijing-1 </li>
<li> ap-beijing-2 </li>
<li> ap-beijing-3 </li>
<li> ap-beijing-4 </li>
<li> ap-beijing-5 </li>
<li> na-siliconvalley-1 </li>
<li> na-siliconvalley-2 </li>
<li> eu-frankfurt-1 </li>
<li> na-toronto-1 </li>
<li> na-ashburn-1 </li>
<li> na-ashburn-2 </li>
<li> ap-nanjing-1 </li>
<li> ap-nanjing-2 </li>
     * @param string $ZoneName 可用区描述，例如，广州三区
     * @param string $ZoneId 可用区ID
     * @param string $ZoneState 可用区状态，包含AVAILABLE和UNAVAILABLE。AVAILABLE代表可用，UNAVAILABLE代表不可用。
     * @param string $ParentZone 父级zone
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentZoneId 父级可用区ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentZoneName 父级可用区描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ZoneType zone类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MachineRoomTypeMC 控制台类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ZoneIdMC 和ZoneId一样，适用于控制台调用
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneState",$param) and $param["ZoneState"] !== null) {
            $this->ZoneState = $param["ZoneState"];
        }

        if (array_key_exists("ParentZone",$param) and $param["ParentZone"] !== null) {
            $this->ParentZone = $param["ParentZone"];
        }

        if (array_key_exists("ParentZoneId",$param) and $param["ParentZoneId"] !== null) {
            $this->ParentZoneId = $param["ParentZoneId"];
        }

        if (array_key_exists("ParentZoneName",$param) and $param["ParentZoneName"] !== null) {
            $this->ParentZoneName = $param["ParentZoneName"];
        }

        if (array_key_exists("ZoneType",$param) and $param["ZoneType"] !== null) {
            $this->ZoneType = $param["ZoneType"];
        }

        if (array_key_exists("MachineRoomTypeMC",$param) and $param["MachineRoomTypeMC"] !== null) {
            $this->MachineRoomTypeMC = $param["MachineRoomTypeMC"];
        }

        if (array_key_exists("ZoneIdMC",$param) and $param["ZoneIdMC"] !== null) {
            $this->ZoneIdMC = $param["ZoneIdMC"];
        }
    }
}

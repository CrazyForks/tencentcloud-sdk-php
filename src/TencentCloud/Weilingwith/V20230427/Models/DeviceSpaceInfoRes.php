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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备挂接的空间信息
 *
 * @method string getBuildingId() 获取建筑id
 * @method void setBuildingId(string $BuildingId) 设置建筑id
 * @method string getElementId() 获取构件id
 * @method void setElementId(string $ElementId) 设置构件id
 * @method string getEntityType() 获取构件类型
 * @method void setEntityType(string $EntityType) 设置构件类型
 * @method string getElementName() 获取构件名称
 * @method void setElementName(string $ElementName) 设置构件名称
 * @method integer getLevel() 获取构件级别
 * @method void setLevel(integer $Level) 设置构件级别
 * @method integer getBottomHeight() 获取底部标高（单位mm）
 * @method void setBottomHeight(integer $BottomHeight) 设置底部标高（单位mm）
 * @method string getSpaceCode() 获取空间编码
 * @method void setSpaceCode(string $SpaceCode) 设置空间编码
 */
class DeviceSpaceInfoRes extends AbstractModel
{
    /**
     * @var string 建筑id
     */
    public $BuildingId;

    /**
     * @var string 构件id
     */
    public $ElementId;

    /**
     * @var string 构件类型
     */
    public $EntityType;

    /**
     * @var string 构件名称
     */
    public $ElementName;

    /**
     * @var integer 构件级别
     */
    public $Level;

    /**
     * @var integer 底部标高（单位mm）
     */
    public $BottomHeight;

    /**
     * @var string 空间编码
     */
    public $SpaceCode;

    /**
     * @param string $BuildingId 建筑id
     * @param string $ElementId 构件id
     * @param string $EntityType 构件类型
     * @param string $ElementName 构件名称
     * @param integer $Level 构件级别
     * @param integer $BottomHeight 底部标高（单位mm）
     * @param string $SpaceCode 空间编码
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
        if (array_key_exists("BuildingId",$param) and $param["BuildingId"] !== null) {
            $this->BuildingId = $param["BuildingId"];
        }

        if (array_key_exists("ElementId",$param) and $param["ElementId"] !== null) {
            $this->ElementId = $param["ElementId"];
        }

        if (array_key_exists("EntityType",$param) and $param["EntityType"] !== null) {
            $this->EntityType = $param["EntityType"];
        }

        if (array_key_exists("ElementName",$param) and $param["ElementName"] !== null) {
            $this->ElementName = $param["ElementName"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("BottomHeight",$param) and $param["BottomHeight"] !== null) {
            $this->BottomHeight = $param["BottomHeight"];
        }

        if (array_key_exists("SpaceCode",$param) and $param["SpaceCode"] !== null) {
            $this->SpaceCode = $param["SpaceCode"];
        }
    }
}

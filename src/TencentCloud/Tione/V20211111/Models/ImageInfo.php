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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 镜像描述信息
 *
 * @method string getImageType() 获取镜像类型：TCR为腾讯云TCR镜像; CCR为腾讯云TCR个人版镜像，PreSet为平台预置镜像，CUSTOM为第三方自定义镜像
 * @method void setImageType(string $ImageType) 设置镜像类型：TCR为腾讯云TCR镜像; CCR为腾讯云TCR个人版镜像，PreSet为平台预置镜像，CUSTOM为第三方自定义镜像
 * @method string getImageUrl() 获取镜像地址
 * @method void setImageUrl(string $ImageUrl) 设置镜像地址
 * @method string getRegistryRegion() 获取TCR镜像对应的地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegistryRegion(string $RegistryRegion) 设置TCR镜像对应的地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegistryId() 获取TCR镜像对应的实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegistryId(string $RegistryId) 设置TCR镜像对应的实例id
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAllowSaveAllContent() 获取是否允许导出全部内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllowSaveAllContent(boolean $AllowSaveAllContent) 设置是否允许导出全部内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImageName() 获取镜像名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImageName(string $ImageName) 设置镜像名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSupportDataPipeline() 获取是否支持数据构建
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportDataPipeline(boolean $SupportDataPipeline) 设置是否支持数据构建
注意：此字段可能返回 null，表示取不到有效值。
 */
class ImageInfo extends AbstractModel
{
    /**
     * @var string 镜像类型：TCR为腾讯云TCR镜像; CCR为腾讯云TCR个人版镜像，PreSet为平台预置镜像，CUSTOM为第三方自定义镜像
     */
    public $ImageType;

    /**
     * @var string 镜像地址
     */
    public $ImageUrl;

    /**
     * @var string TCR镜像对应的地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegistryRegion;

    /**
     * @var string TCR镜像对应的实例id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegistryId;

    /**
     * @var boolean 是否允许导出全部内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllowSaveAllContent;

    /**
     * @var string 镜像名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImageName;

    /**
     * @var boolean 是否支持数据构建
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportDataPipeline;

    /**
     * @param string $ImageType 镜像类型：TCR为腾讯云TCR镜像; CCR为腾讯云TCR个人版镜像，PreSet为平台预置镜像，CUSTOM为第三方自定义镜像
     * @param string $ImageUrl 镜像地址
     * @param string $RegistryRegion TCR镜像对应的地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegistryId TCR镜像对应的实例id
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AllowSaveAllContent 是否允许导出全部内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImageName 镜像名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $SupportDataPipeline 是否支持数据构建
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
        if (array_key_exists("ImageType",$param) and $param["ImageType"] !== null) {
            $this->ImageType = $param["ImageType"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("RegistryRegion",$param) and $param["RegistryRegion"] !== null) {
            $this->RegistryRegion = $param["RegistryRegion"];
        }

        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("AllowSaveAllContent",$param) and $param["AllowSaveAllContent"] !== null) {
            $this->AllowSaveAllContent = $param["AllowSaveAllContent"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("SupportDataPipeline",$param) and $param["SupportDataPipeline"] !== null) {
            $this->SupportDataPipeline = $param["SupportDataPipeline"];
        }
    }
}

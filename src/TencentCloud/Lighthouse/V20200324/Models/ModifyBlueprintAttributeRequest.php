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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBlueprintAttribute请求参数结构体
 *
 * @method string getBlueprintId() 获取镜像 ID。可通过[DescribeBlueprints](https://cloud.tencent.com/document/product/1207/47689)接口返回值中的BlueprintId获取。
 * @method void setBlueprintId(string $BlueprintId) 设置镜像 ID。可通过[DescribeBlueprints](https://cloud.tencent.com/document/product/1207/47689)接口返回值中的BlueprintId获取。
 * @method string getBlueprintName() 获取设置新的镜像名称。最大长度60。
 * @method void setBlueprintName(string $BlueprintName) 设置设置新的镜像名称。最大长度60。
 * @method string getDescription() 获取设置新的镜像描述。最大长度60。
 * @method void setDescription(string $Description) 设置设置新的镜像描述。最大长度60。
 */
class ModifyBlueprintAttributeRequest extends AbstractModel
{
    /**
     * @var string 镜像 ID。可通过[DescribeBlueprints](https://cloud.tencent.com/document/product/1207/47689)接口返回值中的BlueprintId获取。
     */
    public $BlueprintId;

    /**
     * @var string 设置新的镜像名称。最大长度60。
     */
    public $BlueprintName;

    /**
     * @var string 设置新的镜像描述。最大长度60。
     */
    public $Description;

    /**
     * @param string $BlueprintId 镜像 ID。可通过[DescribeBlueprints](https://cloud.tencent.com/document/product/1207/47689)接口返回值中的BlueprintId获取。
     * @param string $BlueprintName 设置新的镜像名称。最大长度60。
     * @param string $Description 设置新的镜像描述。最大长度60。
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
        if (array_key_exists("BlueprintId",$param) and $param["BlueprintId"] !== null) {
            $this->BlueprintId = $param["BlueprintId"];
        }

        if (array_key_exists("BlueprintName",$param) and $param["BlueprintName"] !== null) {
            $this->BlueprintName = $param["BlueprintName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}

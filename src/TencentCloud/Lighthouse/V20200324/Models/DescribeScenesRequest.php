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
 * DescribeScenes请求参数结构体
 *
 * @method array getSceneIds() 获取使用场景ID列表。可通过[DescribeScenes](https://cloud.tencent.com/document/product/1207/83512)接口返回值中的SceneId获取。
 * @method void setSceneIds(array $SceneIds) 设置使用场景ID列表。可通过[DescribeScenes](https://cloud.tencent.com/document/product/1207/83512)接口返回值中的SceneId获取。
 * @method integer getOffset() 获取偏移量，默认为 0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为 0。
 * @method integer getLimit() 获取返回数量，默认为 20，最大值为 100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为 20，最大值为 100。
 */
class DescribeScenesRequest extends AbstractModel
{
    /**
     * @var array 使用场景ID列表。可通过[DescribeScenes](https://cloud.tencent.com/document/product/1207/83512)接口返回值中的SceneId获取。
     */
    public $SceneIds;

    /**
     * @var integer 偏移量，默认为 0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为 20，最大值为 100。
     */
    public $Limit;

    /**
     * @param array $SceneIds 使用场景ID列表。可通过[DescribeScenes](https://cloud.tencent.com/document/product/1207/83512)接口返回值中的SceneId获取。
     * @param integer $Offset 偏移量，默认为 0。
     * @param integer $Limit 返回数量，默认为 20，最大值为 100。
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
        if (array_key_exists("SceneIds",$param) and $param["SceneIds"] !== null) {
            $this->SceneIds = $param["SceneIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}

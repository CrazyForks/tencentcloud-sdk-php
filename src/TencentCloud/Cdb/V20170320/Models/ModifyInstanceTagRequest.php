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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceTag请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
 * @method array getReplaceTags() 获取要增加或修改的标签。ReplaceTags 和 DeleteTags 必填一个。
 * @method void setReplaceTags(array $ReplaceTags) 设置要增加或修改的标签。ReplaceTags 和 DeleteTags 必填一个。
 * @method array getDeleteTags() 获取要删除的标签。ReplaceTags 和 DeleteTags 必填一个。
 * @method void setDeleteTags(array $DeleteTags) 设置要删除的标签。ReplaceTags 和 DeleteTags 必填一个。
 */
class ModifyInstanceTagRequest extends AbstractModel
{
    /**
     * @var string 实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
     */
    public $InstanceId;

    /**
     * @var array 要增加或修改的标签。ReplaceTags 和 DeleteTags 必填一个。
     */
    public $ReplaceTags;

    /**
     * @var array 要删除的标签。ReplaceTags 和 DeleteTags 必填一个。
     */
    public $DeleteTags;

    /**
     * @param string $InstanceId 实例 ID。可通过 [DescribeDBInstances](https://cloud.tencent.com/document/product/236/15872) 接口获取。
     * @param array $ReplaceTags 要增加或修改的标签。ReplaceTags 和 DeleteTags 必填一个。
     * @param array $DeleteTags 要删除的标签。ReplaceTags 和 DeleteTags 必填一个。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ReplaceTags",$param) and $param["ReplaceTags"] !== null) {
            $this->ReplaceTags = [];
            foreach ($param["ReplaceTags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->ReplaceTags, $obj);
            }
        }

        if (array_key_exists("DeleteTags",$param) and $param["DeleteTags"] !== null) {
            $this->DeleteTags = [];
            foreach ($param["DeleteTags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->DeleteTags, $obj);
            }
        }
    }
}

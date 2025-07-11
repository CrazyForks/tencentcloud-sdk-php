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
namespace TencentCloud\Tag\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表示一个标签键值对以及是否允许删除
 *
 * @method string getTagKey() 获取标签键
 * @method void setTagKey(string $TagKey) 设置标签键
 * @method string getTagValue() 获取标签值
 * @method void setTagValue(string $TagValue) 设置标签值
 * @method integer getCanDelete() 获取是否可以删除
 * @method void setCanDelete(integer $CanDelete) 设置是否可以删除
 * @method string getCategory() 获取标签类型。取值： Custom：自定义标签。 System：系统标签。 All：全部标签。 默认值：All。
 * @method void setCategory(string $Category) 设置标签类型。取值： Custom：自定义标签。 System：系统标签。 All：全部标签。 默认值：All。
 */
class TagWithDelete extends AbstractModel
{
    /**
     * @var string 标签键
     */
    public $TagKey;

    /**
     * @var string 标签值
     */
    public $TagValue;

    /**
     * @var integer 是否可以删除
     */
    public $CanDelete;

    /**
     * @var string 标签类型。取值： Custom：自定义标签。 System：系统标签。 All：全部标签。 默认值：All。
     */
    public $Category;

    /**
     * @param string $TagKey 标签键
     * @param string $TagValue 标签值
     * @param integer $CanDelete 是否可以删除
     * @param string $Category 标签类型。取值： Custom：自定义标签。 System：系统标签。 All：全部标签。 默认值：All。
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
        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }

        if (array_key_exists("TagValue",$param) and $param["TagValue"] !== null) {
            $this->TagValue = $param["TagValue"];
        }

        if (array_key_exists("CanDelete",$param) and $param["CanDelete"] !== null) {
            $this->CanDelete = $param["CanDelete"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }
    }
}

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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 跳过校验的表详情
 *
 * @method integer getTotalCount() 获取跳过的表数量
 * @method void setTotalCount(integer $TotalCount) 设置跳过的表数量
 * @method array getItems() 获取跳过校验的表详情
 * @method void setItems(array $Items) 设置跳过校验的表详情
 */
class SkippedDetail extends AbstractModel
{
    /**
     * @var integer 跳过的表数量
     */
    public $TotalCount;

    /**
     * @var array 跳过校验的表详情
     */
    public $Items;

    /**
     * @param integer $TotalCount 跳过的表数量
     * @param array $Items 跳过校验的表详情
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new SkippedItem();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}

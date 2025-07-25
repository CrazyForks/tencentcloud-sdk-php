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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUsableUnitNamespaces请求参数结构体
 *
 * @method string getSearchWord() 获取根据命名空间名或ID模糊查询
 * @method void setSearchWord(string $SearchWord) 设置根据命名空间名或ID模糊查询
 * @method integer getOffset() 获取翻页查询偏移量
 * @method void setOffset(integer $Offset) 设置翻页查询偏移量
 * @method integer getLimit() 获取翻页查询每页记录数
 * @method void setLimit(integer $Limit) 设置翻页查询每页记录数
 */
class DescribeUsableUnitNamespacesRequest extends AbstractModel
{
    /**
     * @var string 根据命名空间名或ID模糊查询
     */
    public $SearchWord;

    /**
     * @var integer 翻页查询偏移量
     */
    public $Offset;

    /**
     * @var integer 翻页查询每页记录数
     */
    public $Limit;

    /**
     * @param string $SearchWord 根据命名空间名或ID模糊查询
     * @param integer $Offset 翻页查询偏移量
     * @param integer $Limit 翻页查询每页记录数
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
        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}

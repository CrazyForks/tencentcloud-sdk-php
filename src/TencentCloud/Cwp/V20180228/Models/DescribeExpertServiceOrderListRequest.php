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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeExpertServiceOrderList请求参数结构体
 *
 * @method array getFilters() 获取<li>InquireType- String - 是否必填：否 - 订单类型过滤，</li>
 * @method void setFilters(array $Filters) 设置<li>InquireType- String - 是否必填：否 - 订单类型过滤，</li>
 * @method integer getLimit() 获取分页条数 最大100条
 * @method void setLimit(integer $Limit) 设置分页条数 最大100条
 * @method integer getOffset() 获取分页步长
 * @method void setOffset(integer $Offset) 设置分页步长
 */
class DescribeExpertServiceOrderListRequest extends AbstractModel
{
    /**
     * @var array <li>InquireType- String - 是否必填：否 - 订单类型过滤，</li>
     */
    public $Filters;

    /**
     * @var integer 分页条数 最大100条
     */
    public $Limit;

    /**
     * @var integer 分页步长
     */
    public $Offset;

    /**
     * @param array $Filters <li>InquireType- String - 是否必填：否 - 订单类型过滤，</li>
     * @param integer $Limit 分页条数 最大100条
     * @param integer $Offset 分页步长
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}

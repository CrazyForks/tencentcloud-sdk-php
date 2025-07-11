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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProjects请求参数结构体
 *
 * @method integer getLimit() 获取分页每页数目，整型
 * @method void setLimit(integer $Limit) 设置分页每页数目，整型
 * @method integer getOffset() 获取分页页码，整型
 * @method void setOffset(integer $Offset) 设置分页页码，整型
 * @method array getFilters() 获取过滤参数；demo模式传{"Name": "IsDemo", "Values":["1"]}
 * @method void setFilters(array $Filters) 设置过滤参数；demo模式传{"Name": "IsDemo", "Values":["1"]}
 * @method integer getIsDemo() 获取该参数已废弃，demo模式请在Filters内注明
 * @method void setIsDemo(integer $IsDemo) 设置该参数已废弃，demo模式请在Filters内注明
 */
class DescribeProjectsRequest extends AbstractModel
{
    /**
     * @var integer 分页每页数目，整型
     */
    public $Limit;

    /**
     * @var integer 分页页码，整型
     */
    public $Offset;

    /**
     * @var array 过滤参数；demo模式传{"Name": "IsDemo", "Values":["1"]}
     */
    public $Filters;

    /**
     * @var integer 该参数已废弃，demo模式请在Filters内注明
     * @deprecated
     */
    public $IsDemo;

    /**
     * @param integer $Limit 分页每页数目，整型
     * @param integer $Offset 分页页码，整型
     * @param array $Filters 过滤参数；demo模式传{"Name": "IsDemo", "Values":["1"]}
     * @param integer $IsDemo 该参数已废弃，demo模式请在Filters内注明
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("IsDemo",$param) and $param["IsDemo"] !== null) {
            $this->IsDemo = $param["IsDemo"];
        }
    }
}

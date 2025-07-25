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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterRoutes请求参数结构体
 *
 * @method string getRouteTableName() 获取路由表名称。
 * @method void setRouteTableName(string $RouteTableName) 设置路由表名称。
 * @method array getFilters() 获取过滤条件,当前只支持按照单个条件GatewayIP进行过滤（可选）
 * @method void setFilters(array $Filters) 设置过滤条件,当前只支持按照单个条件GatewayIP进行过滤（可选）
 */
class DescribeClusterRoutesRequest extends AbstractModel
{
    /**
     * @var string 路由表名称。
     */
    public $RouteTableName;

    /**
     * @var array 过滤条件,当前只支持按照单个条件GatewayIP进行过滤（可选）
     */
    public $Filters;

    /**
     * @param string $RouteTableName 路由表名称。
     * @param array $Filters 过滤条件,当前只支持按照单个条件GatewayIP进行过滤（可选）
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
        if (array_key_exists("RouteTableName",$param) and $param["RouteTableName"] !== null) {
            $this->RouteTableName = $param["RouteTableName"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}

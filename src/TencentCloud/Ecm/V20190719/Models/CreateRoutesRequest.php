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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRoutes请求参数结构体
 *
 * @method string getRouteTableId() 获取路由表实例ID。
 * @method void setRouteTableId(string $RouteTableId) 设置路由表实例ID。
 * @method array getRoutes() 获取要创建的路由策略对象。
 * @method void setRoutes(array $Routes) 设置要创建的路由策略对象。
 */
class CreateRoutesRequest extends AbstractModel
{
    /**
     * @var string 路由表实例ID。
     */
    public $RouteTableId;

    /**
     * @var array 要创建的路由策略对象。
     */
    public $Routes;

    /**
     * @param string $RouteTableId 路由表实例ID。
     * @param array $Routes 要创建的路由策略对象。
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
        if (array_key_exists("RouteTableId",$param) and $param["RouteTableId"] !== null) {
            $this->RouteTableId = $param["RouteTableId"];
        }

        if (array_key_exists("Routes",$param) and $param["Routes"] !== null) {
            $this->Routes = [];
            foreach ($param["Routes"] as $key => $value){
                $obj = new Route();
                $obj->deserialize($value);
                array_push($this->Routes, $obj);
            }
        }
    }
}

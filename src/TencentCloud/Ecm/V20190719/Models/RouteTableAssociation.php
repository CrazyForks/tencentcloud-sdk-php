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
 * 路由表关联关系
 *
 * @method string getSubnetId() 获取子网实例ID
 * @method void setSubnetId(string $SubnetId) 设置子网实例ID
 * @method string getRouteTableId() 获取路由表实例ID
 * @method void setRouteTableId(string $RouteTableId) 设置路由表实例ID
 */
class RouteTableAssociation extends AbstractModel
{
    /**
     * @var string 子网实例ID
     */
    public $SubnetId;

    /**
     * @var string 路由表实例ID
     */
    public $RouteTableId;

    /**
     * @param string $SubnetId 子网实例ID
     * @param string $RouteTableId 路由表实例ID
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
        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("RouteTableId",$param) and $param["RouteTableId"] !== null) {
            $this->RouteTableId = $param["RouteTableId"];
        }
    }
}

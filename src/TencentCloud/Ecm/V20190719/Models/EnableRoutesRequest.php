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
 * EnableRoutes请求参数结构体
 *
 * @method string getRouteTableId() 获取路由表唯一ID。
 * @method void setRouteTableId(string $RouteTableId) 设置路由表唯一ID。
 * @method array getRouteIds() 获取路由策略ID。
 * @method void setRouteIds(array $RouteIds) 设置路由策略ID。
 */
class EnableRoutesRequest extends AbstractModel
{
    /**
     * @var string 路由表唯一ID。
     */
    public $RouteTableId;

    /**
     * @var array 路由策略ID。
     */
    public $RouteIds;

    /**
     * @param string $RouteTableId 路由表唯一ID。
     * @param array $RouteIds 路由策略ID。
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

        if (array_key_exists("RouteIds",$param) and $param["RouteIds"] !== null) {
            $this->RouteIds = $param["RouteIds"];
        }
    }
}

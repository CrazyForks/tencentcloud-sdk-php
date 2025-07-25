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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * kong服务路由列表
 *
 * @method array getRouteList() 获取无
 * @method void setRouteList(array $RouteList) 设置无
 * @method integer getTotalCount() 获取总数
 * @method void setTotalCount(integer $TotalCount) 设置总数
 */
class KongServiceRouteList extends AbstractModel
{
    /**
     * @var array 无
     */
    public $RouteList;

    /**
     * @var integer 总数
     */
    public $TotalCount;

    /**
     * @param array $RouteList 无
     * @param integer $TotalCount 总数
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
        if (array_key_exists("RouteList",$param) and $param["RouteList"] !== null) {
            $this->RouteList = [];
            foreach ($param["RouteList"] as $key => $value){
                $obj = new KongRoutePreview();
                $obj->deserialize($value);
                array_push($this->RouteList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}

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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ReplaceCcnRouteTableInputPolicys请求参数结构体
 *
 * @method string getCcnId() 获取云联网ID。
 * @method void setCcnId(string $CcnId) 设置云联网ID。
 * @method string getRouteTableId() 获取云联网路由表ID。
 * @method void setRouteTableId(string $RouteTableId) 设置云联网路由表ID。
 * @method array getPolicys() 获取新的路由接收策略。
 * @method void setPolicys(array $Policys) 设置新的路由接收策略。
 */
class ReplaceCcnRouteTableInputPolicysRequest extends AbstractModel
{
    /**
     * @var string 云联网ID。
     */
    public $CcnId;

    /**
     * @var string 云联网路由表ID。
     */
    public $RouteTableId;

    /**
     * @var array 新的路由接收策略。
     */
    public $Policys;

    /**
     * @param string $CcnId 云联网ID。
     * @param string $RouteTableId 云联网路由表ID。
     * @param array $Policys 新的路由接收策略。
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
        if (array_key_exists("CcnId",$param) and $param["CcnId"] !== null) {
            $this->CcnId = $param["CcnId"];
        }

        if (array_key_exists("RouteTableId",$param) and $param["RouteTableId"] !== null) {
            $this->RouteTableId = $param["RouteTableId"];
        }

        if (array_key_exists("Policys",$param) and $param["Policys"] !== null) {
            $this->Policys = [];
            foreach ($param["Policys"] as $key => $value){
                $obj = new CcnRouteTableInputPolicy();
                $obj->deserialize($value);
                array_push($this->Policys, $obj);
            }
        }
    }
}

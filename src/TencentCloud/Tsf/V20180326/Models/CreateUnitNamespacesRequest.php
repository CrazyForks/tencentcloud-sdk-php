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
 * CreateUnitNamespaces请求参数结构体
 *
 * @method string getGatewayInstanceId() 获取网关实体ID
 * @method void setGatewayInstanceId(string $GatewayInstanceId) 设置网关实体ID
 * @method array getUnitNamespaceList() 获取单元化命名空间对象列表
 * @method void setUnitNamespaceList(array $UnitNamespaceList) 设置单元化命名空间对象列表
 */
class CreateUnitNamespacesRequest extends AbstractModel
{
    /**
     * @var string 网关实体ID
     */
    public $GatewayInstanceId;

    /**
     * @var array 单元化命名空间对象列表
     */
    public $UnitNamespaceList;

    /**
     * @param string $GatewayInstanceId 网关实体ID
     * @param array $UnitNamespaceList 单元化命名空间对象列表
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
        if (array_key_exists("GatewayInstanceId",$param) and $param["GatewayInstanceId"] !== null) {
            $this->GatewayInstanceId = $param["GatewayInstanceId"];
        }

        if (array_key_exists("UnitNamespaceList",$param) and $param["UnitNamespaceList"] !== null) {
            $this->UnitNamespaceList = [];
            foreach ($param["UnitNamespaceList"] as $key => $value){
                $obj = new UnitNamespace();
                $obj->deserialize($value);
                array_push($this->UnitNamespaceList, $obj);
            }
        }
    }
}

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
 * 网关部署组ID和网关API分组ID元组
 *
 * @method string getGatewayDeployGroupId() 获取网关部署组ID
 * @method void setGatewayDeployGroupId(string $GatewayDeployGroupId) 设置网关部署组ID
 * @method string getGroupId() 获取分组id
 * @method void setGroupId(string $GroupId) 设置分组id
 */
class GatewayGroupIds extends AbstractModel
{
    /**
     * @var string 网关部署组ID
     */
    public $GatewayDeployGroupId;

    /**
     * @var string 分组id
     */
    public $GroupId;

    /**
     * @param string $GatewayDeployGroupId 网关部署组ID
     * @param string $GroupId 分组id
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
        if (array_key_exists("GatewayDeployGroupId",$param) and $param["GatewayDeployGroupId"] !== null) {
            $this->GatewayDeployGroupId = $param["GatewayDeployGroupId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}

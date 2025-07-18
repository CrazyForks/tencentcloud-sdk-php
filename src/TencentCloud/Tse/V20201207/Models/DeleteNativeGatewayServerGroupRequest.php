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
 * DeleteNativeGatewayServerGroup请求参数结构体
 *
 * @method string getGatewayId() 获取网关实例id。
只支持后付费实例
 * @method void setGatewayId(string $GatewayId) 设置网关实例id。
只支持后付费实例
 * @method string getGroupId() 获取网关分组id
 * @method void setGroupId(string $GroupId) 设置网关分组id
 */
class DeleteNativeGatewayServerGroupRequest extends AbstractModel
{
    /**
     * @var string 网关实例id。
只支持后付费实例
     */
    public $GatewayId;

    /**
     * @var string 网关分组id
     */
    public $GroupId;

    /**
     * @param string $GatewayId 网关实例id。
只支持后付费实例
     * @param string $GroupId 网关分组id
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}

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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSession返回参数结构体
 *
 * @method string getServerSession() 获取服务端session信息，返回给JSSDK
 * @method void setServerSession(string $ServerSession) 设置服务端session信息，返回给JSSDK
 * @method string getRoleNumber() 获取【已废弃】
 * @method void setRoleNumber(string $RoleNumber) 设置【已废弃】
 * @method string getRole() 获取【互动云游】角色；Player表示玩家；Viewer表示观察者
 * @method void setRole(string $Role) 设置【互动云游】角色；Player表示玩家；Viewer表示观察者
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateSessionResponse extends AbstractModel
{
    /**
     * @var string 服务端session信息，返回给JSSDK
     */
    public $ServerSession;

    /**
     * @var string 【已废弃】
     */
    public $RoleNumber;

    /**
     * @var string 【互动云游】角色；Player表示玩家；Viewer表示观察者
     */
    public $Role;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ServerSession 服务端session信息，返回给JSSDK
     * @param string $RoleNumber 【已废弃】
     * @param string $Role 【互动云游】角色；Player表示玩家；Viewer表示观察者
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ServerSession",$param) and $param["ServerSession"] !== null) {
            $this->ServerSession = $param["ServerSession"];
        }

        if (array_key_exists("RoleNumber",$param) and $param["RoleNumber"] !== null) {
            $this->RoleNumber = $param["RoleNumber"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

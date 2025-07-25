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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteUsersFromWorkGroup请求参数结构体
 *
 * @method UserIdSetOfWorkGroupId getAddInfo() 获取要删除的用户信息
 * @method void setAddInfo(UserIdSetOfWorkGroupId $AddInfo) 设置要删除的用户信息
 */
class DeleteUsersFromWorkGroupRequest extends AbstractModel
{
    /**
     * @var UserIdSetOfWorkGroupId 要删除的用户信息
     */
    public $AddInfo;

    /**
     * @param UserIdSetOfWorkGroupId $AddInfo 要删除的用户信息
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
        if (array_key_exists("AddInfo",$param) and $param["AddInfo"] !== null) {
            $this->AddInfo = new UserIdSetOfWorkGroupId();
            $this->AddInfo->deserialize($param["AddInfo"]);
        }
    }
}

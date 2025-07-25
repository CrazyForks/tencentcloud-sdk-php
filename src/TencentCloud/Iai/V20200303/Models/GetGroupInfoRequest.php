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
namespace TencentCloud\Iai\V20200303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetGroupInfo请求参数结构体
 *
 * @method string getGroupId() 获取人员库 ID，取值为创建人员库接口中的GroupId。
 * @method void setGroupId(string $GroupId) 设置人员库 ID，取值为创建人员库接口中的GroupId。
 */
class GetGroupInfoRequest extends AbstractModel
{
    /**
     * @var string 人员库 ID，取值为创建人员库接口中的GroupId。
     */
    public $GroupId;

    /**
     * @param string $GroupId 人员库 ID，取值为创建人员库接口中的GroupId。
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}

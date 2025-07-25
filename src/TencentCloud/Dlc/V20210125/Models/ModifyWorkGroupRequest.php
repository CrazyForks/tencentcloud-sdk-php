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
 * ModifyWorkGroup请求参数结构体
 *
 * @method integer getWorkGroupId() 获取工作组Id
 * @method void setWorkGroupId(integer $WorkGroupId) 设置工作组Id
 * @method string getWorkGroupDescription() 获取工作组描述，最大字符数限制50
 * @method void setWorkGroupDescription(string $WorkGroupDescription) 设置工作组描述，最大字符数限制50
 */
class ModifyWorkGroupRequest extends AbstractModel
{
    /**
     * @var integer 工作组Id
     */
    public $WorkGroupId;

    /**
     * @var string 工作组描述，最大字符数限制50
     */
    public $WorkGroupDescription;

    /**
     * @param integer $WorkGroupId 工作组Id
     * @param string $WorkGroupDescription 工作组描述，最大字符数限制50
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
        if (array_key_exists("WorkGroupId",$param) and $param["WorkGroupId"] !== null) {
            $this->WorkGroupId = $param["WorkGroupId"];
        }

        if (array_key_exists("WorkGroupDescription",$param) and $param["WorkGroupDescription"] !== null) {
            $this->WorkGroupDescription = $param["WorkGroupDescription"];
        }
    }
}

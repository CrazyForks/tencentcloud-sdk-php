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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AttachGroupPolicy请求参数结构体
 *
 * @method integer getPolicyId() 获取策略 id
 * @method void setPolicyId(integer $PolicyId) 设置策略 id
 * @method integer getAttachGroupId() 获取用户组 id
 * @method void setAttachGroupId(integer $AttachGroupId) 设置用户组 id
 */
class AttachGroupPolicyRequest extends AbstractModel
{
    /**
     * @var integer 策略 id
     */
    public $PolicyId;

    /**
     * @var integer 用户组 id
     */
    public $AttachGroupId;

    /**
     * @param integer $PolicyId 策略 id
     * @param integer $AttachGroupId 用户组 id
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("AttachGroupId",$param) and $param["AttachGroupId"] !== null) {
            $this->AttachGroupId = $param["AttachGroupId"];
        }
    }
}

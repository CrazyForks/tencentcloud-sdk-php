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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量创建群组基础信息
 *
 * @method string getGroupName() 获取待创建群组名
 * @method void setGroupName(string $GroupName) 设置待创建群组名
 * @method string getTeacherId() 获取群组主讲人ID
 * @method void setTeacherId(string $TeacherId) 设置群组主讲人ID
 */
class GroupBaseInfo extends AbstractModel
{
    /**
     * @var string 待创建群组名
     */
    public $GroupName;

    /**
     * @var string 群组主讲人ID
     */
    public $TeacherId;

    /**
     * @param string $GroupName 待创建群组名
     * @param string $TeacherId 群组主讲人ID
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
        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("TeacherId",$param) and $param["TeacherId"] !== null) {
            $this->TeacherId = $param["TeacherId"];
        }
    }
}

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
namespace TencentCloud\Bmvpc\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVpcQuota请求参数结构体
 *
 * @method array getTypeIds() 获取类型
 * @method void setTypeIds(array $TypeIds) 设置类型
 */
class DescribeVpcQuotaRequest extends AbstractModel
{
    /**
     * @var array 类型
     */
    public $TypeIds;

    /**
     * @param array $TypeIds 类型
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
        if (array_key_exists("TypeIds",$param) and $param["TypeIds"] !== null) {
            $this->TypeIds = $param["TypeIds"];
        }
    }
}

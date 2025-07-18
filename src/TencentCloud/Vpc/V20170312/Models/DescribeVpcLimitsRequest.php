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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVpcLimits请求参数结构体
 *
 * @method array getLimitTypes() 获取配额名称。每次最大查询100个配额类型。
 * @method void setLimitTypes(array $LimitTypes) 设置配额名称。每次最大查询100个配额类型。
 */
class DescribeVpcLimitsRequest extends AbstractModel
{
    /**
     * @var array 配额名称。每次最大查询100个配额类型。
     */
    public $LimitTypes;

    /**
     * @param array $LimitTypes 配额名称。每次最大查询100个配额类型。
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
        if (array_key_exists("LimitTypes",$param) and $param["LimitTypes"] !== null) {
            $this->LimitTypes = $param["LimitTypes"];
        }
    }
}

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
namespace TencentCloud\Bmeip\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteEip请求参数结构体
 *
 * @method array getEipIds() 获取Eip实例ID列表
 * @method void setEipIds(array $EipIds) 设置Eip实例ID列表
 */
class DeleteEipRequest extends AbstractModel
{
    /**
     * @var array Eip实例ID列表
     */
    public $EipIds;

    /**
     * @param array $EipIds Eip实例ID列表
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
        if (array_key_exists("EipIds",$param) and $param["EipIds"] !== null) {
            $this->EipIds = $param["EipIds"];
        }
    }
}

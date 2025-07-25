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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceRenewFlag请求参数结构体
 *
 * @method array getRenewFlags() 获取实例续费状态标记信息
 * @method void setRenewFlags(array $RenewFlags) 设置实例续费状态标记信息
 */
class ModifyDBInstanceRenewFlagRequest extends AbstractModel
{
    /**
     * @var array 实例续费状态标记信息
     */
    public $RenewFlags;

    /**
     * @param array $RenewFlags 实例续费状态标记信息
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
        if (array_key_exists("RenewFlags",$param) and $param["RenewFlags"] !== null) {
            $this->RenewFlags = [];
            foreach ($param["RenewFlags"] as $key => $value){
                $obj = new InstanceRenewInfo();
                $obj->deserialize($value);
                array_push($this->RenewFlags, $obj);
            }
        }
    }
}

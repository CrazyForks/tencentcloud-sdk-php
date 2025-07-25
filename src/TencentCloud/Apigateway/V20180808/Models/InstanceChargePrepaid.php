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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 独享实例预付费详情
 *
 * @method string getRenewFlag() 获取自动续费标示
 * @method void setRenewFlag(string $RenewFlag) 设置自动续费标示
 * @method string getExpiredTime() 获取预付费到期时间
 * @method void setExpiredTime(string $ExpiredTime) 设置预付费到期时间
 */
class InstanceChargePrepaid extends AbstractModel
{
    /**
     * @var string 自动续费标示
     */
    public $RenewFlag;

    /**
     * @var string 预付费到期时间
     */
    public $ExpiredTime;

    /**
     * @param string $RenewFlag 自动续费标示
     * @param string $ExpiredTime 预付费到期时间
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
        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }
    }
}

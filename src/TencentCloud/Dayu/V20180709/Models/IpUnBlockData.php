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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP解封记录
 *
 * @method string getIp() 获取IP
 * @method void setIp(string $Ip) 设置IP
 * @method string getBlockTime() 获取封堵时间
 * @method void setBlockTime(string $BlockTime) 设置封堵时间
 * @method string getUnBlockTime() 获取解封时间（实际解封时间）
 * @method void setUnBlockTime(string $UnBlockTime) 设置解封时间（实际解封时间）
 * @method string getActionType() 获取解封类型（user：自助解封；auto：自动解封； update：升级解封；bind：绑定高防包解封）
 * @method void setActionType(string $ActionType) 设置解封类型（user：自助解封；auto：自动解封； update：升级解封；bind：绑定高防包解封）
 */
class IpUnBlockData extends AbstractModel
{
    /**
     * @var string IP
     */
    public $Ip;

    /**
     * @var string 封堵时间
     */
    public $BlockTime;

    /**
     * @var string 解封时间（实际解封时间）
     */
    public $UnBlockTime;

    /**
     * @var string 解封类型（user：自助解封；auto：自动解封； update：升级解封；bind：绑定高防包解封）
     */
    public $ActionType;

    /**
     * @param string $Ip IP
     * @param string $BlockTime 封堵时间
     * @param string $UnBlockTime 解封时间（实际解封时间）
     * @param string $ActionType 解封类型（user：自助解封；auto：自动解封； update：升级解封；bind：绑定高防包解封）
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("BlockTime",$param) and $param["BlockTime"] !== null) {
            $this->BlockTime = $param["BlockTime"];
        }

        if (array_key_exists("UnBlockTime",$param) and $param["UnBlockTime"] !== null) {
            $this->UnBlockTime = $param["UnBlockTime"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }
    }
}

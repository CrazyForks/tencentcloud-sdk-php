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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListCustomBlacklist请求参数结构体
 *
 * @method integer getOffset() 获取偏移量，整型，从0开始
 * @method void setOffset(integer $Offset) 设置偏移量，整型，从0开始
 * @method integer getLimit() 获取限制数目，整型,不超过100
 * @method void setLimit(integer $Limit) 设置限制数目，整型,不超过100
 * @method integer getStatus() 获取筛选黑名单的状态，0:已过期，1:生效中, 2:全部
 * @method void setStatus(integer $Status) 设置筛选黑名单的状态，0:已过期，1:生效中, 2:全部
 * @method string getEmail() 获取黑名单中的邮箱地址
 * @method void setEmail(string $Email) 设置黑名单中的邮箱地址
 */
class ListCustomBlacklistRequest extends AbstractModel
{
    /**
     * @var integer 偏移量，整型，从0开始
     */
    public $Offset;

    /**
     * @var integer 限制数目，整型,不超过100
     */
    public $Limit;

    /**
     * @var integer 筛选黑名单的状态，0:已过期，1:生效中, 2:全部
     */
    public $Status;

    /**
     * @var string 黑名单中的邮箱地址
     */
    public $Email;

    /**
     * @param integer $Offset 偏移量，整型，从0开始
     * @param integer $Limit 限制数目，整型,不超过100
     * @param integer $Status 筛选黑名单的状态，0:已过期，1:生效中, 2:全部
     * @param string $Email 黑名单中的邮箱地址
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }
    }
}

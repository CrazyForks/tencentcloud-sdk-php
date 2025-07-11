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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecLogCleanSettingInfo返回参数结构体
 *
 * @method integer getReservesLimit() 获取触发清理的储量底线
 * @method void setReservesLimit(integer $ReservesLimit) 设置触发清理的储量底线
 * @method integer getReservesDeadline() 获取清理停止时的储量截至线
 * @method void setReservesDeadline(integer $ReservesDeadline) 设置清理停止时的储量截至线
 * @method integer getDayLimit() 获取触发清理的存储天数
 * @method void setDayLimit(integer $DayLimit) 设置触发清理的存储天数
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSecLogCleanSettingInfoResponse extends AbstractModel
{
    /**
     * @var integer 触发清理的储量底线
     */
    public $ReservesLimit;

    /**
     * @var integer 清理停止时的储量截至线
     */
    public $ReservesDeadline;

    /**
     * @var integer 触发清理的存储天数
     */
    public $DayLimit;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $ReservesLimit 触发清理的储量底线
     * @param integer $ReservesDeadline 清理停止时的储量截至线
     * @param integer $DayLimit 触发清理的存储天数
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ReservesLimit",$param) and $param["ReservesLimit"] !== null) {
            $this->ReservesLimit = $param["ReservesLimit"];
        }

        if (array_key_exists("ReservesDeadline",$param) and $param["ReservesDeadline"] !== null) {
            $this->ReservesDeadline = $param["ReservesDeadline"];
        }

        if (array_key_exists("DayLimit",$param) and $param["DayLimit"] !== null) {
            $this->DayLimit = $param["DayLimit"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

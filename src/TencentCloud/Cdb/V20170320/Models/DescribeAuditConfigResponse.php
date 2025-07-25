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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAuditConfig返回参数结构体
 *
 * @method integer getLogExpireDay() 获取审计日志保存时长。目前支持的值包括：[0，7，30，180，365，1095，1825]。
 * @method void setLogExpireDay(integer $LogExpireDay) 设置审计日志保存时长。目前支持的值包括：[0，7，30，180，365，1095，1825]。
 * @method string getLogType() 获取审计日志存储类型。目前支持的值包括："storage" - 存储型。
 * @method void setLogType(string $LogType) 设置审计日志存储类型。目前支持的值包括："storage" - 存储型。
 * @method string getIsClosing() 获取是否正在关闭审计。目前支持的值包括："false"-否，"true"-是
 * @method void setIsClosing(string $IsClosing) 设置是否正在关闭审计。目前支持的值包括："false"-否，"true"-是
 * @method string getCreateTime() 获取审计服务开通时间。
 * @method void setCreateTime(string $CreateTime) 设置审计服务开通时间。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAuditConfigResponse extends AbstractModel
{
    /**
     * @var integer 审计日志保存时长。目前支持的值包括：[0，7，30，180，365，1095，1825]。
     */
    public $LogExpireDay;

    /**
     * @var string 审计日志存储类型。目前支持的值包括："storage" - 存储型。
     */
    public $LogType;

    /**
     * @var string 是否正在关闭审计。目前支持的值包括："false"-否，"true"-是
     */
    public $IsClosing;

    /**
     * @var string 审计服务开通时间。
     */
    public $CreateTime;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $LogExpireDay 审计日志保存时长。目前支持的值包括：[0，7，30，180，365，1095，1825]。
     * @param string $LogType 审计日志存储类型。目前支持的值包括："storage" - 存储型。
     * @param string $IsClosing 是否正在关闭审计。目前支持的值包括："false"-否，"true"-是
     * @param string $CreateTime 审计服务开通时间。
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
        if (array_key_exists("LogExpireDay",$param) and $param["LogExpireDay"] !== null) {
            $this->LogExpireDay = $param["LogExpireDay"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("IsClosing",$param) and $param["IsClosing"] !== null) {
            $this->IsClosing = $param["IsClosing"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

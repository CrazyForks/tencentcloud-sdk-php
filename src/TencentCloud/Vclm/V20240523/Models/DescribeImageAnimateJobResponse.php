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
namespace TencentCloud\Vclm\V20240523\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeImageAnimateJob返回参数结构体
 *
 * @method string getStatus() 获取任务状态。WAIT：等待中，RUN：执行中，FAIL：任务失败，DONE：任务成功
 * @method void setStatus(string $Status) 设置任务状态。WAIT：等待中，RUN：执行中，FAIL：任务失败，DONE：任务成功
 * @method string getErrorCode() 获取错误码。
 * @method void setErrorCode(string $ErrorCode) 设置错误码。
 * @method string getErrorMessage() 获取错误信息。
 * @method void setErrorMessage(string $ErrorMessage) 设置错误信息。
 * @method string getResultVideoUrl() 获取结果视频URL。有效期 24 小时。
 * @method void setResultVideoUrl(string $ResultVideoUrl) 设置结果视频URL。有效期 24 小时。
 * @method string getMaskVideoUrl() 获取掩码视频链接
 * @method void setMaskVideoUrl(string $MaskVideoUrl) 设置掩码视频链接
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeImageAnimateJobResponse extends AbstractModel
{
    /**
     * @var string 任务状态。WAIT：等待中，RUN：执行中，FAIL：任务失败，DONE：任务成功
     */
    public $Status;

    /**
     * @var string 错误码。
     */
    public $ErrorCode;

    /**
     * @var string 错误信息。
     */
    public $ErrorMessage;

    /**
     * @var string 结果视频URL。有效期 24 小时。
     */
    public $ResultVideoUrl;

    /**
     * @var string 掩码视频链接
     */
    public $MaskVideoUrl;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Status 任务状态。WAIT：等待中，RUN：执行中，FAIL：任务失败，DONE：任务成功
     * @param string $ErrorCode 错误码。
     * @param string $ErrorMessage 错误信息。
     * @param string $ResultVideoUrl 结果视频URL。有效期 24 小时。
     * @param string $MaskVideoUrl 掩码视频链接
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("ResultVideoUrl",$param) and $param["ResultVideoUrl"] !== null) {
            $this->ResultVideoUrl = $param["ResultVideoUrl"];
        }

        if (array_key_exists("MaskVideoUrl",$param) and $param["MaskVideoUrl"] !== null) {
            $this->MaskVideoUrl = $param["MaskVideoUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

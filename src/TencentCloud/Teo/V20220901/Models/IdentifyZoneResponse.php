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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IdentifyZone返回参数结构体
 *
 * @method AscriptionInfo getAscription() 获取站点归属校验：Dns校验信息。
 * @method void setAscription(AscriptionInfo $Ascription) 设置站点归属校验：Dns校验信息。
 * @method FileAscriptionInfo getFileAscription() 获取站点归属权校验：文件校验信息。
 * @method void setFileAscription(FileAscriptionInfo $FileAscription) 设置站点归属权校验：文件校验信息。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class IdentifyZoneResponse extends AbstractModel
{
    /**
     * @var AscriptionInfo 站点归属校验：Dns校验信息。
     */
    public $Ascription;

    /**
     * @var FileAscriptionInfo 站点归属权校验：文件校验信息。
     */
    public $FileAscription;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param AscriptionInfo $Ascription 站点归属校验：Dns校验信息。
     * @param FileAscriptionInfo $FileAscription 站点归属权校验：文件校验信息。
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
        if (array_key_exists("Ascription",$param) and $param["Ascription"] !== null) {
            $this->Ascription = new AscriptionInfo();
            $this->Ascription->deserialize($param["Ascription"]);
        }

        if (array_key_exists("FileAscription",$param) and $param["FileAscription"] !== null) {
            $this->FileAscription = new FileAscriptionInfo();
            $this->FileAscription->deserialize($param["FileAscription"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

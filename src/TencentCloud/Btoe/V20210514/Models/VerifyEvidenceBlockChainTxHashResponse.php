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
namespace TencentCloud\Btoe\V20210514\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VerifyEvidenceBlockChainTxHash返回参数结构体
 *
 * @method boolean getResult() 获取核验结果，true为核验成功，fals为核验失败
 * @method void setResult(boolean $Result) 设置核验结果，true为核验成功，fals为核验失败
 * @method string getEvidenceTime() 获取存证时间，仅当核验结果为true时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEvidenceTime(string $EvidenceTime) 设置存证时间，仅当核验结果为true时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEvidenceId() 获取存证编码，仅当核验结果为true时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEvidenceId(string $EvidenceId) 设置存证编码，仅当核验结果为true时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class VerifyEvidenceBlockChainTxHashResponse extends AbstractModel
{
    /**
     * @var boolean 核验结果，true为核验成功，fals为核验失败
     */
    public $Result;

    /**
     * @var string 存证时间，仅当核验结果为true时返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EvidenceTime;

    /**
     * @var string 存证编码，仅当核验结果为true时返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EvidenceId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $Result 核验结果，true为核验成功，fals为核验失败
     * @param string $EvidenceTime 存证时间，仅当核验结果为true时返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EvidenceId 存证编码，仅当核验结果为true时返回
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("EvidenceTime",$param) and $param["EvidenceTime"] !== null) {
            $this->EvidenceTime = $param["EvidenceTime"];
        }

        if (array_key_exists("EvidenceId",$param) and $param["EvidenceId"] !== null) {
            $this->EvidenceId = $param["EvidenceId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RechargeMemberThirdPay返回参数结构体
 *
 * @method string getTxnReturnCode() 获取String(20)，返回码
 * @method void setTxnReturnCode(string $TxnReturnCode) 设置String(20)，返回码
 * @method string getTxnReturnMsg() 获取String(100)，返回信息
 * @method void setTxnReturnMsg(string $TxnReturnMsg) 设置String(100)，返回信息
 * @method string getCnsmrSeqNo() 获取String(22)，交易流水号
 * @method void setCnsmrSeqNo(string $CnsmrSeqNo) 设置String(22)，交易流水号
 * @method string getFrontSeqNo() 获取STRING(52)，前置流水号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFrontSeqNo(string $FrontSeqNo) 设置STRING(52)，前置流水号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMemberSubAcctPreAvailBal() 获取STRING(20)，会员子账户交易前可用余额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemberSubAcctPreAvailBal(string $MemberSubAcctPreAvailBal) 设置STRING(20)，会员子账户交易前可用余额
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReservedMsgOne() 获取STRING(300)，保留域1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReservedMsgOne(string $ReservedMsgOne) 设置STRING(300)，保留域1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReservedMsgTwo() 获取STRING(300)，保留域2
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReservedMsgTwo(string $ReservedMsgTwo) 设置STRING(300)，保留域2
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class RechargeMemberThirdPayResponse extends AbstractModel
{
    /**
     * @var string String(20)，返回码
     */
    public $TxnReturnCode;

    /**
     * @var string String(100)，返回信息
     */
    public $TxnReturnMsg;

    /**
     * @var string String(22)，交易流水号
     */
    public $CnsmrSeqNo;

    /**
     * @var string STRING(52)，前置流水号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FrontSeqNo;

    /**
     * @var string STRING(20)，会员子账户交易前可用余额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemberSubAcctPreAvailBal;

    /**
     * @var string STRING(300)，保留域1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReservedMsgOne;

    /**
     * @var string STRING(300)，保留域2
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReservedMsgTwo;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TxnReturnCode String(20)，返回码
     * @param string $TxnReturnMsg String(100)，返回信息
     * @param string $CnsmrSeqNo String(22)，交易流水号
     * @param string $FrontSeqNo STRING(52)，前置流水号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MemberSubAcctPreAvailBal STRING(20)，会员子账户交易前可用余额
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReservedMsgOne STRING(300)，保留域1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReservedMsgTwo STRING(300)，保留域2
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TxnReturnCode",$param) and $param["TxnReturnCode"] !== null) {
            $this->TxnReturnCode = $param["TxnReturnCode"];
        }

        if (array_key_exists("TxnReturnMsg",$param) and $param["TxnReturnMsg"] !== null) {
            $this->TxnReturnMsg = $param["TxnReturnMsg"];
        }

        if (array_key_exists("CnsmrSeqNo",$param) and $param["CnsmrSeqNo"] !== null) {
            $this->CnsmrSeqNo = $param["CnsmrSeqNo"];
        }

        if (array_key_exists("FrontSeqNo",$param) and $param["FrontSeqNo"] !== null) {
            $this->FrontSeqNo = $param["FrontSeqNo"];
        }

        if (array_key_exists("MemberSubAcctPreAvailBal",$param) and $param["MemberSubAcctPreAvailBal"] !== null) {
            $this->MemberSubAcctPreAvailBal = $param["MemberSubAcctPreAvailBal"];
        }

        if (array_key_exists("ReservedMsgOne",$param) and $param["ReservedMsgOne"] !== null) {
            $this->ReservedMsgOne = $param["ReservedMsgOne"];
        }

        if (array_key_exists("ReservedMsgTwo",$param) and $param["ReservedMsgTwo"] !== null) {
            $this->ReservedMsgTwo = $param["ReservedMsgTwo"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

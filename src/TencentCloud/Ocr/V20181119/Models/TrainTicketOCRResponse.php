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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TrainTicketOCR返回参数结构体
 *
 * @method string getTicketNum() 获取编号
 * @method void setTicketNum(string $TicketNum) 设置编号
 * @method string getStartStation() 获取出发站
 * @method void setStartStation(string $StartStation) 设置出发站
 * @method string getDestinationStation() 获取到达站
 * @method void setDestinationStation(string $DestinationStation) 设置到达站
 * @method string getDate() 获取出发时间
 * @method void setDate(string $Date) 设置出发时间
 * @method string getTrainNum() 获取车次
 * @method void setTrainNum(string $TrainNum) 设置车次
 * @method string getSeat() 获取座位号
 * @method void setSeat(string $Seat) 设置座位号
 * @method string getName() 获取姓名
 * @method void setName(string $Name) 设置姓名
 * @method string getPrice() 获取票价
 * @method void setPrice(string $Price) 设置票价
 * @method string getSeatCategory() 获取席别
 * @method void setSeatCategory(string $SeatCategory) 设置席别
 * @method string getID() 获取身份证号
 * @method void setID(string $ID) 设置身份证号
 * @method string getInvoiceType() 获取发票消费类型：交通
 * @method void setInvoiceType(string $InvoiceType) 设置发票消费类型：交通
 * @method string getSerialNumber() 获取序列号
 * @method void setSerialNumber(string $SerialNumber) 设置序列号
 * @method string getAdditionalCost() 获取加收票价
 * @method void setAdditionalCost(string $AdditionalCost) 设置加收票价
 * @method string getHandlingFee() 获取手续费
 * @method void setHandlingFee(string $HandlingFee) 设置手续费
 * @method string getLegalAmount() 获取大写金额（票面有大写金额该字段才有值）
 * @method void setLegalAmount(string $LegalAmount) 设置大写金额（票面有大写金额该字段才有值）
 * @method string getTicketStation() 获取售票站
 * @method void setTicketStation(string $TicketStation) 设置售票站
 * @method string getOriginalPrice() 获取原票价（一般有手续费的才有原始票价字段）
 * @method void setOriginalPrice(string $OriginalPrice) 设置原票价（一般有手续费的才有原始票价字段）
 * @method string getInvoiceStyle() 获取发票类型：火车票、火车票补票、火车票退票凭证
 * @method void setInvoiceStyle(string $InvoiceStyle) 设置发票类型：火车票、火车票补票、火车票退票凭证
 * @method string getReceiptNumber() 获取收据号码
 * @method void setReceiptNumber(string $ReceiptNumber) 设置收据号码
 * @method string getIsReceipt() 获取仅供报销使用：1为是，0为否
 * @method void setIsReceipt(string $IsReceipt) 设置仅供报销使用：1为是，0为否
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class TrainTicketOCRResponse extends AbstractModel
{
    /**
     * @var string 编号
     */
    public $TicketNum;

    /**
     * @var string 出发站
     */
    public $StartStation;

    /**
     * @var string 到达站
     */
    public $DestinationStation;

    /**
     * @var string 出发时间
     */
    public $Date;

    /**
     * @var string 车次
     */
    public $TrainNum;

    /**
     * @var string 座位号
     */
    public $Seat;

    /**
     * @var string 姓名
     */
    public $Name;

    /**
     * @var string 票价
     */
    public $Price;

    /**
     * @var string 席别
     */
    public $SeatCategory;

    /**
     * @var string 身份证号
     */
    public $ID;

    /**
     * @var string 发票消费类型：交通
     */
    public $InvoiceType;

    /**
     * @var string 序列号
     */
    public $SerialNumber;

    /**
     * @var string 加收票价
     */
    public $AdditionalCost;

    /**
     * @var string 手续费
     */
    public $HandlingFee;

    /**
     * @var string 大写金额（票面有大写金额该字段才有值）
     */
    public $LegalAmount;

    /**
     * @var string 售票站
     */
    public $TicketStation;

    /**
     * @var string 原票价（一般有手续费的才有原始票价字段）
     */
    public $OriginalPrice;

    /**
     * @var string 发票类型：火车票、火车票补票、火车票退票凭证
     */
    public $InvoiceStyle;

    /**
     * @var string 收据号码
     */
    public $ReceiptNumber;

    /**
     * @var string 仅供报销使用：1为是，0为否
     */
    public $IsReceipt;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TicketNum 编号
     * @param string $StartStation 出发站
     * @param string $DestinationStation 到达站
     * @param string $Date 出发时间
     * @param string $TrainNum 车次
     * @param string $Seat 座位号
     * @param string $Name 姓名
     * @param string $Price 票价
     * @param string $SeatCategory 席别
     * @param string $ID 身份证号
     * @param string $InvoiceType 发票消费类型：交通
     * @param string $SerialNumber 序列号
     * @param string $AdditionalCost 加收票价
     * @param string $HandlingFee 手续费
     * @param string $LegalAmount 大写金额（票面有大写金额该字段才有值）
     * @param string $TicketStation 售票站
     * @param string $OriginalPrice 原票价（一般有手续费的才有原始票价字段）
     * @param string $InvoiceStyle 发票类型：火车票、火车票补票、火车票退票凭证
     * @param string $ReceiptNumber 收据号码
     * @param string $IsReceipt 仅供报销使用：1为是，0为否
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
        if (array_key_exists("TicketNum",$param) and $param["TicketNum"] !== null) {
            $this->TicketNum = $param["TicketNum"];
        }

        if (array_key_exists("StartStation",$param) and $param["StartStation"] !== null) {
            $this->StartStation = $param["StartStation"];
        }

        if (array_key_exists("DestinationStation",$param) and $param["DestinationStation"] !== null) {
            $this->DestinationStation = $param["DestinationStation"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("TrainNum",$param) and $param["TrainNum"] !== null) {
            $this->TrainNum = $param["TrainNum"];
        }

        if (array_key_exists("Seat",$param) and $param["Seat"] !== null) {
            $this->Seat = $param["Seat"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("SeatCategory",$param) and $param["SeatCategory"] !== null) {
            $this->SeatCategory = $param["SeatCategory"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("InvoiceType",$param) and $param["InvoiceType"] !== null) {
            $this->InvoiceType = $param["InvoiceType"];
        }

        if (array_key_exists("SerialNumber",$param) and $param["SerialNumber"] !== null) {
            $this->SerialNumber = $param["SerialNumber"];
        }

        if (array_key_exists("AdditionalCost",$param) and $param["AdditionalCost"] !== null) {
            $this->AdditionalCost = $param["AdditionalCost"];
        }

        if (array_key_exists("HandlingFee",$param) and $param["HandlingFee"] !== null) {
            $this->HandlingFee = $param["HandlingFee"];
        }

        if (array_key_exists("LegalAmount",$param) and $param["LegalAmount"] !== null) {
            $this->LegalAmount = $param["LegalAmount"];
        }

        if (array_key_exists("TicketStation",$param) and $param["TicketStation"] !== null) {
            $this->TicketStation = $param["TicketStation"];
        }

        if (array_key_exists("OriginalPrice",$param) and $param["OriginalPrice"] !== null) {
            $this->OriginalPrice = $param["OriginalPrice"];
        }

        if (array_key_exists("InvoiceStyle",$param) and $param["InvoiceStyle"] !== null) {
            $this->InvoiceStyle = $param["InvoiceStyle"];
        }

        if (array_key_exists("ReceiptNumber",$param) and $param["ReceiptNumber"] !== null) {
            $this->ReceiptNumber = $param["ReceiptNumber"];
        }

        if (array_key_exists("IsReceipt",$param) and $param["IsReceipt"] !== null) {
            $this->IsReceipt = $param["IsReceipt"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

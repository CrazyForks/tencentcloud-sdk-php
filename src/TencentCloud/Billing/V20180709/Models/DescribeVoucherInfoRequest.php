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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVoucherInfo请求参数结构体
 *
 * @method integer getLimit() 获取一页多少条数据，默认是20条，最大不超过1000
 * @method void setLimit(integer $Limit) 设置一页多少条数据，默认是20条，最大不超过1000
 * @method integer getOffset() 获取第多少页，默认是1
 * @method void setOffset(integer $Offset) 设置第多少页，默认是1
 * @method string getStatus() 获取券状态：待使用：unUsed，已使用： used，已发货：delivered，已作废： cancel，已过期：overdue
 * @method void setStatus(string $Status) 设置券状态：待使用：unUsed，已使用： used，已发货：delivered，已作废： cancel，已过期：overdue
 * @method string getVoucherId() 获取代金券id
 * @method void setVoucherId(string $VoucherId) 设置代金券id
 * @method string getCodeId() 获取代金券订单id
 * @method void setCodeId(string $CodeId) 设置代金券订单id
 * @method string getProductCode() 获取商品码
 * @method void setProductCode(string $ProductCode) 设置商品码
 * @method string getActivityId() 获取活动id
 * @method void setActivityId(string $ActivityId) 设置活动id
 * @method string getVoucherName() 获取代金券名称
 * @method void setVoucherName(string $VoucherName) 设置代金券名称
 * @method string getTimeFrom() 获取发放开始时间,例：2021-01-01
 * @method void setTimeFrom(string $TimeFrom) 设置发放开始时间,例：2021-01-01
 * @method string getTimeTo() 获取发放结束时间，例：2021-01-01
 * @method void setTimeTo(string $TimeTo) 设置发放结束时间，例：2021-01-01
 * @method string getSortField() 获取指定排序字段：BeginTime开始时间、EndTime到期时间、CreateTime创建时间
 * @method void setSortField(string $SortField) 设置指定排序字段：BeginTime开始时间、EndTime到期时间、CreateTime创建时间
 * @method string getSortOrder() 获取指定升序降序：desc、asc
 * @method void setSortOrder(string $SortOrder) 设置指定升序降序：desc、asc
 * @method string getPayMode() 获取付费模式，postPay后付费/prePay预付费/riPay预留实例/""或者"*"表示全部模式，如果payMode为""或"*"，那么productCode与subProductCode必须传空
 * @method void setPayMode(string $PayMode) 设置付费模式，postPay后付费/prePay预付费/riPay预留实例/""或者"*"表示全部模式，如果payMode为""或"*"，那么productCode与subProductCode必须传空
 * @method string getPayScene() 获取付费场景PayMode=postPay时：spotpay-竞价实例,"settle account"-普通后付费PayMode=prePay时：purchase-包年包月新购，renew-包年包月续费（自动续费），modify-包年包月配置变更(变配）PayMode=riPay时：oneOffFee-预留实例预付，hourlyFee-预留实例每小时扣费，*-支持全部付费场景
 * @method void setPayScene(string $PayScene) 设置付费场景PayMode=postPay时：spotpay-竞价实例,"settle account"-普通后付费PayMode=prePay时：purchase-包年包月新购，renew-包年包月续费（自动续费），modify-包年包月配置变更(变配）PayMode=riPay时：oneOffFee-预留实例预付，hourlyFee-预留实例每小时扣费，*-支持全部付费场景
 * @method string getOperator() 获取操作人，默认就是用户uin
 * @method void setOperator(string $Operator) 设置操作人，默认就是用户uin
 * @method string getVoucherMainType() 获取代金券主类型 has_price 为有价现金券 no_price 为无价代金券
 * @method void setVoucherMainType(string $VoucherMainType) 设置代金券主类型 has_price 为有价现金券 no_price 为无价代金券
 * @method string getVoucherSubType() 获取代金券副类型 discount 为折扣券 deduct 为抵扣券
 * @method void setVoucherSubType(string $VoucherSubType) 设置代金券副类型 discount 为折扣券 deduct 为抵扣券
 * @method string getStartTimeFrom() 获取券有效时间开始时间
 * @method void setStartTimeFrom(string $StartTimeFrom) 设置券有效时间开始时间
 * @method string getStartTimeTo() 获取券有效时间结束时间
 * @method void setStartTimeTo(string $StartTimeTo) 设置券有效时间结束时间
 * @method string getEndTimeFrom() 获取券失效时间开始时间
 * @method void setEndTimeFrom(string $EndTimeFrom) 设置券失效时间开始时间
 * @method string getEndTimeTo() 获取券失效时间结束时间
 * @method void setEndTimeTo(string $EndTimeTo) 设置券失效时间结束时间
 * @method string getCreateTimeFrom() 获取发券时间开始时间
 * @method void setCreateTimeFrom(string $CreateTimeFrom) 设置发券时间开始时间
 * @method string getCreateTimeTo() 获取发券时间结束时间
 * @method void setCreateTimeTo(string $CreateTimeTo) 设置发券时间结束时间
 */
class DescribeVoucherInfoRequest extends AbstractModel
{
    /**
     * @var integer 一页多少条数据，默认是20条，最大不超过1000
     */
    public $Limit;

    /**
     * @var integer 第多少页，默认是1
     */
    public $Offset;

    /**
     * @var string 券状态：待使用：unUsed，已使用： used，已发货：delivered，已作废： cancel，已过期：overdue
     */
    public $Status;

    /**
     * @var string 代金券id
     */
    public $VoucherId;

    /**
     * @var string 代金券订单id
     */
    public $CodeId;

    /**
     * @var string 商品码
     */
    public $ProductCode;

    /**
     * @var string 活动id
     */
    public $ActivityId;

    /**
     * @var string 代金券名称
     */
    public $VoucherName;

    /**
     * @var string 发放开始时间,例：2021-01-01
     */
    public $TimeFrom;

    /**
     * @var string 发放结束时间，例：2021-01-01
     */
    public $TimeTo;

    /**
     * @var string 指定排序字段：BeginTime开始时间、EndTime到期时间、CreateTime创建时间
     */
    public $SortField;

    /**
     * @var string 指定升序降序：desc、asc
     */
    public $SortOrder;

    /**
     * @var string 付费模式，postPay后付费/prePay预付费/riPay预留实例/""或者"*"表示全部模式，如果payMode为""或"*"，那么productCode与subProductCode必须传空
     */
    public $PayMode;

    /**
     * @var string 付费场景PayMode=postPay时：spotpay-竞价实例,"settle account"-普通后付费PayMode=prePay时：purchase-包年包月新购，renew-包年包月续费（自动续费），modify-包年包月配置变更(变配）PayMode=riPay时：oneOffFee-预留实例预付，hourlyFee-预留实例每小时扣费，*-支持全部付费场景
     */
    public $PayScene;

    /**
     * @var string 操作人，默认就是用户uin
     */
    public $Operator;

    /**
     * @var string 代金券主类型 has_price 为有价现金券 no_price 为无价代金券
     */
    public $VoucherMainType;

    /**
     * @var string 代金券副类型 discount 为折扣券 deduct 为抵扣券
     */
    public $VoucherSubType;

    /**
     * @var string 券有效时间开始时间
     */
    public $StartTimeFrom;

    /**
     * @var string 券有效时间结束时间
     */
    public $StartTimeTo;

    /**
     * @var string 券失效时间开始时间
     */
    public $EndTimeFrom;

    /**
     * @var string 券失效时间结束时间
     */
    public $EndTimeTo;

    /**
     * @var string 发券时间开始时间
     */
    public $CreateTimeFrom;

    /**
     * @var string 发券时间结束时间
     */
    public $CreateTimeTo;

    /**
     * @param integer $Limit 一页多少条数据，默认是20条，最大不超过1000
     * @param integer $Offset 第多少页，默认是1
     * @param string $Status 券状态：待使用：unUsed，已使用： used，已发货：delivered，已作废： cancel，已过期：overdue
     * @param string $VoucherId 代金券id
     * @param string $CodeId 代金券订单id
     * @param string $ProductCode 商品码
     * @param string $ActivityId 活动id
     * @param string $VoucherName 代金券名称
     * @param string $TimeFrom 发放开始时间,例：2021-01-01
     * @param string $TimeTo 发放结束时间，例：2021-01-01
     * @param string $SortField 指定排序字段：BeginTime开始时间、EndTime到期时间、CreateTime创建时间
     * @param string $SortOrder 指定升序降序：desc、asc
     * @param string $PayMode 付费模式，postPay后付费/prePay预付费/riPay预留实例/""或者"*"表示全部模式，如果payMode为""或"*"，那么productCode与subProductCode必须传空
     * @param string $PayScene 付费场景PayMode=postPay时：spotpay-竞价实例,"settle account"-普通后付费PayMode=prePay时：purchase-包年包月新购，renew-包年包月续费（自动续费），modify-包年包月配置变更(变配）PayMode=riPay时：oneOffFee-预留实例预付，hourlyFee-预留实例每小时扣费，*-支持全部付费场景
     * @param string $Operator 操作人，默认就是用户uin
     * @param string $VoucherMainType 代金券主类型 has_price 为有价现金券 no_price 为无价代金券
     * @param string $VoucherSubType 代金券副类型 discount 为折扣券 deduct 为抵扣券
     * @param string $StartTimeFrom 券有效时间开始时间
     * @param string $StartTimeTo 券有效时间结束时间
     * @param string $EndTimeFrom 券失效时间开始时间
     * @param string $EndTimeTo 券失效时间结束时间
     * @param string $CreateTimeFrom 发券时间开始时间
     * @param string $CreateTimeTo 发券时间结束时间
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("VoucherId",$param) and $param["VoucherId"] !== null) {
            $this->VoucherId = $param["VoucherId"];
        }

        if (array_key_exists("CodeId",$param) and $param["CodeId"] !== null) {
            $this->CodeId = $param["CodeId"];
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("ActivityId",$param) and $param["ActivityId"] !== null) {
            $this->ActivityId = $param["ActivityId"];
        }

        if (array_key_exists("VoucherName",$param) and $param["VoucherName"] !== null) {
            $this->VoucherName = $param["VoucherName"];
        }

        if (array_key_exists("TimeFrom",$param) and $param["TimeFrom"] !== null) {
            $this->TimeFrom = $param["TimeFrom"];
        }

        if (array_key_exists("TimeTo",$param) and $param["TimeTo"] !== null) {
            $this->TimeTo = $param["TimeTo"];
        }

        if (array_key_exists("SortField",$param) and $param["SortField"] !== null) {
            $this->SortField = $param["SortField"];
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PayScene",$param) and $param["PayScene"] !== null) {
            $this->PayScene = $param["PayScene"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("VoucherMainType",$param) and $param["VoucherMainType"] !== null) {
            $this->VoucherMainType = $param["VoucherMainType"];
        }

        if (array_key_exists("VoucherSubType",$param) and $param["VoucherSubType"] !== null) {
            $this->VoucherSubType = $param["VoucherSubType"];
        }

        if (array_key_exists("StartTimeFrom",$param) and $param["StartTimeFrom"] !== null) {
            $this->StartTimeFrom = $param["StartTimeFrom"];
        }

        if (array_key_exists("StartTimeTo",$param) and $param["StartTimeTo"] !== null) {
            $this->StartTimeTo = $param["StartTimeTo"];
        }

        if (array_key_exists("EndTimeFrom",$param) and $param["EndTimeFrom"] !== null) {
            $this->EndTimeFrom = $param["EndTimeFrom"];
        }

        if (array_key_exists("EndTimeTo",$param) and $param["EndTimeTo"] !== null) {
            $this->EndTimeTo = $param["EndTimeTo"];
        }

        if (array_key_exists("CreateTimeFrom",$param) and $param["CreateTimeFrom"] !== null) {
            $this->CreateTimeFrom = $param["CreateTimeFrom"];
        }

        if (array_key_exists("CreateTimeTo",$param) and $param["CreateTimeTo"] !== null) {
            $this->CreateTimeTo = $param["CreateTimeTo"];
        }
    }
}

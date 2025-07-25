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
namespace TencentCloud\Iotvideo\V20211125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI模型信息
 *
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getProductName() 获取产品名称
 * @method void setProductName(string $ProductName) 设置产品名称
 * @method integer getStatus() 获取申请状态：1-已申请；2-已取消；3-已拒绝；4-已通过
 * @method void setStatus(integer $Status) 设置申请状态：1-已申请；2-已取消；3-已拒绝；4-已通过
 * @method integer getTotal() 获取可调用数量
 * @method void setTotal(integer $Total) 设置可调用数量
 * @method integer getUsed() 获取已调用数量
 * @method void setUsed(integer $Used) 设置已调用数量
 * @method integer getApplyTime() 获取申请时间
 * @method void setApplyTime(integer $ApplyTime) 设置申请时间
 * @method integer getApprovalTime() 获取审批通过时间
 * @method void setApprovalTime(integer $ApprovalTime) 设置审批通过时间
 */
class AIModelInfo extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 产品名称
     */
    public $ProductName;

    /**
     * @var integer 申请状态：1-已申请；2-已取消；3-已拒绝；4-已通过
     */
    public $Status;

    /**
     * @var integer 可调用数量
     */
    public $Total;

    /**
     * @var integer 已调用数量
     */
    public $Used;

    /**
     * @var integer 申请时间
     */
    public $ApplyTime;

    /**
     * @var integer 审批通过时间
     */
    public $ApprovalTime;

    /**
     * @param string $ProductId 产品ID
     * @param string $ProductName 产品名称
     * @param integer $Status 申请状态：1-已申请；2-已取消；3-已拒绝；4-已通过
     * @param integer $Total 可调用数量
     * @param integer $Used 已调用数量
     * @param integer $ApplyTime 申请时间
     * @param integer $ApprovalTime 审批通过时间
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Used",$param) and $param["Used"] !== null) {
            $this->Used = $param["Used"];
        }

        if (array_key_exists("ApplyTime",$param) and $param["ApplyTime"] !== null) {
            $this->ApplyTime = $param["ApplyTime"];
        }

        if (array_key_exists("ApprovalTime",$param) and $param["ApprovalTime"] !== null) {
            $this->ApprovalTime = $param["ApprovalTime"];
        }
    }
}

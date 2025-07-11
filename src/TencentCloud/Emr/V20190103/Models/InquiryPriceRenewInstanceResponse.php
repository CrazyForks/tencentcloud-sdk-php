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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquiryPriceRenewInstance返回参数结构体
 *
 * @method float getOriginalCost() 获取原价，单位为元。
 * @method void setOriginalCost(float $OriginalCost) 设置原价，单位为元。
 * @method float getDiscountCost() 获取折扣价，单位为元。
 * @method void setDiscountCost(float $DiscountCost) 设置折扣价，单位为元。
 * @method string getTimeUnit() 获取实例续费的时间单位。取值范围：
<li>m：表示月份。</li>
 * @method void setTimeUnit(string $TimeUnit) 设置实例续费的时间单位。取值范围：
<li>m：表示月份。</li>
 * @method integer getTimeSpan() 获取实例续费的时长。
 * @method void setTimeSpan(integer $TimeSpan) 设置实例续费的时长。
 * @method array getPriceDetail() 获取价格详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPriceDetail(array $PriceDetail) 设置价格详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNodeRenewPriceDetails() 获取节点续费询价明细列表
 * @method void setNodeRenewPriceDetails(array $NodeRenewPriceDetails) 设置节点续费询价明细列表
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class InquiryPriceRenewInstanceResponse extends AbstractModel
{
    /**
     * @var float 原价，单位为元。
     */
    public $OriginalCost;

    /**
     * @var float 折扣价，单位为元。
     */
    public $DiscountCost;

    /**
     * @var string 实例续费的时间单位。取值范围：
<li>m：表示月份。</li>
     */
    public $TimeUnit;

    /**
     * @var integer 实例续费的时长。
     */
    public $TimeSpan;

    /**
     * @var array 价格详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PriceDetail;

    /**
     * @var array 节点续费询价明细列表
     */
    public $NodeRenewPriceDetails;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param float $OriginalCost 原价，单位为元。
     * @param float $DiscountCost 折扣价，单位为元。
     * @param string $TimeUnit 实例续费的时间单位。取值范围：
<li>m：表示月份。</li>
     * @param integer $TimeSpan 实例续费的时长。
     * @param array $PriceDetail 价格详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NodeRenewPriceDetails 节点续费询价明细列表
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
        if (array_key_exists("OriginalCost",$param) and $param["OriginalCost"] !== null) {
            $this->OriginalCost = $param["OriginalCost"];
        }

        if (array_key_exists("DiscountCost",$param) and $param["DiscountCost"] !== null) {
            $this->DiscountCost = $param["DiscountCost"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("PriceDetail",$param) and $param["PriceDetail"] !== null) {
            $this->PriceDetail = [];
            foreach ($param["PriceDetail"] as $key => $value){
                $obj = new PriceDetail();
                $obj->deserialize($value);
                array_push($this->PriceDetail, $obj);
            }
        }

        if (array_key_exists("NodeRenewPriceDetails",$param) and $param["NodeRenewPriceDetails"] !== null) {
            $this->NodeRenewPriceDetails = [];
            foreach ($param["NodeRenewPriceDetails"] as $key => $value){
                $obj = new NodeRenewPriceDetail();
                $obj->deserialize($value);
                array_push($this->NodeRenewPriceDetails, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

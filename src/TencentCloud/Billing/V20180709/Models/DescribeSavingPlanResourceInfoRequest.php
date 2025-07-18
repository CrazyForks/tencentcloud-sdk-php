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
 * DescribeSavingPlanResourceInfo请求参数结构体
 *
 * @method integer getLimit() 获取数量，最大值为100
 * @method void setLimit(integer $Limit) 设置数量，最大值为100
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method string getCreateStartDate() 获取购买开始时间，格式yyyy-MM-dd
 * @method void setCreateStartDate(string $CreateStartDate) 设置购买开始时间，格式yyyy-MM-dd
 * @method string getCreateEndDate() 获取购买结束时间，格式yyyy-MM-dd
 * @method void setCreateEndDate(string $CreateEndDate) 设置购买结束时间，格式yyyy-MM-dd
 */
class DescribeSavingPlanResourceInfoRequest extends AbstractModel
{
    /**
     * @var integer 数量，最大值为100
     */
    public $Limit;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var string 购买开始时间，格式yyyy-MM-dd
     */
    public $CreateStartDate;

    /**
     * @var string 购买结束时间，格式yyyy-MM-dd
     */
    public $CreateEndDate;

    /**
     * @param integer $Limit 数量，最大值为100
     * @param integer $Offset 偏移量
     * @param string $CreateStartDate 购买开始时间，格式yyyy-MM-dd
     * @param string $CreateEndDate 购买结束时间，格式yyyy-MM-dd
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

        if (array_key_exists("CreateStartDate",$param) and $param["CreateStartDate"] !== null) {
            $this->CreateStartDate = $param["CreateStartDate"];
        }

        if (array_key_exists("CreateEndDate",$param) and $param["CreateEndDate"] !== null) {
            $this->CreateEndDate = $param["CreateEndDate"];
        }
    }
}

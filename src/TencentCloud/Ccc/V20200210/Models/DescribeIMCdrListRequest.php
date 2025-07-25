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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIMCdrList请求参数结构体
 *
 * @method integer getSdkAppId() 获取应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method void setSdkAppId(integer $SdkAppId) 设置应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
 * @method integer getStartTimestamp() 获取起始时间（必填），Unix 秒级时间戳
 * @method void setStartTimestamp(integer $StartTimestamp) 设置起始时间（必填），Unix 秒级时间戳
 * @method integer getEndTimestamp() 获取结束时间（必填），Unix 秒级时间戳
 * @method void setEndTimestamp(integer $EndTimestamp) 设置结束时间（必填），Unix 秒级时间戳
 * @method integer getLimit() 获取返回记录条数，最大为100默认20
 * @method void setLimit(integer $Limit) 设置返回记录条数，最大为100默认20
 * @method integer getOffset() 获取返回记录偏移，默认为 0
 * @method void setOffset(integer $Offset) 设置返回记录偏移，默认为 0
 * @method integer getType() 获取1为全媒体，2为文本客服，不填则查询全部
 * @method void setType(integer $Type) 设置1为全媒体，2为文本客服，不填则查询全部
 */
class DescribeIMCdrListRequest extends AbstractModel
{
    /**
     * @var integer 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     */
    public $SdkAppId;

    /**
     * @var integer 起始时间（必填），Unix 秒级时间戳
     */
    public $StartTimestamp;

    /**
     * @var integer 结束时间（必填），Unix 秒级时间戳
     */
    public $EndTimestamp;

    /**
     * @var integer 返回记录条数，最大为100默认20
     */
    public $Limit;

    /**
     * @var integer 返回记录偏移，默认为 0
     */
    public $Offset;

    /**
     * @var integer 1为全媒体，2为文本客服，不填则查询全部
     */
    public $Type;

    /**
     * @param integer $SdkAppId 应用 ID（必填），可以查看 https://console.cloud.tencent.com/ccc
     * @param integer $StartTimestamp 起始时间（必填），Unix 秒级时间戳
     * @param integer $EndTimestamp 结束时间（必填），Unix 秒级时间戳
     * @param integer $Limit 返回记录条数，最大为100默认20
     * @param integer $Offset 返回记录偏移，默认为 0
     * @param integer $Type 1为全媒体，2为文本客服，不填则查询全部
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("StartTimestamp",$param) and $param["StartTimestamp"] !== null) {
            $this->StartTimestamp = $param["StartTimestamp"];
        }

        if (array_key_exists("EndTimestamp",$param) and $param["EndTimestamp"] !== null) {
            $this->EndTimestamp = $param["EndTimestamp"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}

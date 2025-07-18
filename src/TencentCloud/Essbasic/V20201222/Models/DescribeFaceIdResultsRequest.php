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
namespace TencentCloud\Essbasic\V20201222\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFaceIdResults请求参数结构体
 *
 * @method Caller getCaller() 获取调用方信息
 * @method void setCaller(Caller $Caller) 设置调用方信息
 * @method string getWbAppId() 获取慧眼业务ID
 * @method void setWbAppId(string $WbAppId) 设置慧眼业务ID
 * @method array getOrderNumbers() 获取订单号(orderNo); 限制在3个或以内
 * @method void setOrderNumbers(array $OrderNumbers) 设置订单号(orderNo); 限制在3个或以内
 * @method integer getFileType() 获取1:视频+照片,2:照片,3:视频,0（或其他数字）:无; 可选
 * @method void setFileType(integer $FileType) 设置1:视频+照片,2:照片,3:视频,0（或其他数字）:无; 可选
 */
class DescribeFaceIdResultsRequest extends AbstractModel
{
    /**
     * @var Caller 调用方信息
     */
    public $Caller;

    /**
     * @var string 慧眼业务ID
     */
    public $WbAppId;

    /**
     * @var array 订单号(orderNo); 限制在3个或以内
     */
    public $OrderNumbers;

    /**
     * @var integer 1:视频+照片,2:照片,3:视频,0（或其他数字）:无; 可选
     */
    public $FileType;

    /**
     * @param Caller $Caller 调用方信息
     * @param string $WbAppId 慧眼业务ID
     * @param array $OrderNumbers 订单号(orderNo); 限制在3个或以内
     * @param integer $FileType 1:视频+照片,2:照片,3:视频,0（或其他数字）:无; 可选
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
        if (array_key_exists("Caller",$param) and $param["Caller"] !== null) {
            $this->Caller = new Caller();
            $this->Caller->deserialize($param["Caller"]);
        }

        if (array_key_exists("WbAppId",$param) and $param["WbAppId"] !== null) {
            $this->WbAppId = $param["WbAppId"];
        }

        if (array_key_exists("OrderNumbers",$param) and $param["OrderNumbers"] !== null) {
            $this->OrderNumbers = $param["OrderNumbers"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }
    }
}

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
namespace TencentCloud\Wav\V20210129\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryCrmStatistics请求参数结构体
 *
 * @method integer getBeginTime() 获取查询开始时间， 单位秒
 * @method void setBeginTime(integer $BeginTime) 设置查询开始时间， 单位秒
 * @method integer getEndTime() 获取查询结束时间， 单位秒
 * @method void setEndTime(integer $EndTime) 设置查询结束时间， 单位秒
 * @method string getCursor() 获取用于分页查询的游标，字符串类型，由上一次调用返回，首次调用可不填
 * @method void setCursor(string $Cursor) 设置用于分页查询的游标，字符串类型，由上一次调用返回，首次调用可不填
 * @method integer getLimit() 获取返回的最大记录数，整型，最大值100，默认值50，超过最大值时取最大值
 * @method void setLimit(integer $Limit) 设置返回的最大记录数，整型，最大值100，默认值50，超过最大值时取最大值
 * @method string getSalesId() 获取请求的企业成员id，为空时默认全租户
 * @method void setSalesId(string $SalesId) 设置请求的企业成员id，为空时默认全租户
 * @method integer getOrgId() 获取请求的部门id，为空时默认全租户
 * @method void setOrgId(integer $OrgId) 设置请求的部门id，为空时默认全租户
 */
class QueryCrmStatisticsRequest extends AbstractModel
{
    /**
     * @var integer 查询开始时间， 单位秒
     */
    public $BeginTime;

    /**
     * @var integer 查询结束时间， 单位秒
     */
    public $EndTime;

    /**
     * @var string 用于分页查询的游标，字符串类型，由上一次调用返回，首次调用可不填
     */
    public $Cursor;

    /**
     * @var integer 返回的最大记录数，整型，最大值100，默认值50，超过最大值时取最大值
     */
    public $Limit;

    /**
     * @var string 请求的企业成员id，为空时默认全租户
     */
    public $SalesId;

    /**
     * @var integer 请求的部门id，为空时默认全租户
     */
    public $OrgId;

    /**
     * @param integer $BeginTime 查询开始时间， 单位秒
     * @param integer $EndTime 查询结束时间， 单位秒
     * @param string $Cursor 用于分页查询的游标，字符串类型，由上一次调用返回，首次调用可不填
     * @param integer $Limit 返回的最大记录数，整型，最大值100，默认值50，超过最大值时取最大值
     * @param string $SalesId 请求的企业成员id，为空时默认全租户
     * @param integer $OrgId 请求的部门id，为空时默认全租户
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
        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Cursor",$param) and $param["Cursor"] !== null) {
            $this->Cursor = $param["Cursor"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SalesId",$param) and $param["SalesId"] !== null) {
            $this->SalesId = $param["SalesId"];
        }

        if (array_key_exists("OrgId",$param) and $param["OrgId"] !== null) {
            $this->OrgId = $param["OrgId"];
        }
    }
}

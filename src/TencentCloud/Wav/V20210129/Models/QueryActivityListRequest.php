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
 * QueryActivityList请求参数结构体
 *
 * @method string getCursor() 获取分页游标，对应结果返回的NextCursor,首次请求保持为空
 * @method void setCursor(string $Cursor) 设置分页游标，对应结果返回的NextCursor,首次请求保持为空
 * @method integer getLimit() 获取单页数据限制
 * @method void setLimit(integer $Limit) 设置单页数据限制
 */
class QueryActivityListRequest extends AbstractModel
{
    /**
     * @var string 分页游标，对应结果返回的NextCursor,首次请求保持为空
     */
    public $Cursor;

    /**
     * @var integer 单页数据限制
     */
    public $Limit;

    /**
     * @param string $Cursor 分页游标，对应结果返回的NextCursor,首次请求保持为空
     * @param integer $Limit 单页数据限制
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
        if (array_key_exists("Cursor",$param) and $param["Cursor"] !== null) {
            $this->Cursor = $param["Cursor"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}

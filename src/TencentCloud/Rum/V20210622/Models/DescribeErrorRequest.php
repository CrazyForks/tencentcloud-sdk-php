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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeError请求参数结构体
 *
 * @method string getDate() 获取日期
 * @method void setDate(string $Date) 设置日期
 * @method integer getID() 获取项目ID
 * @method void setID(integer $ID) 设置项目ID
 */
class DescribeErrorRequest extends AbstractModel
{
    /**
     * @var string 日期
     */
    public $Date;

    /**
     * @var integer 项目ID
     */
    public $ID;

    /**
     * @param string $Date 日期
     * @param integer $ID 项目ID
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
        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }
    }
}

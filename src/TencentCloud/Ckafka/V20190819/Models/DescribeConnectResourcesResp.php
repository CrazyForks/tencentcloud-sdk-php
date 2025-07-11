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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询连接源列表的返参
 *
 * @method integer getTotalCount() 获取连接源个数
 * @method void setTotalCount(integer $TotalCount) 设置连接源个数
 * @method array getConnectResourceList() 获取连接源数据
 * @method void setConnectResourceList(array $ConnectResourceList) 设置连接源数据
 */
class DescribeConnectResourcesResp extends AbstractModel
{
    /**
     * @var integer 连接源个数
     */
    public $TotalCount;

    /**
     * @var array 连接源数据
     */
    public $ConnectResourceList;

    /**
     * @param integer $TotalCount 连接源个数
     * @param array $ConnectResourceList 连接源数据
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("ConnectResourceList",$param) and $param["ConnectResourceList"] !== null) {
            $this->ConnectResourceList = [];
            foreach ($param["ConnectResourceList"] as $key => $value){
                $obj = new DescribeConnectResource();
                $obj->deserialize($value);
                array_push($this->ConnectResourceList, $obj);
            }
        }
    }
}

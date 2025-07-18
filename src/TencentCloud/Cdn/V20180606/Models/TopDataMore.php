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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 排序类型数据结构
 *
 * @method string getResource() 获取资源名称，根据查询条件不同分为以下几类：
 * @method void setResource(string $Resource) 设置资源名称，根据查询条件不同分为以下几类：
 * @method array getDetailData() 获取排序结果详情
 * @method void setDetailData(array $DetailData) 设置排序结果详情
 */
class TopDataMore extends AbstractModel
{
    /**
     * @var string 资源名称，根据查询条件不同分为以下几类：
     */
    public $Resource;

    /**
     * @var array 排序结果详情
     */
    public $DetailData;

    /**
     * @param string $Resource 资源名称，根据查询条件不同分为以下几类：
     * @param array $DetailData 排序结果详情
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
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("DetailData",$param) and $param["DetailData"] !== null) {
            $this->DetailData = [];
            foreach ($param["DetailData"] as $key => $value){
                $obj = new TopDetailDataMore();
                $obj->deserialize($value);
                array_push($this->DetailData, $obj);
            }
        }
    }
}

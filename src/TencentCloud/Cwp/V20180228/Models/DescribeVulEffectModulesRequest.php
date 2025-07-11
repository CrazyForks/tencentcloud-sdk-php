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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVulEffectModules请求参数结构体
 *
 * @method integer getLimit() 获取分页limit 最大100
 * @method void setLimit(integer $Limit) 设置分页limit 最大100
 * @method integer getOffset() 获取分页Offset
 * @method void setOffset(integer $Offset) 设置分页Offset
 * @method integer getVulId() 获取漏洞id
 * @method void setVulId(integer $VulId) 设置漏洞id
 * @method array getFilters() 获取过滤条件：
<li>Uuid - String数组 - Uuid串数组</li>
 * @method void setFilters(array $Filters) 设置过滤条件：
<li>Uuid - String数组 - Uuid串数组</li>
 */
class DescribeVulEffectModulesRequest extends AbstractModel
{
    /**
     * @var integer 分页limit 最大100
     */
    public $Limit;

    /**
     * @var integer 分页Offset
     */
    public $Offset;

    /**
     * @var integer 漏洞id
     */
    public $VulId;

    /**
     * @var array 过滤条件：
<li>Uuid - String数组 - Uuid串数组</li>
     */
    public $Filters;

    /**
     * @param integer $Limit 分页limit 最大100
     * @param integer $Offset 分页Offset
     * @param integer $VulId 漏洞id
     * @param array $Filters 过滤条件：
<li>Uuid - String数组 - Uuid串数组</li>
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

        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}

<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAliasDomains请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。不填时返回该AppID下所有别称域名信息列表。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。不填时返回该AppID下所有别称域名信息列表。
 * @method integer getOffset() 获取分页查询偏移量。默认值：0。
 * @method void setOffset(integer $Offset) 设置分页查询偏移量。默认值：0。
 * @method integer getLimit() 获取分页查询限制数目。默认值：20，最大值：100。
 * @method void setLimit(integer $Limit) 设置分页查询限制数目。默认值：20，最大值：100。
 * @method array getFilters() 获取过滤条件，Filters.Values的上限为20。详细的过滤条件如下：
<li>target-name<br>   按照【<strong>目标域名名称</strong>】进行过滤。<br>   类型：String<br>   必选：否</li><li>alias-id<br>   按照【<strong>别称域名ID</strong>】进行过滤。<br>   类型：String<br>   必选：否</li><li>alias-name<br>   按照【<strong>别称域名名称</strong>】进行过滤。<br>   类型：String<br>   必选：否</li><li>Fuzzy<br>   按照【<strong>是否模糊查询</strong>】进行过滤。仅支持过滤字段名为alias-name。模糊查询时，Values长度最小为1。<br>   类型：Boolean<br>   必选：否<br>   默认值：false</li>
 * @method void setFilters(array $Filters) 设置过滤条件，Filters.Values的上限为20。详细的过滤条件如下：
<li>target-name<br>   按照【<strong>目标域名名称</strong>】进行过滤。<br>   类型：String<br>   必选：否</li><li>alias-id<br>   按照【<strong>别称域名ID</strong>】进行过滤。<br>   类型：String<br>   必选：否</li><li>alias-name<br>   按照【<strong>别称域名名称</strong>】进行过滤。<br>   类型：String<br>   必选：否</li><li>Fuzzy<br>   按照【<strong>是否模糊查询</strong>】进行过滤。仅支持过滤字段名为alias-name。模糊查询时，Values长度最小为1。<br>   类型：Boolean<br>   必选：否<br>   默认值：false</li>
 */
class DescribeAliasDomainsRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。不填时返回该AppID下所有别称域名信息列表。
     */
    public $ZoneId;

    /**
     * @var integer 分页查询偏移量。默认值：0。
     */
    public $Offset;

    /**
     * @var integer 分页查询限制数目。默认值：20，最大值：100。
     */
    public $Limit;

    /**
     * @var array 过滤条件，Filters.Values的上限为20。详细的过滤条件如下：
<li>target-name<br>   按照【<strong>目标域名名称</strong>】进行过滤。<br>   类型：String<br>   必选：否</li><li>alias-id<br>   按照【<strong>别称域名ID</strong>】进行过滤。<br>   类型：String<br>   必选：否</li><li>alias-name<br>   按照【<strong>别称域名名称</strong>】进行过滤。<br>   类型：String<br>   必选：否</li><li>Fuzzy<br>   按照【<strong>是否模糊查询</strong>】进行过滤。仅支持过滤字段名为alias-name。模糊查询时，Values长度最小为1。<br>   类型：Boolean<br>   必选：否<br>   默认值：false</li>
     */
    public $Filters;

    /**
     * @param string $ZoneId 站点 ID。不填时返回该AppID下所有别称域名信息列表。
     * @param integer $Offset 分页查询偏移量。默认值：0。
     * @param integer $Limit 分页查询限制数目。默认值：20，最大值：100。
     * @param array $Filters 过滤条件，Filters.Values的上限为20。详细的过滤条件如下：
<li>target-name<br>   按照【<strong>目标域名名称</strong>】进行过滤。<br>   类型：String<br>   必选：否</li><li>alias-id<br>   按照【<strong>别称域名ID</strong>】进行过滤。<br>   类型：String<br>   必选：否</li><li>alias-name<br>   按照【<strong>别称域名名称</strong>】进行过滤。<br>   类型：String<br>   必选：否</li><li>Fuzzy<br>   按照【<strong>是否模糊查询</strong>】进行过滤。仅支持过滤字段名为alias-name。模糊查询时，Values长度最小为1。<br>   类型：Boolean<br>   必选：否<br>   默认值：false</li>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AdvancedFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCustomRuleList请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method integer getOffset() 获取偏移
 * @method void setOffset(integer $Offset) 设置偏移
 * @method integer getLimit() 获取容量
 * @method void setLimit(integer $Limit) 设置容量
 * @method array getFilters() 获取过滤数组,name可以是如下的值： RuleID,RuleName,Match
 * @method void setFilters(array $Filters) 设置过滤数组,name可以是如下的值： RuleID,RuleName,Match
 * @method string getOrder() 获取asc或者desc
 * @method void setOrder(string $Order) 设置asc或者desc
 * @method string getBy() 获取exp_ts或者mod_ts
 * @method void setBy(string $By) 设置exp_ts或者mod_ts
 * @method array getDomainList() 获取查询的域名列表,访问控制页面不用传
 * @method void setDomainList(array $DomainList) 设置查询的域名列表,访问控制页面不用传
 */
class DescribeCustomRuleListRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var integer 偏移
     */
    public $Offset;

    /**
     * @var integer 容量
     */
    public $Limit;

    /**
     * @var array 过滤数组,name可以是如下的值： RuleID,RuleName,Match
     */
    public $Filters;

    /**
     * @var string asc或者desc
     */
    public $Order;

    /**
     * @var string exp_ts或者mod_ts
     */
    public $By;

    /**
     * @var array 查询的域名列表,访问控制页面不用传
     */
    public $DomainList;

    /**
     * @param string $Domain 域名
     * @param integer $Offset 偏移
     * @param integer $Limit 容量
     * @param array $Filters 过滤数组,name可以是如下的值： RuleID,RuleName,Match
     * @param string $Order asc或者desc
     * @param string $By exp_ts或者mod_ts
     * @param array $DomainList 查询的域名列表,访问控制页面不用传
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
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
                $obj = new FiltersItemNew();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("DomainList",$param) and $param["DomainList"] !== null) {
            $this->DomainList = $param["DomainList"];
        }
    }
}

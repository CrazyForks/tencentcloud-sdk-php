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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMedias请求参数结构体
 *
 * @method integer getPageNumber() 获取分页序号，从1开始
 * @method void setPageNumber(integer $PageNumber) 设置分页序号，从1开始
 * @method integer getPageSize() 获取每个分页所包含的元素数量，最大为50
 * @method void setPageSize(integer $PageSize) 设置每个分页所包含的元素数量，最大为50
 * @method MediaFilter getMediaFilter() 获取列举过滤条件，相关限制相见MediaFilter
 * @method void setMediaFilter(MediaFilter $MediaFilter) 设置列举过滤条件，相关限制相见MediaFilter
 * @method SortBy getSortBy() 获取返回结果排序信息，By字段只支持CreateTime
 * @method void setSortBy(SortBy $SortBy) 设置返回结果排序信息，By字段只支持CreateTime
 */
class DescribeMediasRequest extends AbstractModel
{
    /**
     * @var integer 分页序号，从1开始
     */
    public $PageNumber;

    /**
     * @var integer 每个分页所包含的元素数量，最大为50
     */
    public $PageSize;

    /**
     * @var MediaFilter 列举过滤条件，相关限制相见MediaFilter
     */
    public $MediaFilter;

    /**
     * @var SortBy 返回结果排序信息，By字段只支持CreateTime
     */
    public $SortBy;

    /**
     * @param integer $PageNumber 分页序号，从1开始
     * @param integer $PageSize 每个分页所包含的元素数量，最大为50
     * @param MediaFilter $MediaFilter 列举过滤条件，相关限制相见MediaFilter
     * @param SortBy $SortBy 返回结果排序信息，By字段只支持CreateTime
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("MediaFilter",$param) and $param["MediaFilter"] !== null) {
            $this->MediaFilter = new MediaFilter();
            $this->MediaFilter->deserialize($param["MediaFilter"]);
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = new SortBy();
            $this->SortBy->deserialize($param["SortBy"]);
        }
    }
}

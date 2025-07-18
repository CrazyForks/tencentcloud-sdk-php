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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTableGroups请求参数结构体
 *
 * @method string getClusterId() 获取表格组所属集群ID
 * @method void setClusterId(string $ClusterId) 设置表格组所属集群ID
 * @method array getTableGroupIds() 获取表格组ID列表
 * @method void setTableGroupIds(array $TableGroupIds) 设置表格组ID列表
 * @method array getFilters() 获取过滤条件，本接口支持：TableGroupName，TableGroupId
 * @method void setFilters(array $Filters) 设置过滤条件，本接口支持：TableGroupName，TableGroupId
 * @method integer getOffset() 获取查询列表偏移量
 * @method void setOffset(integer $Offset) 设置查询列表偏移量
 * @method integer getLimit() 获取查询列表返回记录数
 * @method void setLimit(integer $Limit) 设置查询列表返回记录数
 */
class DescribeTableGroupsRequest extends AbstractModel
{
    /**
     * @var string 表格组所属集群ID
     */
    public $ClusterId;

    /**
     * @var array 表格组ID列表
     */
    public $TableGroupIds;

    /**
     * @var array 过滤条件，本接口支持：TableGroupName，TableGroupId
     */
    public $Filters;

    /**
     * @var integer 查询列表偏移量
     */
    public $Offset;

    /**
     * @var integer 查询列表返回记录数
     */
    public $Limit;

    /**
     * @param string $ClusterId 表格组所属集群ID
     * @param array $TableGroupIds 表格组ID列表
     * @param array $Filters 过滤条件，本接口支持：TableGroupName，TableGroupId
     * @param integer $Offset 查询列表偏移量
     * @param integer $Limit 查询列表返回记录数
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("TableGroupIds",$param) and $param["TableGroupIds"] !== null) {
            $this->TableGroupIds = $param["TableGroupIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}

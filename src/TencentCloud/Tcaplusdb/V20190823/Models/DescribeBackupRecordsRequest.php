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
 * DescribeBackupRecords请求参数结构体
 *
 * @method string getClusterId() 获取集群ID，用于获取指定集群的单据
 * @method void setClusterId(string $ClusterId) 设置集群ID，用于获取指定集群的单据
 * @method integer getLimit() 获取分页
 * @method void setLimit(integer $Limit) 设置分页
 * @method integer getOffset() 获取分页
 * @method void setOffset(integer $Offset) 设置分页
 * @method string getTableGroupId() 获取表格组id，用于过滤
 * @method void setTableGroupId(string $TableGroupId) 设置表格组id，用于过滤
 * @method string getTableName() 获取表格名，用于过滤
 * @method void setTableName(string $TableName) 设置表格名，用于过滤
 */
class DescribeBackupRecordsRequest extends AbstractModel
{
    /**
     * @var string 集群ID，用于获取指定集群的单据
     */
    public $ClusterId;

    /**
     * @var integer 分页
     */
    public $Limit;

    /**
     * @var integer 分页
     */
    public $Offset;

    /**
     * @var string 表格组id，用于过滤
     */
    public $TableGroupId;

    /**
     * @var string 表格名，用于过滤
     */
    public $TableName;

    /**
     * @param string $ClusterId 集群ID，用于获取指定集群的单据
     * @param integer $Limit 分页
     * @param integer $Offset 分页
     * @param string $TableGroupId 表格组id，用于过滤
     * @param string $TableName 表格名，用于过滤
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("TableGroupId",$param) and $param["TableGroupId"] !== null) {
            $this->TableGroupId = $param["TableGroupId"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }
    }
}

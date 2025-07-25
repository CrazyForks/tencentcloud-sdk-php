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
 * DeleteSnapshots请求参数结构体
 *
 * @method string getClusterId() 获取表格所属集群id
 * @method void setClusterId(string $ClusterId) 设置表格所属集群id
 * @method array getSelectedTables() 获取删除的快照列表
 * @method void setSelectedTables(array $SelectedTables) 设置删除的快照列表
 */
class DeleteSnapshotsRequest extends AbstractModel
{
    /**
     * @var string 表格所属集群id
     */
    public $ClusterId;

    /**
     * @var array 删除的快照列表
     */
    public $SelectedTables;

    /**
     * @param string $ClusterId 表格所属集群id
     * @param array $SelectedTables 删除的快照列表
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

        if (array_key_exists("SelectedTables",$param) and $param["SelectedTables"] !== null) {
            $this->SelectedTables = [];
            foreach ($param["SelectedTables"] as $key => $value){
                $obj = new SnapshotInfoNew();
                $obj->deserialize($value);
                array_push($this->SelectedTables, $obj);
            }
        }
    }
}

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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDSPADbMetaResources请求参数结构体
 *
 * @method string getDspaId() 获取DSPA实例ID。
 * @method void setDspaId(string $DspaId) 设置DSPA实例ID。
 * @method string getMetaType() 获取资源类型，支持：cdb（云数据库 MySQL）、dcdb（TDSQL MySQL版）、mariadb（云数据库 MariaDB）、postgres（云数据库 PostgreSQL）、cynosdbpg（TDSQL-C PostgreSQL版）、cynosdbmysql（TDSQL-C MySQL版）
 * @method void setMetaType(string $MetaType) 设置资源类型，支持：cdb（云数据库 MySQL）、dcdb（TDSQL MySQL版）、mariadb（云数据库 MariaDB）、postgres（云数据库 PostgreSQL）、cynosdbpg（TDSQL-C PostgreSQL版）、cynosdbmysql（TDSQL-C MySQL版）
 * @method string getResourceRegion() 获取资源所处地域。
 * @method void setResourceRegion(string $ResourceRegion) 设置资源所处地域。
 * @method string getUpdateStatus() 获取用来标记本次更新是否已经是最后一次，可选值：continue（后续还需要更新）、finished（本次是最后一次更新）。
 * @method void setUpdateStatus(string $UpdateStatus) 设置用来标记本次更新是否已经是最后一次，可选值：continue（后续还需要更新）、finished（本次是最后一次更新）。
 * @method string getUpdateId() 获取本次更新的ID号，用来标记一次完整的更新过程。
 * @method void setUpdateId(string $UpdateId) 设置本次更新的ID号，用来标记一次完整的更新过程。
 * @method array getItems() 获取云上资源列表。
 * @method void setItems(array $Items) 设置云上资源列表。
 * @method array getCloudResourceItems() 获取必填，云数据库资源列表。
 * @method void setCloudResourceItems(array $CloudResourceItems) 设置必填，云数据库资源列表。
 */
class CreateDSPADbMetaResourcesRequest extends AbstractModel
{
    /**
     * @var string DSPA实例ID。
     */
    public $DspaId;

    /**
     * @var string 资源类型，支持：cdb（云数据库 MySQL）、dcdb（TDSQL MySQL版）、mariadb（云数据库 MariaDB）、postgres（云数据库 PostgreSQL）、cynosdbpg（TDSQL-C PostgreSQL版）、cynosdbmysql（TDSQL-C MySQL版）
     */
    public $MetaType;

    /**
     * @var string 资源所处地域。
     * @deprecated
     */
    public $ResourceRegion;

    /**
     * @var string 用来标记本次更新是否已经是最后一次，可选值：continue（后续还需要更新）、finished（本次是最后一次更新）。
     * @deprecated
     */
    public $UpdateStatus;

    /**
     * @var string 本次更新的ID号，用来标记一次完整的更新过程。
     * @deprecated
     */
    public $UpdateId;

    /**
     * @var array 云上资源列表。
     * @deprecated
     */
    public $Items;

    /**
     * @var array 必填，云数据库资源列表。
     */
    public $CloudResourceItems;

    /**
     * @param string $DspaId DSPA实例ID。
     * @param string $MetaType 资源类型，支持：cdb（云数据库 MySQL）、dcdb（TDSQL MySQL版）、mariadb（云数据库 MariaDB）、postgres（云数据库 PostgreSQL）、cynosdbpg（TDSQL-C PostgreSQL版）、cynosdbmysql（TDSQL-C MySQL版）
     * @param string $ResourceRegion 资源所处地域。
     * @param string $UpdateStatus 用来标记本次更新是否已经是最后一次，可选值：continue（后续还需要更新）、finished（本次是最后一次更新）。
     * @param string $UpdateId 本次更新的ID号，用来标记一次完整的更新过程。
     * @param array $Items 云上资源列表。
     * @param array $CloudResourceItems 必填，云数据库资源列表。
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
        if (array_key_exists("DspaId",$param) and $param["DspaId"] !== null) {
            $this->DspaId = $param["DspaId"];
        }

        if (array_key_exists("MetaType",$param) and $param["MetaType"] !== null) {
            $this->MetaType = $param["MetaType"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("UpdateStatus",$param) and $param["UpdateStatus"] !== null) {
            $this->UpdateStatus = $param["UpdateStatus"];
        }

        if (array_key_exists("UpdateId",$param) and $param["UpdateId"] !== null) {
            $this->UpdateId = $param["UpdateId"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new DspaCloudResourceMeta();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("CloudResourceItems",$param) and $param["CloudResourceItems"] !== null) {
            $this->CloudResourceItems = [];
            foreach ($param["CloudResourceItems"] as $key => $value){
                $obj = new CloudResourceItem();
                $obj->deserialize($value);
                array_push($this->CloudResourceItems, $obj);
            }
        }
    }
}

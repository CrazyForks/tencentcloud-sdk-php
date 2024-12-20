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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例预期重启时间
 *
 * @method string getInstanceId() 获取实例ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例ID相同
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置实例ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例ID相同
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimeInSeconds() 获取预期重启时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeInSeconds(integer $TimeInSeconds) 设置预期重启时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceRebootTime extends AbstractModel
{
    /**
     * @var string 实例ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例ID相同
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var integer 预期重启时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeInSeconds;

    /**
     * @param string $InstanceId 实例ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例ID相同
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TimeInSeconds 预期重启时间
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("TimeInSeconds",$param) and $param["TimeInSeconds"] !== null) {
            $this->TimeInSeconds = $param["TimeInSeconds"];
        }
    }
}

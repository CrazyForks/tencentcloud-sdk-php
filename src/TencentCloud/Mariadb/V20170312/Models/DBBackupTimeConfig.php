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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云数据库实例备份时间配置信息
 *
 * @method string getInstanceId() 获取实例 ID
 * @method void setInstanceId(string $InstanceId) 设置实例 ID
 * @method string getStartBackupTime() 获取每天备份执行的区间的开始时间，格式 mm:ss，形如 22:00
 * @method void setStartBackupTime(string $StartBackupTime) 设置每天备份执行的区间的开始时间，格式 mm:ss，形如 22:00
 * @method string getEndBackupTime() 获取每天备份执行的区间的结束时间，格式 mm:ss，形如 23:00
 * @method void setEndBackupTime(string $EndBackupTime) 设置每天备份执行的区间的结束时间，格式 mm:ss，形如 23:00
 */
class DBBackupTimeConfig extends AbstractModel
{
    /**
     * @var string 实例 ID
     */
    public $InstanceId;

    /**
     * @var string 每天备份执行的区间的开始时间，格式 mm:ss，形如 22:00
     */
    public $StartBackupTime;

    /**
     * @var string 每天备份执行的区间的结束时间，格式 mm:ss，形如 23:00
     */
    public $EndBackupTime;

    /**
     * @param string $InstanceId 实例 ID
     * @param string $StartBackupTime 每天备份执行的区间的开始时间，格式 mm:ss，形如 22:00
     * @param string $EndBackupTime 每天备份执行的区间的结束时间，格式 mm:ss，形如 23:00
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

        if (array_key_exists("StartBackupTime",$param) and $param["StartBackupTime"] !== null) {
            $this->StartBackupTime = $param["StartBackupTime"];
        }

        if (array_key_exists("EndBackupTime",$param) and $param["EndBackupTime"] !== null) {
            $this->EndBackupTime = $param["EndBackupTime"];
        }
    }
}

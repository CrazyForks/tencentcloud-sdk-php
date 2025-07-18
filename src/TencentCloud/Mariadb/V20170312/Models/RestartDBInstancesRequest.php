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
 * RestartDBInstances请求参数结构体
 *
 * @method array getInstanceIds() 获取实例ID的数组
 * @method void setInstanceIds(array $InstanceIds) 设置实例ID的数组
 * @method string getRestartTime() 获取重启时间
 * @method void setRestartTime(string $RestartTime) 设置重启时间
 */
class RestartDBInstancesRequest extends AbstractModel
{
    /**
     * @var array 实例ID的数组
     */
    public $InstanceIds;

    /**
     * @var string 重启时间
     */
    public $RestartTime;

    /**
     * @param array $InstanceIds 实例ID的数组
     * @param string $RestartTime 重启时间
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("RestartTime",$param) and $param["RestartTime"] !== null) {
            $this->RestartTime = $param["RestartTime"];
        }
    }
}

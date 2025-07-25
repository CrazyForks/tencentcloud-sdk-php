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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务类型，任务如SQL查询等。
 *
 * @method SQLTask getSQLTask() 获取SQL查询任务
 * @method void setSQLTask(SQLTask $SQLTask) 设置SQL查询任务
 * @method SQLTask getSparkSQLTask() 获取Spark SQL查询任务
 * @method void setSparkSQLTask(SQLTask $SparkSQLTask) 设置Spark SQL查询任务
 */
class Task extends AbstractModel
{
    /**
     * @var SQLTask SQL查询任务
     */
    public $SQLTask;

    /**
     * @var SQLTask Spark SQL查询任务
     */
    public $SparkSQLTask;

    /**
     * @param SQLTask $SQLTask SQL查询任务
     * @param SQLTask $SparkSQLTask Spark SQL查询任务
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
        if (array_key_exists("SQLTask",$param) and $param["SQLTask"] !== null) {
            $this->SQLTask = new SQLTask();
            $this->SQLTask->deserialize($param["SQLTask"]);
        }

        if (array_key_exists("SparkSQLTask",$param) and $param["SparkSQLTask"] !== null) {
            $this->SparkSQLTask = new SQLTask();
            $this->SparkSQLTask->deserialize($param["SparkSQLTask"]);
        }
    }
}

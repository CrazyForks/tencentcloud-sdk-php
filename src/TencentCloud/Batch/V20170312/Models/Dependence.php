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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 依赖关系
 *
 * @method string getStartTask() 获取依赖关系的起点任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTask(string $StartTask) 设置依赖关系的起点任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTask() 获取依赖关系的终点任务名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTask(string $EndTask) 设置依赖关系的终点任务名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class Dependence extends AbstractModel
{
    /**
     * @var string 依赖关系的起点任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTask;

    /**
     * @var string 依赖关系的终点任务名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTask;

    /**
     * @param string $StartTask 依赖关系的起点任务名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTask 依赖关系的终点任务名称
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
        if (array_key_exists("StartTask",$param) and $param["StartTask"] !== null) {
            $this->StartTask = $param["StartTask"];
        }

        if (array_key_exists("EndTask",$param) and $param["EndTask"] !== null) {
            $this->EndTask = $param["EndTask"];
        }
    }
}

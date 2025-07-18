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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 画布所需的信息
 *
 * @method array getTasksList() 获取画布任务信息
 * @method void setTasksList(array $TasksList) 设置画布任务信息
 * @method array getLinksList() 获取画布任务链接信息
 * @method void setLinksList(array $LinksList) 设置画布任务链接信息
 * @method array getCirculateTaskList() 获取画布循环依赖任务信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCirculateTaskList(array $CirculateTaskList) 设置画布循环依赖任务信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class OpsTaskCanvasInfoList extends AbstractModel
{
    /**
     * @var array 画布任务信息
     */
    public $TasksList;

    /**
     * @var array 画布任务链接信息
     */
    public $LinksList;

    /**
     * @var array 画布循环依赖任务信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CirculateTaskList;

    /**
     * @param array $TasksList 画布任务信息
     * @param array $LinksList 画布任务链接信息
     * @param array $CirculateTaskList 画布循环依赖任务信息
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
        if (array_key_exists("TasksList",$param) and $param["TasksList"] !== null) {
            $this->TasksList = [];
            foreach ($param["TasksList"] as $key => $value){
                $obj = new OpsTaskCanvasDto();
                $obj->deserialize($value);
                array_push($this->TasksList, $obj);
            }
        }

        if (array_key_exists("LinksList",$param) and $param["LinksList"] !== null) {
            $this->LinksList = [];
            foreach ($param["LinksList"] as $key => $value){
                $obj = new OpsTaskLinkInfoDto();
                $obj->deserialize($value);
                array_push($this->LinksList, $obj);
            }
        }

        if (array_key_exists("CirculateTaskList",$param) and $param["CirculateTaskList"] !== null) {
            $this->CirculateTaskList = [];
            foreach ($param["CirculateTaskList"] as $key => $value){
                $obj = new OpsTaskCanvasDto();
                $obj->deserialize($value);
                array_push($this->CirculateTaskList, $obj);
            }
        }
    }
}

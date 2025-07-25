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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 除上海外其他区域日志集和日志主题信息
 *
 * @method LogSetInfo getLogset() 获取日志集信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogset(LogSetInfo $Logset) 设置日志集信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTopics() 获取日志主题信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopics(array $Topics) 设置日志主题信息列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExtraLogset extends AbstractModel
{
    /**
     * @var LogSetInfo 日志集信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Logset;

    /**
     * @var array 日志主题信息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Topics;

    /**
     * @param LogSetInfo $Logset 日志集信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Topics 日志主题信息列表
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
        if (array_key_exists("Logset",$param) and $param["Logset"] !== null) {
            $this->Logset = new LogSetInfo();
            $this->Logset->deserialize($param["Logset"]);
        }

        if (array_key_exists("Topics",$param) and $param["Topics"] !== null) {
            $this->Topics = [];
            foreach ($param["Topics"] as $key => $value){
                $obj = new TopicInfo();
                $obj->deserialize($value);
                array_push($this->Topics, $obj);
            }
        }
    }
}

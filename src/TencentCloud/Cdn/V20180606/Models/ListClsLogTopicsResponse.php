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
 * ListClsLogTopics返回参数结构体
 *
 * @method LogSetInfo getLogset() 获取上海区域日志集信息
 * @method void setLogset(LogSetInfo $Logset) 设置上海区域日志集信息
 * @method array getTopics() 获取上海区域日志主题信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopics(array $Topics) 设置上海区域日志主题信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getExtraLogset() 获取其他区域日志集信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtraLogset(array $ExtraLogset) 设置其他区域日志集信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ListClsLogTopicsResponse extends AbstractModel
{
    /**
     * @var LogSetInfo 上海区域日志集信息
     */
    public $Logset;

    /**
     * @var array 上海区域日志主题信息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Topics;

    /**
     * @var array 其他区域日志集信息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtraLogset;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param LogSetInfo $Logset 上海区域日志集信息
     * @param array $Topics 上海区域日志主题信息列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ExtraLogset 其他区域日志集信息列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("ExtraLogset",$param) and $param["ExtraLogset"] !== null) {
            $this->ExtraLogset = [];
            foreach ($param["ExtraLogset"] as $key => $value){
                $obj = new ExtraLogset();
                $obj->deserialize($value);
                array_push($this->ExtraLogset, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

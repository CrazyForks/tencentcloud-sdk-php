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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HLS专属录制参数
 *
 * @method integer getFlowContinueDuration() 获取HLS续流超时时间。
取值范围[0，1800]。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowContinueDuration(integer $FlowContinueDuration) 设置HLS续流超时时间。
取值范围[0，1800]。
注意：此字段可能返回 null，表示取不到有效值。
 */
class HlsSpecialParam extends AbstractModel
{
    /**
     * @var integer HLS续流超时时间。
取值范围[0，1800]。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowContinueDuration;

    /**
     * @param integer $FlowContinueDuration HLS续流超时时间。
取值范围[0，1800]。
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
        if (array_key_exists("FlowContinueDuration",$param) and $param["FlowContinueDuration"] !== null) {
            $this->FlowContinueDuration = $param["FlowContinueDuration"];
        }
    }
}

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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SLA 策略
 *
 * @method array getSLARules() 获取SLA 规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSLARules(array $SLARules) 设置SLA 规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method AlertChannel getAlertChannel() 获取告警通知渠道
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlertChannel(AlertChannel $AlertChannel) 设置告警通知渠道
注意：此字段可能返回 null，表示取不到有效值。
 */
class SLAPolicy extends AbstractModel
{
    /**
     * @var array SLA 规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SLARules;

    /**
     * @var AlertChannel 告警通知渠道
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlertChannel;

    /**
     * @param array $SLARules SLA 规则
注意：此字段可能返回 null，表示取不到有效值。
     * @param AlertChannel $AlertChannel 告警通知渠道
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
        if (array_key_exists("SLARules",$param) and $param["SLARules"] !== null) {
            $this->SLARules = [];
            foreach ($param["SLARules"] as $key => $value){
                $obj = new SLARule();
                $obj->deserialize($value);
                array_push($this->SLARules, $obj);
            }
        }

        if (array_key_exists("AlertChannel",$param) and $param["AlertChannel"] !== null) {
            $this->AlertChannel = new AlertChannel();
            $this->AlertChannel->deserialize($param["AlertChannel"]);
        }
    }
}

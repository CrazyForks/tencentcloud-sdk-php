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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 语音消息用量统计信息
 *
 * @method integer getDau() 获取离线语音DAU
 * @method void setDau(integer $Dau) 设置离线语音DAU
 */
class VoiceMessageStatisticsItem extends AbstractModel
{
    /**
     * @var integer 离线语音DAU
     */
    public $Dau;

    /**
     * @param integer $Dau 离线语音DAU
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
        if (array_key_exists("Dau",$param) and $param["Dau"] !== null) {
            $this->Dau = $param["Dau"];
        }
    }
}

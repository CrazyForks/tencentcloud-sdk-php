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
 * 日评分信息
 *
 * @method integer getStatisticsDate() 获取统计日期 时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatisticsDate(integer $StatisticsDate) 设置统计日期 时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getScore() 获取评分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScore(float $Score) 设置评分
注意：此字段可能返回 null，表示取不到有效值。
 */
class DailyScoreInfo extends AbstractModel
{
    /**
     * @var integer 统计日期 时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatisticsDate;

    /**
     * @var float 评分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Score;

    /**
     * @param integer $StatisticsDate 统计日期 时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Score 评分
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
        if (array_key_exists("StatisticsDate",$param) and $param["StatisticsDate"] !== null) {
            $this->StatisticsDate = $param["StatisticsDate"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }
    }
}

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
namespace TencentCloud\Cms\V20190321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 手机模型识别检测
 *
 * @method integer getEvilType() 获取恶意类型
100：正常
21000：综合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEvilType(integer $EvilType) 设置恶意类型
100：正常
21000：综合
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLabels() 获取特征中文描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabels(array $Labels) 设置特征中文描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScore() 获取分值范围 0-100，分数越高倾向越明显
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScore(integer $Score) 设置分值范围 0-100，分数越高倾向越明显
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHitFlag() 获取处置判定 0：正常 1：可疑
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHitFlag(integer $HitFlag) 设置处置判定 0：正常 1：可疑
注意：此字段可能返回 null，表示取不到有效值。
 */
class PhoneDetect extends AbstractModel
{
    /**
     * @var integer 恶意类型
100：正常
21000：综合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EvilType;

    /**
     * @var array 特征中文描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Labels;

    /**
     * @var integer 分值范围 0-100，分数越高倾向越明显
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Score;

    /**
     * @var integer 处置判定 0：正常 1：可疑
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HitFlag;

    /**
     * @param integer $EvilType 恶意类型
100：正常
21000：综合
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Labels 特征中文描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Score 分值范围 0-100，分数越高倾向越明显
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HitFlag 处置判定 0：正常 1：可疑
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
        if (array_key_exists("EvilType",$param) and $param["EvilType"] !== null) {
            $this->EvilType = $param["EvilType"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = $param["Labels"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("HitFlag",$param) and $param["HitFlag"] !== null) {
            $this->HitFlag = $param["HitFlag"];
        }
    }
}

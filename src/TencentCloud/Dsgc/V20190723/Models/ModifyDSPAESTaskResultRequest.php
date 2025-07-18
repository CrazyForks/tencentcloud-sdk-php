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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDSPAESTaskResult请求参数结构体
 *
 * @method string getDspaId() 获取DSPA实例ID
 * @method void setDspaId(string $DspaId) 设置DSPA实例ID
 * @method integer getFieldResultId() 获取字段扫描结果ID
 * @method void setFieldResultId(integer $FieldResultId) 设置字段扫描结果ID
 * @method integer getComplianceId() 获取合规组ID
 * @method void setComplianceId(integer $ComplianceId) 设置合规组ID
 * @method boolean getIsSetNonSensitiveField() 获取是否设置为非敏感字段
 * @method void setIsSetNonSensitiveField(boolean $IsSetNonSensitiveField) 设置是否设置为非敏感字段
 * @method integer getDestRuleId() 获取调整后新的规则ID
 * @method void setDestRuleId(integer $DestRuleId) 设置调整后新的规则ID
 * @method integer getDestCategoryId() 获取调整后新的分类ID
 * @method void setDestCategoryId(integer $DestCategoryId) 设置调整后新的分类ID
 * @method integer getDestLevelId() 获取调整后新的分级ID
 * @method void setDestLevelId(integer $DestLevelId) 设置调整后新的分级ID
 * @method integer getSrcRuleId() 获取调整前的规则id（系统识别的id）
 * @method void setSrcRuleId(integer $SrcRuleId) 设置调整前的规则id（系统识别的id）
 * @method integer getSrcCategoryId() 获取调整前的规则id（系统识别的id）
 * @method void setSrcCategoryId(integer $SrcCategoryId) 设置调整前的规则id（系统识别的id）
 * @method integer getSrcLevelId() 获取调整前的等级id
 * @method void setSrcLevelId(integer $SrcLevelId) 设置调整前的等级id
 * @method integer getIdentifyType() 获取0系统识别，1人工打标
 * @method void setIdentifyType(integer $IdentifyType) 设置0系统识别，1人工打标
 */
class ModifyDSPAESTaskResultRequest extends AbstractModel
{
    /**
     * @var string DSPA实例ID
     */
    public $DspaId;

    /**
     * @var integer 字段扫描结果ID
     */
    public $FieldResultId;

    /**
     * @var integer 合规组ID
     */
    public $ComplianceId;

    /**
     * @var boolean 是否设置为非敏感字段
     */
    public $IsSetNonSensitiveField;

    /**
     * @var integer 调整后新的规则ID
     */
    public $DestRuleId;

    /**
     * @var integer 调整后新的分类ID
     */
    public $DestCategoryId;

    /**
     * @var integer 调整后新的分级ID
     */
    public $DestLevelId;

    /**
     * @var integer 调整前的规则id（系统识别的id）
     */
    public $SrcRuleId;

    /**
     * @var integer 调整前的规则id（系统识别的id）
     */
    public $SrcCategoryId;

    /**
     * @var integer 调整前的等级id
     */
    public $SrcLevelId;

    /**
     * @var integer 0系统识别，1人工打标
     */
    public $IdentifyType;

    /**
     * @param string $DspaId DSPA实例ID
     * @param integer $FieldResultId 字段扫描结果ID
     * @param integer $ComplianceId 合规组ID
     * @param boolean $IsSetNonSensitiveField 是否设置为非敏感字段
     * @param integer $DestRuleId 调整后新的规则ID
     * @param integer $DestCategoryId 调整后新的分类ID
     * @param integer $DestLevelId 调整后新的分级ID
     * @param integer $SrcRuleId 调整前的规则id（系统识别的id）
     * @param integer $SrcCategoryId 调整前的规则id（系统识别的id）
     * @param integer $SrcLevelId 调整前的等级id
     * @param integer $IdentifyType 0系统识别，1人工打标
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
        if (array_key_exists("DspaId",$param) and $param["DspaId"] !== null) {
            $this->DspaId = $param["DspaId"];
        }

        if (array_key_exists("FieldResultId",$param) and $param["FieldResultId"] !== null) {
            $this->FieldResultId = $param["FieldResultId"];
        }

        if (array_key_exists("ComplianceId",$param) and $param["ComplianceId"] !== null) {
            $this->ComplianceId = $param["ComplianceId"];
        }

        if (array_key_exists("IsSetNonSensitiveField",$param) and $param["IsSetNonSensitiveField"] !== null) {
            $this->IsSetNonSensitiveField = $param["IsSetNonSensitiveField"];
        }

        if (array_key_exists("DestRuleId",$param) and $param["DestRuleId"] !== null) {
            $this->DestRuleId = $param["DestRuleId"];
        }

        if (array_key_exists("DestCategoryId",$param) and $param["DestCategoryId"] !== null) {
            $this->DestCategoryId = $param["DestCategoryId"];
        }

        if (array_key_exists("DestLevelId",$param) and $param["DestLevelId"] !== null) {
            $this->DestLevelId = $param["DestLevelId"];
        }

        if (array_key_exists("SrcRuleId",$param) and $param["SrcRuleId"] !== null) {
            $this->SrcRuleId = $param["SrcRuleId"];
        }

        if (array_key_exists("SrcCategoryId",$param) and $param["SrcCategoryId"] !== null) {
            $this->SrcCategoryId = $param["SrcCategoryId"];
        }

        if (array_key_exists("SrcLevelId",$param) and $param["SrcLevelId"] !== null) {
            $this->SrcLevelId = $param["SrcLevelId"];
        }

        if (array_key_exists("IdentifyType",$param) and $param["IdentifyType"] !== null) {
            $this->IdentifyType = $param["IdentifyType"];
        }
    }
}

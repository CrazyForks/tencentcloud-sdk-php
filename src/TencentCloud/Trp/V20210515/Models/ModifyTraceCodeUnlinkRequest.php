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
namespace TencentCloud\Trp\V20210515\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTraceCodeUnlink请求参数结构体
 *
 * @method string getBatchId() 获取批次ID
 * @method void setBatchId(string $BatchId) 设置批次ID
 * @method array getCodes() 获取溯源码列表
 * @method void setCodes(array $Codes) 设置溯源码列表
 * @method integer getCorpId() 获取企业ID
 * @method void setCorpId(integer $CorpId) 设置企业ID
 */
class ModifyTraceCodeUnlinkRequest extends AbstractModel
{
    /**
     * @var string 批次ID
     */
    public $BatchId;

    /**
     * @var array 溯源码列表
     */
    public $Codes;

    /**
     * @var integer 企业ID
     */
    public $CorpId;

    /**
     * @param string $BatchId 批次ID
     * @param array $Codes 溯源码列表
     * @param integer $CorpId 企业ID
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
        if (array_key_exists("BatchId",$param) and $param["BatchId"] !== null) {
            $this->BatchId = $param["BatchId"];
        }

        if (array_key_exists("Codes",$param) and $param["Codes"] !== null) {
            $this->Codes = $param["Codes"];
        }

        if (array_key_exists("CorpId",$param) and $param["CorpId"] !== null) {
            $this->CorpId = $param["CorpId"];
        }
    }
}

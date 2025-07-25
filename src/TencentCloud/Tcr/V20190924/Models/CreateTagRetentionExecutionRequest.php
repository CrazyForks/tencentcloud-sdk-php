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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTagRetentionExecution请求参数结构体
 *
 * @method string getRegistryId() 获取主实例iD
 * @method void setRegistryId(string $RegistryId) 设置主实例iD
 * @method integer getRetentionId() 获取版本保留规则Id
 * @method void setRetentionId(integer $RetentionId) 设置版本保留规则Id
 * @method boolean getDryRun() 获取是否模拟执行，默认值为false，即非模拟执行
 * @method void setDryRun(boolean $DryRun) 设置是否模拟执行，默认值为false，即非模拟执行
 */
class CreateTagRetentionExecutionRequest extends AbstractModel
{
    /**
     * @var string 主实例iD
     */
    public $RegistryId;

    /**
     * @var integer 版本保留规则Id
     */
    public $RetentionId;

    /**
     * @var boolean 是否模拟执行，默认值为false，即非模拟执行
     */
    public $DryRun;

    /**
     * @param string $RegistryId 主实例iD
     * @param integer $RetentionId 版本保留规则Id
     * @param boolean $DryRun 是否模拟执行，默认值为false，即非模拟执行
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("RetentionId",$param) and $param["RetentionId"] !== null) {
            $this->RetentionId = $param["RetentionId"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }
    }
}

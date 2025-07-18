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
namespace TencentCloud\Tem\V20201221\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分批发布策略配置
 *
 * @method integer getTotalBatchCount() 获取总分批数
 * @method void setTotalBatchCount(integer $TotalBatchCount) 设置总分批数
 * @method integer getBetaBatchNum() 获取beta分批实例数
 * @method void setBetaBatchNum(integer $BetaBatchNum) 设置beta分批实例数
 * @method integer getDeployStrategyType() 获取分批策略：0-全自动，1-全手动，beta分批一定是手动的，这里的策略指定的是剩余批次
 * @method void setDeployStrategyType(integer $DeployStrategyType) 设置分批策略：0-全自动，1-全手动，beta分批一定是手动的，这里的策略指定的是剩余批次
 * @method integer getBatchInterval() 获取每批暂停间隔
 * @method void setBatchInterval(integer $BatchInterval) 设置每批暂停间隔
 */
class DeployStrategyConf extends AbstractModel
{
    /**
     * @var integer 总分批数
     */
    public $TotalBatchCount;

    /**
     * @var integer beta分批实例数
     */
    public $BetaBatchNum;

    /**
     * @var integer 分批策略：0-全自动，1-全手动，beta分批一定是手动的，这里的策略指定的是剩余批次
     */
    public $DeployStrategyType;

    /**
     * @var integer 每批暂停间隔
     */
    public $BatchInterval;

    /**
     * @param integer $TotalBatchCount 总分批数
     * @param integer $BetaBatchNum beta分批实例数
     * @param integer $DeployStrategyType 分批策略：0-全自动，1-全手动，beta分批一定是手动的，这里的策略指定的是剩余批次
     * @param integer $BatchInterval 每批暂停间隔
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
        if (array_key_exists("TotalBatchCount",$param) and $param["TotalBatchCount"] !== null) {
            $this->TotalBatchCount = $param["TotalBatchCount"];
        }

        if (array_key_exists("BetaBatchNum",$param) and $param["BetaBatchNum"] !== null) {
            $this->BetaBatchNum = $param["BetaBatchNum"];
        }

        if (array_key_exists("DeployStrategyType",$param) and $param["DeployStrategyType"] !== null) {
            $this->DeployStrategyType = $param["DeployStrategyType"];
        }

        if (array_key_exists("BatchInterval",$param) and $param["BatchInterval"] !== null) {
            $this->BatchInterval = $param["BatchInterval"];
        }
    }
}

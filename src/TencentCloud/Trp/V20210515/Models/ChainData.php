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
 * 上链数据
 *
 * @method string getBlockHash() 获取区块hash
 * @method void setBlockHash(string $BlockHash) 设置区块hash
 * @method string getBlockHeight() 获取区块高度
 * @method void setBlockHeight(string $BlockHeight) 设置区块高度
 * @method string getBlockTime() 获取区块时间
 * @method void setBlockTime(string $BlockTime) 设置区块时间
 */
class ChainData extends AbstractModel
{
    /**
     * @var string 区块hash
     */
    public $BlockHash;

    /**
     * @var string 区块高度
     */
    public $BlockHeight;

    /**
     * @var string 区块时间
     */
    public $BlockTime;

    /**
     * @param string $BlockHash 区块hash
     * @param string $BlockHeight 区块高度
     * @param string $BlockTime 区块时间
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
        if (array_key_exists("BlockHash",$param) and $param["BlockHash"] !== null) {
            $this->BlockHash = $param["BlockHash"];
        }

        if (array_key_exists("BlockHeight",$param) and $param["BlockHeight"] !== null) {
            $this->BlockHeight = $param["BlockHeight"];
        }

        if (array_key_exists("BlockTime",$param) and $param["BlockTime"] !== null) {
            $this->BlockTime = $param["BlockTime"];
        }
    }
}

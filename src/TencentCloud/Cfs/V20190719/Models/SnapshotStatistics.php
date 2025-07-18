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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文件系统快照统计
 *
 * @method string getRegion() 获取地域
 * @method void setRegion(string $Region) 设置地域
 * @method integer getSnapshotNumber() 获取快照总个数
 * @method void setSnapshotNumber(integer $SnapshotNumber) 设置快照总个数
 * @method integer getSnapshotSize() 获取快照总容量，单位是MiB
 * @method void setSnapshotSize(integer $SnapshotSize) 设置快照总容量，单位是MiB
 */
class SnapshotStatistics extends AbstractModel
{
    /**
     * @var string 地域
     */
    public $Region;

    /**
     * @var integer 快照总个数
     */
    public $SnapshotNumber;

    /**
     * @var integer 快照总容量，单位是MiB
     */
    public $SnapshotSize;

    /**
     * @param string $Region 地域
     * @param integer $SnapshotNumber 快照总个数
     * @param integer $SnapshotSize 快照总容量，单位是MiB
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("SnapshotNumber",$param) and $param["SnapshotNumber"] !== null) {
            $this->SnapshotNumber = $param["SnapshotNumber"];
        }

        if (array_key_exists("SnapshotSize",$param) and $param["SnapshotSize"] !== null) {
            $this->SnapshotSize = $param["SnapshotSize"];
        }
    }
}

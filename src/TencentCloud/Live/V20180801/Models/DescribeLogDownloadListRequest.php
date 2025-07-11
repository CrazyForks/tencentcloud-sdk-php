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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLogDownloadList请求参数结构体
 *
 * @method string getStartTime() 获取开始时间，北京时间。
格式：yyyy-mm-dd HH:MM:SS。
注：此字段为北京时间（UTC+8时区）。
 * @method void setStartTime(string $StartTime) 设置开始时间，北京时间。
格式：yyyy-mm-dd HH:MM:SS。
注：此字段为北京时间（UTC+8时区）。
 * @method string getEndTime() 获取结束时间，北京时间。
格式：yyyy-mm-dd HH:MM:SS。
注意：结束时间 - 开始时间 <=7天。
注：此字段为北京时间（UTC+8时区）。
 * @method void setEndTime(string $EndTime) 设置结束时间，北京时间。
格式：yyyy-mm-dd HH:MM:SS。
注意：结束时间 - 开始时间 <=7天。
注：此字段为北京时间（UTC+8时区）。
 * @method array getPlayDomains() 获取域名列表。
 * @method void setPlayDomains(array $PlayDomains) 设置域名列表。
 * @method integer getIsFastLive() 获取快直播还是标准直播，0：标准直播，1：快直播。默认为0。
 * @method void setIsFastLive(integer $IsFastLive) 设置快直播还是标准直播，0：标准直播，1：快直播。默认为0。
 */
class DescribeLogDownloadListRequest extends AbstractModel
{
    /**
     * @var string 开始时间，北京时间。
格式：yyyy-mm-dd HH:MM:SS。
注：此字段为北京时间（UTC+8时区）。
     */
    public $StartTime;

    /**
     * @var string 结束时间，北京时间。
格式：yyyy-mm-dd HH:MM:SS。
注意：结束时间 - 开始时间 <=7天。
注：此字段为北京时间（UTC+8时区）。
     */
    public $EndTime;

    /**
     * @var array 域名列表。
     */
    public $PlayDomains;

    /**
     * @var integer 快直播还是标准直播，0：标准直播，1：快直播。默认为0。
     */
    public $IsFastLive;

    /**
     * @param string $StartTime 开始时间，北京时间。
格式：yyyy-mm-dd HH:MM:SS。
注：此字段为北京时间（UTC+8时区）。
     * @param string $EndTime 结束时间，北京时间。
格式：yyyy-mm-dd HH:MM:SS。
注意：结束时间 - 开始时间 <=7天。
注：此字段为北京时间（UTC+8时区）。
     * @param array $PlayDomains 域名列表。
     * @param integer $IsFastLive 快直播还是标准直播，0：标准直播，1：快直播。默认为0。
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("PlayDomains",$param) and $param["PlayDomains"] !== null) {
            $this->PlayDomains = $param["PlayDomains"];
        }

        if (array_key_exists("IsFastLive",$param) and $param["IsFastLive"] !== null) {
            $this->IsFastLive = $param["IsFastLive"];
        }
    }
}

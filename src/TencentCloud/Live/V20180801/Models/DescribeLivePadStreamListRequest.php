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
 * DescribeLivePadStreamList请求参数结构体
 *
 * @method string getAppName() 获取推流路径，与推流和播放地址中的AppName保持一致，默认为 live。
 * @method void setAppName(string $AppName) 设置推流路径，与推流和播放地址中的AppName保持一致，默认为 live。
 * @method string getDomainName() 获取您的推流域名。
 * @method void setDomainName(string $DomainName) 设置您的推流域名。
 * @method string getStreamName() 获取流名称。
 * @method void setStreamName(string $StreamName) 设置流名称。
 * @method integer getPageNum() 获取分页页数。
 * @method void setPageNum(integer $PageNum) 设置分页页数。
 * @method integer getPageSize() 获取每页个数。
 * @method void setPageSize(integer $PageSize) 设置每页个数。
 */
class DescribeLivePadStreamListRequest extends AbstractModel
{
    /**
     * @var string 推流路径，与推流和播放地址中的AppName保持一致，默认为 live。
     */
    public $AppName;

    /**
     * @var string 您的推流域名。
     */
    public $DomainName;

    /**
     * @var string 流名称。
     */
    public $StreamName;

    /**
     * @var integer 分页页数。
     */
    public $PageNum;

    /**
     * @var integer 每页个数。
     */
    public $PageSize;

    /**
     * @param string $AppName 推流路径，与推流和播放地址中的AppName保持一致，默认为 live。
     * @param string $DomainName 您的推流域名。
     * @param string $StreamName 流名称。
     * @param integer $PageNum 分页页数。
     * @param integer $PageSize 每页个数。
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
        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}

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
namespace TencentCloud\Tcbr\V20220217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 在线版本信息
 *
 * @method string getVersionName() 获取版本名
 * @method void setVersionName(string $VersionName) 设置版本名
 * @method string getImageUrl() 获取镜像url
 * @method void setImageUrl(string $ImageUrl) 设置镜像url
 * @method string getFlowRatio() 获取流量
 * @method void setFlowRatio(string $FlowRatio) 设置流量
 */
class OnlineVersionInfo extends AbstractModel
{
    /**
     * @var string 版本名
     */
    public $VersionName;

    /**
     * @var string 镜像url
     */
    public $ImageUrl;

    /**
     * @var string 流量
     */
    public $FlowRatio;

    /**
     * @param string $VersionName 版本名
     * @param string $ImageUrl 镜像url
     * @param string $FlowRatio 流量
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
        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("FlowRatio",$param) and $param["FlowRatio"] !== null) {
            $this->FlowRatio = $param["FlowRatio"];
        }
    }
}

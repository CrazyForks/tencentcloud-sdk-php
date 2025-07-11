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
namespace TencentCloud\Bmvpc\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyVpcAttribute请求参数结构体
 *
 * @method string getVpcId() 获取私有网络ID
 * @method void setVpcId(string $VpcId) 设置私有网络ID
 * @method string getVpcName() 获取私有网络名称
 * @method void setVpcName(string $VpcName) 设置私有网络名称
 * @method boolean getEnableMonitor() 获取是否开启内网监控，0为关闭，1为开启
 * @method void setEnableMonitor(boolean $EnableMonitor) 设置是否开启内网监控，0为关闭，1为开启
 */
class ModifyVpcAttributeRequest extends AbstractModel
{
    /**
     * @var string 私有网络ID
     */
    public $VpcId;

    /**
     * @var string 私有网络名称
     */
    public $VpcName;

    /**
     * @var boolean 是否开启内网监控，0为关闭，1为开启
     */
    public $EnableMonitor;

    /**
     * @param string $VpcId 私有网络ID
     * @param string $VpcName 私有网络名称
     * @param boolean $EnableMonitor 是否开启内网监控，0为关闭，1为开启
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("EnableMonitor",$param) and $param["EnableMonitor"] !== null) {
            $this->EnableMonitor = $param["EnableMonitor"];
        }
    }
}

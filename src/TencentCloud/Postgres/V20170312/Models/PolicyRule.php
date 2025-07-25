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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全组规则信息
 *
 * @method string getAction() 获取策略，ACCEPT 或者 DROP
 * @method void setAction(string $Action) 设置策略，ACCEPT 或者 DROP
 * @method string getCidrIp() 获取来源或目的 IP 或 IP 段，例如172.16.0.0/12
 * @method void setCidrIp(string $CidrIp) 设置来源或目的 IP 或 IP 段，例如172.16.0.0/12
 * @method string getPortRange() 获取端口
 * @method void setPortRange(string $PortRange) 设置端口
 * @method string getIpProtocol() 获取网络协议，支持 UDP、TCP 等
 * @method void setIpProtocol(string $IpProtocol) 设置网络协议，支持 UDP、TCP 等
 * @method string getDescription() 获取规则描述
 * @method void setDescription(string $Description) 设置规则描述
 */
class PolicyRule extends AbstractModel
{
    /**
     * @var string 策略，ACCEPT 或者 DROP
     */
    public $Action;

    /**
     * @var string 来源或目的 IP 或 IP 段，例如172.16.0.0/12
     */
    public $CidrIp;

    /**
     * @var string 端口
     */
    public $PortRange;

    /**
     * @var string 网络协议，支持 UDP、TCP 等
     */
    public $IpProtocol;

    /**
     * @var string 规则描述
     */
    public $Description;

    /**
     * @param string $Action 策略，ACCEPT 或者 DROP
     * @param string $CidrIp 来源或目的 IP 或 IP 段，例如172.16.0.0/12
     * @param string $PortRange 端口
     * @param string $IpProtocol 网络协议，支持 UDP、TCP 等
     * @param string $Description 规则描述
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("CidrIp",$param) and $param["CidrIp"] !== null) {
            $this->CidrIp = $param["CidrIp"];
        }

        if (array_key_exists("PortRange",$param) and $param["PortRange"] !== null) {
            $this->PortRange = $param["PortRange"];
        }

        if (array_key_exists("IpProtocol",$param) and $param["IpProtocol"] !== null) {
            $this->IpProtocol = $param["IpProtocol"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}

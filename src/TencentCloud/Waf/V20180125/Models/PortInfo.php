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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务端口配置
 *
 * @method integer getNginxServerId() 获取Nginx的服务器id
 * @method void setNginxServerId(integer $NginxServerId) 设置Nginx的服务器id
 * @method string getPort() 获取监听端口配置
 * @method void setPort(string $Port) 设置监听端口配置
 * @method string getProtocol() 获取与端口对应的协议
 * @method void setProtocol(string $Protocol) 设置与端口对应的协议
 * @method string getUpstreamPort() 获取回源端口
 * @method void setUpstreamPort(string $UpstreamPort) 设置回源端口
 * @method string getUpstreamProtocol() 获取回源协议
 * @method void setUpstreamProtocol(string $UpstreamProtocol) 设置回源协议
 */
class PortInfo extends AbstractModel
{
    /**
     * @var integer Nginx的服务器id
     */
    public $NginxServerId;

    /**
     * @var string 监听端口配置
     */
    public $Port;

    /**
     * @var string 与端口对应的协议
     */
    public $Protocol;

    /**
     * @var string 回源端口
     */
    public $UpstreamPort;

    /**
     * @var string 回源协议
     */
    public $UpstreamProtocol;

    /**
     * @param integer $NginxServerId Nginx的服务器id
     * @param string $Port 监听端口配置
     * @param string $Protocol 与端口对应的协议
     * @param string $UpstreamPort 回源端口
     * @param string $UpstreamProtocol 回源协议
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
        if (array_key_exists("NginxServerId",$param) and $param["NginxServerId"] !== null) {
            $this->NginxServerId = $param["NginxServerId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("UpstreamPort",$param) and $param["UpstreamPort"] !== null) {
            $this->UpstreamPort = $param["UpstreamPort"];
        }

        if (array_key_exists("UpstreamProtocol",$param) and $param["UpstreamProtocol"] !== null) {
            $this->UpstreamProtocol = $param["UpstreamProtocol"];
        }
    }
}

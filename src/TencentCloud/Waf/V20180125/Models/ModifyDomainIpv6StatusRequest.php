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
 * ModifyDomainIpv6Status请求参数结构体
 *
 * @method string getInstanceId() 获取需要修改的域名所属的实例ID
 * @method void setInstanceId(string $InstanceId) 设置需要修改的域名所属的实例ID
 * @method string getDomain() 获取需要修改的域名
 * @method void setDomain(string $Domain) 设置需要修改的域名
 * @method string getDomainId() 获取需要修改的域名ID
 * @method void setDomainId(string $DomainId) 设置需要修改的域名ID
 * @method integer getStatus() 获取修改域名的Ipv6开关为Status （1:开启 2:关闭）
 * @method void setStatus(integer $Status) 设置修改域名的Ipv6开关为Status （1:开启 2:关闭）
 */
class ModifyDomainIpv6StatusRequest extends AbstractModel
{
    /**
     * @var string 需要修改的域名所属的实例ID
     */
    public $InstanceId;

    /**
     * @var string 需要修改的域名
     */
    public $Domain;

    /**
     * @var string 需要修改的域名ID
     */
    public $DomainId;

    /**
     * @var integer 修改域名的Ipv6开关为Status （1:开启 2:关闭）
     */
    public $Status;

    /**
     * @param string $InstanceId 需要修改的域名所属的实例ID
     * @param string $Domain 需要修改的域名
     * @param string $DomainId 需要修改的域名ID
     * @param integer $Status 修改域名的Ipv6开关为Status （1:开启 2:关闭）
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}

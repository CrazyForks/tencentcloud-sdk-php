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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务的限流限速等配置
 *
 * @method boolean getEnableInstanceRpsLimit() 获取是否开启实例层面限流限速，true or false。true 则 InstanceRpsLimit 必填， false 则 InstanceRpsLimit 不生效
 * @method void setEnableInstanceRpsLimit(boolean $EnableInstanceRpsLimit) 设置是否开启实例层面限流限速，true or false。true 则 InstanceRpsLimit 必填， false 则 InstanceRpsLimit 不生效
 * @method integer getInstanceRpsLimit() 获取每个服务实例的 request per second 限速, 0 为不限流
 * @method void setInstanceRpsLimit(integer $InstanceRpsLimit) 设置每个服务实例的 request per second 限速, 0 为不限流
 * @method boolean getEnableInstanceReqLimit() 获取是否开启单实例最大并发数限制，true or false。true 则 InstanceReqLimit 必填， false 则 InstanceReqLimit 不生效
 * @method void setEnableInstanceReqLimit(boolean $EnableInstanceReqLimit) 设置是否开启单实例最大并发数限制，true or false。true 则 InstanceReqLimit 必填， false 则 InstanceReqLimit 不生效
 * @method integer getInstanceReqLimit() 获取每个服务实例的最大并发
 * @method void setInstanceReqLimit(integer $InstanceReqLimit) 设置每个服务实例的最大并发
 */
class ServiceLimit extends AbstractModel
{
    /**
     * @var boolean 是否开启实例层面限流限速，true or false。true 则 InstanceRpsLimit 必填， false 则 InstanceRpsLimit 不生效
     */
    public $EnableInstanceRpsLimit;

    /**
     * @var integer 每个服务实例的 request per second 限速, 0 为不限流
     */
    public $InstanceRpsLimit;

    /**
     * @var boolean 是否开启单实例最大并发数限制，true or false。true 则 InstanceReqLimit 必填， false 则 InstanceReqLimit 不生效
     */
    public $EnableInstanceReqLimit;

    /**
     * @var integer 每个服务实例的最大并发
     */
    public $InstanceReqLimit;

    /**
     * @param boolean $EnableInstanceRpsLimit 是否开启实例层面限流限速，true or false。true 则 InstanceRpsLimit 必填， false 则 InstanceRpsLimit 不生效
     * @param integer $InstanceRpsLimit 每个服务实例的 request per second 限速, 0 为不限流
     * @param boolean $EnableInstanceReqLimit 是否开启单实例最大并发数限制，true or false。true 则 InstanceReqLimit 必填， false 则 InstanceReqLimit 不生效
     * @param integer $InstanceReqLimit 每个服务实例的最大并发
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
        if (array_key_exists("EnableInstanceRpsLimit",$param) and $param["EnableInstanceRpsLimit"] !== null) {
            $this->EnableInstanceRpsLimit = $param["EnableInstanceRpsLimit"];
        }

        if (array_key_exists("InstanceRpsLimit",$param) and $param["InstanceRpsLimit"] !== null) {
            $this->InstanceRpsLimit = $param["InstanceRpsLimit"];
        }

        if (array_key_exists("EnableInstanceReqLimit",$param) and $param["EnableInstanceReqLimit"] !== null) {
            $this->EnableInstanceReqLimit = $param["EnableInstanceReqLimit"];
        }

        if (array_key_exists("InstanceReqLimit",$param) and $param["InstanceReqLimit"] !== null) {
            $this->InstanceReqLimit = $param["InstanceReqLimit"];
        }
    }
}

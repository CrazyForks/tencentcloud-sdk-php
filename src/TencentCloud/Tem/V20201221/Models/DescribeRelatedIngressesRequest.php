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
namespace TencentCloud\Tem\V20201221\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRelatedIngresses请求参数结构体
 *
 * @method string getNamespaceId() 获取环境 id
 * @method void setNamespaceId(string $NamespaceId) 设置环境 id
 * @method string getEksNamespace() 获取EKS namespace
 * @method void setEksNamespace(string $EksNamespace) 设置EKS namespace
 * @method integer getSourceChannel() 获取来源渠道
 * @method void setSourceChannel(integer $SourceChannel) 设置来源渠道
 * @method string getServiceId() 获取服务 ID
 * @method void setServiceId(string $ServiceId) 设置服务 ID
 */
class DescribeRelatedIngressesRequest extends AbstractModel
{
    /**
     * @var string 环境 id
     */
    public $NamespaceId;

    /**
     * @var string EKS namespace
     */
    public $EksNamespace;

    /**
     * @var integer 来源渠道
     */
    public $SourceChannel;

    /**
     * @var string 服务 ID
     */
    public $ServiceId;

    /**
     * @param string $NamespaceId 环境 id
     * @param string $EksNamespace EKS namespace
     * @param integer $SourceChannel 来源渠道
     * @param string $ServiceId 服务 ID
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
        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("EksNamespace",$param) and $param["EksNamespace"] !== null) {
            $this->EksNamespace = $param["EksNamespace"];
        }

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }
    }
}

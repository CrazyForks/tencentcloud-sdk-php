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
 * ModifyApiAnalyzeStatus请求参数结构体
 *
 * @method integer getStatus() 获取开关状态
 * @method void setStatus(integer $Status) 设置开关状态
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method array getTargetList() 获取需要批量开启的实体列表
 * @method void setTargetList(array $TargetList) 设置需要批量开启的实体列表
 */
class ModifyApiAnalyzeStatusRequest extends AbstractModel
{
    /**
     * @var integer 开关状态
     */
    public $Status;

    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var array 需要批量开启的实体列表
     */
    public $TargetList;

    /**
     * @param integer $Status 开关状态
     * @param string $Domain 域名
     * @param string $InstanceId 实例id
     * @param array $TargetList 需要批量开启的实体列表
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("TargetList",$param) and $param["TargetList"] !== null) {
            $this->TargetList = [];
            foreach ($param["TargetList"] as $key => $value){
                $obj = new TargetEntity();
                $obj->deserialize($value);
                array_push($this->TargetList, $obj);
            }
        }
    }
}

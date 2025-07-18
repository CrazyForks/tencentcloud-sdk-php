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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 加速通道接入点详细信息(包含id、地域、ip等）
 *
 * @method string getRegionId() 获取地域ID
 * @method void setRegionId(string $RegionId) 设置地域ID
 * @method string getRegionName() 获取地域名称
 * @method void setRegionName(string $RegionName) 设置地域名称
 * @method string getProxyId() 获取通道ID
 * @method void setProxyId(string $ProxyId) 设置通道ID
 * @method string getVip() 获取通道接入ip
 * @method void setVip(string $Vip) 设置通道接入ip
 * @method array getVipList() 获取三网通道VIP列表
 * @method void setVipList(array $VipList) 设置三网通道VIP列表
 * @method string getSourceRegionIdcType() 获取接入点IDC类型。ec或dc
 * @method void setSourceRegionIdcType(string $SourceRegionIdcType) 设置接入点IDC类型。ec或dc
 */
class ProxyAccessInfo extends AbstractModel
{
    /**
     * @var string 地域ID
     */
    public $RegionId;

    /**
     * @var string 地域名称
     */
    public $RegionName;

    /**
     * @var string 通道ID
     */
    public $ProxyId;

    /**
     * @var string 通道接入ip
     */
    public $Vip;

    /**
     * @var array 三网通道VIP列表
     */
    public $VipList;

    /**
     * @var string 接入点IDC类型。ec或dc
     */
    public $SourceRegionIdcType;

    /**
     * @param string $RegionId 地域ID
     * @param string $RegionName 地域名称
     * @param string $ProxyId 通道ID
     * @param string $Vip 通道接入ip
     * @param array $VipList 三网通道VIP列表
     * @param string $SourceRegionIdcType 接入点IDC类型。ec或dc
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
        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("VipList",$param) and $param["VipList"] !== null) {
            $this->VipList = [];
            foreach ($param["VipList"] as $key => $value){
                $obj = new IPDetail();
                $obj->deserialize($value);
                array_push($this->VipList, $obj);
            }
        }

        if (array_key_exists("SourceRegionIdcType",$param) and $param["SourceRegionIdcType"] !== null) {
            $this->SourceRegionIdcType = $param["SourceRegionIdcType"];
        }
    }
}

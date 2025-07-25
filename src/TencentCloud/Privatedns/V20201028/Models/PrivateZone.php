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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 私有域信息
 *
 * @method string getZoneId() 获取私有域id: zone-xxxxxxxx
 * @method void setZoneId(string $ZoneId) 设置私有域id: zone-xxxxxxxx
 * @method integer getOwnerUin() 获取域名所有者uin
 * @method void setOwnerUin(integer $OwnerUin) 设置域名所有者uin
 * @method string getDomain() 获取私有域名
 * @method void setDomain(string $Domain) 设置私有域名
 * @method string getCreatedOn() 获取创建时间
 * @method void setCreatedOn(string $CreatedOn) 设置创建时间
 * @method string getUpdatedOn() 获取修改时间
 * @method void setUpdatedOn(string $UpdatedOn) 设置修改时间
 * @method integer getRecordCount() 获取记录数
 * @method void setRecordCount(integer $RecordCount) 设置记录数
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method array getVpcSet() 获取绑定的Vpc列表
 * @method void setVpcSet(array $VpcSet) 设置绑定的Vpc列表
 * @method string getStatus() 获取私有域绑定VPC状态，未关联vpc：SUSPEND，已关联VPC：ENABLED
，关联VPC失败：FAILED
 * @method void setStatus(string $Status) 设置私有域绑定VPC状态，未关联vpc：SUSPEND，已关联VPC：ENABLED
，关联VPC失败：FAILED
 * @method string getDnsForwardStatus() 获取域名递归解析状态：开通：ENABLED, 关闭，DISABLED
 * @method void setDnsForwardStatus(string $DnsForwardStatus) 设置域名递归解析状态：开通：ENABLED, 关闭，DISABLED
 * @method array getTags() 获取标签键值对集合
 * @method void setTags(array $Tags) 设置标签键值对集合
 * @method array getAccountVpcSet() 获取绑定的关联账号的vpc列表
 * @method void setAccountVpcSet(array $AccountVpcSet) 设置绑定的关联账号的vpc列表
 * @method boolean getIsCustomTld() 获取是否自定义TLD
 * @method void setIsCustomTld(boolean $IsCustomTld) 设置是否自定义TLD
 * @method string getCnameSpeedupStatus() 获取CNAME加速状态：开通：ENABLED, 关闭，DISABLED
 * @method void setCnameSpeedupStatus(string $CnameSpeedupStatus) 设置CNAME加速状态：开通：ENABLED, 关闭，DISABLED
 * @method string getForwardRuleName() 获取转发规则名称
 * @method void setForwardRuleName(string $ForwardRuleName) 设置转发规则名称
 * @method string getForwardRuleType() 获取转发规则类型：云上到云下，DOWN；云下到云上，UP，目前只支持DOWN
 * @method void setForwardRuleType(string $ForwardRuleType) 设置转发规则类型：云上到云下，DOWN；云下到云上，UP，目前只支持DOWN
 * @method string getForwardAddress() 获取转发的地址
 * @method void setForwardAddress(string $ForwardAddress) 设置转发的地址
 * @method string getEndPointName() 获取终端节点名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndPointName(string $EndPointName) 设置终端节点名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDeletedVpcSet() 获取已删除的vpc
 * @method void setDeletedVpcSet(array $DeletedVpcSet) 设置已删除的vpc
 */
class PrivateZone extends AbstractModel
{
    /**
     * @var string 私有域id: zone-xxxxxxxx
     */
    public $ZoneId;

    /**
     * @var integer 域名所有者uin
     */
    public $OwnerUin;

    /**
     * @var string 私有域名
     */
    public $Domain;

    /**
     * @var string 创建时间
     */
    public $CreatedOn;

    /**
     * @var string 修改时间
     */
    public $UpdatedOn;

    /**
     * @var integer 记录数
     */
    public $RecordCount;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var array 绑定的Vpc列表
     */
    public $VpcSet;

    /**
     * @var string 私有域绑定VPC状态，未关联vpc：SUSPEND，已关联VPC：ENABLED
，关联VPC失败：FAILED
     */
    public $Status;

    /**
     * @var string 域名递归解析状态：开通：ENABLED, 关闭，DISABLED
     */
    public $DnsForwardStatus;

    /**
     * @var array 标签键值对集合
     */
    public $Tags;

    /**
     * @var array 绑定的关联账号的vpc列表
     */
    public $AccountVpcSet;

    /**
     * @var boolean 是否自定义TLD
     */
    public $IsCustomTld;

    /**
     * @var string CNAME加速状态：开通：ENABLED, 关闭，DISABLED
     */
    public $CnameSpeedupStatus;

    /**
     * @var string 转发规则名称
     */
    public $ForwardRuleName;

    /**
     * @var string 转发规则类型：云上到云下，DOWN；云下到云上，UP，目前只支持DOWN
     */
    public $ForwardRuleType;

    /**
     * @var string 转发的地址
     */
    public $ForwardAddress;

    /**
     * @var string 终端节点名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndPointName;

    /**
     * @var array 已删除的vpc
     */
    public $DeletedVpcSet;

    /**
     * @param string $ZoneId 私有域id: zone-xxxxxxxx
     * @param integer $OwnerUin 域名所有者uin
     * @param string $Domain 私有域名
     * @param string $CreatedOn 创建时间
     * @param string $UpdatedOn 修改时间
     * @param integer $RecordCount 记录数
     * @param string $Remark 备注
     * @param array $VpcSet 绑定的Vpc列表
     * @param string $Status 私有域绑定VPC状态，未关联vpc：SUSPEND，已关联VPC：ENABLED
，关联VPC失败：FAILED
     * @param string $DnsForwardStatus 域名递归解析状态：开通：ENABLED, 关闭，DISABLED
     * @param array $Tags 标签键值对集合
     * @param array $AccountVpcSet 绑定的关联账号的vpc列表
     * @param boolean $IsCustomTld 是否自定义TLD
     * @param string $CnameSpeedupStatus CNAME加速状态：开通：ENABLED, 关闭，DISABLED
     * @param string $ForwardRuleName 转发规则名称
     * @param string $ForwardRuleType 转发规则类型：云上到云下，DOWN；云下到云上，UP，目前只支持DOWN
     * @param string $ForwardAddress 转发的地址
     * @param string $EndPointName 终端节点名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DeletedVpcSet 已删除的vpc
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("UpdatedOn",$param) and $param["UpdatedOn"] !== null) {
            $this->UpdatedOn = $param["UpdatedOn"];
        }

        if (array_key_exists("RecordCount",$param) and $param["RecordCount"] !== null) {
            $this->RecordCount = $param["RecordCount"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("VpcSet",$param) and $param["VpcSet"] !== null) {
            $this->VpcSet = [];
            foreach ($param["VpcSet"] as $key => $value){
                $obj = new VpcInfo();
                $obj->deserialize($value);
                array_push($this->VpcSet, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DnsForwardStatus",$param) and $param["DnsForwardStatus"] !== null) {
            $this->DnsForwardStatus = $param["DnsForwardStatus"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("AccountVpcSet",$param) and $param["AccountVpcSet"] !== null) {
            $this->AccountVpcSet = [];
            foreach ($param["AccountVpcSet"] as $key => $value){
                $obj = new AccountVpcInfoOutput();
                $obj->deserialize($value);
                array_push($this->AccountVpcSet, $obj);
            }
        }

        if (array_key_exists("IsCustomTld",$param) and $param["IsCustomTld"] !== null) {
            $this->IsCustomTld = $param["IsCustomTld"];
        }

        if (array_key_exists("CnameSpeedupStatus",$param) and $param["CnameSpeedupStatus"] !== null) {
            $this->CnameSpeedupStatus = $param["CnameSpeedupStatus"];
        }

        if (array_key_exists("ForwardRuleName",$param) and $param["ForwardRuleName"] !== null) {
            $this->ForwardRuleName = $param["ForwardRuleName"];
        }

        if (array_key_exists("ForwardRuleType",$param) and $param["ForwardRuleType"] !== null) {
            $this->ForwardRuleType = $param["ForwardRuleType"];
        }

        if (array_key_exists("ForwardAddress",$param) and $param["ForwardAddress"] !== null) {
            $this->ForwardAddress = $param["ForwardAddress"];
        }

        if (array_key_exists("EndPointName",$param) and $param["EndPointName"] !== null) {
            $this->EndPointName = $param["EndPointName"];
        }

        if (array_key_exists("DeletedVpcSet",$param) and $param["DeletedVpcSet"] !== null) {
            $this->DeletedVpcSet = [];
            foreach ($param["DeletedVpcSet"] as $key => $value){
                $obj = new VpcInfo();
                $obj->deserialize($value);
                array_push($this->DeletedVpcSet, $obj);
            }
        }
    }
}

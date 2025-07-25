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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 主机列表
 *
 * @method string getMachineName() 获取主机名称。
 * @method void setMachineName(string $MachineName) 设置主机名称。
 * @method string getMachineOs() 获取主机系统。
 * @method void setMachineOs(string $MachineOs) 设置主机系统。
 * @method string getMachineStatus() 获取主机状态。 <li>OFFLINE: 离线 </li> <li>ONLINE: 在线</li> <li>SHUTDOWN: 已关机</li> <li>UNINSTALLED: 未防护</li>	
 * @method void setMachineStatus(string $MachineStatus) 设置主机状态。 <li>OFFLINE: 离线 </li> <li>ONLINE: 在线</li> <li>SHUTDOWN: 已关机</li> <li>UNINSTALLED: 未防护</li>	
 * @method string getAgentStatus() 获取ONLINE 防护中; OFFLINE 已离线;UNINStALLED 未安装
 * @method void setAgentStatus(string $AgentStatus) 设置ONLINE 防护中; OFFLINE 已离线;UNINStALLED 未安装
 * @method string getInstanceStatus() 获取RUNNING 运行中; STOPED 已关机; EXPIRED 待回收	
 * @method void setInstanceStatus(string $InstanceStatus) 设置RUNNING 运行中; STOPED 已关机; EXPIRED 待回收	
 * @method string getUuid() 获取主机安全Uuid，若客户端长时间不在线将返回空字符。
 * @method void setUuid(string $Uuid) 设置主机安全Uuid，若客户端长时间不在线将返回空字符。
 * @method string getQuuid() 获取CVM或BM机器唯一Uuid。
 * @method void setQuuid(string $Quuid) 设置CVM或BM机器唯一Uuid。
 * @method integer getVulNum() 获取漏洞数。
 * @method void setVulNum(integer $VulNum) 设置漏洞数。
 * @method string getMachineIp() 获取主机IP。
 * @method void setMachineIp(string $MachineIp) 设置主机IP。
 * @method boolean getIsProVersion() 获取是否是专业版。
<li>true： 是</li>
<li>false：否</li>
 * @method void setIsProVersion(boolean $IsProVersion) 设置是否是专业版。
<li>true： 是</li>
<li>false：否</li>
 * @method string getMachineWanIp() 获取主机外网IP。
 * @method void setMachineWanIp(string $MachineWanIp) 设置主机外网IP。
 * @method string getPayMode() 获取主机状态。
<li>POSTPAY: 表示后付费，即按量计费  </li>
<li>PREPAY: 表示预付费，即包年包月</li>
 * @method void setPayMode(string $PayMode) 设置主机状态。
<li>POSTPAY: 表示后付费，即按量计费  </li>
<li>PREPAY: 表示预付费，即包年包月</li>
 * @method integer getMalwareNum() 获取木马数。
 * @method void setMalwareNum(integer $MalwareNum) 设置木马数。
 * @method array getTag() 获取标签信息
 * @method void setTag(array $Tag) 设置标签信息
 * @method integer getBaselineNum() 获取基线风险数。
 * @method void setBaselineNum(integer $BaselineNum) 设置基线风险数。
 * @method integer getCyberAttackNum() 获取网络风险数。
 * @method void setCyberAttackNum(integer $CyberAttackNum) 设置网络风险数。
 * @method string getSecurityStatus() 获取风险状态。
<li>SAFE：安全</li>
<li>RISK：风险</li>
<li>UNKNOWN：未知</li>
 * @method void setSecurityStatus(string $SecurityStatus) 设置风险状态。
<li>SAFE：安全</li>
<li>RISK：风险</li>
<li>UNKNOWN：未知</li>
 * @method integer getInvasionNum() 获取入侵事件数
 * @method void setInvasionNum(integer $InvasionNum) 设置入侵事件数
 * @method RegionInfo getRegionInfo() 获取地域信息
 * @method void setRegionInfo(RegionInfo $RegionInfo) 设置地域信息
 * @method string getInstanceState() 获取实例状态 TERMINATED_PRO_VERSION 已销毁
 * @method void setInstanceState(string $InstanceState) 设置实例状态 TERMINATED_PRO_VERSION 已销毁
 * @method integer getLicenseStatus() 获取防篡改 授权状态 1 授权 0 未授权
 * @method void setLicenseStatus(integer $LicenseStatus) 设置防篡改 授权状态 1 授权 0 未授权
 * @method integer getProjectId() 获取项目ID
 * @method void setProjectId(integer $ProjectId) 设置项目ID
 * @method integer getHasAssetScan() 获取是否有资产扫描接口，0无，1有
 * @method void setHasAssetScan(integer $HasAssetScan) 设置是否有资产扫描接口，0无，1有
 * @method string getMachineType() 获取机器所属专区类型 CVM 云服务器, BM 黑石, ECM 边缘计算, LH 轻量应用服务器 ,Other 混合云专区
 * @method void setMachineType(string $MachineType) 设置机器所属专区类型 CVM 云服务器, BM 黑石, ECM 边缘计算, LH 轻量应用服务器 ,Other 混合云专区
 * @method string getKernelVersion() 获取内核版本
 * @method void setKernelVersion(string $KernelVersion) 设置内核版本
 * @method string getProtectType() 获取防护版本：BASIC_VERSION 基础版， PRO_VERSION 专业版，Flagship 旗舰版，GENERAL_DISCOUNT 轻量版
 * @method void setProtectType(string $ProtectType) 设置防护版本：BASIC_VERSION 基础版， PRO_VERSION 专业版，Flagship 旗舰版，GENERAL_DISCOUNT 轻量版
 * @method array getCloudTags() 获取云标签信息
 * @method void setCloudTags(array $CloudTags) 设置云标签信息
 * @method integer getIsAddedOnTheFifteen() 获取是否15天内新增的主机 0：非15天内新增的主机，1：15天内增加的主机
 * @method void setIsAddedOnTheFifteen(integer $IsAddedOnTheFifteen) 设置是否15天内新增的主机 0：非15天内新增的主机，1：15天内增加的主机
 * @method string getIpList() 获取主机ip列表
 * @method void setIpList(string $IpList) 设置主机ip列表
 * @method string getVpcId() 获取所属网络
 * @method void setVpcId(string $VpcId) 设置所属网络
 * @method MachineExtraInfo getMachineExtraInfo() 获取附加信息
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) 设置附加信息
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getRemark() 获取备注信息
 * @method void setRemark(string $Remark) 设置备注信息
 * @method string getAgentVersion() 获取主机安全agent版本
 * @method void setAgentVersion(string $AgentVersion) 设置主机安全agent版本
 */
class Machine extends AbstractModel
{
    /**
     * @var string 主机名称。
     */
    public $MachineName;

    /**
     * @var string 主机系统。
     */
    public $MachineOs;

    /**
     * @var string 主机状态。 <li>OFFLINE: 离线 </li> <li>ONLINE: 在线</li> <li>SHUTDOWN: 已关机</li> <li>UNINSTALLED: 未防护</li>	
     */
    public $MachineStatus;

    /**
     * @var string ONLINE 防护中; OFFLINE 已离线;UNINStALLED 未安装
     */
    public $AgentStatus;

    /**
     * @var string RUNNING 运行中; STOPED 已关机; EXPIRED 待回收	
     */
    public $InstanceStatus;

    /**
     * @var string 主机安全Uuid，若客户端长时间不在线将返回空字符。
     */
    public $Uuid;

    /**
     * @var string CVM或BM机器唯一Uuid。
     */
    public $Quuid;

    /**
     * @var integer 漏洞数。
     */
    public $VulNum;

    /**
     * @var string 主机IP。
     */
    public $MachineIp;

    /**
     * @var boolean 是否是专业版。
<li>true： 是</li>
<li>false：否</li>
     */
    public $IsProVersion;

    /**
     * @var string 主机外网IP。
     */
    public $MachineWanIp;

    /**
     * @var string 主机状态。
<li>POSTPAY: 表示后付费，即按量计费  </li>
<li>PREPAY: 表示预付费，即包年包月</li>
     */
    public $PayMode;

    /**
     * @var integer 木马数。
     */
    public $MalwareNum;

    /**
     * @var array 标签信息
     */
    public $Tag;

    /**
     * @var integer 基线风险数。
     */
    public $BaselineNum;

    /**
     * @var integer 网络风险数。
     */
    public $CyberAttackNum;

    /**
     * @var string 风险状态。
<li>SAFE：安全</li>
<li>RISK：风险</li>
<li>UNKNOWN：未知</li>
     */
    public $SecurityStatus;

    /**
     * @var integer 入侵事件数
     */
    public $InvasionNum;

    /**
     * @var RegionInfo 地域信息
     */
    public $RegionInfo;

    /**
     * @var string 实例状态 TERMINATED_PRO_VERSION 已销毁
     */
    public $InstanceState;

    /**
     * @var integer 防篡改 授权状态 1 授权 0 未授权
     */
    public $LicenseStatus;

    /**
     * @var integer 项目ID
     */
    public $ProjectId;

    /**
     * @var integer 是否有资产扫描接口，0无，1有
     */
    public $HasAssetScan;

    /**
     * @var string 机器所属专区类型 CVM 云服务器, BM 黑石, ECM 边缘计算, LH 轻量应用服务器 ,Other 混合云专区
     */
    public $MachineType;

    /**
     * @var string 内核版本
     */
    public $KernelVersion;

    /**
     * @var string 防护版本：BASIC_VERSION 基础版， PRO_VERSION 专业版，Flagship 旗舰版，GENERAL_DISCOUNT 轻量版
     */
    public $ProtectType;

    /**
     * @var array 云标签信息
     */
    public $CloudTags;

    /**
     * @var integer 是否15天内新增的主机 0：非15天内新增的主机，1：15天内增加的主机
     */
    public $IsAddedOnTheFifteen;

    /**
     * @var string 主机ip列表
     */
    public $IpList;

    /**
     * @var string 所属网络
     */
    public $VpcId;

    /**
     * @var MachineExtraInfo 附加信息
     */
    public $MachineExtraInfo;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 备注信息
     */
    public $Remark;

    /**
     * @var string 主机安全agent版本
     */
    public $AgentVersion;

    /**
     * @param string $MachineName 主机名称。
     * @param string $MachineOs 主机系统。
     * @param string $MachineStatus 主机状态。 <li>OFFLINE: 离线 </li> <li>ONLINE: 在线</li> <li>SHUTDOWN: 已关机</li> <li>UNINSTALLED: 未防护</li>	
     * @param string $AgentStatus ONLINE 防护中; OFFLINE 已离线;UNINStALLED 未安装
     * @param string $InstanceStatus RUNNING 运行中; STOPED 已关机; EXPIRED 待回收	
     * @param string $Uuid 主机安全Uuid，若客户端长时间不在线将返回空字符。
     * @param string $Quuid CVM或BM机器唯一Uuid。
     * @param integer $VulNum 漏洞数。
     * @param string $MachineIp 主机IP。
     * @param boolean $IsProVersion 是否是专业版。
<li>true： 是</li>
<li>false：否</li>
     * @param string $MachineWanIp 主机外网IP。
     * @param string $PayMode 主机状态。
<li>POSTPAY: 表示后付费，即按量计费  </li>
<li>PREPAY: 表示预付费，即包年包月</li>
     * @param integer $MalwareNum 木马数。
     * @param array $Tag 标签信息
     * @param integer $BaselineNum 基线风险数。
     * @param integer $CyberAttackNum 网络风险数。
     * @param string $SecurityStatus 风险状态。
<li>SAFE：安全</li>
<li>RISK：风险</li>
<li>UNKNOWN：未知</li>
     * @param integer $InvasionNum 入侵事件数
     * @param RegionInfo $RegionInfo 地域信息
     * @param string $InstanceState 实例状态 TERMINATED_PRO_VERSION 已销毁
     * @param integer $LicenseStatus 防篡改 授权状态 1 授权 0 未授权
     * @param integer $ProjectId 项目ID
     * @param integer $HasAssetScan 是否有资产扫描接口，0无，1有
     * @param string $MachineType 机器所属专区类型 CVM 云服务器, BM 黑石, ECM 边缘计算, LH 轻量应用服务器 ,Other 混合云专区
     * @param string $KernelVersion 内核版本
     * @param string $ProtectType 防护版本：BASIC_VERSION 基础版， PRO_VERSION 专业版，Flagship 旗舰版，GENERAL_DISCOUNT 轻量版
     * @param array $CloudTags 云标签信息
     * @param integer $IsAddedOnTheFifteen 是否15天内新增的主机 0：非15天内新增的主机，1：15天内增加的主机
     * @param string $IpList 主机ip列表
     * @param string $VpcId 所属网络
     * @param MachineExtraInfo $MachineExtraInfo 附加信息
     * @param string $InstanceId 实例ID
     * @param string $Remark 备注信息
     * @param string $AgentVersion 主机安全agent版本
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
        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("MachineOs",$param) and $param["MachineOs"] !== null) {
            $this->MachineOs = $param["MachineOs"];
        }

        if (array_key_exists("MachineStatus",$param) and $param["MachineStatus"] !== null) {
            $this->MachineStatus = $param["MachineStatus"];
        }

        if (array_key_exists("AgentStatus",$param) and $param["AgentStatus"] !== null) {
            $this->AgentStatus = $param["AgentStatus"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("VulNum",$param) and $param["VulNum"] !== null) {
            $this->VulNum = $param["VulNum"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("IsProVersion",$param) and $param["IsProVersion"] !== null) {
            $this->IsProVersion = $param["IsProVersion"];
        }

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("MalwareNum",$param) and $param["MalwareNum"] !== null) {
            $this->MalwareNum = $param["MalwareNum"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new MachineTag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }

        if (array_key_exists("BaselineNum",$param) and $param["BaselineNum"] !== null) {
            $this->BaselineNum = $param["BaselineNum"];
        }

        if (array_key_exists("CyberAttackNum",$param) and $param["CyberAttackNum"] !== null) {
            $this->CyberAttackNum = $param["CyberAttackNum"];
        }

        if (array_key_exists("SecurityStatus",$param) and $param["SecurityStatus"] !== null) {
            $this->SecurityStatus = $param["SecurityStatus"];
        }

        if (array_key_exists("InvasionNum",$param) and $param["InvasionNum"] !== null) {
            $this->InvasionNum = $param["InvasionNum"];
        }

        if (array_key_exists("RegionInfo",$param) and $param["RegionInfo"] !== null) {
            $this->RegionInfo = new RegionInfo();
            $this->RegionInfo->deserialize($param["RegionInfo"]);
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("LicenseStatus",$param) and $param["LicenseStatus"] !== null) {
            $this->LicenseStatus = $param["LicenseStatus"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("HasAssetScan",$param) and $param["HasAssetScan"] !== null) {
            $this->HasAssetScan = $param["HasAssetScan"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("KernelVersion",$param) and $param["KernelVersion"] !== null) {
            $this->KernelVersion = $param["KernelVersion"];
        }

        if (array_key_exists("ProtectType",$param) and $param["ProtectType"] !== null) {
            $this->ProtectType = $param["ProtectType"];
        }

        if (array_key_exists("CloudTags",$param) and $param["CloudTags"] !== null) {
            $this->CloudTags = [];
            foreach ($param["CloudTags"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->CloudTags, $obj);
            }
        }

        if (array_key_exists("IsAddedOnTheFifteen",$param) and $param["IsAddedOnTheFifteen"] !== null) {
            $this->IsAddedOnTheFifteen = $param["IsAddedOnTheFifteen"];
        }

        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = $param["IpList"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("AgentVersion",$param) and $param["AgentVersion"] !== null) {
            $this->AgentVersion = $param["AgentVersion"];
        }
    }
}

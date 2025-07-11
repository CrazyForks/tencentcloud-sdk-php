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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群实例信息
 *
 * @method integer getId() 获取ID号
 * @method void setId(integer $Id) 设置ID号
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getFtitle() 获取标题
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFtitle(string $Ftitle) 设置标题
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterName() 获取集群名
 * @method void setClusterName(string $ClusterName) 设置集群名
 * @method integer getRegionId() 获取地域ID
 * @method void setRegionId(integer $RegionId) 设置地域ID
 * @method integer getZoneId() 获取地区ID
 * @method void setZoneId(integer $ZoneId) 设置地区ID
 * @method integer getAppId() 获取用户APPID
 * @method void setAppId(integer $AppId) 设置用户APPID
 * @method string getUin() 获取用户UIN
 * @method void setUin(string $Uin) 设置用户UIN
 * @method integer getProjectId() 获取项目Id
 * @method void setProjectId(integer $ProjectId) 设置项目Id
 * @method integer getVpcId() 获取集群VPCID
 * @method void setVpcId(integer $VpcId) 设置集群VPCID
 * @method integer getSubnetId() 获取子网ID
 * @method void setSubnetId(integer $SubnetId) 设置子网ID
 * @method integer getStatus() 获取实例的状态码。取值范围：
<li>2：表示集群运行中。</li>
<li>3：表示集群创建中。</li>
<li>4：表示集群扩容中。</li>
<li>5：表示集群增加router节点中。</li>
<li>6：表示集群安装组件中。</li>
<li>7：表示集群执行命令中。</li>
<li>8：表示重启服务中。</li>
<li>9：表示进入维护中。</li>
<li>10：表示服务暂停中。</li>
<li>11：表示退出维护中。</li>
<li>12：表示退出暂停中。</li>
<li>13：表示配置下发中。</li>
<li>14：表示销毁集群中。</li>
<li>15：表示销毁core节点中。</li>
<li>16：销毁task节点中。</li>
<li>17：表示销毁router节点中。</li>
<li>18：表示更改webproxy密码中。</li>
<li>19：表示集群隔离中。</li>
<li>20：表示集群冲正中。</li>
<li>21：表示集群回收中。</li>
<li>22：表示变配等待中。</li>
<li>23：表示集群已隔离。</li>
<li>24：表示缩容节点中。</li>
<li>33：表示集群等待退费中。</li>
<li>34：表示集群已退费。</li>
<li>301：表示创建失败。</li>
<li>302：表示扩容失败。</li>
 * @method void setStatus(integer $Status) 设置实例的状态码。取值范围：
<li>2：表示集群运行中。</li>
<li>3：表示集群创建中。</li>
<li>4：表示集群扩容中。</li>
<li>5：表示集群增加router节点中。</li>
<li>6：表示集群安装组件中。</li>
<li>7：表示集群执行命令中。</li>
<li>8：表示重启服务中。</li>
<li>9：表示进入维护中。</li>
<li>10：表示服务暂停中。</li>
<li>11：表示退出维护中。</li>
<li>12：表示退出暂停中。</li>
<li>13：表示配置下发中。</li>
<li>14：表示销毁集群中。</li>
<li>15：表示销毁core节点中。</li>
<li>16：销毁task节点中。</li>
<li>17：表示销毁router节点中。</li>
<li>18：表示更改webproxy密码中。</li>
<li>19：表示集群隔离中。</li>
<li>20：表示集群冲正中。</li>
<li>21：表示集群回收中。</li>
<li>22：表示变配等待中。</li>
<li>23：表示集群已隔离。</li>
<li>24：表示缩容节点中。</li>
<li>33：表示集群等待退费中。</li>
<li>34：表示集群已退费。</li>
<li>301：表示创建失败。</li>
<li>302：表示扩容失败。</li>
 * @method string getAddTime() 获取添加时间
 * @method void setAddTime(string $AddTime) 设置添加时间
 * @method string getRunTime() 获取已经运行时间
 * @method void setRunTime(string $RunTime) 设置已经运行时间
 * @method EmrProductConfigOutter getConfig() 获取集群产品配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfig(EmrProductConfigOutter $Config) 设置集群产品配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMasterIp() 获取主节点外网IP
 * @method void setMasterIp(string $MasterIp) 设置主节点外网IP
 * @method string getEmrVersion() 获取EMR版本
 * @method void setEmrVersion(string $EmrVersion) 设置EMR版本
 * @method integer getChargeType() 获取收费类型
 * @method void setChargeType(integer $ChargeType) 设置收费类型
 * @method integer getTradeVersion() 获取交易版本
 * @method void setTradeVersion(integer $TradeVersion) 设置交易版本
 * @method integer getResourceOrderId() 获取资源订单ID
 * @method void setResourceOrderId(integer $ResourceOrderId) 设置资源订单ID
 * @method integer getIsTradeCluster() 获取是否计费集群
 * @method void setIsTradeCluster(integer $IsTradeCluster) 设置是否计费集群
 * @method string getAlarmInfo() 获取集群错误状态告警信息
 * @method void setAlarmInfo(string $AlarmInfo) 设置集群错误状态告警信息
 * @method integer getIsWoodpeckerCluster() 获取是否采用新架构
 * @method void setIsWoodpeckerCluster(integer $IsWoodpeckerCluster) 设置是否采用新架构
 * @method string getMetaDb() 获取元数据库信息
 * @method void setMetaDb(string $MetaDb) 设置元数据库信息
 * @method array getTags() 获取标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHiveMetaDb() 获取Hive元数据信息
 * @method void setHiveMetaDb(string $HiveMetaDb) 设置Hive元数据信息
 * @method string getServiceClass() 获取集群类型:EMR,CLICKHOUSE,DRUID
 * @method void setServiceClass(string $ServiceClass) 设置集群类型:EMR,CLICKHOUSE,DRUID
 * @method string getAliasInfo() 获取集群所有节点的别名序列化
 * @method void setAliasInfo(string $AliasInfo) 设置集群所有节点的别名序列化
 * @method integer getProductId() 获取集群版本Id
 * @method void setProductId(integer $ProductId) 设置集群版本Id
 * @method string getZone() 获取地区ID
 * @method void setZone(string $Zone) 设置地区ID
 * @method string getSceneName() 获取场景名称
 * @method void setSceneName(string $SceneName) 设置场景名称
 * @method string getSceneServiceClass() 获取场景化集群类型
 * @method void setSceneServiceClass(string $SceneServiceClass) 设置场景化集群类型
 * @method string getSceneEmrVersion() 获取场景化EMR版本
 * @method void setSceneEmrVersion(string $SceneEmrVersion) 设置场景化EMR版本
 * @method string getDisplayName() 获取场景化集群类型
 * @method void setDisplayName(string $DisplayName) 设置场景化集群类型
 * @method string getVpcName() 获取vpc name
 * @method void setVpcName(string $VpcName) 设置vpc name
 * @method string getSubnetName() 获取subnet name
 * @method void setSubnetName(string $SubnetName) 设置subnet name
 * @method array getClusterExternalServiceInfo() 获取集群依赖关系
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterExternalServiceInfo(array $ClusterExternalServiceInfo) 设置集群依赖关系
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUniqVpcId() 获取集群vpcid 字符串类型
 * @method void setUniqVpcId(string $UniqVpcId) 设置集群vpcid 字符串类型
 * @method string getUniqSubnetId() 获取子网id 字符串类型
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置子网id 字符串类型
 * @method array getTopologyInfoList() 获取节点信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopologyInfoList(array $TopologyInfoList) 设置节点信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsMultiZoneCluster() 获取是否是跨AZ集群
 * @method void setIsMultiZoneCluster(boolean $IsMultiZoneCluster) 设置是否是跨AZ集群
 * @method boolean getIsCvmReplace() 获取是否开通异常节点自动补偿
 * @method void setIsCvmReplace(boolean $IsCvmReplace) 设置是否开通异常节点自动补偿
 * @method string getClusterTitle() 获取标题
 * @method void setClusterTitle(string $ClusterTitle) 设置标题
 * @method EmrProductConfigDetail getConfigDetail() 获取集群产品配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigDetail(EmrProductConfigDetail $ConfigDetail) 设置集群产品配置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBindFileSystemNum() 获取集群绑定的文件系统数
 * @method void setBindFileSystemNum(integer $BindFileSystemNum) 设置集群绑定的文件系统数
 * @method array getClusterRelationInfoList() 获取rss集群的绑定列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterRelationInfoList(array $ClusterRelationInfoList) 设置rss集群的绑定列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRedisId() 获取Redis信息
 * @method void setRedisId(string $RedisId) 设置Redis信息
 */
class ClusterInstancesInfo extends AbstractModel
{
    /**
     * @var integer ID号
     */
    public $Id;

    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 标题
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $Ftitle;

    /**
     * @var string 集群名
     */
    public $ClusterName;

    /**
     * @var integer 地域ID
     */
    public $RegionId;

    /**
     * @var integer 地区ID
     */
    public $ZoneId;

    /**
     * @var integer 用户APPID
     */
    public $AppId;

    /**
     * @var string 用户UIN
     */
    public $Uin;

    /**
     * @var integer 项目Id
     */
    public $ProjectId;

    /**
     * @var integer 集群VPCID
     */
    public $VpcId;

    /**
     * @var integer 子网ID
     */
    public $SubnetId;

    /**
     * @var integer 实例的状态码。取值范围：
<li>2：表示集群运行中。</li>
<li>3：表示集群创建中。</li>
<li>4：表示集群扩容中。</li>
<li>5：表示集群增加router节点中。</li>
<li>6：表示集群安装组件中。</li>
<li>7：表示集群执行命令中。</li>
<li>8：表示重启服务中。</li>
<li>9：表示进入维护中。</li>
<li>10：表示服务暂停中。</li>
<li>11：表示退出维护中。</li>
<li>12：表示退出暂停中。</li>
<li>13：表示配置下发中。</li>
<li>14：表示销毁集群中。</li>
<li>15：表示销毁core节点中。</li>
<li>16：销毁task节点中。</li>
<li>17：表示销毁router节点中。</li>
<li>18：表示更改webproxy密码中。</li>
<li>19：表示集群隔离中。</li>
<li>20：表示集群冲正中。</li>
<li>21：表示集群回收中。</li>
<li>22：表示变配等待中。</li>
<li>23：表示集群已隔离。</li>
<li>24：表示缩容节点中。</li>
<li>33：表示集群等待退费中。</li>
<li>34：表示集群已退费。</li>
<li>301：表示创建失败。</li>
<li>302：表示扩容失败。</li>
     */
    public $Status;

    /**
     * @var string 添加时间
     */
    public $AddTime;

    /**
     * @var string 已经运行时间
     */
    public $RunTime;

    /**
     * @var EmrProductConfigOutter 集群产品配置信息
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $Config;

    /**
     * @var string 主节点外网IP
     */
    public $MasterIp;

    /**
     * @var string EMR版本
     */
    public $EmrVersion;

    /**
     * @var integer 收费类型
     */
    public $ChargeType;

    /**
     * @var integer 交易版本
     */
    public $TradeVersion;

    /**
     * @var integer 资源订单ID
     */
    public $ResourceOrderId;

    /**
     * @var integer 是否计费集群
     */
    public $IsTradeCluster;

    /**
     * @var string 集群错误状态告警信息
     */
    public $AlarmInfo;

    /**
     * @var integer 是否采用新架构
     */
    public $IsWoodpeckerCluster;

    /**
     * @var string 元数据库信息
     */
    public $MetaDb;

    /**
     * @var array 标签信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var string Hive元数据信息
     */
    public $HiveMetaDb;

    /**
     * @var string 集群类型:EMR,CLICKHOUSE,DRUID
     */
    public $ServiceClass;

    /**
     * @var string 集群所有节点的别名序列化
     */
    public $AliasInfo;

    /**
     * @var integer 集群版本Id
     */
    public $ProductId;

    /**
     * @var string 地区ID
     */
    public $Zone;

    /**
     * @var string 场景名称
     */
    public $SceneName;

    /**
     * @var string 场景化集群类型
     */
    public $SceneServiceClass;

    /**
     * @var string 场景化EMR版本
     */
    public $SceneEmrVersion;

    /**
     * @var string 场景化集群类型
     */
    public $DisplayName;

    /**
     * @var string vpc name
     */
    public $VpcName;

    /**
     * @var string subnet name
     */
    public $SubnetName;

    /**
     * @var array 集群依赖关系
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterExternalServiceInfo;

    /**
     * @var string 集群vpcid 字符串类型
     */
    public $UniqVpcId;

    /**
     * @var string 子网id 字符串类型
     */
    public $UniqSubnetId;

    /**
     * @var array 节点信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopologyInfoList;

    /**
     * @var boolean 是否是跨AZ集群
     */
    public $IsMultiZoneCluster;

    /**
     * @var boolean 是否开通异常节点自动补偿
     */
    public $IsCvmReplace;

    /**
     * @var string 标题
     */
    public $ClusterTitle;

    /**
     * @var EmrProductConfigDetail 集群产品配置信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigDetail;

    /**
     * @var integer 集群绑定的文件系统数
     */
    public $BindFileSystemNum;

    /**
     * @var array rss集群的绑定列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterRelationInfoList;

    /**
     * @var string Redis信息
     */
    public $RedisId;

    /**
     * @param integer $Id ID号
     * @param string $ClusterId 集群ID
     * @param string $Ftitle 标题
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterName 集群名
     * @param integer $RegionId 地域ID
     * @param integer $ZoneId 地区ID
     * @param integer $AppId 用户APPID
     * @param string $Uin 用户UIN
     * @param integer $ProjectId 项目Id
     * @param integer $VpcId 集群VPCID
     * @param integer $SubnetId 子网ID
     * @param integer $Status 实例的状态码。取值范围：
<li>2：表示集群运行中。</li>
<li>3：表示集群创建中。</li>
<li>4：表示集群扩容中。</li>
<li>5：表示集群增加router节点中。</li>
<li>6：表示集群安装组件中。</li>
<li>7：表示集群执行命令中。</li>
<li>8：表示重启服务中。</li>
<li>9：表示进入维护中。</li>
<li>10：表示服务暂停中。</li>
<li>11：表示退出维护中。</li>
<li>12：表示退出暂停中。</li>
<li>13：表示配置下发中。</li>
<li>14：表示销毁集群中。</li>
<li>15：表示销毁core节点中。</li>
<li>16：销毁task节点中。</li>
<li>17：表示销毁router节点中。</li>
<li>18：表示更改webproxy密码中。</li>
<li>19：表示集群隔离中。</li>
<li>20：表示集群冲正中。</li>
<li>21：表示集群回收中。</li>
<li>22：表示变配等待中。</li>
<li>23：表示集群已隔离。</li>
<li>24：表示缩容节点中。</li>
<li>33：表示集群等待退费中。</li>
<li>34：表示集群已退费。</li>
<li>301：表示创建失败。</li>
<li>302：表示扩容失败。</li>
     * @param string $AddTime 添加时间
     * @param string $RunTime 已经运行时间
     * @param EmrProductConfigOutter $Config 集群产品配置信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MasterIp 主节点外网IP
     * @param string $EmrVersion EMR版本
     * @param integer $ChargeType 收费类型
     * @param integer $TradeVersion 交易版本
     * @param integer $ResourceOrderId 资源订单ID
     * @param integer $IsTradeCluster 是否计费集群
     * @param string $AlarmInfo 集群错误状态告警信息
     * @param integer $IsWoodpeckerCluster 是否采用新架构
     * @param string $MetaDb 元数据库信息
     * @param array $Tags 标签信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HiveMetaDb Hive元数据信息
     * @param string $ServiceClass 集群类型:EMR,CLICKHOUSE,DRUID
     * @param string $AliasInfo 集群所有节点的别名序列化
     * @param integer $ProductId 集群版本Id
     * @param string $Zone 地区ID
     * @param string $SceneName 场景名称
     * @param string $SceneServiceClass 场景化集群类型
     * @param string $SceneEmrVersion 场景化EMR版本
     * @param string $DisplayName 场景化集群类型
     * @param string $VpcName vpc name
     * @param string $SubnetName subnet name
     * @param array $ClusterExternalServiceInfo 集群依赖关系
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UniqVpcId 集群vpcid 字符串类型
     * @param string $UniqSubnetId 子网id 字符串类型
     * @param array $TopologyInfoList 节点信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsMultiZoneCluster 是否是跨AZ集群
     * @param boolean $IsCvmReplace 是否开通异常节点自动补偿
     * @param string $ClusterTitle 标题
     * @param EmrProductConfigDetail $ConfigDetail 集群产品配置信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BindFileSystemNum 集群绑定的文件系统数
     * @param array $ClusterRelationInfoList rss集群的绑定列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RedisId Redis信息
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Ftitle",$param) and $param["Ftitle"] !== null) {
            $this->Ftitle = $param["Ftitle"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("RunTime",$param) and $param["RunTime"] !== null) {
            $this->RunTime = $param["RunTime"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new EmrProductConfigOutter();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("MasterIp",$param) and $param["MasterIp"] !== null) {
            $this->MasterIp = $param["MasterIp"];
        }

        if (array_key_exists("EmrVersion",$param) and $param["EmrVersion"] !== null) {
            $this->EmrVersion = $param["EmrVersion"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("TradeVersion",$param) and $param["TradeVersion"] !== null) {
            $this->TradeVersion = $param["TradeVersion"];
        }

        if (array_key_exists("ResourceOrderId",$param) and $param["ResourceOrderId"] !== null) {
            $this->ResourceOrderId = $param["ResourceOrderId"];
        }

        if (array_key_exists("IsTradeCluster",$param) and $param["IsTradeCluster"] !== null) {
            $this->IsTradeCluster = $param["IsTradeCluster"];
        }

        if (array_key_exists("AlarmInfo",$param) and $param["AlarmInfo"] !== null) {
            $this->AlarmInfo = $param["AlarmInfo"];
        }

        if (array_key_exists("IsWoodpeckerCluster",$param) and $param["IsWoodpeckerCluster"] !== null) {
            $this->IsWoodpeckerCluster = $param["IsWoodpeckerCluster"];
        }

        if (array_key_exists("MetaDb",$param) and $param["MetaDb"] !== null) {
            $this->MetaDb = $param["MetaDb"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("HiveMetaDb",$param) and $param["HiveMetaDb"] !== null) {
            $this->HiveMetaDb = $param["HiveMetaDb"];
        }

        if (array_key_exists("ServiceClass",$param) and $param["ServiceClass"] !== null) {
            $this->ServiceClass = $param["ServiceClass"];
        }

        if (array_key_exists("AliasInfo",$param) and $param["AliasInfo"] !== null) {
            $this->AliasInfo = $param["AliasInfo"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("SceneName",$param) and $param["SceneName"] !== null) {
            $this->SceneName = $param["SceneName"];
        }

        if (array_key_exists("SceneServiceClass",$param) and $param["SceneServiceClass"] !== null) {
            $this->SceneServiceClass = $param["SceneServiceClass"];
        }

        if (array_key_exists("SceneEmrVersion",$param) and $param["SceneEmrVersion"] !== null) {
            $this->SceneEmrVersion = $param["SceneEmrVersion"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("SubnetName",$param) and $param["SubnetName"] !== null) {
            $this->SubnetName = $param["SubnetName"];
        }

        if (array_key_exists("ClusterExternalServiceInfo",$param) and $param["ClusterExternalServiceInfo"] !== null) {
            $this->ClusterExternalServiceInfo = [];
            foreach ($param["ClusterExternalServiceInfo"] as $key => $value){
                $obj = new ClusterExternalServiceInfo();
                $obj->deserialize($value);
                array_push($this->ClusterExternalServiceInfo, $obj);
            }
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("TopologyInfoList",$param) and $param["TopologyInfoList"] !== null) {
            $this->TopologyInfoList = [];
            foreach ($param["TopologyInfoList"] as $key => $value){
                $obj = new TopologyInfo();
                $obj->deserialize($value);
                array_push($this->TopologyInfoList, $obj);
            }
        }

        if (array_key_exists("IsMultiZoneCluster",$param) and $param["IsMultiZoneCluster"] !== null) {
            $this->IsMultiZoneCluster = $param["IsMultiZoneCluster"];
        }

        if (array_key_exists("IsCvmReplace",$param) and $param["IsCvmReplace"] !== null) {
            $this->IsCvmReplace = $param["IsCvmReplace"];
        }

        if (array_key_exists("ClusterTitle",$param) and $param["ClusterTitle"] !== null) {
            $this->ClusterTitle = $param["ClusterTitle"];
        }

        if (array_key_exists("ConfigDetail",$param) and $param["ConfigDetail"] !== null) {
            $this->ConfigDetail = new EmrProductConfigDetail();
            $this->ConfigDetail->deserialize($param["ConfigDetail"]);
        }

        if (array_key_exists("BindFileSystemNum",$param) and $param["BindFileSystemNum"] !== null) {
            $this->BindFileSystemNum = $param["BindFileSystemNum"];
        }

        if (array_key_exists("ClusterRelationInfoList",$param) and $param["ClusterRelationInfoList"] !== null) {
            $this->ClusterRelationInfoList = [];
            foreach ($param["ClusterRelationInfoList"] as $key => $value){
                $obj = new ClusterRelationMeta();
                $obj->deserialize($value);
                array_push($this->ClusterRelationInfoList, $obj);
            }
        }

        if (array_key_exists("RedisId",$param) and $param["RedisId"] !== null) {
            $this->RedisId = $param["RedisId"];
        }
    }
}

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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述了云硬盘的详细信息
 *
 * @method boolean getDeleteWithInstance() 获取云盘是否与挂载的实例一起销毁。<br><li>true:销毁实例时会同时销毁云盘，只支持按小时后付费云盘。</li><li>false：销毁实例时不销毁云盘。</li>
 * @method void setDeleteWithInstance(boolean $DeleteWithInstance) 设置云盘是否与挂载的实例一起销毁。<br><li>true:销毁实例时会同时销毁云盘，只支持按小时后付费云盘。</li><li>false：销毁实例时不销毁云盘。</li>
 * @method string getRenewFlag() 获取自动续费标识。取值范围：<br><li>NOTIFY_AND_AUTO_RENEW：通知过期且自动续费</li><li>NOTIFY_AND_MANUAL_RENEW：通知过期不自动续费</li><li>DISABLE_NOTIFY_AND_MANUAL_RENEW：不通知过期不自动续费。</li>
 * @method void setRenewFlag(string $RenewFlag) 设置自动续费标识。取值范围：<br><li>NOTIFY_AND_AUTO_RENEW：通知过期且自动续费</li><li>NOTIFY_AND_MANUAL_RENEW：通知过期不自动续费</li><li>DISABLE_NOTIFY_AND_MANUAL_RENEW：不通知过期不自动续费。</li>
 * @method string getDiskType() 获取硬盘介质类型。取值范围：<br><li>CLOUD_BASIC：表示普通云硬盘</li><li>CLOUD_PREMIUM：表示高性能云硬盘</li><li>CLOUD_BSSD：表示通用型SSD云硬盘</li><li>CLOUD_SSD：表示SSD云硬盘</li><li>CLOUD_HSSD：表示增强型SSD云硬盘</li><li>CLOUD_TSSD：表示极速型SSD云硬盘。</li>
 * @method void setDiskType(string $DiskType) 设置硬盘介质类型。取值范围：<br><li>CLOUD_BASIC：表示普通云硬盘</li><li>CLOUD_PREMIUM：表示高性能云硬盘</li><li>CLOUD_BSSD：表示通用型SSD云硬盘</li><li>CLOUD_SSD：表示SSD云硬盘</li><li>CLOUD_HSSD：表示增强型SSD云硬盘</li><li>CLOUD_TSSD：表示极速型SSD云硬盘。</li>
 * @method string getDiskState() 获取云盘状态。取值范围：<br><li>UNATTACHED：未挂载</li><li>ATTACHING：挂载中</li><li>ATTACHED：已挂载</li><li>DETACHING：解挂中</li><li>EXPANDING：扩容中</li><li>ROLLBACKING：回滚中</li><li>TORECYCLE：待回收</li><li>DUMPING：拷贝硬盘中。</li>
 * @method void setDiskState(string $DiskState) 设置云盘状态。取值范围：<br><li>UNATTACHED：未挂载</li><li>ATTACHING：挂载中</li><li>ATTACHED：已挂载</li><li>DETACHING：解挂中</li><li>EXPANDING：扩容中</li><li>ROLLBACKING：回滚中</li><li>TORECYCLE：待回收</li><li>DUMPING：拷贝硬盘中。</li>
 * @method integer getSnapshotCount() 获取云盘拥有的快照总数。
 * @method void setSnapshotCount(integer $SnapshotCount) 设置云盘拥有的快照总数。
 * @method boolean getAutoRenewFlagError() 获取云盘已挂载到子机，且子机与云盘都是包年包月。<br><li>true：子机设置了自动续费标识，但云盘未设置</li><li>false：云盘自动续费标识正常。</li>
 * @method void setAutoRenewFlagError(boolean $AutoRenewFlagError) 设置云盘已挂载到子机，且子机与云盘都是包年包月。<br><li>true：子机设置了自动续费标识，但云盘未设置</li><li>false：云盘自动续费标识正常。</li>
 * @method boolean getRollbacking() 获取云盘是否处于快照回滚状态。取值范围：<br><li>false:表示不处于快照回滚状态</li><li>true:表示处于快照回滚状态。</li>
 * @method void setRollbacking(boolean $Rollbacking) 设置云盘是否处于快照回滚状态。取值范围：<br><li>false:表示不处于快照回滚状态</li><li>true:表示处于快照回滚状态。</li>
 * @method array getInstanceIdList() 获取对于非共享型云盘，该参数为空数组。对于共享型云盘，则表示该云盘当前被挂载到的CVM实例InstanceId
 * @method void setInstanceIdList(array $InstanceIdList) 设置对于非共享型云盘，该参数为空数组。对于共享型云盘，则表示该云盘当前被挂载到的CVM实例InstanceId
 * @method boolean getEncrypt() 获取云盘是否为加密盘。取值范围：<br><li>false:表示非加密盘</li><li>true:表示加密盘。</li>
 * @method void setEncrypt(boolean $Encrypt) 设置云盘是否为加密盘。取值范围：<br><li>false:表示非加密盘</li><li>true:表示加密盘。</li>
 * @method string getDiskName() 获取云硬盘名称。
 * @method void setDiskName(string $DiskName) 设置云硬盘名称。
 * @method boolean getBackupDisk() 获取云硬盘因欠费销毁或者到期销毁时， 是否使用快照备份数据的标识。true表示销毁时创建快照进行数据备份。false表示直接销毁，不进行数据备份。
 * @method void setBackupDisk(boolean $BackupDisk) 设置云硬盘因欠费销毁或者到期销毁时， 是否使用快照备份数据的标识。true表示销毁时创建快照进行数据备份。false表示直接销毁，不进行数据备份。
 * @method array getTags() 获取与云盘绑定的标签，云盘未绑定标签则取值为空。
 * @method void setTags(array $Tags) 设置与云盘绑定的标签，云盘未绑定标签则取值为空。
 * @method string getInstanceId() 获取云硬盘挂载的云主机ID。
 * @method void setInstanceId(string $InstanceId) 设置云硬盘挂载的云主机ID。
 * @method string getAttachMode() 获取云盘的挂载类型。取值范围：<br><li>PF: PF挂载</li><li>VF: VF挂载</li>
 * @method void setAttachMode(string $AttachMode) 设置云盘的挂载类型。取值范围：<br><li>PF: PF挂载</li><li>VF: VF挂载</li>
 * @method array getAutoSnapshotPolicyIds() 获取云盘关联的定期快照ID。只有在调用[DescribeDisks](/document/product/362/16315)接口时，入参ReturnBindAutoSnapshotPolicy取值为TRUE才会返回该参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoSnapshotPolicyIds(array $AutoSnapshotPolicyIds) 设置云盘关联的定期快照ID。只有在调用[DescribeDisks](/document/product/362/16315)接口时，入参ReturnBindAutoSnapshotPolicy取值为TRUE才会返回该参数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getThroughputPerformance() 获取云硬盘额外性能值，单位MiB/s。
 * @method void setThroughputPerformance(integer $ThroughputPerformance) 设置云硬盘额外性能值，单位MiB/s。
 * @method boolean getMigrating() 获取云盘是否处于类型变更中。取值范围：<br><li>false:表示云盘不处于类型变更中</li><li>true:表示云盘已发起类型变更，正处于迁移中。</li>
 * @method void setMigrating(boolean $Migrating) 设置云盘是否处于类型变更中。取值范围：<br><li>false:表示云盘不处于类型变更中</li><li>true:表示云盘已发起类型变更，正处于迁移中。</li>
 * @method string getDiskId() 获取云硬盘ID。
 * @method void setDiskId(string $DiskId) 设置云硬盘ID。
 * @method integer getSnapshotSize() 获取云盘拥有的快照总容量，单位为MiB。
 * @method void setSnapshotSize(integer $SnapshotSize) 设置云盘拥有的快照总容量，单位为MiB。
 * @method Placement getPlacement() 获取云硬盘所在的位置。
 * @method void setPlacement(Placement $Placement) 设置云硬盘所在的位置。
 * @method boolean getIsReturnable() 获取判断预付费的云盘是否支持主动退还。<br><li>true:支持主动退还</li><li>false:不支持主动退还。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsReturnable(boolean $IsReturnable) 设置判断预付费的云盘是否支持主动退还。<br><li>true:支持主动退还</li><li>false:不支持主动退还。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeadlineTime() 获取云硬盘的到期时间。
 * @method void setDeadlineTime(string $DeadlineTime) 设置云硬盘的到期时间。
 * @method boolean getAttached() 获取云盘是否挂载到云主机上。取值范围：<br><li>false:表示未挂载</li><li>true:表示已挂载。</li>
 * @method void setAttached(boolean $Attached) 设置云盘是否挂载到云主机上。取值范围：<br><li>false:表示未挂载</li><li>true:表示已挂载。</li>
 * @method integer getDiskSize() 获取云硬盘大小，单位GiB。
 * @method void setDiskSize(integer $DiskSize) 设置云硬盘大小，单位GiB。
 * @method integer getMigratePercent() 获取云盘类型变更的迁移进度，取值0到100。
 * @method void setMigratePercent(integer $MigratePercent) 设置云盘类型变更的迁移进度，取值0到100。
 * @method string getDiskUsage() 获取云硬盘类型。取值范围：<br><li>SYSTEM_DISK：系统盘</li><li>DATA_DISK：数据盘。</li>
 * @method void setDiskUsage(string $DiskUsage) 设置云硬盘类型。取值范围：<br><li>SYSTEM_DISK：系统盘</li><li>DATA_DISK：数据盘。</li>
 * @method string getDiskChargeType() 获取付费模式。取值范围：<br><li>PREPAID：预付费，即包年包月</li><li>POSTPAID_BY_HOUR：后付费，即按量计费。</li>
 * @method void setDiskChargeType(string $DiskChargeType) 设置付费模式。取值范围：<br><li>PREPAID：预付费，即包年包月</li><li>POSTPAID_BY_HOUR：后付费，即按量计费。</li>
 * @method boolean getPortable() 获取是否为弹性云盘，false表示非弹性云盘，true表示弹性云盘。
 * @method void setPortable(boolean $Portable) 设置是否为弹性云盘，false表示非弹性云盘，true表示弹性云盘。
 * @method boolean getSnapshotAbility() 获取云盘是否具备创建快照的能力。取值范围：<br><li>false表示不具备</li><li>true表示具备。</li>
 * @method void setSnapshotAbility(boolean $SnapshotAbility) 设置云盘是否具备创建快照的能力。取值范围：<br><li>false表示不具备</li><li>true表示具备。</li>
 * @method boolean getDeadlineError() 获取在云盘已挂载到实例，且实例与云盘都是包年包月的条件下，此字段才有意义。<br><li>true:云盘到期时间早于实例。</li><li>false：云盘到期时间晚于实例。</li>
 * @method void setDeadlineError(boolean $DeadlineError) 设置在云盘已挂载到实例，且实例与云盘都是包年包月的条件下，此字段才有意义。<br><li>true:云盘到期时间早于实例。</li><li>false：云盘到期时间晚于实例。</li>
 * @method integer getRollbackPercent() 获取云盘快照回滚的进度。
 * @method void setRollbackPercent(integer $RollbackPercent) 设置云盘快照回滚的进度。
 * @method integer getDifferDaysOfDeadline() 获取当前时间距离云硬盘到期的天数（仅对预付费云硬盘有意义）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDifferDaysOfDeadline(integer $DifferDaysOfDeadline) 设置当前时间距离云硬盘到期的天数（仅对预付费云硬盘有意义）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReturnFailCode() 获取预付费云盘在不支持主动退还的情况下，该参数表明不支持主动退还的具体原因。取值范围：<br><li>1：云硬盘已经退还</li><li>2：云硬盘已过期</li><li>3：云盘不支持退还</li><li>8：超过可退还数量的限制。</li><li>10：非弹性云硬盘、系统盘、后付费云硬盘等不支持退还</li>
 * @method void setReturnFailCode(integer $ReturnFailCode) 设置预付费云盘在不支持主动退还的情况下，该参数表明不支持主动退还的具体原因。取值范围：<br><li>1：云硬盘已经退还</li><li>2：云硬盘已过期</li><li>3：云盘不支持退还</li><li>8：超过可退还数量的限制。</li><li>10：非弹性云硬盘、系统盘、后付费云硬盘等不支持退还</li>
 * @method boolean getShareable() 获取云盘是否为共享型云盘。
 * @method void setShareable(boolean $Shareable) 设置云盘是否为共享型云盘。
 * @method string getCreateTime() 获取云硬盘的创建时间。
 * @method void setCreateTime(string $CreateTime) 设置云硬盘的创建时间。
 * @method integer getDeleteSnapshot() 获取销毁云盘时删除关联的非永久保留快照。0 表示非永久快照不随云盘销毁而销毁，1表示非永久快照随云盘销毁而销毁，默认取0。快照是否永久保留可以通过[DescribeSnapshots](https://cloud.tencent.com/document/product/362/15647)接口返回的快照详情的IsPermanent字段来判断，true表示永久快照，false表示非永久快照。
 * @method void setDeleteSnapshot(integer $DeleteSnapshot) 设置销毁云盘时删除关联的非永久保留快照。0 表示非永久快照不随云盘销毁而销毁，1表示非永久快照随云盘销毁而销毁，默认取0。快照是否永久保留可以通过[DescribeSnapshots](https://cloud.tencent.com/document/product/362/15647)接口返回的快照详情的IsPermanent字段来判断，true表示永久快照，false表示非永久快照。
 * @method integer getDiskBackupQuota() 获取云硬盘备份点配额。表示最大可以保留的备份点数量。
 * @method void setDiskBackupQuota(integer $DiskBackupQuota) 设置云硬盘备份点配额。表示最大可以保留的备份点数量。
 * @method integer getDiskBackupCount() 获取云硬盘备份点已使用的数量。
 * @method void setDiskBackupCount(integer $DiskBackupCount) 设置云硬盘备份点已使用的数量。
 * @method string getInstanceType() 获取云硬盘挂载实例的类型。取值范围：<br><li>CVM</li><li>EKS</li>
 * @method void setInstanceType(string $InstanceType) 设置云硬盘挂载实例的类型。取值范围：<br><li>CVM</li><li>EKS</li>
 * @method string getLastAttachInsId() 获取云硬盘最后一次挂载的实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastAttachInsId(string $LastAttachInsId) 设置云硬盘最后一次挂载的实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorPrompt() 获取云硬盘最后一次操作错误提示
 * @method void setErrorPrompt(string $ErrorPrompt) 设置云硬盘最后一次操作错误提示
 * @method boolean getBurstPerformance() 获取云盘是否开启性能突发
 * @method void setBurstPerformance(boolean $BurstPerformance) 设置云盘是否开启性能突发
 * @method string getEncryptType() 获取云硬盘加密类型，值为ENCRYPT_V1和ENCRYPT_V2，分别表示第一代和第二代加密技术，两种加密技术互不兼容
 * @method void setEncryptType(string $EncryptType) 设置云硬盘加密类型，值为ENCRYPT_V1和ENCRYPT_V2，分别表示第一代和第二代加密技术，两种加密技术互不兼容
 * @method string getKmsKeyId() 获取加密盘密钥ID
 * @method void setKmsKeyId(string $KmsKeyId) 设置加密盘密钥ID
 */
class Disk extends AbstractModel
{
    /**
     * @var boolean 云盘是否与挂载的实例一起销毁。<br><li>true:销毁实例时会同时销毁云盘，只支持按小时后付费云盘。</li><li>false：销毁实例时不销毁云盘。</li>
     */
    public $DeleteWithInstance;

    /**
     * @var string 自动续费标识。取值范围：<br><li>NOTIFY_AND_AUTO_RENEW：通知过期且自动续费</li><li>NOTIFY_AND_MANUAL_RENEW：通知过期不自动续费</li><li>DISABLE_NOTIFY_AND_MANUAL_RENEW：不通知过期不自动续费。</li>
     */
    public $RenewFlag;

    /**
     * @var string 硬盘介质类型。取值范围：<br><li>CLOUD_BASIC：表示普通云硬盘</li><li>CLOUD_PREMIUM：表示高性能云硬盘</li><li>CLOUD_BSSD：表示通用型SSD云硬盘</li><li>CLOUD_SSD：表示SSD云硬盘</li><li>CLOUD_HSSD：表示增强型SSD云硬盘</li><li>CLOUD_TSSD：表示极速型SSD云硬盘。</li>
     */
    public $DiskType;

    /**
     * @var string 云盘状态。取值范围：<br><li>UNATTACHED：未挂载</li><li>ATTACHING：挂载中</li><li>ATTACHED：已挂载</li><li>DETACHING：解挂中</li><li>EXPANDING：扩容中</li><li>ROLLBACKING：回滚中</li><li>TORECYCLE：待回收</li><li>DUMPING：拷贝硬盘中。</li>
     */
    public $DiskState;

    /**
     * @var integer 云盘拥有的快照总数。
     */
    public $SnapshotCount;

    /**
     * @var boolean 云盘已挂载到子机，且子机与云盘都是包年包月。<br><li>true：子机设置了自动续费标识，但云盘未设置</li><li>false：云盘自动续费标识正常。</li>
     */
    public $AutoRenewFlagError;

    /**
     * @var boolean 云盘是否处于快照回滚状态。取值范围：<br><li>false:表示不处于快照回滚状态</li><li>true:表示处于快照回滚状态。</li>
     */
    public $Rollbacking;

    /**
     * @var array 对于非共享型云盘，该参数为空数组。对于共享型云盘，则表示该云盘当前被挂载到的CVM实例InstanceId
     */
    public $InstanceIdList;

    /**
     * @var boolean 云盘是否为加密盘。取值范围：<br><li>false:表示非加密盘</li><li>true:表示加密盘。</li>
     */
    public $Encrypt;

    /**
     * @var string 云硬盘名称。
     */
    public $DiskName;

    /**
     * @var boolean 云硬盘因欠费销毁或者到期销毁时， 是否使用快照备份数据的标识。true表示销毁时创建快照进行数据备份。false表示直接销毁，不进行数据备份。
     */
    public $BackupDisk;

    /**
     * @var array 与云盘绑定的标签，云盘未绑定标签则取值为空。
     */
    public $Tags;

    /**
     * @var string 云硬盘挂载的云主机ID。
     */
    public $InstanceId;

    /**
     * @var string 云盘的挂载类型。取值范围：<br><li>PF: PF挂载</li><li>VF: VF挂载</li>
     */
    public $AttachMode;

    /**
     * @var array 云盘关联的定期快照ID。只有在调用[DescribeDisks](/document/product/362/16315)接口时，入参ReturnBindAutoSnapshotPolicy取值为TRUE才会返回该参数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoSnapshotPolicyIds;

    /**
     * @var integer 云硬盘额外性能值，单位MiB/s。
     */
    public $ThroughputPerformance;

    /**
     * @var boolean 云盘是否处于类型变更中。取值范围：<br><li>false:表示云盘不处于类型变更中</li><li>true:表示云盘已发起类型变更，正处于迁移中。</li>
     */
    public $Migrating;

    /**
     * @var string 云硬盘ID。
     */
    public $DiskId;

    /**
     * @var integer 云盘拥有的快照总容量，单位为MiB。
     */
    public $SnapshotSize;

    /**
     * @var Placement 云硬盘所在的位置。
     */
    public $Placement;

    /**
     * @var boolean 判断预付费的云盘是否支持主动退还。<br><li>true:支持主动退还</li><li>false:不支持主动退还。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsReturnable;

    /**
     * @var string 云硬盘的到期时间。
     */
    public $DeadlineTime;

    /**
     * @var boolean 云盘是否挂载到云主机上。取值范围：<br><li>false:表示未挂载</li><li>true:表示已挂载。</li>
     */
    public $Attached;

    /**
     * @var integer 云硬盘大小，单位GiB。
     */
    public $DiskSize;

    /**
     * @var integer 云盘类型变更的迁移进度，取值0到100。
     */
    public $MigratePercent;

    /**
     * @var string 云硬盘类型。取值范围：<br><li>SYSTEM_DISK：系统盘</li><li>DATA_DISK：数据盘。</li>
     */
    public $DiskUsage;

    /**
     * @var string 付费模式。取值范围：<br><li>PREPAID：预付费，即包年包月</li><li>POSTPAID_BY_HOUR：后付费，即按量计费。</li>
     */
    public $DiskChargeType;

    /**
     * @var boolean 是否为弹性云盘，false表示非弹性云盘，true表示弹性云盘。
     */
    public $Portable;

    /**
     * @var boolean 云盘是否具备创建快照的能力。取值范围：<br><li>false表示不具备</li><li>true表示具备。</li>
     */
    public $SnapshotAbility;

    /**
     * @var boolean 在云盘已挂载到实例，且实例与云盘都是包年包月的条件下，此字段才有意义。<br><li>true:云盘到期时间早于实例。</li><li>false：云盘到期时间晚于实例。</li>
     */
    public $DeadlineError;

    /**
     * @var integer 云盘快照回滚的进度。
     */
    public $RollbackPercent;

    /**
     * @var integer 当前时间距离云硬盘到期的天数（仅对预付费云硬盘有意义）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DifferDaysOfDeadline;

    /**
     * @var integer 预付费云盘在不支持主动退还的情况下，该参数表明不支持主动退还的具体原因。取值范围：<br><li>1：云硬盘已经退还</li><li>2：云硬盘已过期</li><li>3：云盘不支持退还</li><li>8：超过可退还数量的限制。</li><li>10：非弹性云硬盘、系统盘、后付费云硬盘等不支持退还</li>
     */
    public $ReturnFailCode;

    /**
     * @var boolean 云盘是否为共享型云盘。
     */
    public $Shareable;

    /**
     * @var string 云硬盘的创建时间。
     */
    public $CreateTime;

    /**
     * @var integer 销毁云盘时删除关联的非永久保留快照。0 表示非永久快照不随云盘销毁而销毁，1表示非永久快照随云盘销毁而销毁，默认取0。快照是否永久保留可以通过[DescribeSnapshots](https://cloud.tencent.com/document/product/362/15647)接口返回的快照详情的IsPermanent字段来判断，true表示永久快照，false表示非永久快照。
     */
    public $DeleteSnapshot;

    /**
     * @var integer 云硬盘备份点配额。表示最大可以保留的备份点数量。
     */
    public $DiskBackupQuota;

    /**
     * @var integer 云硬盘备份点已使用的数量。
     */
    public $DiskBackupCount;

    /**
     * @var string 云硬盘挂载实例的类型。取值范围：<br><li>CVM</li><li>EKS</li>
     */
    public $InstanceType;

    /**
     * @var string 云硬盘最后一次挂载的实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastAttachInsId;

    /**
     * @var string 云硬盘最后一次操作错误提示
     */
    public $ErrorPrompt;

    /**
     * @var boolean 云盘是否开启性能突发
     */
    public $BurstPerformance;

    /**
     * @var string 云硬盘加密类型，值为ENCRYPT_V1和ENCRYPT_V2，分别表示第一代和第二代加密技术，两种加密技术互不兼容
     */
    public $EncryptType;

    /**
     * @var string 加密盘密钥ID
     */
    public $KmsKeyId;

    /**
     * @param boolean $DeleteWithInstance 云盘是否与挂载的实例一起销毁。<br><li>true:销毁实例时会同时销毁云盘，只支持按小时后付费云盘。</li><li>false：销毁实例时不销毁云盘。</li>
     * @param string $RenewFlag 自动续费标识。取值范围：<br><li>NOTIFY_AND_AUTO_RENEW：通知过期且自动续费</li><li>NOTIFY_AND_MANUAL_RENEW：通知过期不自动续费</li><li>DISABLE_NOTIFY_AND_MANUAL_RENEW：不通知过期不自动续费。</li>
     * @param string $DiskType 硬盘介质类型。取值范围：<br><li>CLOUD_BASIC：表示普通云硬盘</li><li>CLOUD_PREMIUM：表示高性能云硬盘</li><li>CLOUD_BSSD：表示通用型SSD云硬盘</li><li>CLOUD_SSD：表示SSD云硬盘</li><li>CLOUD_HSSD：表示增强型SSD云硬盘</li><li>CLOUD_TSSD：表示极速型SSD云硬盘。</li>
     * @param string $DiskState 云盘状态。取值范围：<br><li>UNATTACHED：未挂载</li><li>ATTACHING：挂载中</li><li>ATTACHED：已挂载</li><li>DETACHING：解挂中</li><li>EXPANDING：扩容中</li><li>ROLLBACKING：回滚中</li><li>TORECYCLE：待回收</li><li>DUMPING：拷贝硬盘中。</li>
     * @param integer $SnapshotCount 云盘拥有的快照总数。
     * @param boolean $AutoRenewFlagError 云盘已挂载到子机，且子机与云盘都是包年包月。<br><li>true：子机设置了自动续费标识，但云盘未设置</li><li>false：云盘自动续费标识正常。</li>
     * @param boolean $Rollbacking 云盘是否处于快照回滚状态。取值范围：<br><li>false:表示不处于快照回滚状态</li><li>true:表示处于快照回滚状态。</li>
     * @param array $InstanceIdList 对于非共享型云盘，该参数为空数组。对于共享型云盘，则表示该云盘当前被挂载到的CVM实例InstanceId
     * @param boolean $Encrypt 云盘是否为加密盘。取值范围：<br><li>false:表示非加密盘</li><li>true:表示加密盘。</li>
     * @param string $DiskName 云硬盘名称。
     * @param boolean $BackupDisk 云硬盘因欠费销毁或者到期销毁时， 是否使用快照备份数据的标识。true表示销毁时创建快照进行数据备份。false表示直接销毁，不进行数据备份。
     * @param array $Tags 与云盘绑定的标签，云盘未绑定标签则取值为空。
     * @param string $InstanceId 云硬盘挂载的云主机ID。
     * @param string $AttachMode 云盘的挂载类型。取值范围：<br><li>PF: PF挂载</li><li>VF: VF挂载</li>
     * @param array $AutoSnapshotPolicyIds 云盘关联的定期快照ID。只有在调用[DescribeDisks](/document/product/362/16315)接口时，入参ReturnBindAutoSnapshotPolicy取值为TRUE才会返回该参数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ThroughputPerformance 云硬盘额外性能值，单位MiB/s。
     * @param boolean $Migrating 云盘是否处于类型变更中。取值范围：<br><li>false:表示云盘不处于类型变更中</li><li>true:表示云盘已发起类型变更，正处于迁移中。</li>
     * @param string $DiskId 云硬盘ID。
     * @param integer $SnapshotSize 云盘拥有的快照总容量，单位为MiB。
     * @param Placement $Placement 云硬盘所在的位置。
     * @param boolean $IsReturnable 判断预付费的云盘是否支持主动退还。<br><li>true:支持主动退还</li><li>false:不支持主动退还。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeadlineTime 云硬盘的到期时间。
     * @param boolean $Attached 云盘是否挂载到云主机上。取值范围：<br><li>false:表示未挂载</li><li>true:表示已挂载。</li>
     * @param integer $DiskSize 云硬盘大小，单位GiB。
     * @param integer $MigratePercent 云盘类型变更的迁移进度，取值0到100。
     * @param string $DiskUsage 云硬盘类型。取值范围：<br><li>SYSTEM_DISK：系统盘</li><li>DATA_DISK：数据盘。</li>
     * @param string $DiskChargeType 付费模式。取值范围：<br><li>PREPAID：预付费，即包年包月</li><li>POSTPAID_BY_HOUR：后付费，即按量计费。</li>
     * @param boolean $Portable 是否为弹性云盘，false表示非弹性云盘，true表示弹性云盘。
     * @param boolean $SnapshotAbility 云盘是否具备创建快照的能力。取值范围：<br><li>false表示不具备</li><li>true表示具备。</li>
     * @param boolean $DeadlineError 在云盘已挂载到实例，且实例与云盘都是包年包月的条件下，此字段才有意义。<br><li>true:云盘到期时间早于实例。</li><li>false：云盘到期时间晚于实例。</li>
     * @param integer $RollbackPercent 云盘快照回滚的进度。
     * @param integer $DifferDaysOfDeadline 当前时间距离云硬盘到期的天数（仅对预付费云硬盘有意义）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReturnFailCode 预付费云盘在不支持主动退还的情况下，该参数表明不支持主动退还的具体原因。取值范围：<br><li>1：云硬盘已经退还</li><li>2：云硬盘已过期</li><li>3：云盘不支持退还</li><li>8：超过可退还数量的限制。</li><li>10：非弹性云硬盘、系统盘、后付费云硬盘等不支持退还</li>
     * @param boolean $Shareable 云盘是否为共享型云盘。
     * @param string $CreateTime 云硬盘的创建时间。
     * @param integer $DeleteSnapshot 销毁云盘时删除关联的非永久保留快照。0 表示非永久快照不随云盘销毁而销毁，1表示非永久快照随云盘销毁而销毁，默认取0。快照是否永久保留可以通过[DescribeSnapshots](https://cloud.tencent.com/document/product/362/15647)接口返回的快照详情的IsPermanent字段来判断，true表示永久快照，false表示非永久快照。
     * @param integer $DiskBackupQuota 云硬盘备份点配额。表示最大可以保留的备份点数量。
     * @param integer $DiskBackupCount 云硬盘备份点已使用的数量。
     * @param string $InstanceType 云硬盘挂载实例的类型。取值范围：<br><li>CVM</li><li>EKS</li>
     * @param string $LastAttachInsId 云硬盘最后一次挂载的实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorPrompt 云硬盘最后一次操作错误提示
     * @param boolean $BurstPerformance 云盘是否开启性能突发
     * @param string $EncryptType 云硬盘加密类型，值为ENCRYPT_V1和ENCRYPT_V2，分别表示第一代和第二代加密技术，两种加密技术互不兼容
     * @param string $KmsKeyId 加密盘密钥ID
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
        if (array_key_exists("DeleteWithInstance",$param) and $param["DeleteWithInstance"] !== null) {
            $this->DeleteWithInstance = $param["DeleteWithInstance"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskState",$param) and $param["DiskState"] !== null) {
            $this->DiskState = $param["DiskState"];
        }

        if (array_key_exists("SnapshotCount",$param) and $param["SnapshotCount"] !== null) {
            $this->SnapshotCount = $param["SnapshotCount"];
        }

        if (array_key_exists("AutoRenewFlagError",$param) and $param["AutoRenewFlagError"] !== null) {
            $this->AutoRenewFlagError = $param["AutoRenewFlagError"];
        }

        if (array_key_exists("Rollbacking",$param) and $param["Rollbacking"] !== null) {
            $this->Rollbacking = $param["Rollbacking"];
        }

        if (array_key_exists("InstanceIdList",$param) and $param["InstanceIdList"] !== null) {
            $this->InstanceIdList = $param["InstanceIdList"];
        }

        if (array_key_exists("Encrypt",$param) and $param["Encrypt"] !== null) {
            $this->Encrypt = $param["Encrypt"];
        }

        if (array_key_exists("DiskName",$param) and $param["DiskName"] !== null) {
            $this->DiskName = $param["DiskName"];
        }

        if (array_key_exists("BackupDisk",$param) and $param["BackupDisk"] !== null) {
            $this->BackupDisk = $param["BackupDisk"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AttachMode",$param) and $param["AttachMode"] !== null) {
            $this->AttachMode = $param["AttachMode"];
        }

        if (array_key_exists("AutoSnapshotPolicyIds",$param) and $param["AutoSnapshotPolicyIds"] !== null) {
            $this->AutoSnapshotPolicyIds = $param["AutoSnapshotPolicyIds"];
        }

        if (array_key_exists("ThroughputPerformance",$param) and $param["ThroughputPerformance"] !== null) {
            $this->ThroughputPerformance = $param["ThroughputPerformance"];
        }

        if (array_key_exists("Migrating",$param) and $param["Migrating"] !== null) {
            $this->Migrating = $param["Migrating"];
        }

        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("SnapshotSize",$param) and $param["SnapshotSize"] !== null) {
            $this->SnapshotSize = $param["SnapshotSize"];
        }

        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("IsReturnable",$param) and $param["IsReturnable"] !== null) {
            $this->IsReturnable = $param["IsReturnable"];
        }

        if (array_key_exists("DeadlineTime",$param) and $param["DeadlineTime"] !== null) {
            $this->DeadlineTime = $param["DeadlineTime"];
        }

        if (array_key_exists("Attached",$param) and $param["Attached"] !== null) {
            $this->Attached = $param["Attached"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("MigratePercent",$param) and $param["MigratePercent"] !== null) {
            $this->MigratePercent = $param["MigratePercent"];
        }

        if (array_key_exists("DiskUsage",$param) and $param["DiskUsage"] !== null) {
            $this->DiskUsage = $param["DiskUsage"];
        }

        if (array_key_exists("DiskChargeType",$param) and $param["DiskChargeType"] !== null) {
            $this->DiskChargeType = $param["DiskChargeType"];
        }

        if (array_key_exists("Portable",$param) and $param["Portable"] !== null) {
            $this->Portable = $param["Portable"];
        }

        if (array_key_exists("SnapshotAbility",$param) and $param["SnapshotAbility"] !== null) {
            $this->SnapshotAbility = $param["SnapshotAbility"];
        }

        if (array_key_exists("DeadlineError",$param) and $param["DeadlineError"] !== null) {
            $this->DeadlineError = $param["DeadlineError"];
        }

        if (array_key_exists("RollbackPercent",$param) and $param["RollbackPercent"] !== null) {
            $this->RollbackPercent = $param["RollbackPercent"];
        }

        if (array_key_exists("DifferDaysOfDeadline",$param) and $param["DifferDaysOfDeadline"] !== null) {
            $this->DifferDaysOfDeadline = $param["DifferDaysOfDeadline"];
        }

        if (array_key_exists("ReturnFailCode",$param) and $param["ReturnFailCode"] !== null) {
            $this->ReturnFailCode = $param["ReturnFailCode"];
        }

        if (array_key_exists("Shareable",$param) and $param["Shareable"] !== null) {
            $this->Shareable = $param["Shareable"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DeleteSnapshot",$param) and $param["DeleteSnapshot"] !== null) {
            $this->DeleteSnapshot = $param["DeleteSnapshot"];
        }

        if (array_key_exists("DiskBackupQuota",$param) and $param["DiskBackupQuota"] !== null) {
            $this->DiskBackupQuota = $param["DiskBackupQuota"];
        }

        if (array_key_exists("DiskBackupCount",$param) and $param["DiskBackupCount"] !== null) {
            $this->DiskBackupCount = $param["DiskBackupCount"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("LastAttachInsId",$param) and $param["LastAttachInsId"] !== null) {
            $this->LastAttachInsId = $param["LastAttachInsId"];
        }

        if (array_key_exists("ErrorPrompt",$param) and $param["ErrorPrompt"] !== null) {
            $this->ErrorPrompt = $param["ErrorPrompt"];
        }

        if (array_key_exists("BurstPerformance",$param) and $param["BurstPerformance"] !== null) {
            $this->BurstPerformance = $param["BurstPerformance"];
        }

        if (array_key_exists("EncryptType",$param) and $param["EncryptType"] !== null) {
            $this->EncryptType = $param["EncryptType"];
        }

        if (array_key_exists("KmsKeyId",$param) and $param["KmsKeyId"] !== null) {
            $this->KmsKeyId = $param["KmsKeyId"];
        }
    }
}

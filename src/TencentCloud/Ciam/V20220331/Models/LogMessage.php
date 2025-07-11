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
namespace TencentCloud\Ciam\V20220331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志详情
 *
 * @method string getLogId() 获取日志标识
 * @method void setLogId(string $LogId) 设置日志标识
 * @method string getTenantId() 获取租户ID
 * @method void setTenantId(string $TenantId) 设置租户ID
 * @method string getUserStoreId() 获取用户池ID
 * @method void setUserStoreId(string $UserStoreId) 设置用户池ID
 * @method string getEventCode() 获取事件编码
 * @method void setEventCode(string $EventCode) 设置事件编码
 * @method integer getEventDate() 获取事件发生时间戳，单位：毫秒
 * @method void setEventDate(integer $EventDate) 设置事件发生时间戳，单位：毫秒
 * @method string getDescription() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParticipant() 获取事件参与者

<li> **TENANT** </li>  租户
<li> **USER** </li>  用户
 * @method void setParticipant(string $Participant) 设置事件参与者

<li> **TENANT** </li>  租户
<li> **USER** </li>  用户
 * @method string getApplicationClientId() 获取应用clientId
 * @method void setApplicationClientId(string $ApplicationClientId) 设置应用clientId
 * @method string getApplicationName() 获取应用名称
 * @method void setApplicationName(string $ApplicationName) 设置应用名称
 * @method string getAuthSourceId() 获取认证源ID
 * @method void setAuthSourceId(string $AuthSourceId) 设置认证源ID
 * @method string getAuthSourceName() 获取认证源名称
 * @method void setAuthSourceName(string $AuthSourceName) 设置认证源名称
 * @method string getAuthSourceType() 获取认证源类型
 * @method void setAuthSourceType(string $AuthSourceType) 设置认证源类型
 * @method string getAuthSourceCategory() 获取认证源类别
 * @method void setAuthSourceCategory(string $AuthSourceCategory) 设置认证源类别
 * @method string getIp() 获取IP地址
 * @method void setIp(string $Ip) 设置IP地址
 * @method string getUserAgent() 获取用户代理
 * @method void setUserAgent(string $UserAgent) 设置用户代理
 * @method string getUserId() 获取用户ID
 * @method void setUserId(string $UserId) 设置用户ID
 * @method string getDetail() 获取详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetail(string $Detail) 设置详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getActionResult() 获取日志结果
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActionResult(string $ActionResult) 设置日志结果
注意：此字段可能返回 null，表示取不到有效值。
 */
class LogMessage extends AbstractModel
{
    /**
     * @var string 日志标识
     */
    public $LogId;

    /**
     * @var string 租户ID
     */
    public $TenantId;

    /**
     * @var string 用户池ID
     */
    public $UserStoreId;

    /**
     * @var string 事件编码
     */
    public $EventCode;

    /**
     * @var integer 事件发生时间戳，单位：毫秒
     */
    public $EventDate;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 事件参与者

<li> **TENANT** </li>  租户
<li> **USER** </li>  用户
     */
    public $Participant;

    /**
     * @var string 应用clientId
     */
    public $ApplicationClientId;

    /**
     * @var string 应用名称
     */
    public $ApplicationName;

    /**
     * @var string 认证源ID
     */
    public $AuthSourceId;

    /**
     * @var string 认证源名称
     */
    public $AuthSourceName;

    /**
     * @var string 认证源类型
     */
    public $AuthSourceType;

    /**
     * @var string 认证源类别
     */
    public $AuthSourceCategory;

    /**
     * @var string IP地址
     */
    public $Ip;

    /**
     * @var string 用户代理
     */
    public $UserAgent;

    /**
     * @var string 用户ID
     */
    public $UserId;

    /**
     * @var string 详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Detail;

    /**
     * @var string 日志结果
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActionResult;

    /**
     * @param string $LogId 日志标识
     * @param string $TenantId 租户ID
     * @param string $UserStoreId 用户池ID
     * @param string $EventCode 事件编码
     * @param integer $EventDate 事件发生时间戳，单位：毫秒
     * @param string $Description 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Participant 事件参与者

<li> **TENANT** </li>  租户
<li> **USER** </li>  用户
     * @param string $ApplicationClientId 应用clientId
     * @param string $ApplicationName 应用名称
     * @param string $AuthSourceId 认证源ID
     * @param string $AuthSourceName 认证源名称
     * @param string $AuthSourceType 认证源类型
     * @param string $AuthSourceCategory 认证源类别
     * @param string $Ip IP地址
     * @param string $UserAgent 用户代理
     * @param string $UserId 用户ID
     * @param string $Detail 详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ActionResult 日志结果
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("LogId",$param) and $param["LogId"] !== null) {
            $this->LogId = $param["LogId"];
        }

        if (array_key_exists("TenantId",$param) and $param["TenantId"] !== null) {
            $this->TenantId = $param["TenantId"];
        }

        if (array_key_exists("UserStoreId",$param) and $param["UserStoreId"] !== null) {
            $this->UserStoreId = $param["UserStoreId"];
        }

        if (array_key_exists("EventCode",$param) and $param["EventCode"] !== null) {
            $this->EventCode = $param["EventCode"];
        }

        if (array_key_exists("EventDate",$param) and $param["EventDate"] !== null) {
            $this->EventDate = $param["EventDate"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Participant",$param) and $param["Participant"] !== null) {
            $this->Participant = $param["Participant"];
        }

        if (array_key_exists("ApplicationClientId",$param) and $param["ApplicationClientId"] !== null) {
            $this->ApplicationClientId = $param["ApplicationClientId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("AuthSourceId",$param) and $param["AuthSourceId"] !== null) {
            $this->AuthSourceId = $param["AuthSourceId"];
        }

        if (array_key_exists("AuthSourceName",$param) and $param["AuthSourceName"] !== null) {
            $this->AuthSourceName = $param["AuthSourceName"];
        }

        if (array_key_exists("AuthSourceType",$param) and $param["AuthSourceType"] !== null) {
            $this->AuthSourceType = $param["AuthSourceType"];
        }

        if (array_key_exists("AuthSourceCategory",$param) and $param["AuthSourceCategory"] !== null) {
            $this->AuthSourceCategory = $param["AuthSourceCategory"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("UserAgent",$param) and $param["UserAgent"] !== null) {
            $this->UserAgent = $param["UserAgent"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = $param["Detail"];
        }

        if (array_key_exists("ActionResult",$param) and $param["ActionResult"] !== null) {
            $this->ActionResult = $param["ActionResult"];
        }
    }
}

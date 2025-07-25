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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询连接源具体数据的返参
 *
 * @method string getResourceId() 获取连接源的Id
 * @method void setResourceId(string $ResourceId) 设置连接源的Id
 * @method string getResourceName() 获取连接源名称
 * @method void setResourceName(string $ResourceName) 设置连接源名称
 * @method string getDescription() 获取连接源描述
 * @method void setDescription(string $Description) 设置连接源描述
 * @method string getType() 获取连接源类型
 * @method void setType(string $Type) 设置连接源类型
 * @method integer getStatus() 获取连接源的状态
 * @method void setStatus(integer $Status) 设置连接源的状态
 * @method string getCreateTime() 获取连接源的创建时间
 * @method void setCreateTime(string $CreateTime) 设置连接源的创建时间
 * @method string getErrorMessage() 获取连接源的异常信息
 * @method void setErrorMessage(string $ErrorMessage) 设置连接源的异常信息
 * @method integer getDatahubTaskCount() 获取该连接源关联的Datahub任务数
 * @method void setDatahubTaskCount(integer $DatahubTaskCount) 设置该连接源关联的Datahub任务数
 * @method string getCurrentStep() 获取连接源的当前所处步骤
 * @method void setCurrentStep(string $CurrentStep) 设置连接源的当前所处步骤
 * @method float getTaskProgress() 获取创建进度百分比
 * @method void setTaskProgress(float $TaskProgress) 设置创建进度百分比
 * @method array getStepList() 获取步骤列表
 * @method void setStepList(array $StepList) 设置步骤列表
 * @method DtsConnectParam getDtsConnectParam() 获取Dts配置，Type为DTS时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDtsConnectParam(DtsConnectParam $DtsConnectParam) 设置Dts配置，Type为DTS时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method MongoDBConnectParam getMongoDBConnectParam() 获取MongoDB配置，Type为MONGODB时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMongoDBConnectParam(MongoDBConnectParam $MongoDBConnectParam) 设置MongoDB配置，Type为MONGODB时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method EsConnectParam getEsConnectParam() 获取Es配置，Type为ES时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEsConnectParam(EsConnectParam $EsConnectParam) 设置Es配置，Type为ES时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method ClickHouseConnectParam getClickHouseConnectParam() 获取ClickHouse配置，Type为CLICKHOUSE时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClickHouseConnectParam(ClickHouseConnectParam $ClickHouseConnectParam) 设置ClickHouse配置，Type为CLICKHOUSE时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method MySQLConnectParam getMySQLConnectParam() 获取MySQL配置，Type为MYSQL或TDSQL_C_MYSQL时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMySQLConnectParam(MySQLConnectParam $MySQLConnectParam) 设置MySQL配置，Type为MYSQL或TDSQL_C_MYSQL时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method PostgreSQLConnectParam getPostgreSQLConnectParam() 获取PostgreSQL配置，Type为POSTGRESQL或TDSQL_C_POSTGRESQL时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPostgreSQLConnectParam(PostgreSQLConnectParam $PostgreSQLConnectParam) 设置PostgreSQL配置，Type为POSTGRESQL或TDSQL_C_POSTGRESQL时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method MariaDBConnectParam getMariaDBConnectParam() 获取MariaDB配置，Type为MARIADB时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMariaDBConnectParam(MariaDBConnectParam $MariaDBConnectParam) 设置MariaDB配置，Type为MARIADB时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method SQLServerConnectParam getSQLServerConnectParam() 获取SQLServer配置，Type为SQLSERVER时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSQLServerConnectParam(SQLServerConnectParam $SQLServerConnectParam) 设置SQLServer配置，Type为SQLSERVER时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method CtsdbConnectParam getCtsdbConnectParam() 获取Ctsdb配置，Type为CTSDB时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCtsdbConnectParam(CtsdbConnectParam $CtsdbConnectParam) 设置Ctsdb配置，Type为CTSDB时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method DorisConnectParam getDorisConnectParam() 获取Doris 配置，Type 为 DORIS 时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDorisConnectParam(DorisConnectParam $DorisConnectParam) 设置Doris 配置，Type 为 DORIS 时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method KafkaConnectParam getKafkaConnectParam() 获取Kafka配置，Type 为 KAFKA 时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKafkaConnectParam(KafkaConnectParam $KafkaConnectParam) 设置Kafka配置，Type 为 KAFKA 时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method MqttConnectParam getMqttConnectParam() 获取MQTT配置，Type 为 MQTT 时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMqttConnectParam(MqttConnectParam $MqttConnectParam) 设置MQTT配置，Type 为 MQTT 时返回
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeConnectResource extends AbstractModel
{
    /**
     * @var string 连接源的Id
     */
    public $ResourceId;

    /**
     * @var string 连接源名称
     */
    public $ResourceName;

    /**
     * @var string 连接源描述
     */
    public $Description;

    /**
     * @var string 连接源类型
     */
    public $Type;

    /**
     * @var integer 连接源的状态
     */
    public $Status;

    /**
     * @var string 连接源的创建时间
     */
    public $CreateTime;

    /**
     * @var string 连接源的异常信息
     */
    public $ErrorMessage;

    /**
     * @var integer 该连接源关联的Datahub任务数
     */
    public $DatahubTaskCount;

    /**
     * @var string 连接源的当前所处步骤
     */
    public $CurrentStep;

    /**
     * @var float 创建进度百分比
     */
    public $TaskProgress;

    /**
     * @var array 步骤列表
     */
    public $StepList;

    /**
     * @var DtsConnectParam Dts配置，Type为DTS时返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DtsConnectParam;

    /**
     * @var MongoDBConnectParam MongoDB配置，Type为MONGODB时返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MongoDBConnectParam;

    /**
     * @var EsConnectParam Es配置，Type为ES时返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EsConnectParam;

    /**
     * @var ClickHouseConnectParam ClickHouse配置，Type为CLICKHOUSE时返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClickHouseConnectParam;

    /**
     * @var MySQLConnectParam MySQL配置，Type为MYSQL或TDSQL_C_MYSQL时返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MySQLConnectParam;

    /**
     * @var PostgreSQLConnectParam PostgreSQL配置，Type为POSTGRESQL或TDSQL_C_POSTGRESQL时返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PostgreSQLConnectParam;

    /**
     * @var MariaDBConnectParam MariaDB配置，Type为MARIADB时返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MariaDBConnectParam;

    /**
     * @var SQLServerConnectParam SQLServer配置，Type为SQLSERVER时返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SQLServerConnectParam;

    /**
     * @var CtsdbConnectParam Ctsdb配置，Type为CTSDB时返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CtsdbConnectParam;

    /**
     * @var DorisConnectParam Doris 配置，Type 为 DORIS 时返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DorisConnectParam;

    /**
     * @var KafkaConnectParam Kafka配置，Type 为 KAFKA 时返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KafkaConnectParam;

    /**
     * @var MqttConnectParam MQTT配置，Type 为 MQTT 时返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MqttConnectParam;

    /**
     * @param string $ResourceId 连接源的Id
     * @param string $ResourceName 连接源名称
     * @param string $Description 连接源描述
     * @param string $Type 连接源类型
     * @param integer $Status 连接源的状态
     * @param string $CreateTime 连接源的创建时间
     * @param string $ErrorMessage 连接源的异常信息
     * @param integer $DatahubTaskCount 该连接源关联的Datahub任务数
     * @param string $CurrentStep 连接源的当前所处步骤
     * @param float $TaskProgress 创建进度百分比
     * @param array $StepList 步骤列表
     * @param DtsConnectParam $DtsConnectParam Dts配置，Type为DTS时返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param MongoDBConnectParam $MongoDBConnectParam MongoDB配置，Type为MONGODB时返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param EsConnectParam $EsConnectParam Es配置，Type为ES时返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param ClickHouseConnectParam $ClickHouseConnectParam ClickHouse配置，Type为CLICKHOUSE时返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param MySQLConnectParam $MySQLConnectParam MySQL配置，Type为MYSQL或TDSQL_C_MYSQL时返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param PostgreSQLConnectParam $PostgreSQLConnectParam PostgreSQL配置，Type为POSTGRESQL或TDSQL_C_POSTGRESQL时返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param MariaDBConnectParam $MariaDBConnectParam MariaDB配置，Type为MARIADB时返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param SQLServerConnectParam $SQLServerConnectParam SQLServer配置，Type为SQLSERVER时返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param CtsdbConnectParam $CtsdbConnectParam Ctsdb配置，Type为CTSDB时返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param DorisConnectParam $DorisConnectParam Doris 配置，Type 为 DORIS 时返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param KafkaConnectParam $KafkaConnectParam Kafka配置，Type 为 KAFKA 时返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param MqttConnectParam $MqttConnectParam MQTT配置，Type 为 MQTT 时返回
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }

        if (array_key_exists("DatahubTaskCount",$param) and $param["DatahubTaskCount"] !== null) {
            $this->DatahubTaskCount = $param["DatahubTaskCount"];
        }

        if (array_key_exists("CurrentStep",$param) and $param["CurrentStep"] !== null) {
            $this->CurrentStep = $param["CurrentStep"];
        }

        if (array_key_exists("TaskProgress",$param) and $param["TaskProgress"] !== null) {
            $this->TaskProgress = $param["TaskProgress"];
        }

        if (array_key_exists("StepList",$param) and $param["StepList"] !== null) {
            $this->StepList = $param["StepList"];
        }

        if (array_key_exists("DtsConnectParam",$param) and $param["DtsConnectParam"] !== null) {
            $this->DtsConnectParam = new DtsConnectParam();
            $this->DtsConnectParam->deserialize($param["DtsConnectParam"]);
        }

        if (array_key_exists("MongoDBConnectParam",$param) and $param["MongoDBConnectParam"] !== null) {
            $this->MongoDBConnectParam = new MongoDBConnectParam();
            $this->MongoDBConnectParam->deserialize($param["MongoDBConnectParam"]);
        }

        if (array_key_exists("EsConnectParam",$param) and $param["EsConnectParam"] !== null) {
            $this->EsConnectParam = new EsConnectParam();
            $this->EsConnectParam->deserialize($param["EsConnectParam"]);
        }

        if (array_key_exists("ClickHouseConnectParam",$param) and $param["ClickHouseConnectParam"] !== null) {
            $this->ClickHouseConnectParam = new ClickHouseConnectParam();
            $this->ClickHouseConnectParam->deserialize($param["ClickHouseConnectParam"]);
        }

        if (array_key_exists("MySQLConnectParam",$param) and $param["MySQLConnectParam"] !== null) {
            $this->MySQLConnectParam = new MySQLConnectParam();
            $this->MySQLConnectParam->deserialize($param["MySQLConnectParam"]);
        }

        if (array_key_exists("PostgreSQLConnectParam",$param) and $param["PostgreSQLConnectParam"] !== null) {
            $this->PostgreSQLConnectParam = new PostgreSQLConnectParam();
            $this->PostgreSQLConnectParam->deserialize($param["PostgreSQLConnectParam"]);
        }

        if (array_key_exists("MariaDBConnectParam",$param) and $param["MariaDBConnectParam"] !== null) {
            $this->MariaDBConnectParam = new MariaDBConnectParam();
            $this->MariaDBConnectParam->deserialize($param["MariaDBConnectParam"]);
        }

        if (array_key_exists("SQLServerConnectParam",$param) and $param["SQLServerConnectParam"] !== null) {
            $this->SQLServerConnectParam = new SQLServerConnectParam();
            $this->SQLServerConnectParam->deserialize($param["SQLServerConnectParam"]);
        }

        if (array_key_exists("CtsdbConnectParam",$param) and $param["CtsdbConnectParam"] !== null) {
            $this->CtsdbConnectParam = new CtsdbConnectParam();
            $this->CtsdbConnectParam->deserialize($param["CtsdbConnectParam"]);
        }

        if (array_key_exists("DorisConnectParam",$param) and $param["DorisConnectParam"] !== null) {
            $this->DorisConnectParam = new DorisConnectParam();
            $this->DorisConnectParam->deserialize($param["DorisConnectParam"]);
        }

        if (array_key_exists("KafkaConnectParam",$param) and $param["KafkaConnectParam"] !== null) {
            $this->KafkaConnectParam = new KafkaConnectParam();
            $this->KafkaConnectParam->deserialize($param["KafkaConnectParam"]);
        }

        if (array_key_exists("MqttConnectParam",$param) and $param["MqttConnectParam"] !== null) {
            $this->MqttConnectParam = new MqttConnectParam();
            $this->MqttConnectParam->deserialize($param["MqttConnectParam"]);
        }
    }
}

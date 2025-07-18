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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务统计结果
 *
 * @method string getPath() 获取请求模板路径:type为接口时返回，服务时不返回
 * @method void setPath(string $Path) 设置请求模板路径:type为接口时返回，服务时不返回
 * @method string getMethod() 获取请求方法:type为接口时返回，服务时不返回
 * @method void setMethod(string $Method) 设置请求方法:type为接口时返回，服务时不返回
 * @method string getMicroserviceId() 获取微服务Id
 * @method void setMicroserviceId(string $MicroserviceId) 设置微服务Id
 * @method string getMicroserviceName() 获取微服务名称
 * @method void setMicroserviceName(string $MicroserviceName) 设置微服务名称
 * @method integer getRequestCount() 获取请求数
 * @method void setRequestCount(integer $RequestCount) 设置请求数
 * @method float getErrorRate() 获取请求错误率，不带百分号
 * @method void setErrorRate(float $ErrorRate) 设置请求错误率，不带百分号
 * @method float getAvgTimeConsuming() 获取平均响应耗时ms
 * @method void setAvgTimeConsuming(float $AvgTimeConsuming) 设置平均响应耗时ms
 * @method array getMetricDataCurves() 获取响应耗时曲线
 * @method void setMetricDataCurves(array $MetricDataCurves) 设置响应耗时曲线
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getInstanceName() 获取实例name
 * @method void setInstanceName(string $InstanceName) 设置实例name
 * @method string getGroupId() 获取部署组id
 * @method void setGroupId(string $GroupId) 设置部署组id
 * @method string getGroupName() 获取部署组name
 * @method void setGroupName(string $GroupName) 设置部署组name
 * @method string getClusterType() 获取部署组类型
 * @method void setClusterType(string $ClusterType) 设置部署组类型
 * @method integer getGroupExist() 获取部署组是否存在
 * @method void setGroupExist(integer $GroupExist) 设置部署组是否存在
 * @method integer getInstanceExist() 获取实例是否存在，仅限cvm
 * @method void setInstanceExist(integer $InstanceExist) 设置实例是否存在，仅限cvm
 * @method string getApplicationId() 获取应用id
 * @method void setApplicationId(string $ApplicationId) 设置应用id
 * @method string getMicroserviceType() 获取微服务类型
 * @method void setMicroserviceType(string $MicroserviceType) 设置微服务类型
 * @method integer getCpuPercent() 获取cpu使用率
 * @method void setCpuPercent(integer $CpuPercent) 设置cpu使用率
 * @method integer getHeapUsed() 获取已用堆大小,单位KB
 * @method void setHeapUsed(integer $HeapUsed) 设置已用堆大小,单位KB
 * @method string getDbName() 获取数据库
 * @method void setDbName(string $DbName) 设置数据库
 * @method string getScript() 获取Script值
 * @method void setScript(string $Script) 设置Script值
 * @method string getDbType() 获取数据库类型
 * @method void setDbType(string $DbType) 设置数据库类型
 * @method float getApdex() 获取Apdex值
 * @method void setApdex(float $Apdex) 设置Apdex值
 * @method float getQps() 获取Qps值
 * @method void setQps(float $Qps) 设置Qps值
 * @method integer getInstanceOnlineCount() 获取实例在线数
 * @method void setInstanceOnlineCount(integer $InstanceOnlineCount) 设置实例在线数
 * @method integer getInstanceTotalCount() 获取实例总数
 * @method void setInstanceTotalCount(integer $InstanceTotalCount) 设置实例总数
 * @method string getStatus() 获取normal/error
 * @method void setStatus(string $Status) 设置normal/error
 * @method string getErrorRateLevel() 获取normal/warn/error
 * @method void setErrorRateLevel(string $ErrorRateLevel) 设置normal/warn/error
 * @method string getAvgTimeConsumingLevel() 获取normal/warn/error
 * @method void setAvgTimeConsumingLevel(string $AvgTimeConsumingLevel) 设置normal/warn/error
 * @method string getApdexLevel() 获取normal/warn/error
 * @method void setApdexLevel(string $ApdexLevel) 设置normal/warn/error
 */
class ServiceStatisticsResult extends AbstractModel
{
    /**
     * @var string 请求模板路径:type为接口时返回，服务时不返回
     */
    public $Path;

    /**
     * @var string 请求方法:type为接口时返回，服务时不返回
     */
    public $Method;

    /**
     * @var string 微服务Id
     */
    public $MicroserviceId;

    /**
     * @var string 微服务名称
     */
    public $MicroserviceName;

    /**
     * @var integer 请求数
     */
    public $RequestCount;

    /**
     * @var float 请求错误率，不带百分号
     */
    public $ErrorRate;

    /**
     * @var float 平均响应耗时ms
     */
    public $AvgTimeConsuming;

    /**
     * @var array 响应耗时曲线
     */
    public $MetricDataCurves;

    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string 实例name
     */
    public $InstanceName;

    /**
     * @var string 部署组id
     */
    public $GroupId;

    /**
     * @var string 部署组name
     */
    public $GroupName;

    /**
     * @var string 部署组类型
     */
    public $ClusterType;

    /**
     * @var integer 部署组是否存在
     */
    public $GroupExist;

    /**
     * @var integer 实例是否存在，仅限cvm
     */
    public $InstanceExist;

    /**
     * @var string 应用id
     */
    public $ApplicationId;

    /**
     * @var string 微服务类型
     */
    public $MicroserviceType;

    /**
     * @var integer cpu使用率
     */
    public $CpuPercent;

    /**
     * @var integer 已用堆大小,单位KB
     */
    public $HeapUsed;

    /**
     * @var string 数据库
     */
    public $DbName;

    /**
     * @var string Script值
     */
    public $Script;

    /**
     * @var string 数据库类型
     */
    public $DbType;

    /**
     * @var float Apdex值
     */
    public $Apdex;

    /**
     * @var float Qps值
     */
    public $Qps;

    /**
     * @var integer 实例在线数
     */
    public $InstanceOnlineCount;

    /**
     * @var integer 实例总数
     */
    public $InstanceTotalCount;

    /**
     * @var string normal/error
     */
    public $Status;

    /**
     * @var string normal/warn/error
     */
    public $ErrorRateLevel;

    /**
     * @var string normal/warn/error
     */
    public $AvgTimeConsumingLevel;

    /**
     * @var string normal/warn/error
     */
    public $ApdexLevel;

    /**
     * @param string $Path 请求模板路径:type为接口时返回，服务时不返回
     * @param string $Method 请求方法:type为接口时返回，服务时不返回
     * @param string $MicroserviceId 微服务Id
     * @param string $MicroserviceName 微服务名称
     * @param integer $RequestCount 请求数
     * @param float $ErrorRate 请求错误率，不带百分号
     * @param float $AvgTimeConsuming 平均响应耗时ms
     * @param array $MetricDataCurves 响应耗时曲线
     * @param string $InstanceId 实例id
     * @param string $InstanceName 实例name
     * @param string $GroupId 部署组id
     * @param string $GroupName 部署组name
     * @param string $ClusterType 部署组类型
     * @param integer $GroupExist 部署组是否存在
     * @param integer $InstanceExist 实例是否存在，仅限cvm
     * @param string $ApplicationId 应用id
     * @param string $MicroserviceType 微服务类型
     * @param integer $CpuPercent cpu使用率
     * @param integer $HeapUsed 已用堆大小,单位KB
     * @param string $DbName 数据库
     * @param string $Script Script值
     * @param string $DbType 数据库类型
     * @param float $Apdex Apdex值
     * @param float $Qps Qps值
     * @param integer $InstanceOnlineCount 实例在线数
     * @param integer $InstanceTotalCount 实例总数
     * @param string $Status normal/error
     * @param string $ErrorRateLevel normal/warn/error
     * @param string $AvgTimeConsumingLevel normal/warn/error
     * @param string $ApdexLevel normal/warn/error
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("MicroserviceId",$param) and $param["MicroserviceId"] !== null) {
            $this->MicroserviceId = $param["MicroserviceId"];
        }

        if (array_key_exists("MicroserviceName",$param) and $param["MicroserviceName"] !== null) {
            $this->MicroserviceName = $param["MicroserviceName"];
        }

        if (array_key_exists("RequestCount",$param) and $param["RequestCount"] !== null) {
            $this->RequestCount = $param["RequestCount"];
        }

        if (array_key_exists("ErrorRate",$param) and $param["ErrorRate"] !== null) {
            $this->ErrorRate = $param["ErrorRate"];
        }

        if (array_key_exists("AvgTimeConsuming",$param) and $param["AvgTimeConsuming"] !== null) {
            $this->AvgTimeConsuming = $param["AvgTimeConsuming"];
        }

        if (array_key_exists("MetricDataCurves",$param) and $param["MetricDataCurves"] !== null) {
            $this->MetricDataCurves = [];
            foreach ($param["MetricDataCurves"] as $key => $value){
                $obj = new MetricDataCurve();
                $obj->deserialize($value);
                array_push($this->MetricDataCurves, $obj);
            }
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("GroupExist",$param) and $param["GroupExist"] !== null) {
            $this->GroupExist = $param["GroupExist"];
        }

        if (array_key_exists("InstanceExist",$param) and $param["InstanceExist"] !== null) {
            $this->InstanceExist = $param["InstanceExist"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("MicroserviceType",$param) and $param["MicroserviceType"] !== null) {
            $this->MicroserviceType = $param["MicroserviceType"];
        }

        if (array_key_exists("CpuPercent",$param) and $param["CpuPercent"] !== null) {
            $this->CpuPercent = $param["CpuPercent"];
        }

        if (array_key_exists("HeapUsed",$param) and $param["HeapUsed"] !== null) {
            $this->HeapUsed = $param["HeapUsed"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("Script",$param) and $param["Script"] !== null) {
            $this->Script = $param["Script"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("Apdex",$param) and $param["Apdex"] !== null) {
            $this->Apdex = $param["Apdex"];
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
        }

        if (array_key_exists("InstanceOnlineCount",$param) and $param["InstanceOnlineCount"] !== null) {
            $this->InstanceOnlineCount = $param["InstanceOnlineCount"];
        }

        if (array_key_exists("InstanceTotalCount",$param) and $param["InstanceTotalCount"] !== null) {
            $this->InstanceTotalCount = $param["InstanceTotalCount"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrorRateLevel",$param) and $param["ErrorRateLevel"] !== null) {
            $this->ErrorRateLevel = $param["ErrorRateLevel"];
        }

        if (array_key_exists("AvgTimeConsumingLevel",$param) and $param["AvgTimeConsumingLevel"] !== null) {
            $this->AvgTimeConsumingLevel = $param["AvgTimeConsumingLevel"];
        }

        if (array_key_exists("ApdexLevel",$param) and $param["ApdexLevel"] !== null) {
            $this->ApdexLevel = $param["ApdexLevel"];
        }
    }
}

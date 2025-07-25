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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志上下文信息
 *
 * @method string getSource() 获取日志来源设备
 * @method void setSource(string $Source) 设置日志来源设备
 * @method string getFilename() 获取采集路径
 * @method void setFilename(string $Filename) 设置采集路径
 * @method string getContent() 获取日志内容
 * @method void setContent(string $Content) 设置日志内容
 * @method string getPkgId() 获取日志包序号
 * @method void setPkgId(string $PkgId) 设置日志包序号
 * @method integer getPkgLogId() 获取日志包内一条日志的序号
 * @method void setPkgLogId(integer $PkgLogId) 设置日志包内一条日志的序号
 * @method integer getBTime() 获取日志时间戳
 * @method void setBTime(integer $BTime) 设置日志时间戳
 * @method string getHostName() 获取日志来源主机名称
 * @method void setHostName(string $HostName) 设置日志来源主机名称
 * @method string getRawLog() 获取原始日志(仅在日志创建索引异常时有值)
 * @method void setRawLog(string $RawLog) 设置原始日志(仅在日志创建索引异常时有值)
 * @method string getIndexStatus() 获取日志创建索引异常原因(仅在日志创建索引异常时有值)
 * @method void setIndexStatus(string $IndexStatus) 设置日志创建索引异常原因(仅在日志创建索引异常时有值)
 * @method array getHighLights() 获取日志内容的高亮描述信息
 * @method void setHighLights(array $HighLights) 设置日志内容的高亮描述信息
 */
class LogContextInfo extends AbstractModel
{
    /**
     * @var string 日志来源设备
     */
    public $Source;

    /**
     * @var string 采集路径
     */
    public $Filename;

    /**
     * @var string 日志内容
     */
    public $Content;

    /**
     * @var string 日志包序号
     */
    public $PkgId;

    /**
     * @var integer 日志包内一条日志的序号
     */
    public $PkgLogId;

    /**
     * @var integer 日志时间戳
     */
    public $BTime;

    /**
     * @var string 日志来源主机名称
     */
    public $HostName;

    /**
     * @var string 原始日志(仅在日志创建索引异常时有值)
     */
    public $RawLog;

    /**
     * @var string 日志创建索引异常原因(仅在日志创建索引异常时有值)
     */
    public $IndexStatus;

    /**
     * @var array 日志内容的高亮描述信息
     */
    public $HighLights;

    /**
     * @param string $Source 日志来源设备
     * @param string $Filename 采集路径
     * @param string $Content 日志内容
     * @param string $PkgId 日志包序号
     * @param integer $PkgLogId 日志包内一条日志的序号
     * @param integer $BTime 日志时间戳
     * @param string $HostName 日志来源主机名称
     * @param string $RawLog 原始日志(仅在日志创建索引异常时有值)
     * @param string $IndexStatus 日志创建索引异常原因(仅在日志创建索引异常时有值)
     * @param array $HighLights 日志内容的高亮描述信息
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
        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Filename",$param) and $param["Filename"] !== null) {
            $this->Filename = $param["Filename"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("PkgId",$param) and $param["PkgId"] !== null) {
            $this->PkgId = $param["PkgId"];
        }

        if (array_key_exists("PkgLogId",$param) and $param["PkgLogId"] !== null) {
            $this->PkgLogId = $param["PkgLogId"];
        }

        if (array_key_exists("BTime",$param) and $param["BTime"] !== null) {
            $this->BTime = $param["BTime"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("RawLog",$param) and $param["RawLog"] !== null) {
            $this->RawLog = $param["RawLog"];
        }

        if (array_key_exists("IndexStatus",$param) and $param["IndexStatus"] !== null) {
            $this->IndexStatus = $param["IndexStatus"];
        }

        if (array_key_exists("HighLights",$param) and $param["HighLights"] !== null) {
            $this->HighLights = [];
            foreach ($param["HighLights"] as $key => $value){
                $obj = new HighLightItem();
                $obj->deserialize($value);
                array_push($this->HighLights, $obj);
            }
        }
    }
}

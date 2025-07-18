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
 * 资产管理jar包详情
 *
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method integer getType() 获取类型：1应用程序，2系统类库，3Web服务自带库，8:其他，
 * @method void setType(integer $Type) 设置类型：1应用程序，2系统类库，3Web服务自带库，8:其他，
 * @method integer getStatus() 获取是否可执行：0未知，1是，2否
 * @method void setStatus(integer $Status) 设置是否可执行：0未知，1是，2否
 * @method string getVersion() 获取版本
 * @method void setVersion(string $Version) 设置版本
 * @method string getPath() 获取路径
 * @method void setPath(string $Path) 设置路径
 * @method string getMachineIp() 获取服务器IP
 * @method void setMachineIp(string $MachineIp) 设置服务器IP
 * @method string getMachineName() 获取服务器名称
 * @method void setMachineName(string $MachineName) 设置服务器名称
 * @method string getOsInfo() 获取操作系统
 * @method void setOsInfo(string $OsInfo) 设置操作系统
 * @method array getProcess() 获取引用进程列表
 * @method void setProcess(array $Process) 设置引用进程列表
 * @method string getMd5() 获取Jar包Md5
 * @method void setMd5(string $Md5) 设置Jar包Md5
 * @method string getUpdateTime() 获取数据更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置数据更新时间
 */
class AssetJarDetail extends AbstractModel
{
    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var integer 类型：1应用程序，2系统类库，3Web服务自带库，8:其他，
     */
    public $Type;

    /**
     * @var integer 是否可执行：0未知，1是，2否
     */
    public $Status;

    /**
     * @var string 版本
     */
    public $Version;

    /**
     * @var string 路径
     */
    public $Path;

    /**
     * @var string 服务器IP
     */
    public $MachineIp;

    /**
     * @var string 服务器名称
     */
    public $MachineName;

    /**
     * @var string 操作系统
     */
    public $OsInfo;

    /**
     * @var array 引用进程列表
     */
    public $Process;

    /**
     * @var string Jar包Md5
     */
    public $Md5;

    /**
     * @var string 数据更新时间
     */
    public $UpdateTime;

    /**
     * @param string $Name 名称
     * @param integer $Type 类型：1应用程序，2系统类库，3Web服务自带库，8:其他，
     * @param integer $Status 是否可执行：0未知，1是，2否
     * @param string $Version 版本
     * @param string $Path 路径
     * @param string $MachineIp 服务器IP
     * @param string $MachineName 服务器名称
     * @param string $OsInfo 操作系统
     * @param array $Process 引用进程列表
     * @param string $Md5 Jar包Md5
     * @param string $UpdateTime 数据更新时间
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("OsInfo",$param) and $param["OsInfo"] !== null) {
            $this->OsInfo = $param["OsInfo"];
        }

        if (array_key_exists("Process",$param) and $param["Process"] !== null) {
            $this->Process = [];
            foreach ($param["Process"] as $key => $value){
                $obj = new AssetAppProcessInfo();
                $obj->deserialize($value);
                array_push($this->Process, $obj);
            }
        }

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}

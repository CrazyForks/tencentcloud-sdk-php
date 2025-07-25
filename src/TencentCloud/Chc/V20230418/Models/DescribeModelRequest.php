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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeModel请求参数结构体
 *
 * @method string getDevModel() 获取服务器设备型号
 * @method void setDevModel(string $DevModel) 设置服务器设备型号
 * @method integer getCampusId() 获取园区ID
 * @method void setCampusId(integer $CampusId) 设置园区ID
 * @method string getDeviceType() 获取设备类型，服务器传入 server，网络设备传入 netDevice
 * @method void setDeviceType(string $DeviceType) 设置设备类型，服务器传入 server，网络设备传入 netDevice
 * @method boolean getChecked() 获取是否只返回已评估的版本
 * @method void setChecked(boolean $Checked) 设置是否只返回已评估的版本
 */
class DescribeModelRequest extends AbstractModel
{
    /**
     * @var string 服务器设备型号
     */
    public $DevModel;

    /**
     * @var integer 园区ID
     */
    public $CampusId;

    /**
     * @var string 设备类型，服务器传入 server，网络设备传入 netDevice
     */
    public $DeviceType;

    /**
     * @var boolean 是否只返回已评估的版本
     */
    public $Checked;

    /**
     * @param string $DevModel 服务器设备型号
     * @param integer $CampusId 园区ID
     * @param string $DeviceType 设备类型，服务器传入 server，网络设备传入 netDevice
     * @param boolean $Checked 是否只返回已评估的版本
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
        if (array_key_exists("DevModel",$param) and $param["DevModel"] !== null) {
            $this->DevModel = $param["DevModel"];
        }

        if (array_key_exists("CampusId",$param) and $param["CampusId"] !== null) {
            $this->CampusId = $param["CampusId"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("Checked",$param) and $param["Checked"] !== null) {
            $this->Checked = $param["Checked"];
        }
    }
}

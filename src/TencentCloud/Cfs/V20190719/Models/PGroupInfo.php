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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 权限组数组
 *
 * @method string getPGroupId() 获取权限组ID
 * @method void setPGroupId(string $PGroupId) 设置权限组ID
 * @method string getName() 获取权限组名称
 * @method void setName(string $Name) 设置权限组名称
 * @method string getDescInfo() 获取描述信息
 * @method void setDescInfo(string $DescInfo) 设置描述信息
 * @method string getCDate() 获取创建时间
 * @method void setCDate(string $CDate) 设置创建时间
 * @method integer getBindCfsNum() 获取关联文件系统个数
 * @method void setBindCfsNum(integer $BindCfsNum) 设置关联文件系统个数
 */
class PGroupInfo extends AbstractModel
{
    /**
     * @var string 权限组ID
     */
    public $PGroupId;

    /**
     * @var string 权限组名称
     */
    public $Name;

    /**
     * @var string 描述信息
     */
    public $DescInfo;

    /**
     * @var string 创建时间
     */
    public $CDate;

    /**
     * @var integer 关联文件系统个数
     */
    public $BindCfsNum;

    /**
     * @param string $PGroupId 权限组ID
     * @param string $Name 权限组名称
     * @param string $DescInfo 描述信息
     * @param string $CDate 创建时间
     * @param integer $BindCfsNum 关联文件系统个数
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
        if (array_key_exists("PGroupId",$param) and $param["PGroupId"] !== null) {
            $this->PGroupId = $param["PGroupId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DescInfo",$param) and $param["DescInfo"] !== null) {
            $this->DescInfo = $param["DescInfo"];
        }

        if (array_key_exists("CDate",$param) and $param["CDate"] !== null) {
            $this->CDate = $param["CDate"];
        }

        if (array_key_exists("BindCfsNum",$param) and $param["BindCfsNum"] !== null) {
            $this->BindCfsNum = $param["BindCfsNum"];
        }
    }
}

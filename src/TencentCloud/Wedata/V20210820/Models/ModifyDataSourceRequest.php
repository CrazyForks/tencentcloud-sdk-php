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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDataSource请求参数结构体
 *
 * @method string getName() 获取数据源名称，在相同SpaceName下，数据源名称不能为空
 * @method void setName(string $Name) 设置数据源名称，在相同SpaceName下，数据源名称不能为空
 * @method string getCategory() 获取数据源类别：绑定引擎、绑定数据库
 * @method void setCategory(string $Category) 设置数据源类别：绑定引擎、绑定数据库
 * @method string getType() 获取数据源类型:枚举值
 * @method void setType(string $Type) 设置数据源类型:枚举值
 * @method integer getID() 获取数据源ID
 * @method void setID(integer $ID) 设置数据源ID
 * @method string getBizParams() 获取业务侧数据源的配置信息扩展
 * @method void setBizParams(string $BizParams) 设置业务侧数据源的配置信息扩展
 * @method string getParams() 获取数据源的配置信息，以JSON KV存储，根据每个数据源类型不同，而KV存储信息不同
 * @method void setParams(string $Params) 设置数据源的配置信息，以JSON KV存储，根据每个数据源类型不同，而KV存储信息不同
 * @method string getDescription() 获取数据源描述信息
 * @method void setDescription(string $Description) 设置数据源描述信息
 * @method string getDisplay() 获取数据源展示名，为了可视化查看
 * @method void setDisplay(string $Display) 设置数据源展示名，为了可视化查看
 * @method string getDatabaseName() 获取若数据源列表为绑定数据库，则为db名称
 * @method void setDatabaseName(string $DatabaseName) 设置若数据源列表为绑定数据库，则为db名称
 * @method string getInstance() 获取数据源引擎的实例ID，如CDB实例ID
 * @method void setInstance(string $Instance) 设置数据源引擎的实例ID，如CDB实例ID
 * @method integer getStatus() 获取数据源数据源的可见性，1为可见、0为不可见。默认为1
 * @method void setStatus(integer $Status) 设置数据源数据源的可见性，1为可见、0为不可见。默认为1
 * @method string getClusterId() 获取数据源所属的业务空间名称
 * @method void setClusterId(string $ClusterId) 设置数据源所属的业务空间名称
 * @method string getCollect() 获取是否采集
 * @method void setCollect(string $Collect) 设置是否采集
 * @method string getOwnerProjectId() 获取项目id
 * @method void setOwnerProjectId(string $OwnerProjectId) 设置项目id
 * @method string getOwnerProjectName() 获取项目名称
 * @method void setOwnerProjectName(string $OwnerProjectName) 设置项目名称
 * @method string getOwnerProjectIdent() 获取项目中文名
 * @method void setOwnerProjectIdent(string $OwnerProjectIdent) 设置项目中文名
 * @method string getCOSBucket() 获取cos bucket
 * @method void setCOSBucket(string $COSBucket) 设置cos bucket
 * @method string getCOSRegion() 获取cos region
 * @method void setCOSRegion(string $COSRegion) 设置cos region
 * @method string getProjectId() 获取操作项目id
 * @method void setProjectId(string $ProjectId) 设置操作项目id
 * @method string getDevelopmentParams() 获取数据源开发环境配置
 * @method void setDevelopmentParams(string $DevelopmentParams) 设置数据源开发环境配置
 */
class ModifyDataSourceRequest extends AbstractModel
{
    /**
     * @var string 数据源名称，在相同SpaceName下，数据源名称不能为空
     */
    public $Name;

    /**
     * @var string 数据源类别：绑定引擎、绑定数据库
     */
    public $Category;

    /**
     * @var string 数据源类型:枚举值
     */
    public $Type;

    /**
     * @var integer 数据源ID
     */
    public $ID;

    /**
     * @var string 业务侧数据源的配置信息扩展
     */
    public $BizParams;

    /**
     * @var string 数据源的配置信息，以JSON KV存储，根据每个数据源类型不同，而KV存储信息不同
     */
    public $Params;

    /**
     * @var string 数据源描述信息
     */
    public $Description;

    /**
     * @var string 数据源展示名，为了可视化查看
     */
    public $Display;

    /**
     * @var string 若数据源列表为绑定数据库，则为db名称
     */
    public $DatabaseName;

    /**
     * @var string 数据源引擎的实例ID，如CDB实例ID
     */
    public $Instance;

    /**
     * @var integer 数据源数据源的可见性，1为可见、0为不可见。默认为1
     */
    public $Status;

    /**
     * @var string 数据源所属的业务空间名称
     */
    public $ClusterId;

    /**
     * @var string 是否采集
     */
    public $Collect;

    /**
     * @var string 项目id
     */
    public $OwnerProjectId;

    /**
     * @var string 项目名称
     */
    public $OwnerProjectName;

    /**
     * @var string 项目中文名
     */
    public $OwnerProjectIdent;

    /**
     * @var string cos bucket
     */
    public $COSBucket;

    /**
     * @var string cos region
     */
    public $COSRegion;

    /**
     * @var string 操作项目id
     */
    public $ProjectId;

    /**
     * @var string 数据源开发环境配置
     */
    public $DevelopmentParams;

    /**
     * @param string $Name 数据源名称，在相同SpaceName下，数据源名称不能为空
     * @param string $Category 数据源类别：绑定引擎、绑定数据库
     * @param string $Type 数据源类型:枚举值
     * @param integer $ID 数据源ID
     * @param string $BizParams 业务侧数据源的配置信息扩展
     * @param string $Params 数据源的配置信息，以JSON KV存储，根据每个数据源类型不同，而KV存储信息不同
     * @param string $Description 数据源描述信息
     * @param string $Display 数据源展示名，为了可视化查看
     * @param string $DatabaseName 若数据源列表为绑定数据库，则为db名称
     * @param string $Instance 数据源引擎的实例ID，如CDB实例ID
     * @param integer $Status 数据源数据源的可见性，1为可见、0为不可见。默认为1
     * @param string $ClusterId 数据源所属的业务空间名称
     * @param string $Collect 是否采集
     * @param string $OwnerProjectId 项目id
     * @param string $OwnerProjectName 项目名称
     * @param string $OwnerProjectIdent 项目中文名
     * @param string $COSBucket cos bucket
     * @param string $COSRegion cos region
     * @param string $ProjectId 操作项目id
     * @param string $DevelopmentParams 数据源开发环境配置
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

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("BizParams",$param) and $param["BizParams"] !== null) {
            $this->BizParams = $param["BizParams"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = $param["Params"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Display",$param) and $param["Display"] !== null) {
            $this->Display = $param["Display"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("Instance",$param) and $param["Instance"] !== null) {
            $this->Instance = $param["Instance"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Collect",$param) and $param["Collect"] !== null) {
            $this->Collect = $param["Collect"];
        }

        if (array_key_exists("OwnerProjectId",$param) and $param["OwnerProjectId"] !== null) {
            $this->OwnerProjectId = $param["OwnerProjectId"];
        }

        if (array_key_exists("OwnerProjectName",$param) and $param["OwnerProjectName"] !== null) {
            $this->OwnerProjectName = $param["OwnerProjectName"];
        }

        if (array_key_exists("OwnerProjectIdent",$param) and $param["OwnerProjectIdent"] !== null) {
            $this->OwnerProjectIdent = $param["OwnerProjectIdent"];
        }

        if (array_key_exists("COSBucket",$param) and $param["COSBucket"] !== null) {
            $this->COSBucket = $param["COSBucket"];
        }

        if (array_key_exists("COSRegion",$param) and $param["COSRegion"] !== null) {
            $this->COSRegion = $param["COSRegion"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DevelopmentParams",$param) and $param["DevelopmentParams"] !== null) {
            $this->DevelopmentParams = $param["DevelopmentParams"];
        }
    }
}

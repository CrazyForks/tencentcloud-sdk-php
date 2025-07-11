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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务
 *
 * @method string getApplicationId() 获取主键
 * @method void setApplicationId(string $ApplicationId) 设置主键
 * @method string getApplicationName() 获取服务名
 * @method void setApplicationName(string $ApplicationName) 设置服务名
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method string getEnvironmentId() 获取命名空间id
 * @method void setEnvironmentId(string $EnvironmentId) 设置命名空间id
 * @method string getCreateDate() 获取创建时间
 * @method void setCreateDate(string $CreateDate) 设置创建时间
 * @method string getModifyDate() 获取修改时间
 * @method void setModifyDate(string $ModifyDate) 设置修改时间
 * @method string getModifier() 获取修改人
 * @method void setModifier(string $Modifier) 设置修改人
 * @method string getCreator() 获取创建者
 * @method void setCreator(string $Creator) 设置创建者
 * @method integer getRepoType() 获取tcr个人版or企业版
 * @method void setRepoType(integer $RepoType) 设置tcr个人版or企业版
 * @method string getInstanceId() 获取企业版实例id
 * @method void setInstanceId(string $InstanceId) 设置企业版实例id
 * @method string getRepoName() 获取镜像仓库名
 * @method void setRepoName(string $RepoName) 设置镜像仓库名
 * @method string getCodingLanguage() 获取编程语言
 * @method void setCodingLanguage(string $CodingLanguage) 设置编程语言
 * @method string getDeployMode() 获取部署方式
 * @method void setDeployMode(string $DeployMode) 设置部署方式
 * @method string getEnvironmentName() 获取环境名称
 * @method void setEnvironmentName(string $EnvironmentName) 设置环境名称
 * @method array getActiveVersions() 获取服务当前运行环境的实例信息
 * @method void setActiveVersions(array $ActiveVersions) 设置服务当前运行环境的实例信息
 * @method integer getEnableTracing() 获取是否启用链路追踪
 * @method void setEnableTracing(integer $EnableTracing) 设置是否启用链路追踪
 * @method array getTags() 获取标签
 * @method void setTags(array $Tags) 设置标签
 * @method boolean getHasAuthority() 获取是否有资源权限
 * @method void setHasAuthority(boolean $HasAuthority) 设置是否有资源权限
 */
class TemService extends AbstractModel
{
    /**
     * @var string 主键
     */
    public $ApplicationId;

    /**
     * @var string 服务名
     */
    public $ApplicationName;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var string 命名空间id
     */
    public $EnvironmentId;

    /**
     * @var string 创建时间
     */
    public $CreateDate;

    /**
     * @var string 修改时间
     */
    public $ModifyDate;

    /**
     * @var string 修改人
     */
    public $Modifier;

    /**
     * @var string 创建者
     */
    public $Creator;

    /**
     * @var integer tcr个人版or企业版
     */
    public $RepoType;

    /**
     * @var string 企业版实例id
     */
    public $InstanceId;

    /**
     * @var string 镜像仓库名
     */
    public $RepoName;

    /**
     * @var string 编程语言
     */
    public $CodingLanguage;

    /**
     * @var string 部署方式
     */
    public $DeployMode;

    /**
     * @var string 环境名称
     */
    public $EnvironmentName;

    /**
     * @var array 服务当前运行环境的实例信息
     */
    public $ActiveVersions;

    /**
     * @var integer 是否启用链路追踪
     */
    public $EnableTracing;

    /**
     * @var array 标签
     */
    public $Tags;

    /**
     * @var boolean 是否有资源权限
     */
    public $HasAuthority;

    /**
     * @param string $ApplicationId 主键
     * @param string $ApplicationName 服务名
     * @param string $Description 描述
     * @param string $EnvironmentId 命名空间id
     * @param string $CreateDate 创建时间
     * @param string $ModifyDate 修改时间
     * @param string $Modifier 修改人
     * @param string $Creator 创建者
     * @param integer $RepoType tcr个人版or企业版
     * @param string $InstanceId 企业版实例id
     * @param string $RepoName 镜像仓库名
     * @param string $CodingLanguage 编程语言
     * @param string $DeployMode 部署方式
     * @param string $EnvironmentName 环境名称
     * @param array $ActiveVersions 服务当前运行环境的实例信息
     * @param integer $EnableTracing 是否启用链路追踪
     * @param array $Tags 标签
     * @param boolean $HasAuthority 是否有资源权限
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("CreateDate",$param) and $param["CreateDate"] !== null) {
            $this->CreateDate = $param["CreateDate"];
        }

        if (array_key_exists("ModifyDate",$param) and $param["ModifyDate"] !== null) {
            $this->ModifyDate = $param["ModifyDate"];
        }

        if (array_key_exists("Modifier",$param) and $param["Modifier"] !== null) {
            $this->Modifier = $param["Modifier"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("RepoType",$param) and $param["RepoType"] !== null) {
            $this->RepoType = $param["RepoType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("RepoName",$param) and $param["RepoName"] !== null) {
            $this->RepoName = $param["RepoName"];
        }

        if (array_key_exists("CodingLanguage",$param) and $param["CodingLanguage"] !== null) {
            $this->CodingLanguage = $param["CodingLanguage"];
        }

        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = $param["DeployMode"];
        }

        if (array_key_exists("EnvironmentName",$param) and $param["EnvironmentName"] !== null) {
            $this->EnvironmentName = $param["EnvironmentName"];
        }

        if (array_key_exists("ActiveVersions",$param) and $param["ActiveVersions"] !== null) {
            $this->ActiveVersions = [];
            foreach ($param["ActiveVersions"] as $key => $value){
                $obj = new ServiceVersionBrief();
                $obj->deserialize($value);
                array_push($this->ActiveVersions, $obj);
            }
        }

        if (array_key_exists("EnableTracing",$param) and $param["EnableTracing"] !== null) {
            $this->EnableTracing = $param["EnableTracing"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("HasAuthority",$param) and $param["HasAuthority"] !== null) {
            $this->HasAuthority = $param["HasAuthority"];
        }
    }
}

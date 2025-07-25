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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUsers请求参数结构体
 *
 * @method array getIdSet() 获取如果IdSet不为空，则忽略其他参数
 * @method void setIdSet(array $IdSet) 设置如果IdSet不为空，则忽略其他参数
 * @method string getName() 获取模糊查询，IdSet、UserName、Phone为空时才生效，对用户名和姓名进行模糊查询
 * @method void setName(string $Name) 设置模糊查询，IdSet、UserName、Phone为空时才生效，对用户名和姓名进行模糊查询
 * @method integer getOffset() 获取分页偏移位置，默认值为0
 * @method void setOffset(integer $Offset) 设置分页偏移位置，默认值为0
 * @method integer getLimit() 获取每页条目数量，默认20, 最大500
 * @method void setLimit(integer $Limit) 设置每页条目数量，默认20, 最大500
 * @method string getUserName() 获取精确查询，IdSet为空时才生效
 * @method void setUserName(string $UserName) 设置精确查询，IdSet为空时才生效
 * @method string getPhone() 获取精确查询，IdSet、UserName为空时才生效。
大陆手机号直接填写，如果是其他国家、地区号码,按照"国家地区代码|手机号"的格式输入。如: "+852|xxxxxxxx"
 * @method void setPhone(string $Phone) 设置精确查询，IdSet、UserName为空时才生效。
大陆手机号直接填写，如果是其他国家、地区号码,按照"国家地区代码|手机号"的格式输入。如: "+852|xxxxxxxx"
 * @method string getEmail() 获取邮箱，精确查询
 * @method void setEmail(string $Email) 设置邮箱，精确查询
 * @method array getAuthorizedDeviceIdSet() 获取查询具有指定资产ID访问权限的用户
 * @method void setAuthorizedDeviceIdSet(array $AuthorizedDeviceIdSet) 设置查询具有指定资产ID访问权限的用户
 * @method array getAuthorizedAppAssetIdSet() 获取查询具有指定应用资产ID访问权限的用户
 * @method void setAuthorizedAppAssetIdSet(array $AuthorizedAppAssetIdSet) 设置查询具有指定应用资产ID访问权限的用户
 * @method array getAuthTypeSet() 获取认证方式，0 - 本地, 1 - LDAP, 2 - OAuth, 3-ioa 不传为全部
 * @method void setAuthTypeSet(array $AuthTypeSet) 设置认证方式，0 - 本地, 1 - LDAP, 2 - OAuth, 3-ioa 不传为全部
 * @method string getDepartmentId() 获取部门ID，用于过滤属于某个部门的用户
 * @method void setDepartmentId(string $DepartmentId) 设置部门ID，用于过滤属于某个部门的用户
 * @method array getFilters() 获取参数过滤数组

 * @method void setFilters(array $Filters) 设置参数过滤数组

 * @method integer getIsCamUser() 获取是否获取cam用户, 0-否，1-是
 * @method void setIsCamUser(integer $IsCamUser) 设置是否获取cam用户, 0-否，1-是
 * @method array getUserFromSet() 获取用户来源，0-bh，1-ioa,不传为全部
 * @method void setUserFromSet(array $UserFromSet) 设置用户来源，0-bh，1-ioa,不传为全部
 */
class DescribeUsersRequest extends AbstractModel
{
    /**
     * @var array 如果IdSet不为空，则忽略其他参数
     */
    public $IdSet;

    /**
     * @var string 模糊查询，IdSet、UserName、Phone为空时才生效，对用户名和姓名进行模糊查询
     */
    public $Name;

    /**
     * @var integer 分页偏移位置，默认值为0
     */
    public $Offset;

    /**
     * @var integer 每页条目数量，默认20, 最大500
     */
    public $Limit;

    /**
     * @var string 精确查询，IdSet为空时才生效
     */
    public $UserName;

    /**
     * @var string 精确查询，IdSet、UserName为空时才生效。
大陆手机号直接填写，如果是其他国家、地区号码,按照"国家地区代码|手机号"的格式输入。如: "+852|xxxxxxxx"
     */
    public $Phone;

    /**
     * @var string 邮箱，精确查询
     */
    public $Email;

    /**
     * @var array 查询具有指定资产ID访问权限的用户
     */
    public $AuthorizedDeviceIdSet;

    /**
     * @var array 查询具有指定应用资产ID访问权限的用户
     */
    public $AuthorizedAppAssetIdSet;

    /**
     * @var array 认证方式，0 - 本地, 1 - LDAP, 2 - OAuth, 3-ioa 不传为全部
     */
    public $AuthTypeSet;

    /**
     * @var string 部门ID，用于过滤属于某个部门的用户
     */
    public $DepartmentId;

    /**
     * @var array 参数过滤数组

     */
    public $Filters;

    /**
     * @var integer 是否获取cam用户, 0-否，1-是
     */
    public $IsCamUser;

    /**
     * @var array 用户来源，0-bh，1-ioa,不传为全部
     */
    public $UserFromSet;

    /**
     * @param array $IdSet 如果IdSet不为空，则忽略其他参数
     * @param string $Name 模糊查询，IdSet、UserName、Phone为空时才生效，对用户名和姓名进行模糊查询
     * @param integer $Offset 分页偏移位置，默认值为0
     * @param integer $Limit 每页条目数量，默认20, 最大500
     * @param string $UserName 精确查询，IdSet为空时才生效
     * @param string $Phone 精确查询，IdSet、UserName为空时才生效。
大陆手机号直接填写，如果是其他国家、地区号码,按照"国家地区代码|手机号"的格式输入。如: "+852|xxxxxxxx"
     * @param string $Email 邮箱，精确查询
     * @param array $AuthorizedDeviceIdSet 查询具有指定资产ID访问权限的用户
     * @param array $AuthorizedAppAssetIdSet 查询具有指定应用资产ID访问权限的用户
     * @param array $AuthTypeSet 认证方式，0 - 本地, 1 - LDAP, 2 - OAuth, 3-ioa 不传为全部
     * @param string $DepartmentId 部门ID，用于过滤属于某个部门的用户
     * @param array $Filters 参数过滤数组

     * @param integer $IsCamUser 是否获取cam用户, 0-否，1-是
     * @param array $UserFromSet 用户来源，0-bh，1-ioa,不传为全部
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
        if (array_key_exists("IdSet",$param) and $param["IdSet"] !== null) {
            $this->IdSet = $param["IdSet"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("AuthorizedDeviceIdSet",$param) and $param["AuthorizedDeviceIdSet"] !== null) {
            $this->AuthorizedDeviceIdSet = $param["AuthorizedDeviceIdSet"];
        }

        if (array_key_exists("AuthorizedAppAssetIdSet",$param) and $param["AuthorizedAppAssetIdSet"] !== null) {
            $this->AuthorizedAppAssetIdSet = $param["AuthorizedAppAssetIdSet"];
        }

        if (array_key_exists("AuthTypeSet",$param) and $param["AuthTypeSet"] !== null) {
            $this->AuthTypeSet = $param["AuthTypeSet"];
        }

        if (array_key_exists("DepartmentId",$param) and $param["DepartmentId"] !== null) {
            $this->DepartmentId = $param["DepartmentId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("IsCamUser",$param) and $param["IsCamUser"] !== null) {
            $this->IsCamUser = $param["IsCamUser"];
        }

        if (array_key_exists("UserFromSet",$param) and $param["UserFromSet"] !== null) {
            $this->UserFromSet = $param["UserFromSet"];
        }
    }
}

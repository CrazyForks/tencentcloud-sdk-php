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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOrganizationMembers请求参数结构体
 *
 * @method integer getOffset() 获取偏移量。取值是limit的整数倍，默认值 : 0
 * @method void setOffset(integer $Offset) 设置偏移量。取值是limit的整数倍，默认值 : 0
 * @method integer getLimit() 获取限制数目。取值范围：1~50，默认值：10
 * @method void setLimit(integer $Limit) 设置限制数目。取值范围：1~50，默认值：10
 * @method string getLang() 获取国际站：en，国内站：zh
 * @method void setLang(string $Lang) 设置国际站：en，国内站：zh
 * @method string getSearchKey() 获取成员名称或者成员ID搜索。
 * @method void setSearchKey(string $SearchKey) 设置成员名称或者成员ID搜索。
 * @method string getAuthName() 获取主体名称搜索。
 * @method void setAuthName(string $AuthName) 设置主体名称搜索。
 * @method string getProduct() 获取可信服务产品简称。可信服务管理员查询时必须指定
 * @method void setProduct(string $Product) 设置可信服务产品简称。可信服务管理员查询时必须指定
 * @method array getTags() 获取成员标签搜索列表，最大10个
 * @method void setTags(array $Tags) 设置成员标签搜索列表，最大10个
 * @method integer getNodeId() 获取组织单元ID
 * @method void setNodeId(integer $NodeId) 设置组织单元ID
 * @method string getNodeName() 获取组织单元名称
 * @method void setNodeName(string $NodeName) 设置组织单元名称
 */
class DescribeOrganizationMembersRequest extends AbstractModel
{
    /**
     * @var integer 偏移量。取值是limit的整数倍，默认值 : 0
     */
    public $Offset;

    /**
     * @var integer 限制数目。取值范围：1~50，默认值：10
     */
    public $Limit;

    /**
     * @var string 国际站：en，国内站：zh
     */
    public $Lang;

    /**
     * @var string 成员名称或者成员ID搜索。
     */
    public $SearchKey;

    /**
     * @var string 主体名称搜索。
     */
    public $AuthName;

    /**
     * @var string 可信服务产品简称。可信服务管理员查询时必须指定
     */
    public $Product;

    /**
     * @var array 成员标签搜索列表，最大10个
     */
    public $Tags;

    /**
     * @var integer 组织单元ID
     */
    public $NodeId;

    /**
     * @var string 组织单元名称
     */
    public $NodeName;

    /**
     * @param integer $Offset 偏移量。取值是limit的整数倍，默认值 : 0
     * @param integer $Limit 限制数目。取值范围：1~50，默认值：10
     * @param string $Lang 国际站：en，国内站：zh
     * @param string $SearchKey 成员名称或者成员ID搜索。
     * @param string $AuthName 主体名称搜索。
     * @param string $Product 可信服务产品简称。可信服务管理员查询时必须指定
     * @param array $Tags 成员标签搜索列表，最大10个
     * @param integer $NodeId 组织单元ID
     * @param string $NodeName 组织单元名称
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Lang",$param) and $param["Lang"] !== null) {
            $this->Lang = $param["Lang"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("AuthName",$param) and $param["AuthName"] !== null) {
            $this->AuthName = $param["AuthName"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }
    }
}

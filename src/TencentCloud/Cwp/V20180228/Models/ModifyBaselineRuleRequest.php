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
 * ModifyBaselineRule请求参数结构体
 *
 * @method BaselineRule getData() 获取无
 * @method void setData(BaselineRule $Data) 设置无
 * @method integer getSelectAll() 获取是否过滤全选
 * @method void setSelectAll(integer $SelectAll) 设置是否过滤全选
 * @method array getFilters() 获取<li>ItemName - string - 是否必填：否 - 项名称</li>
 * @method void setFilters(array $Filters) 设置<li>ItemName - string - 是否必填：否 - 项名称</li>
 * @method integer getIdType() 获取0:检测项，1:检测项分类
 * @method void setIdType(integer $IdType) 设置0:检测项，1:检测项分类
 * @method array getExcludeIds() 获取需要排除的检测项id
 * @method void setExcludeIds(array $ExcludeIds) 设置需要排除的检测项id
 * @method array getCategoryIds() 获取勾选的检测项分类
 * @method void setCategoryIds(array $CategoryIds) 设置勾选的检测项分类
 */
class ModifyBaselineRuleRequest extends AbstractModel
{
    /**
     * @var BaselineRule 无
     */
    public $Data;

    /**
     * @var integer 是否过滤全选
     */
    public $SelectAll;

    /**
     * @var array <li>ItemName - string - 是否必填：否 - 项名称</li>
     */
    public $Filters;

    /**
     * @var integer 0:检测项，1:检测项分类
     */
    public $IdType;

    /**
     * @var array 需要排除的检测项id
     */
    public $ExcludeIds;

    /**
     * @var array 勾选的检测项分类
     */
    public $CategoryIds;

    /**
     * @param BaselineRule $Data 无
     * @param integer $SelectAll 是否过滤全选
     * @param array $Filters <li>ItemName - string - 是否必填：否 - 项名称</li>
     * @param integer $IdType 0:检测项，1:检测项分类
     * @param array $ExcludeIds 需要排除的检测项id
     * @param array $CategoryIds 勾选的检测项分类
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = new BaselineRule();
            $this->Data->deserialize($param["Data"]);
        }

        if (array_key_exists("SelectAll",$param) and $param["SelectAll"] !== null) {
            $this->SelectAll = $param["SelectAll"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("IdType",$param) and $param["IdType"] !== null) {
            $this->IdType = $param["IdType"];
        }

        if (array_key_exists("ExcludeIds",$param) and $param["ExcludeIds"] !== null) {
            $this->ExcludeIds = $param["ExcludeIds"];
        }

        if (array_key_exists("CategoryIds",$param) and $param["CategoryIds"] !== null) {
            $this->CategoryIds = $param["CategoryIds"];
        }
    }
}

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
 * DescribeShareUnitResources请求参数结构体
 *
 * @method string getUnitId() 获取共享单元ID。
 * @method void setUnitId(string $UnitId) 设置共享单元ID。
 * @method string getArea() 获取共享单元地域。
 * @method void setArea(string $Area) 设置共享单元地域。
 * @method integer getOffset() 获取偏移量。取值是limit的整数倍，默认值 : 0
 * @method void setOffset(integer $Offset) 设置偏移量。取值是limit的整数倍，默认值 : 0
 * @method integer getLimit() 获取限制数目。取值范围：1~50。
 * @method void setLimit(integer $Limit) 设置限制数目。取值范围：1~50。
 * @method string getSearchKey() 获取搜索关键字。支持产品资源ID搜索。
 * @method void setSearchKey(string $SearchKey) 设置搜索关键字。支持产品资源ID搜索。
 * @method string getType() 获取共享资源类型。支持共享的资源类型,请参见[资源共享概述](https://cloud.tencent.com/document/product/850/59489)
 * @method void setType(string $Type) 设置共享资源类型。支持共享的资源类型,请参见[资源共享概述](https://cloud.tencent.com/document/product/850/59489)
 */
class DescribeShareUnitResourcesRequest extends AbstractModel
{
    /**
     * @var string 共享单元ID。
     */
    public $UnitId;

    /**
     * @var string 共享单元地域。
     */
    public $Area;

    /**
     * @var integer 偏移量。取值是limit的整数倍，默认值 : 0
     */
    public $Offset;

    /**
     * @var integer 限制数目。取值范围：1~50。
     */
    public $Limit;

    /**
     * @var string 搜索关键字。支持产品资源ID搜索。
     */
    public $SearchKey;

    /**
     * @var string 共享资源类型。支持共享的资源类型,请参见[资源共享概述](https://cloud.tencent.com/document/product/850/59489)
     */
    public $Type;

    /**
     * @param string $UnitId 共享单元ID。
     * @param string $Area 共享单元地域。
     * @param integer $Offset 偏移量。取值是limit的整数倍，默认值 : 0
     * @param integer $Limit 限制数目。取值范围：1~50。
     * @param string $SearchKey 搜索关键字。支持产品资源ID搜索。
     * @param string $Type 共享资源类型。支持共享的资源类型,请参见[资源共享概述](https://cloud.tencent.com/document/product/850/59489)
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
        if (array_key_exists("UnitId",$param) and $param["UnitId"] !== null) {
            $this->UnitId = $param["UnitId"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}

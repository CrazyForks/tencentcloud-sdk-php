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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePlatformImages请求参数结构体
 *
 * @method array getFilters() 获取过滤器,  Name支持ImageId/ImageName/SupportDataPipeline/AllowSaveAllContent/ImageRange，其中ImageRange支持枚举值Train,Inference,Notebook
 * @method void setFilters(array $Filters) 设置过滤器,  Name支持ImageId/ImageName/SupportDataPipeline/AllowSaveAllContent/ImageRange，其中ImageRange支持枚举值Train,Inference,Notebook
 * @method integer getOffset() 获取偏移信息
 * @method void setOffset(integer $Offset) 设置偏移信息
 * @method integer getLimit() 获取返回数量, 默认100
 * @method void setLimit(integer $Limit) 设置返回数量, 默认100
 */
class DescribePlatformImagesRequest extends AbstractModel
{
    /**
     * @var array 过滤器,  Name支持ImageId/ImageName/SupportDataPipeline/AllowSaveAllContent/ImageRange，其中ImageRange支持枚举值Train,Inference,Notebook
     */
    public $Filters;

    /**
     * @var integer 偏移信息
     */
    public $Offset;

    /**
     * @var integer 返回数量, 默认100
     */
    public $Limit;

    /**
     * @param array $Filters 过滤器,  Name支持ImageId/ImageName/SupportDataPipeline/AllowSaveAllContent/ImageRange，其中ImageRange支持枚举值Train,Inference,Notebook
     * @param integer $Offset 偏移信息
     * @param integer $Limit 返回数量, 默认100
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}

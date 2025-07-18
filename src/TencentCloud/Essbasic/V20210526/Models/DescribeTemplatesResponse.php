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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTemplates返回参数结构体
 *
 * @method array getTemplates() 获取模板详情列表数据
 * @method void setTemplates(array $Templates) 设置模板详情列表数据
 * @method integer getTotalCount() 获取查询到的模板总数
 * @method void setTotalCount(integer $TotalCount) 设置查询到的模板总数
 * @method integer getLimit() 获取每页返回的数据条数
 * @method void setLimit(integer $Limit) 设置每页返回的数据条数
 * @method integer getOffset() 获取查询结果分页返回，此处指定第几页。页码从0开始，即首页为0。
 * @method void setOffset(integer $Offset) 设置查询结果分页返回，此处指定第几页。页码从0开始，即首页为0。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTemplatesResponse extends AbstractModel
{
    /**
     * @var array 模板详情列表数据
     */
    public $Templates;

    /**
     * @var integer 查询到的模板总数
     */
    public $TotalCount;

    /**
     * @var integer 每页返回的数据条数
     */
    public $Limit;

    /**
     * @var integer 查询结果分页返回，此处指定第几页。页码从0开始，即首页为0。
     */
    public $Offset;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Templates 模板详情列表数据
     * @param integer $TotalCount 查询到的模板总数
     * @param integer $Limit 每页返回的数据条数
     * @param integer $Offset 查询结果分页返回，此处指定第几页。页码从0开始，即首页为0。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Templates",$param) and $param["Templates"] !== null) {
            $this->Templates = [];
            foreach ($param["Templates"] as $key => $value){
                $obj = new TemplateInfo();
                $obj->deserialize($value);
                array_push($this->Templates, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

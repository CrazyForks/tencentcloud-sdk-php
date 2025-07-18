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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TurnPDFToObjectAsyncGetResult返回参数结构体
 *
 * @method Template getTemplate() 获取报告结构化结果
 * @method void setTemplate(Template $Template) 设置报告结构化结果
 * @method array getTextTypeList() 获取多级分类结果
 * @method void setTextTypeList(array $TextTypeList) 设置多级分类结果
 * @method Block getBlock() 获取报告结构化结果(体检报告PDF结构化接口返回的 json 内容非常多，建议通过本地代码调用)
 * @method void setBlock(Block $Block) 设置报告结构化结果(体检报告PDF结构化接口返回的 json 内容非常多，建议通过本地代码调用)
 * @method boolean getIsBlock() 获取是否使用Block字段
 * @method void setIsBlock(boolean $IsBlock) 设置是否使用Block字段
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class TurnPDFToObjectAsyncGetResultResponse extends AbstractModel
{
    /**
     * @var Template 报告结构化结果
     */
    public $Template;

    /**
     * @var array 多级分类结果
     */
    public $TextTypeList;

    /**
     * @var Block 报告结构化结果(体检报告PDF结构化接口返回的 json 内容非常多，建议通过本地代码调用)
     */
    public $Block;

    /**
     * @var boolean 是否使用Block字段
     */
    public $IsBlock;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param Template $Template 报告结构化结果
     * @param array $TextTypeList 多级分类结果
     * @param Block $Block 报告结构化结果(体检报告PDF结构化接口返回的 json 内容非常多，建议通过本地代码调用)
     * @param boolean $IsBlock 是否使用Block字段
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
        if (array_key_exists("Template",$param) and $param["Template"] !== null) {
            $this->Template = new Template();
            $this->Template->deserialize($param["Template"]);
        }

        if (array_key_exists("TextTypeList",$param) and $param["TextTypeList"] !== null) {
            $this->TextTypeList = [];
            foreach ($param["TextTypeList"] as $key => $value){
                $obj = new TextType();
                $obj->deserialize($value);
                array_push($this->TextTypeList, $obj);
            }
        }

        if (array_key_exists("Block",$param) and $param["Block"] !== null) {
            $this->Block = new Block();
            $this->Block->deserialize($param["Block"]);
        }

        if (array_key_exists("IsBlock",$param) and $param["IsBlock"] !== null) {
            $this->IsBlock = $param["IsBlock"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

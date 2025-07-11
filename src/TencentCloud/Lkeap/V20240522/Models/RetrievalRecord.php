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
namespace TencentCloud\Lkeap\V20240522\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 检索的结果
 *
 * @method RetrievalRecordMetadata getMetadata() 获取检索结果的元数据
 * @method void setMetadata(RetrievalRecordMetadata $Metadata) 设置检索结果的元数据
 * @method string getTitle() 获取检索到的标题
 * @method void setTitle(string $Title) 设置检索到的标题
 * @method string getContent() 获取检索到的内容
 * @method void setContent(string $Content) 设置检索到的内容
 */
class RetrievalRecord extends AbstractModel
{
    /**
     * @var RetrievalRecordMetadata 检索结果的元数据
     */
    public $Metadata;

    /**
     * @var string 检索到的标题
     */
    public $Title;

    /**
     * @var string 检索到的内容
     */
    public $Content;

    /**
     * @param RetrievalRecordMetadata $Metadata 检索结果的元数据
     * @param string $Title 检索到的标题
     * @param string $Content 检索到的内容
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
        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = new RetrievalRecordMetadata();
            $this->Metadata->deserialize($param["Metadata"]);
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}

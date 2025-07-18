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
namespace TencentCloud\Bma\V20221115\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBPFakeURLs请求参数结构体
 *
 * @method string getFakeURLs() 获取批量模板
 * @method void setFakeURLs(string $FakeURLs) 设置批量模板
 */
class CreateBPFakeURLsRequest extends AbstractModel
{
    /**
     * @var string 批量模板
     */
    public $FakeURLs;

    /**
     * @param string $FakeURLs 批量模板
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
        if (array_key_exists("FakeURLs",$param) and $param["FakeURLs"] !== null) {
            $this->FakeURLs = $param["FakeURLs"];
        }
    }
}

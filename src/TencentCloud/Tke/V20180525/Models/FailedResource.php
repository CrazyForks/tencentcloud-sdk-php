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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 修改标签失败的资源
 *
 * @method string getResource() 获取资源六段式
 * @method void setResource(string $Resource) 设置资源六段式
 * @method string getError() 获取执行失败的原因
 * @method void setError(string $Error) 设置执行失败的原因
 */
class FailedResource extends AbstractModel
{
    /**
     * @var string 资源六段式
     */
    public $Resource;

    /**
     * @var string 执行失败的原因
     */
    public $Error;

    /**
     * @param string $Resource 资源六段式
     * @param string $Error 执行失败的原因
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
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = $param["Error"];
        }
    }
}

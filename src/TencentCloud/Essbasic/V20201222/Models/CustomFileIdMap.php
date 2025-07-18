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
namespace TencentCloud\Essbasic\V20201222\Models;
use TencentCloud\Common\AbstractModel;

/**
 * <自定义Id,文件id>映射对象
 *
 * @method string getCustomId() 获取用户自定义ID
 * @method void setCustomId(string $CustomId) 设置用户自定义ID
 * @method string getFileId() 获取文件id
 * @method void setFileId(string $FileId) 设置文件id
 */
class CustomFileIdMap extends AbstractModel
{
    /**
     * @var string 用户自定义ID
     */
    public $CustomId;

    /**
     * @var string 文件id
     */
    public $FileId;

    /**
     * @param string $CustomId 用户自定义ID
     * @param string $FileId 文件id
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
        if (array_key_exists("CustomId",$param) and $param["CustomId"] !== null) {
            $this->CustomId = $param["CustomId"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }
    }
}

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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRepositoryAccessPersonal请求参数结构体
 *
 * @method string getRepoName() 获取仓库名称
 * @method void setRepoName(string $RepoName) 设置仓库名称
 * @method integer getPublic() 获取默认值为0, 1公共，0私有
 * @method void setPublic(integer $Public) 设置默认值为0, 1公共，0私有
 */
class ModifyRepositoryAccessPersonalRequest extends AbstractModel
{
    /**
     * @var string 仓库名称
     */
    public $RepoName;

    /**
     * @var integer 默认值为0, 1公共，0私有
     */
    public $Public;

    /**
     * @param string $RepoName 仓库名称
     * @param integer $Public 默认值为0, 1公共，0私有
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
        if (array_key_exists("RepoName",$param) and $param["RepoName"] !== null) {
            $this->RepoName = $param["RepoName"];
        }

        if (array_key_exists("Public",$param) and $param["Public"] !== null) {
            $this->Public = $param["Public"];
        }
    }
}

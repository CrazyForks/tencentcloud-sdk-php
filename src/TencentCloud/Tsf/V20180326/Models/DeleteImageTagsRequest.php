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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteImageTags请求参数结构体
 *
 * @method array getImageTags() 获取镜像版本数组
 * @method void setImageTags(array $ImageTags) 设置镜像版本数组
 * @method string getRepoType() 获取企业: tcr ；个人: personal或者不填
 * @method void setRepoType(string $RepoType) 设置企业: tcr ；个人: personal或者不填
 */
class DeleteImageTagsRequest extends AbstractModel
{
    /**
     * @var array 镜像版本数组
     */
    public $ImageTags;

    /**
     * @var string 企业: tcr ；个人: personal或者不填
     */
    public $RepoType;

    /**
     * @param array $ImageTags 镜像版本数组
     * @param string $RepoType 企业: tcr ；个人: personal或者不填
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
        if (array_key_exists("ImageTags",$param) and $param["ImageTags"] !== null) {
            $this->ImageTags = [];
            foreach ($param["ImageTags"] as $key => $value){
                $obj = new DeleteImageTag();
                $obj->deserialize($value);
                array_push($this->ImageTags, $obj);
            }
        }

        if (array_key_exists("RepoType",$param) and $param["RepoType"] !== null) {
            $this->RepoType = $param["RepoType"];
        }
    }
}

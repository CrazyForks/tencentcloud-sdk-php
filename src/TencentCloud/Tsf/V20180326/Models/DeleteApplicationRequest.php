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
 * DeleteApplication请求参数结构体
 *
 * @method string getApplicationId() 获取应用ID
 * @method void setApplicationId(string $ApplicationId) 设置应用ID
 * @method boolean getSyncDeleteImageRepository() 获取是否删除镜像仓库
 * @method void setSyncDeleteImageRepository(boolean $SyncDeleteImageRepository) 设置是否删除镜像仓库
 */
class DeleteApplicationRequest extends AbstractModel
{
    /**
     * @var string 应用ID
     */
    public $ApplicationId;

    /**
     * @var boolean 是否删除镜像仓库
     */
    public $SyncDeleteImageRepository;

    /**
     * @param string $ApplicationId 应用ID
     * @param boolean $SyncDeleteImageRepository 是否删除镜像仓库
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("SyncDeleteImageRepository",$param) and $param["SyncDeleteImageRepository"] !== null) {
            $this->SyncDeleteImageRepository = $param["SyncDeleteImageRepository"];
        }
    }
}

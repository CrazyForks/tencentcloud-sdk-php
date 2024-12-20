<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AssignProject请求参数结构体
 *
 * @method array getInstanceIds() 获取实例ID列表，格式如：cmgo-p8vn****。与云数据库控制台页面中显示的实例ID相同
 * @method void setInstanceIds(array $InstanceIds) 设置实例ID列表，格式如：cmgo-p8vn****。与云数据库控制台页面中显示的实例ID相同
 * @method integer getProjectId() 获取项目ID，用户已创建项目的唯一ID,非自定义
 * @method void setProjectId(integer $ProjectId) 设置项目ID，用户已创建项目的唯一ID,非自定义
 */
class AssignProjectRequest extends AbstractModel
{
    /**
     * @var array 实例ID列表，格式如：cmgo-p8vn****。与云数据库控制台页面中显示的实例ID相同
     */
    public $InstanceIds;

    /**
     * @var integer 项目ID，用户已创建项目的唯一ID,非自定义
     */
    public $ProjectId;

    /**
     * @param array $InstanceIds 实例ID列表，格式如：cmgo-p8vn****。与云数据库控制台页面中显示的实例ID相同
     * @param integer $ProjectId 项目ID，用户已创建项目的唯一ID,非自定义
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }
    }
}

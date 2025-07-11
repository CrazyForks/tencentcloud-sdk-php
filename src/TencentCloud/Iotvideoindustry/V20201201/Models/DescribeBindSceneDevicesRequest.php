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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBindSceneDevices请求参数结构体
 *
 * @method integer getSceneId() 获取场景ID
 * @method void setSceneId(integer $SceneId) 设置场景ID
 * @method integer getOffset() 获取偏移值
 * @method void setOffset(integer $Offset) 设置偏移值
 * @method integer getLimit() 获取条数限制最大不能超过1000
 * @method void setLimit(integer $Limit) 设置条数限制最大不能超过1000
 */
class DescribeBindSceneDevicesRequest extends AbstractModel
{
    /**
     * @var integer 场景ID
     */
    public $SceneId;

    /**
     * @var integer 偏移值
     */
    public $Offset;

    /**
     * @var integer 条数限制最大不能超过1000
     */
    public $Limit;

    /**
     * @param integer $SceneId 场景ID
     * @param integer $Offset 偏移值
     * @param integer $Limit 条数限制最大不能超过1000
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
        if (array_key_exists("SceneId",$param) and $param["SceneId"] !== null) {
            $this->SceneId = $param["SceneId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}

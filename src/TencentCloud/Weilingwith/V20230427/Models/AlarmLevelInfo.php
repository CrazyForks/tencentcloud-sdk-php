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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警级别详情
 *
 * @method integer getLevelId() 获取级别id
 * @method void setLevelId(integer $LevelId) 设置级别id
 * @method string getLevelName() 获取级别名称
 * @method void setLevelName(string $LevelName) 设置级别名称
 */
class AlarmLevelInfo extends AbstractModel
{
    /**
     * @var integer 级别id
     */
    public $LevelId;

    /**
     * @var string 级别名称
     */
    public $LevelName;

    /**
     * @param integer $LevelId 级别id
     * @param string $LevelName 级别名称
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
        if (array_key_exists("LevelId",$param) and $param["LevelId"] !== null) {
            $this->LevelId = $param["LevelId"];
        }

        if (array_key_exists("LevelName",$param) and $param["LevelName"] !== null) {
            $this->LevelName = $param["LevelName"];
        }
    }
}

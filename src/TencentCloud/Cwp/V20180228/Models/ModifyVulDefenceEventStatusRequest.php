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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyVulDefenceEventStatus请求参数结构体
 *
 * @method array getIds() 获取事件id
 * @method void setIds(array $Ids) 设置事件id
 * @method integer getStatus() 获取0: 待处理  2:已处理 3: 已忽略 4: 已删除
 * @method void setStatus(integer $Status) 设置0: 待处理  2:已处理 3: 已忽略 4: 已删除
 */
class ModifyVulDefenceEventStatusRequest extends AbstractModel
{
    /**
     * @var array 事件id
     */
    public $Ids;

    /**
     * @var integer 0: 待处理  2:已处理 3: 已忽略 4: 已删除
     */
    public $Status;

    /**
     * @param array $Ids 事件id
     * @param integer $Status 0: 待处理  2:已处理 3: 已忽略 4: 已删除
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
        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}

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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PauseServerless请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method integer getForcePause() 获取是否强制暂停，忽略当前的用户链接  0:不强制  1:强制， 默认为1
 * @method void setForcePause(integer $ForcePause) 设置是否强制暂停，忽略当前的用户链接  0:不强制  1:强制， 默认为1
 */
class PauseServerlessRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var integer 是否强制暂停，忽略当前的用户链接  0:不强制  1:强制， 默认为1
     */
    public $ForcePause;

    /**
     * @param string $ClusterId 集群ID
     * @param integer $ForcePause 是否强制暂停，忽略当前的用户链接  0:不强制  1:强制， 默认为1
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ForcePause",$param) and $param["ForcePause"] !== null) {
            $this->ForcePause = $param["ForcePause"];
        }
    }
}

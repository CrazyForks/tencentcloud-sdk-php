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
namespace TencentCloud\Anicloud\V20220923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckAppidExist返回参数结构体
 *
 * @method boolean getExist() 获取appid是否存在
 * @method void setExist(boolean $Exist) 设置appid是否存在
 * @method boolean getHasError() 获取请求是否成功
 * @method void setHasError(boolean $HasError) 设置请求是否成功
 * @method string getMsg() 获取出错消息
 * @method void setMsg(string $Msg) 设置出错消息
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CheckAppidExistResponse extends AbstractModel
{
    /**
     * @var boolean appid是否存在
     */
    public $Exist;

    /**
     * @var boolean 请求是否成功
     */
    public $HasError;

    /**
     * @var string 出错消息
     */
    public $Msg;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param boolean $Exist appid是否存在
     * @param boolean $HasError 请求是否成功
     * @param string $Msg 出错消息
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Exist",$param) and $param["Exist"] !== null) {
            $this->Exist = $param["Exist"];
        }

        if (array_key_exists("HasError",$param) and $param["HasError"] !== null) {
            $this->HasError = $param["HasError"];
        }

        if (array_key_exists("Msg",$param) and $param["Msg"] !== null) {
            $this->Msg = $param["Msg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

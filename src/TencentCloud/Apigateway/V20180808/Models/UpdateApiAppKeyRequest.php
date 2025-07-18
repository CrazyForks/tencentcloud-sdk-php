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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateApiAppKey请求参数结构体
 *
 * @method string getApiAppId() 获取应用唯一 ID。
 * @method void setApiAppId(string $ApiAppId) 设置应用唯一 ID。
 * @method string getApiAppKey() 获取应用的Key。
 * @method void setApiAppKey(string $ApiAppKey) 设置应用的Key。
 * @method string getApiAppSecret() 获取应用的Secret。
 * @method void setApiAppSecret(string $ApiAppSecret) 设置应用的Secret。
 */
class UpdateApiAppKeyRequest extends AbstractModel
{
    /**
     * @var string 应用唯一 ID。
     */
    public $ApiAppId;

    /**
     * @var string 应用的Key。
     */
    public $ApiAppKey;

    /**
     * @var string 应用的Secret。
     */
    public $ApiAppSecret;

    /**
     * @param string $ApiAppId 应用唯一 ID。
     * @param string $ApiAppKey 应用的Key。
     * @param string $ApiAppSecret 应用的Secret。
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
        if (array_key_exists("ApiAppId",$param) and $param["ApiAppId"] !== null) {
            $this->ApiAppId = $param["ApiAppId"];
        }

        if (array_key_exists("ApiAppKey",$param) and $param["ApiAppKey"] !== null) {
            $this->ApiAppKey = $param["ApiAppKey"];
        }

        if (array_key_exists("ApiAppSecret",$param) and $param["ApiAppSecret"] !== null) {
            $this->ApiAppSecret = $param["ApiAppSecret"];
        }
    }
}

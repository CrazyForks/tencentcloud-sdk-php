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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Ingress Rule Path 配置
 *
 * @method string getPath() 获取path 信息
 * @method void setPath(string $Path) 设置path 信息
 * @method IngressRuleBackend getBackend() 获取backend 配置
 * @method void setBackend(IngressRuleBackend $Backend) 设置backend 配置
 */
class IngressRulePath extends AbstractModel
{
    /**
     * @var string path 信息
     */
    public $Path;

    /**
     * @var IngressRuleBackend backend 配置
     */
    public $Backend;

    /**
     * @param string $Path path 信息
     * @param IngressRuleBackend $Backend backend 配置
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Backend",$param) and $param["Backend"] !== null) {
            $this->Backend = new IngressRuleBackend();
            $this->Backend->deserialize($param["Backend"]);
        }
    }
}

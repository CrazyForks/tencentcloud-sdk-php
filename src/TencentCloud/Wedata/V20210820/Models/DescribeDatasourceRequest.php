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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDatasource请求参数结构体
 *
 * @method integer getId() 获取对象唯一ID
 * @method void setId(integer $Id) 设置对象唯一ID
 * @method string getEnv() 获取production：生产，development开发
 * @method void setEnv(string $Env) 设置production：生产，development开发
 */
class DescribeDatasourceRequest extends AbstractModel
{
    /**
     * @var integer 对象唯一ID
     */
    public $Id;

    /**
     * @var string production：生产，development开发
     */
    public $Env;

    /**
     * @param integer $Id 对象唯一ID
     * @param string $Env production：生产，development开发
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Env",$param) and $param["Env"] !== null) {
            $this->Env = $param["Env"];
        }
    }
}

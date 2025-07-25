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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据库列信息
 *
 * @method string getCol() 获取列名称
 * @method void setCol(string $Col) 设置列名称
 * @method string getType() 获取列类型
 * @method void setType(string $Type) 设置列类型
 */
class TableColumn extends AbstractModel
{
    /**
     * @var string 列名称
     */
    public $Col;

    /**
     * @var string 列类型
     */
    public $Type;

    /**
     * @param string $Col 列名称
     * @param string $Type 列类型
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
        if (array_key_exists("Col",$param) and $param["Col"] !== null) {
            $this->Col = $param["Col"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}

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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据
 *
 * @method integer getId() 获取项目Id
 * @method void setId(integer $Id) 设置项目Id
 * @method string getEditUrl() 获取url
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEditUrl(string $EditUrl) 设置url
注意：此字段可能返回 null，表示取不到有效值。
 */
class Data extends AbstractModel
{
    /**
     * @var integer 项目Id
     */
    public $Id;

    /**
     * @var string url
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EditUrl;

    /**
     * @param integer $Id 项目Id
     * @param string $EditUrl url
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("EditUrl",$param) and $param["EditUrl"] !== null) {
            $this->EditUrl = $param["EditUrl"];
        }
    }
}

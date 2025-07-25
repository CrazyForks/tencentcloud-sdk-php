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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节点池自定义脚本
 *
 * @method string getPreInit() 获取节点初始化前自定义脚本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPreInit(string $PreInit) 设置节点初始化前自定义脚本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPostInit() 获取节点初始化后自定义脚本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPostInit(string $PostInit) 设置节点初始化后自定义脚本
注意：此字段可能返回 null，表示取不到有效值。
 */
class LifecycleConfig extends AbstractModel
{
    /**
     * @var string 节点初始化前自定义脚本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PreInit;

    /**
     * @var string 节点初始化后自定义脚本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PostInit;

    /**
     * @param string $PreInit 节点初始化前自定义脚本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PostInit 节点初始化后自定义脚本
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
        if (array_key_exists("PreInit",$param) and $param["PreInit"] !== null) {
            $this->PreInit = $param["PreInit"];
        }

        if (array_key_exists("PostInit",$param) and $param["PostInit"] !== null) {
            $this->PostInit = $param["PostInit"];
        }
    }
}

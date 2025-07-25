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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ActivateHardware请求参数结构体
 *
 * @method array getHardware() 获取待激活的设备列表
 * @method void setHardware(array $Hardware) 设置待激活的设备列表
 */
class ActivateHardwareRequest extends AbstractModel
{
    /**
     * @var array 待激活的设备列表
     */
    public $Hardware;

    /**
     * @param array $Hardware 待激活的设备列表
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
        if (array_key_exists("Hardware",$param) and $param["Hardware"] !== null) {
            $this->Hardware = [];
            foreach ($param["Hardware"] as $key => $value){
                $obj = new ActivateHardware();
                $obj->deserialize($value);
                array_push($this->Hardware, $obj);
            }
        }
    }
}

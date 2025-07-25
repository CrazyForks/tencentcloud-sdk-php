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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义消息
 *
 * @method string getData() 获取自定义消息数据。
 * @method void setData(string $Data) 设置自定义消息数据。
 * @method string getDesc() 获取自定义消息描述信息。
 * @method void setDesc(string $Desc) 设置自定义消息描述信息。
 * @method string getExt() 获取扩展字段。
 * @method void setExt(string $Ext) 设置扩展字段。
 */
class CustomMsgContent extends AbstractModel
{
    /**
     * @var string 自定义消息数据。
     */
    public $Data;

    /**
     * @var string 自定义消息描述信息。
     */
    public $Desc;

    /**
     * @var string 扩展字段。
     */
    public $Ext;

    /**
     * @param string $Data 自定义消息数据。
     * @param string $Desc 自定义消息描述信息。
     * @param string $Ext 扩展字段。
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Ext",$param) and $param["Ext"] !== null) {
            $this->Ext = $param["Ext"];
        }
    }
}

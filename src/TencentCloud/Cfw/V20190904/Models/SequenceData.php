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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 执行顺序对象
 *
 * @method integer getId() 获取规则Id值
 * @method void setId(integer $Id) 设置规则Id值
 * @method integer getOrderIndex() 获取修改前执行顺序
 * @method void setOrderIndex(integer $OrderIndex) 设置修改前执行顺序
 * @method integer getNewOrderIndex() 获取修改后执行顺序
 * @method void setNewOrderIndex(integer $NewOrderIndex) 设置修改后执行顺序
 */
class SequenceData extends AbstractModel
{
    /**
     * @var integer 规则Id值
     */
    public $Id;

    /**
     * @var integer 修改前执行顺序
     */
    public $OrderIndex;

    /**
     * @var integer 修改后执行顺序
     */
    public $NewOrderIndex;

    /**
     * @param integer $Id 规则Id值
     * @param integer $OrderIndex 修改前执行顺序
     * @param integer $NewOrderIndex 修改后执行顺序
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

        if (array_key_exists("OrderIndex",$param) and $param["OrderIndex"] !== null) {
            $this->OrderIndex = $param["OrderIndex"];
        }

        if (array_key_exists("NewOrderIndex",$param) and $param["NewOrderIndex"] !== null) {
            $this->NewOrderIndex = $param["NewOrderIndex"];
        }
    }
}

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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteCasterLayoutInfo请求参数结构体
 *
 * @method integer getCasterId() 获取导播台ID。
 * @method void setCasterId(integer $CasterId) 设置导播台ID。
 * @method integer getLayoutIndex() 获取要删除的布局Index。
注：待删除的Index对应的布局需存在。
 * @method void setLayoutIndex(integer $LayoutIndex) 设置要删除的布局Index。
注：待删除的Index对应的布局需存在。
 */
class DeleteCasterLayoutInfoRequest extends AbstractModel
{
    /**
     * @var integer 导播台ID。
     */
    public $CasterId;

    /**
     * @var integer 要删除的布局Index。
注：待删除的Index对应的布局需存在。
     */
    public $LayoutIndex;

    /**
     * @param integer $CasterId 导播台ID。
     * @param integer $LayoutIndex 要删除的布局Index。
注：待删除的Index对应的布局需存在。
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
        if (array_key_exists("CasterId",$param) and $param["CasterId"] !== null) {
            $this->CasterId = $param["CasterId"];
        }

        if (array_key_exists("LayoutIndex",$param) and $param["LayoutIndex"] !== null) {
            $this->LayoutIndex = $param["LayoutIndex"];
        }
    }
}

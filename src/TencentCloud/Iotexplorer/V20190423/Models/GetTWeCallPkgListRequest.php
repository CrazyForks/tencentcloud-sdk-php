<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetTWeCallPkgList请求参数结构体
 *
 * @method string getMiniProgramAppId() 获取appId
 * @method void setMiniProgramAppId(string $MiniProgramAppId) 设置appId
 * @method array getPkgType() 获取类型
 * @method void setPkgType(array $PkgType) 设置类型
 * @method array getStatus() 获取状态
 * @method void setStatus(array $Status) 设置状态
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取每页数据大小
 * @method void setLimit(integer $Limit) 设置每页数据大小
 */
class GetTWeCallPkgListRequest extends AbstractModel
{
    /**
     * @var string appId
     * @deprecated
     */
    public $MiniProgramAppId;

    /**
     * @var array 类型
     */
    public $PkgType;

    /**
     * @var array 状态
     */
    public $Status;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 每页数据大小
     */
    public $Limit;

    /**
     * @param string $MiniProgramAppId appId
     * @param array $PkgType 类型
     * @param array $Status 状态
     * @param integer $Offset 偏移量
     * @param integer $Limit 每页数据大小
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
        if (array_key_exists("MiniProgramAppId",$param) and $param["MiniProgramAppId"] !== null) {
            $this->MiniProgramAppId = $param["MiniProgramAppId"];
        }

        if (array_key_exists("PkgType",$param) and $param["PkgType"] !== null) {
            $this->PkgType = $param["PkgType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}

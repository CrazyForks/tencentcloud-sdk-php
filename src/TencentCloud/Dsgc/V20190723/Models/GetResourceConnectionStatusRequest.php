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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetResourceConnectionStatus请求参数结构体
 *
 * @method string getDspaId() 获取DSPA实例ID。
 * @method void setDspaId(string $DspaId) 设置DSPA实例ID。
 * @method string getMetaType() 获取资源类型。
 * @method void setMetaType(string $MetaType) 设置资源类型。
 * @method string getResourceRegion() 获取资源所处地域。
 * @method void setResourceRegion(string $ResourceRegion) 设置资源所处地域。
 * @method string getResourceId() 获取资源列表中展示的资源ID。
 * @method void setResourceId(string $ResourceId) 设置资源列表中展示的资源ID。
 */
class GetResourceConnectionStatusRequest extends AbstractModel
{
    /**
     * @var string DSPA实例ID。
     */
    public $DspaId;

    /**
     * @var string 资源类型。
     */
    public $MetaType;

    /**
     * @var string 资源所处地域。
     */
    public $ResourceRegion;

    /**
     * @var string 资源列表中展示的资源ID。
     */
    public $ResourceId;

    /**
     * @param string $DspaId DSPA实例ID。
     * @param string $MetaType 资源类型。
     * @param string $ResourceRegion 资源所处地域。
     * @param string $ResourceId 资源列表中展示的资源ID。
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
        if (array_key_exists("DspaId",$param) and $param["DspaId"] !== null) {
            $this->DspaId = $param["DspaId"];
        }

        if (array_key_exists("MetaType",$param) and $param["MetaType"] !== null) {
            $this->MetaType = $param["MetaType"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}

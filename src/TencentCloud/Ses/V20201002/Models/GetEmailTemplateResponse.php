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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetEmailTemplate返回参数结构体
 *
 * @method TemplateContent getTemplateContent() 获取模板内容数据
 * @method void setTemplateContent(TemplateContent $TemplateContent) 设置模板内容数据
 * @method integer getTemplateStatus() 获取模板状态 0-审核通过 1-待审核 2-审核拒绝
 * @method void setTemplateStatus(integer $TemplateStatus) 设置模板状态 0-审核通过 1-待审核 2-审核拒绝
 * @method string getTemplateName() 获取模板名称
 * @method void setTemplateName(string $TemplateName) 设置模板名称
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetEmailTemplateResponse extends AbstractModel
{
    /**
     * @var TemplateContent 模板内容数据
     */
    public $TemplateContent;

    /**
     * @var integer 模板状态 0-审核通过 1-待审核 2-审核拒绝
     */
    public $TemplateStatus;

    /**
     * @var string 模板名称
     */
    public $TemplateName;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param TemplateContent $TemplateContent 模板内容数据
     * @param integer $TemplateStatus 模板状态 0-审核通过 1-待审核 2-审核拒绝
     * @param string $TemplateName 模板名称
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TemplateContent",$param) and $param["TemplateContent"] !== null) {
            $this->TemplateContent = new TemplateContent();
            $this->TemplateContent->deserialize($param["TemplateContent"]);
        }

        if (array_key_exists("TemplateStatus",$param) and $param["TemplateStatus"] !== null) {
            $this->TemplateStatus = $param["TemplateStatus"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

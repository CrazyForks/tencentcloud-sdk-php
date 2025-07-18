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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyReviewTemplate请求参数结构体
 *
 * @method integer getDefinition() 获取审核模板唯一标识。
 * @method void setDefinition(integer $Definition) 设置审核模板唯一标识。
 * @method integer getSubAppId() 获取<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method string getName() 获取审核模板名称，长度限制：64 个字符。
 * @method void setName(string $Name) 设置审核模板名称，长度限制：64 个字符。
 * @method string getComment() 获取审核模板描述信息，长度限制：256 个字符。
 * @method void setComment(string $Comment) 设置审核模板描述信息，长度限制：256 个字符。
 * @method array getLabels() 获取需要返回的违规标签列表，可选值为：
<li>Porn：色情；</li>
<li>Terror：暴力；</li>
<li>Polity：不适宜的信息；</li>
<li>Illegal：违法；</li>
<li>Abuse：谩骂；</li>
<li>Ad：广告；</li>
<li>Moan：娇喘。</li>

注意：不填表示不更新。
 * @method void setLabels(array $Labels) 设置需要返回的违规标签列表，可选值为：
<li>Porn：色情；</li>
<li>Terror：暴力；</li>
<li>Polity：不适宜的信息；</li>
<li>Illegal：违法；</li>
<li>Abuse：谩骂；</li>
<li>Ad：广告；</li>
<li>Moan：娇喘。</li>

注意：不填表示不更新。
 */
class ModifyReviewTemplateRequest extends AbstractModel
{
    /**
     * @var integer 审核模板唯一标识。
     */
    public $Definition;

    /**
     * @var integer <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     */
    public $SubAppId;

    /**
     * @var string 审核模板名称，长度限制：64 个字符。
     */
    public $Name;

    /**
     * @var string 审核模板描述信息，长度限制：256 个字符。
     */
    public $Comment;

    /**
     * @var array 需要返回的违规标签列表，可选值为：
<li>Porn：色情；</li>
<li>Terror：暴力；</li>
<li>Polity：不适宜的信息；</li>
<li>Illegal：违法；</li>
<li>Abuse：谩骂；</li>
<li>Ad：广告；</li>
<li>Moan：娇喘。</li>

注意：不填表示不更新。
     */
    public $Labels;

    /**
     * @param integer $Definition 审核模板唯一标识。
     * @param integer $SubAppId <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     * @param string $Name 审核模板名称，长度限制：64 个字符。
     * @param string $Comment 审核模板描述信息，长度限制：256 个字符。
     * @param array $Labels 需要返回的违规标签列表，可选值为：
<li>Porn：色情；</li>
<li>Terror：暴力；</li>
<li>Polity：不适宜的信息；</li>
<li>Illegal：违法；</li>
<li>Abuse：谩骂；</li>
<li>Ad：广告；</li>
<li>Moan：娇喘。</li>

注意：不填表示不更新。
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = $param["Labels"];
        }
    }
}

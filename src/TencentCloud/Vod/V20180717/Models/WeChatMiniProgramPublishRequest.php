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
 * WeChatMiniProgramPublish请求参数结构体
 *
 * @method string getFileId() 获取媒体文件 ID。
 * @method void setFileId(string $FileId) 设置媒体文件 ID。
 * @method integer getSubAppId() 获取<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method integer getSourceDefinition() 获取发布视频所对应的转码模板 ID，为 0 代表原始视频。支持的视频格式：
<li>当 SourceDefinition 为 0 时，视频格式支持 MP4、3GP 格式；</li>
<li>当 SourceDefinition 大于 0 时，视频格式支持 MP4、3GP 及 M3U8 格式。</li>不填默认值为 0。
 * @method void setSourceDefinition(integer $SourceDefinition) 设置发布视频所对应的转码模板 ID，为 0 代表原始视频。支持的视频格式：
<li>当 SourceDefinition 为 0 时，视频格式支持 MP4、3GP 格式；</li>
<li>当 SourceDefinition 大于 0 时，视频格式支持 MP4、3GP 及 M3U8 格式。</li>不填默认值为 0。
 */
class WeChatMiniProgramPublishRequest extends AbstractModel
{
    /**
     * @var string 媒体文件 ID。
     */
    public $FileId;

    /**
     * @var integer <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     */
    public $SubAppId;

    /**
     * @var integer 发布视频所对应的转码模板 ID，为 0 代表原始视频。支持的视频格式：
<li>当 SourceDefinition 为 0 时，视频格式支持 MP4、3GP 格式；</li>
<li>当 SourceDefinition 大于 0 时，视频格式支持 MP4、3GP 及 M3U8 格式。</li>不填默认值为 0。
     */
    public $SourceDefinition;

    /**
     * @param string $FileId 媒体文件 ID。
     * @param integer $SubAppId <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     * @param integer $SourceDefinition 发布视频所对应的转码模板 ID，为 0 代表原始视频。支持的视频格式：
<li>当 SourceDefinition 为 0 时，视频格式支持 MP4、3GP 格式；</li>
<li>当 SourceDefinition 大于 0 时，视频格式支持 MP4、3GP 及 M3U8 格式。</li>不填默认值为 0。
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("SourceDefinition",$param) and $param["SourceDefinition"] !== null) {
            $this->SourceDefinition = $param["SourceDefinition"];
        }
    }
}

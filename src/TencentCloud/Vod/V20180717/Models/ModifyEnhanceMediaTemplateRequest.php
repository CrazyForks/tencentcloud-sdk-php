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
 * ModifyEnhanceMediaTemplate请求参数结构体
 *
 * @method integer getDefinition() 获取音画质重生模板号。
 * @method void setDefinition(integer $Definition) 设置音画质重生模板号。
 * @method integer getSubAppId() 获取<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method string getName() 获取音画质重生模板名称，长度限制：64 个字符。
 * @method void setName(string $Name) 设置音画质重生模板名称，长度限制：64 个字符。
 * @method string getComment() 获取模板描述信息，长度限制：256 个字符。
 * @method void setComment(string $Comment) 设置模板描述信息，长度限制：256 个字符。
 * @method RebuildVideoInfo getRebuildVideoInfo() 获取音画质重生视频控制控制信息。
 * @method void setRebuildVideoInfo(RebuildVideoInfo $RebuildVideoInfo) 设置音画质重生视频控制控制信息。
 * @method RebuildAudioInfo getRebuildAudioInfo() 获取音画质重生音频控制控制信息。
 * @method void setRebuildAudioInfo(RebuildAudioInfo $RebuildAudioInfo) 设置音画质重生音频控制控制信息。
 * @method RebuildMediaTargetVideoStream getTargetVideoInfo() 获取输出目标视频控制信息。
 * @method void setTargetVideoInfo(RebuildMediaTargetVideoStream $TargetVideoInfo) 设置输出目标视频控制信息。
 * @method RebuildMediaTargetAudioStream getTargetAudioInfo() 获取输出目标音频控制信息。
 * @method void setTargetAudioInfo(RebuildMediaTargetAudioStream $TargetAudioInfo) 设置输出目标音频控制信息。
 * @method string getContainer() 获取输出文件封装格式，可选值：mp4、flv、hls。
 * @method void setContainer(string $Container) 设置输出文件封装格式，可选值：mp4、flv、hls。
 * @method integer getRemoveVideo() 获取是否去除视频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>
默认值 0。
 * @method void setRemoveVideo(integer $RemoveVideo) 设置是否去除视频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>
默认值 0。
 * @method integer getRemoveAudio() 获取是否去除音频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>
默认值 0。
 * @method void setRemoveAudio(integer $RemoveAudio) 设置是否去除音频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>
默认值 0。
 */
class ModifyEnhanceMediaTemplateRequest extends AbstractModel
{
    /**
     * @var integer 音画质重生模板号。
     */
    public $Definition;

    /**
     * @var integer <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     */
    public $SubAppId;

    /**
     * @var string 音画质重生模板名称，长度限制：64 个字符。
     */
    public $Name;

    /**
     * @var string 模板描述信息，长度限制：256 个字符。
     */
    public $Comment;

    /**
     * @var RebuildVideoInfo 音画质重生视频控制控制信息。
     */
    public $RebuildVideoInfo;

    /**
     * @var RebuildAudioInfo 音画质重生音频控制控制信息。
     */
    public $RebuildAudioInfo;

    /**
     * @var RebuildMediaTargetVideoStream 输出目标视频控制信息。
     */
    public $TargetVideoInfo;

    /**
     * @var RebuildMediaTargetAudioStream 输出目标音频控制信息。
     */
    public $TargetAudioInfo;

    /**
     * @var string 输出文件封装格式，可选值：mp4、flv、hls。
     */
    public $Container;

    /**
     * @var integer 是否去除视频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>
默认值 0。
     */
    public $RemoveVideo;

    /**
     * @var integer 是否去除音频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>
默认值 0。
     */
    public $RemoveAudio;

    /**
     * @param integer $Definition 音画质重生模板号。
     * @param integer $SubAppId <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     * @param string $Name 音画质重生模板名称，长度限制：64 个字符。
     * @param string $Comment 模板描述信息，长度限制：256 个字符。
     * @param RebuildVideoInfo $RebuildVideoInfo 音画质重生视频控制控制信息。
     * @param RebuildAudioInfo $RebuildAudioInfo 音画质重生音频控制控制信息。
     * @param RebuildMediaTargetVideoStream $TargetVideoInfo 输出目标视频控制信息。
     * @param RebuildMediaTargetAudioStream $TargetAudioInfo 输出目标音频控制信息。
     * @param string $Container 输出文件封装格式，可选值：mp4、flv、hls。
     * @param integer $RemoveVideo 是否去除视频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>
默认值 0。
     * @param integer $RemoveAudio 是否去除音频数据，可选值：
<li>0：保留</li>
<li>1：去除</li>
默认值 0。
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

        if (array_key_exists("RebuildVideoInfo",$param) and $param["RebuildVideoInfo"] !== null) {
            $this->RebuildVideoInfo = new RebuildVideoInfo();
            $this->RebuildVideoInfo->deserialize($param["RebuildVideoInfo"]);
        }

        if (array_key_exists("RebuildAudioInfo",$param) and $param["RebuildAudioInfo"] !== null) {
            $this->RebuildAudioInfo = new RebuildAudioInfo();
            $this->RebuildAudioInfo->deserialize($param["RebuildAudioInfo"]);
        }

        if (array_key_exists("TargetVideoInfo",$param) and $param["TargetVideoInfo"] !== null) {
            $this->TargetVideoInfo = new RebuildMediaTargetVideoStream();
            $this->TargetVideoInfo->deserialize($param["TargetVideoInfo"]);
        }

        if (array_key_exists("TargetAudioInfo",$param) and $param["TargetAudioInfo"] !== null) {
            $this->TargetAudioInfo = new RebuildMediaTargetAudioStream();
            $this->TargetAudioInfo->deserialize($param["TargetAudioInfo"]);
        }

        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = $param["Container"];
        }

        if (array_key_exists("RemoveVideo",$param) and $param["RemoveVideo"] !== null) {
            $this->RemoveVideo = $param["RemoveVideo"];
        }

        if (array_key_exists("RemoveAudio",$param) and $param["RemoveAudio"] !== null) {
            $this->RemoveAudio = $param["RemoveAudio"];
        }
    }
}

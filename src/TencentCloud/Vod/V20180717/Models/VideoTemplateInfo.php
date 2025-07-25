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
 * 视频流配置参数
 *
 * @method string getCodec() 获取视频流的编码格式，可选值：
<li>libx264：H.264 编码；</li>
<li>libx265：H.265 编码；</li>
<li>av1：AOMedia Video 1 编码；</li>
<li>H.266：H.266 编码。</li>
<font color=red>注意：</font>
<li> av1，H.266 编码容器目前只支持 mp4 ；</li>
<li> H.266 目前只支持恒定 CRF 码率控制方式。 </li>
 * @method void setCodec(string $Codec) 设置视频流的编码格式，可选值：
<li>libx264：H.264 编码；</li>
<li>libx265：H.265 编码；</li>
<li>av1：AOMedia Video 1 编码；</li>
<li>H.266：H.266 编码。</li>
<font color=red>注意：</font>
<li> av1，H.266 编码容器目前只支持 mp4 ；</li>
<li> H.266 目前只支持恒定 CRF 码率控制方式。 </li>
 * @method integer getFps() 获取视频帧率，取值范围：[0, 100]，单位：Hz。
当取值为 0，表示帧率和原始视频保持一致。
 * @method void setFps(integer $Fps) 设置视频帧率，取值范围：[0, 100]，单位：Hz。
当取值为 0，表示帧率和原始视频保持一致。
 * @method integer getBitrate() 获取视频流的码率，取值范围：0 和 [128, 100000]，单位：kbps。
当取值为 0，表示由云点播自动设置码率。
 * @method void setBitrate(integer $Bitrate) 设置视频流的码率，取值范围：0 和 [128, 100000]，单位：kbps。
当取值为 0，表示由云点播自动设置码率。
 * @method string getResolutionAdaptive() 获取分辨率自适应，可选值：
<li>open：开启，此时，Width 代表视频的长边，Height 表示视频的短边；</li>
<li>close：关闭，此时，Width 代表视频的宽度，Height 表示视频的高度。</li>
默认值：open。
 * @method void setResolutionAdaptive(string $ResolutionAdaptive) 设置分辨率自适应，可选值：
<li>open：开启，此时，Width 代表视频的长边，Height 表示视频的短边；</li>
<li>close：关闭，此时，Width 代表视频的宽度，Height 表示视频的高度。</li>
默认值：open。
 * @method integer getWidth() 获取视频流宽度（或长边）的最大值，取值范围：0 和 [128, 8192]，单位：px。
<li>当 Width、Height 均为 0，则分辨率同源；</li>
<li>当 Width 为 0，Height 非 0，则 Width 按比例缩放；</li>
<li>当 Width 非 0，Height 为 0，则 Height 按比例缩放；</li>
<li>当 Width、Height 均非 0，则分辨率按用户指定。</li>
默认值：0。
 * @method void setWidth(integer $Width) 设置视频流宽度（或长边）的最大值，取值范围：0 和 [128, 8192]，单位：px。
<li>当 Width、Height 均为 0，则分辨率同源；</li>
<li>当 Width 为 0，Height 非 0，则 Width 按比例缩放；</li>
<li>当 Width 非 0，Height 为 0，则 Height 按比例缩放；</li>
<li>当 Width、Height 均非 0，则分辨率按用户指定。</li>
默认值：0。
 * @method integer getHeight() 获取视频流高度（或短边）的最大值，取值范围：0 和 [128, 8192]，单位：px。
<li>当 Width、Height 均为 0，则分辨率同源；</li>
<li>当 Width 为 0，Height 非 0，则 Width 按比例缩放；</li>
<li>当 Width 非 0，Height 为 0，则 Height 按比例缩放；</li>
<li>当 Width、Height 均非 0，则分辨率按用户指定。</li>
默认值：0。
 * @method void setHeight(integer $Height) 设置视频流高度（或短边）的最大值，取值范围：0 和 [128, 8192]，单位：px。
<li>当 Width、Height 均为 0，则分辨率同源；</li>
<li>当 Width 为 0，Height 非 0，则 Width 按比例缩放；</li>
<li>当 Width 非 0，Height 为 0，则 Height 按比例缩放；</li>
<li>当 Width、Height 均非 0，则分辨率按用户指定。</li>
默认值：0。
 * @method string getFillType() 获取填充方式，当视频流配置宽高参数与原始视频的宽高比不一致时，对转码的处理方式，即为“填充”。可选填充方式：
<li> stretch：拉伸，对每一帧进行拉伸，填满整个画面，可能导致转码后的视频被“压扁“或者“拉长“；</li>
<li>black：留黑，保持视频宽高比不变，边缘剩余部分使用黑色填充。</li>
<li>white：留白，保持视频宽高比不变，边缘剩余部分使用白色填充。</li>
<li>gauss：高斯模糊，保持视频宽高比不变，边缘剩余部分使用高斯模糊填充。</li>
默认值：black 。
 * @method void setFillType(string $FillType) 设置填充方式，当视频流配置宽高参数与原始视频的宽高比不一致时，对转码的处理方式，即为“填充”。可选填充方式：
<li> stretch：拉伸，对每一帧进行拉伸，填满整个画面，可能导致转码后的视频被“压扁“或者“拉长“；</li>
<li>black：留黑，保持视频宽高比不变，边缘剩余部分使用黑色填充。</li>
<li>white：留白，保持视频宽高比不变，边缘剩余部分使用白色填充。</li>
<li>gauss：高斯模糊，保持视频宽高比不变，边缘剩余部分使用高斯模糊填充。</li>
默认值：black 。
 * @method integer getVcrf() 获取视频恒定码率控制因子，取值范围为[1, 51]。

<font color=red>注意：</font>
<li>如果指定该参数，将使用 CRF 的码率控制方式做转码（视频码率将不再生效）；</li>
<li>当指定视频流编码格式为 H.266 时，该字段必填，推荐值为 28；</li>
<li>如果没有特殊需求，不建议指定该参数。</li>
 * @method void setVcrf(integer $Vcrf) 设置视频恒定码率控制因子，取值范围为[1, 51]。

<font color=red>注意：</font>
<li>如果指定该参数，将使用 CRF 的码率控制方式做转码（视频码率将不再生效）；</li>
<li>当指定视频流编码格式为 H.266 时，该字段必填，推荐值为 28；</li>
<li>如果没有特殊需求，不建议指定该参数。</li>
 * @method integer getGop() 获取关键帧 I 帧之间的间隔，取值范围：0 和 [1, 100000]，单位：帧数。
当填 0 或不填时，系统将自动设置 gop 长度。
 * @method void setGop(integer $Gop) 设置关键帧 I 帧之间的间隔，取值范围：0 和 [1, 100000]，单位：帧数。
当填 0 或不填时，系统将自动设置 gop 长度。
 * @method string getPreserveHDRSwitch() 获取当原始视频为 HDR（High Dynamic Range）时，转码输出是否依然保持 HDR。取值范围：
<li>ON: 如果原始文件是 HDR，则转码输出保持 HDR；否则转码输出为 SDR （Standard Dynamic Range）。</li>
<li>OFF: 无论原始文件是 HDR 还是 SDR，转码输出均为 SDR。</li>
默认值：OFF。
 * @method void setPreserveHDRSwitch(string $PreserveHDRSwitch) 设置当原始视频为 HDR（High Dynamic Range）时，转码输出是否依然保持 HDR。取值范围：
<li>ON: 如果原始文件是 HDR，则转码输出保持 HDR；否则转码输出为 SDR （Standard Dynamic Range）。</li>
<li>OFF: 无论原始文件是 HDR 还是 SDR，转码输出均为 SDR。</li>
默认值：OFF。
 * @method string getCodecTag() 获取编码标签，仅当视频流的编码格式为 H.265 编码时有效，可选值：
<li>hvc1 表示 hvc1 标签；</li>
<li>hev1 表示 hev1 标签。 </li>
默认值：hvc1。
 * @method void setCodecTag(string $CodecTag) 设置编码标签，仅当视频流的编码格式为 H.265 编码时有效，可选值：
<li>hvc1 表示 hvc1 标签；</li>
<li>hev1 表示 hev1 标签。 </li>
默认值：hvc1。
 */
class VideoTemplateInfo extends AbstractModel
{
    /**
     * @var string 视频流的编码格式，可选值：
<li>libx264：H.264 编码；</li>
<li>libx265：H.265 编码；</li>
<li>av1：AOMedia Video 1 编码；</li>
<li>H.266：H.266 编码。</li>
<font color=red>注意：</font>
<li> av1，H.266 编码容器目前只支持 mp4 ；</li>
<li> H.266 目前只支持恒定 CRF 码率控制方式。 </li>
     */
    public $Codec;

    /**
     * @var integer 视频帧率，取值范围：[0, 100]，单位：Hz。
当取值为 0，表示帧率和原始视频保持一致。
     */
    public $Fps;

    /**
     * @var integer 视频流的码率，取值范围：0 和 [128, 100000]，单位：kbps。
当取值为 0，表示由云点播自动设置码率。
     */
    public $Bitrate;

    /**
     * @var string 分辨率自适应，可选值：
<li>open：开启，此时，Width 代表视频的长边，Height 表示视频的短边；</li>
<li>close：关闭，此时，Width 代表视频的宽度，Height 表示视频的高度。</li>
默认值：open。
     */
    public $ResolutionAdaptive;

    /**
     * @var integer 视频流宽度（或长边）的最大值，取值范围：0 和 [128, 8192]，单位：px。
<li>当 Width、Height 均为 0，则分辨率同源；</li>
<li>当 Width 为 0，Height 非 0，则 Width 按比例缩放；</li>
<li>当 Width 非 0，Height 为 0，则 Height 按比例缩放；</li>
<li>当 Width、Height 均非 0，则分辨率按用户指定。</li>
默认值：0。
     */
    public $Width;

    /**
     * @var integer 视频流高度（或短边）的最大值，取值范围：0 和 [128, 8192]，单位：px。
<li>当 Width、Height 均为 0，则分辨率同源；</li>
<li>当 Width 为 0，Height 非 0，则 Width 按比例缩放；</li>
<li>当 Width 非 0，Height 为 0，则 Height 按比例缩放；</li>
<li>当 Width、Height 均非 0，则分辨率按用户指定。</li>
默认值：0。
     */
    public $Height;

    /**
     * @var string 填充方式，当视频流配置宽高参数与原始视频的宽高比不一致时，对转码的处理方式，即为“填充”。可选填充方式：
<li> stretch：拉伸，对每一帧进行拉伸，填满整个画面，可能导致转码后的视频被“压扁“或者“拉长“；</li>
<li>black：留黑，保持视频宽高比不变，边缘剩余部分使用黑色填充。</li>
<li>white：留白，保持视频宽高比不变，边缘剩余部分使用白色填充。</li>
<li>gauss：高斯模糊，保持视频宽高比不变，边缘剩余部分使用高斯模糊填充。</li>
默认值：black 。
     */
    public $FillType;

    /**
     * @var integer 视频恒定码率控制因子，取值范围为[1, 51]。

<font color=red>注意：</font>
<li>如果指定该参数，将使用 CRF 的码率控制方式做转码（视频码率将不再生效）；</li>
<li>当指定视频流编码格式为 H.266 时，该字段必填，推荐值为 28；</li>
<li>如果没有特殊需求，不建议指定该参数。</li>
     */
    public $Vcrf;

    /**
     * @var integer 关键帧 I 帧之间的间隔，取值范围：0 和 [1, 100000]，单位：帧数。
当填 0 或不填时，系统将自动设置 gop 长度。
     */
    public $Gop;

    /**
     * @var string 当原始视频为 HDR（High Dynamic Range）时，转码输出是否依然保持 HDR。取值范围：
<li>ON: 如果原始文件是 HDR，则转码输出保持 HDR；否则转码输出为 SDR （Standard Dynamic Range）。</li>
<li>OFF: 无论原始文件是 HDR 还是 SDR，转码输出均为 SDR。</li>
默认值：OFF。
     */
    public $PreserveHDRSwitch;

    /**
     * @var string 编码标签，仅当视频流的编码格式为 H.265 编码时有效，可选值：
<li>hvc1 表示 hvc1 标签；</li>
<li>hev1 表示 hev1 标签。 </li>
默认值：hvc1。
     */
    public $CodecTag;

    /**
     * @param string $Codec 视频流的编码格式，可选值：
<li>libx264：H.264 编码；</li>
<li>libx265：H.265 编码；</li>
<li>av1：AOMedia Video 1 编码；</li>
<li>H.266：H.266 编码。</li>
<font color=red>注意：</font>
<li> av1，H.266 编码容器目前只支持 mp4 ；</li>
<li> H.266 目前只支持恒定 CRF 码率控制方式。 </li>
     * @param integer $Fps 视频帧率，取值范围：[0, 100]，单位：Hz。
当取值为 0，表示帧率和原始视频保持一致。
     * @param integer $Bitrate 视频流的码率，取值范围：0 和 [128, 100000]，单位：kbps。
当取值为 0，表示由云点播自动设置码率。
     * @param string $ResolutionAdaptive 分辨率自适应，可选值：
<li>open：开启，此时，Width 代表视频的长边，Height 表示视频的短边；</li>
<li>close：关闭，此时，Width 代表视频的宽度，Height 表示视频的高度。</li>
默认值：open。
     * @param integer $Width 视频流宽度（或长边）的最大值，取值范围：0 和 [128, 8192]，单位：px。
<li>当 Width、Height 均为 0，则分辨率同源；</li>
<li>当 Width 为 0，Height 非 0，则 Width 按比例缩放；</li>
<li>当 Width 非 0，Height 为 0，则 Height 按比例缩放；</li>
<li>当 Width、Height 均非 0，则分辨率按用户指定。</li>
默认值：0。
     * @param integer $Height 视频流高度（或短边）的最大值，取值范围：0 和 [128, 8192]，单位：px。
<li>当 Width、Height 均为 0，则分辨率同源；</li>
<li>当 Width 为 0，Height 非 0，则 Width 按比例缩放；</li>
<li>当 Width 非 0，Height 为 0，则 Height 按比例缩放；</li>
<li>当 Width、Height 均非 0，则分辨率按用户指定。</li>
默认值：0。
     * @param string $FillType 填充方式，当视频流配置宽高参数与原始视频的宽高比不一致时，对转码的处理方式，即为“填充”。可选填充方式：
<li> stretch：拉伸，对每一帧进行拉伸，填满整个画面，可能导致转码后的视频被“压扁“或者“拉长“；</li>
<li>black：留黑，保持视频宽高比不变，边缘剩余部分使用黑色填充。</li>
<li>white：留白，保持视频宽高比不变，边缘剩余部分使用白色填充。</li>
<li>gauss：高斯模糊，保持视频宽高比不变，边缘剩余部分使用高斯模糊填充。</li>
默认值：black 。
     * @param integer $Vcrf 视频恒定码率控制因子，取值范围为[1, 51]。

<font color=red>注意：</font>
<li>如果指定该参数，将使用 CRF 的码率控制方式做转码（视频码率将不再生效）；</li>
<li>当指定视频流编码格式为 H.266 时，该字段必填，推荐值为 28；</li>
<li>如果没有特殊需求，不建议指定该参数。</li>
     * @param integer $Gop 关键帧 I 帧之间的间隔，取值范围：0 和 [1, 100000]，单位：帧数。
当填 0 或不填时，系统将自动设置 gop 长度。
     * @param string $PreserveHDRSwitch 当原始视频为 HDR（High Dynamic Range）时，转码输出是否依然保持 HDR。取值范围：
<li>ON: 如果原始文件是 HDR，则转码输出保持 HDR；否则转码输出为 SDR （Standard Dynamic Range）。</li>
<li>OFF: 无论原始文件是 HDR 还是 SDR，转码输出均为 SDR。</li>
默认值：OFF。
     * @param string $CodecTag 编码标签，仅当视频流的编码格式为 H.265 编码时有效，可选值：
<li>hvc1 表示 hvc1 标签；</li>
<li>hev1 表示 hev1 标签。 </li>
默认值：hvc1。
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
        if (array_key_exists("Codec",$param) and $param["Codec"] !== null) {
            $this->Codec = $param["Codec"];
        }

        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }

        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }

        if (array_key_exists("ResolutionAdaptive",$param) and $param["ResolutionAdaptive"] !== null) {
            $this->ResolutionAdaptive = $param["ResolutionAdaptive"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("FillType",$param) and $param["FillType"] !== null) {
            $this->FillType = $param["FillType"];
        }

        if (array_key_exists("Vcrf",$param) and $param["Vcrf"] !== null) {
            $this->Vcrf = $param["Vcrf"];
        }

        if (array_key_exists("Gop",$param) and $param["Gop"] !== null) {
            $this->Gop = $param["Gop"];
        }

        if (array_key_exists("PreserveHDRSwitch",$param) and $param["PreserveHDRSwitch"] !== null) {
            $this->PreserveHDRSwitch = $param["PreserveHDRSwitch"];
        }

        if (array_key_exists("CodecTag",$param) and $param["CodecTag"] !== null) {
            $this->CodecTag = $param["CodecTag"];
        }
    }
}

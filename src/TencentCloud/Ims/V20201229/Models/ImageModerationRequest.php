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
namespace TencentCloud\Ims\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImageModeration请求参数结构体
 *
 * @method string getBizType() 获取该字段表示策略的具体编号，用于接口调度，在内容安全控制台中可配置。若不传入Biztype参数（留空），则代表采用默认的识别策略；传入则会在审核时根据业务场景采取不同的审核策略。<br>备注：Biztype仅为数字、字母与下划线的组合，长度为3-32个字符；不同Biztype关联不同的业务场景与识别能力策略，调用前请确认正确的Biztype。
 * @method void setBizType(string $BizType) 设置该字段表示策略的具体编号，用于接口调度，在内容安全控制台中可配置。若不传入Biztype参数（留空），则代表采用默认的识别策略；传入则会在审核时根据业务场景采取不同的审核策略。<br>备注：Biztype仅为数字、字母与下划线的组合，长度为3-32个字符；不同Biztype关联不同的业务场景与识别能力策略，调用前请确认正确的Biztype。
 * @method string getDataId() 获取该字段表示您为待检测对象分配的数据ID，传入后可方便您对文件进行标识和管理。<br>取值：由英文字母（大小写均可）、数字及四个特殊符号（_，-，@，#）组成，**长度不超过64个字符**。
 * @method void setDataId(string $DataId) 设置该字段表示您为待检测对象分配的数据ID，传入后可方便您对文件进行标识和管理。<br>取值：由英文字母（大小写均可）、数字及四个特殊符号（_，-，@，#）组成，**长度不超过64个字符**。
 * @method string getFileContent() 获取该字段表示待检测图片文件内容的Base64编码，由于云API对请求包体有大小限制，图片的**Base64编码内容大小不得超过10MB**。<br/>备注：**该字段与FileUrl必须选择输入其中一个**。
 * @method void setFileContent(string $FileContent) 设置该字段表示待检测图片文件内容的Base64编码，由于云API对请求包体有大小限制，图片的**Base64编码内容大小不得超过10MB**。<br/>备注：**该字段与FileUrl必须选择输入其中一个**。
 * @method string getFileUrl() 获取该字段表示待检测图片文件的访问链接，URL源图**大小不超过30MB**。<br />备注：该字段与FileContent必须选择输入其中一个。
 * @method void setFileUrl(string $FileUrl) 设置该字段表示待检测图片文件的访问链接，URL源图**大小不超过30MB**。<br />备注：该字段与FileContent必须选择输入其中一个。
 * @method integer getInterval() 获取**GIF检测专用**，用于表示GIF截帧频率（每隔多少张图片抽取一帧进行检测）；默认值为0，此时只会检测GIF的第一帧或不进行切分处理。<br>备注：Interval与MaxFrames参数需要组合使用。例如，Interval=3, MaxFrames=400，则代表在检测GIF时，将每间隔2帧检测一次且最多检测400帧。
 * @method void setInterval(integer $Interval) 设置**GIF检测专用**，用于表示GIF截帧频率（每隔多少张图片抽取一帧进行检测）；默认值为0，此时只会检测GIF的第一帧或不进行切分处理。<br>备注：Interval与MaxFrames参数需要组合使用。例如，Interval=3, MaxFrames=400，则代表在检测GIF时，将每间隔2帧检测一次且最多检测400帧。
 * @method integer getMaxFrames() 获取**GIF检测专用**，用于标识最大截帧数量；默认值为1，此时只会检测输入GIF的第一帧不进行切分处理（可能会造成处理超时）。<br>备注：Interval与MaxFrames参数需要组合使用。例如，Interval=3, MaxFrames=400，则代表在检测GIF时，将每间隔2帧检测一次且最多检测400帧。
 * @method void setMaxFrames(integer $MaxFrames) 设置**GIF检测专用**，用于标识最大截帧数量；默认值为1，此时只会检测输入GIF的第一帧不进行切分处理（可能会造成处理超时）。<br>备注：Interval与MaxFrames参数需要组合使用。例如，Interval=3, MaxFrames=400，则代表在检测GIF时，将每间隔2帧检测一次且最多检测400帧。
 * @method User getUser() 获取该字段表示待检测对象对应的用户相关信息，若填入则可甄别相应违规风险用户。
 * @method void setUser(User $User) 设置该字段表示待检测对象对应的用户相关信息，若填入则可甄别相应违规风险用户。
 * @method Device getDevice() 获取该字段表示待检测对象对应的设备相关信息，若填入则可甄别相应违规风险设备。
 * @method void setDevice(Device $Device) 设置该字段表示待检测对象对应的设备相关信息，若填入则可甄别相应违规风险设备。
 */
class ImageModerationRequest extends AbstractModel
{
    /**
     * @var string 该字段表示策略的具体编号，用于接口调度，在内容安全控制台中可配置。若不传入Biztype参数（留空），则代表采用默认的识别策略；传入则会在审核时根据业务场景采取不同的审核策略。<br>备注：Biztype仅为数字、字母与下划线的组合，长度为3-32个字符；不同Biztype关联不同的业务场景与识别能力策略，调用前请确认正确的Biztype。
     */
    public $BizType;

    /**
     * @var string 该字段表示您为待检测对象分配的数据ID，传入后可方便您对文件进行标识和管理。<br>取值：由英文字母（大小写均可）、数字及四个特殊符号（_，-，@，#）组成，**长度不超过64个字符**。
     */
    public $DataId;

    /**
     * @var string 该字段表示待检测图片文件内容的Base64编码，由于云API对请求包体有大小限制，图片的**Base64编码内容大小不得超过10MB**。<br/>备注：**该字段与FileUrl必须选择输入其中一个**。
     */
    public $FileContent;

    /**
     * @var string 该字段表示待检测图片文件的访问链接，URL源图**大小不超过30MB**。<br />备注：该字段与FileContent必须选择输入其中一个。
     */
    public $FileUrl;

    /**
     * @var integer **GIF检测专用**，用于表示GIF截帧频率（每隔多少张图片抽取一帧进行检测）；默认值为0，此时只会检测GIF的第一帧或不进行切分处理。<br>备注：Interval与MaxFrames参数需要组合使用。例如，Interval=3, MaxFrames=400，则代表在检测GIF时，将每间隔2帧检测一次且最多检测400帧。
     */
    public $Interval;

    /**
     * @var integer **GIF检测专用**，用于标识最大截帧数量；默认值为1，此时只会检测输入GIF的第一帧不进行切分处理（可能会造成处理超时）。<br>备注：Interval与MaxFrames参数需要组合使用。例如，Interval=3, MaxFrames=400，则代表在检测GIF时，将每间隔2帧检测一次且最多检测400帧。
     */
    public $MaxFrames;

    /**
     * @var User 该字段表示待检测对象对应的用户相关信息，若填入则可甄别相应违规风险用户。
     */
    public $User;

    /**
     * @var Device 该字段表示待检测对象对应的设备相关信息，若填入则可甄别相应违规风险设备。
     */
    public $Device;

    /**
     * @param string $BizType 该字段表示策略的具体编号，用于接口调度，在内容安全控制台中可配置。若不传入Biztype参数（留空），则代表采用默认的识别策略；传入则会在审核时根据业务场景采取不同的审核策略。<br>备注：Biztype仅为数字、字母与下划线的组合，长度为3-32个字符；不同Biztype关联不同的业务场景与识别能力策略，调用前请确认正确的Biztype。
     * @param string $DataId 该字段表示您为待检测对象分配的数据ID，传入后可方便您对文件进行标识和管理。<br>取值：由英文字母（大小写均可）、数字及四个特殊符号（_，-，@，#）组成，**长度不超过64个字符**。
     * @param string $FileContent 该字段表示待检测图片文件内容的Base64编码，由于云API对请求包体有大小限制，图片的**Base64编码内容大小不得超过10MB**。<br/>备注：**该字段与FileUrl必须选择输入其中一个**。
     * @param string $FileUrl 该字段表示待检测图片文件的访问链接，URL源图**大小不超过30MB**。<br />备注：该字段与FileContent必须选择输入其中一个。
     * @param integer $Interval **GIF检测专用**，用于表示GIF截帧频率（每隔多少张图片抽取一帧进行检测）；默认值为0，此时只会检测GIF的第一帧或不进行切分处理。<br>备注：Interval与MaxFrames参数需要组合使用。例如，Interval=3, MaxFrames=400，则代表在检测GIF时，将每间隔2帧检测一次且最多检测400帧。
     * @param integer $MaxFrames **GIF检测专用**，用于标识最大截帧数量；默认值为1，此时只会检测输入GIF的第一帧不进行切分处理（可能会造成处理超时）。<br>备注：Interval与MaxFrames参数需要组合使用。例如，Interval=3, MaxFrames=400，则代表在检测GIF时，将每间隔2帧检测一次且最多检测400帧。
     * @param User $User 该字段表示待检测对象对应的用户相关信息，若填入则可甄别相应违规风险用户。
     * @param Device $Device 该字段表示待检测对象对应的设备相关信息，若填入则可甄别相应违规风险设备。
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
        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("DataId",$param) and $param["DataId"] !== null) {
            $this->DataId = $param["DataId"];
        }

        if (array_key_exists("FileContent",$param) and $param["FileContent"] !== null) {
            $this->FileContent = $param["FileContent"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("MaxFrames",$param) and $param["MaxFrames"] !== null) {
            $this->MaxFrames = $param["MaxFrames"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = new User();
            $this->User->deserialize($param["User"]);
        }

        if (array_key_exists("Device",$param) and $param["Device"] !== null) {
            $this->Device = new Device();
            $this->Device->deserialize($param["Device"]);
        }
    }
}

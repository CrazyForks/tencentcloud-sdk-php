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
namespace TencentCloud\Ams\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskDetail返回参数结构体
 *
 * @method string getTaskId() 获取该字段用于返回创建音频审核任务后返回的任务ID（在Results参数中），用于标识需要查询任务详情的审核任务。
 * @method void setTaskId(string $TaskId) 设置该字段用于返回创建音频审核任务后返回的任务ID（在Results参数中），用于标识需要查询任务详情的审核任务。
 * @method string getDataId() 获取该字段用于返回调用音频审核接口时在Tasks参数内传入的数据ID参数，方便数据的辨别和管理。
 * @method void setDataId(string $DataId) 设置该字段用于返回调用音频审核接口时在Tasks参数内传入的数据ID参数，方便数据的辨别和管理。
 * @method string getBizType() 获取该字段用于返回调用音频审核接口时传入的BizType参数，方便数据的辨别和管理。
 * @method void setBizType(string $BizType) 设置该字段用于返回调用音频审核接口时传入的BizType参数，方便数据的辨别和管理。
 * @method string getName() 获取该字段用于返回调用音频审核接口时传入的TaskInput参数中的任务名称，方便任务的识别与管理。
 * @method void setName(string $Name) 设置该字段用于返回调用音频审核接口时传入的TaskInput参数中的任务名称，方便任务的识别与管理。
 * @method string getStatus() 获取该字段用于返回所查询内容的任务状态。
<br>取值：**FINISH**（任务已完成）、**PENDING** （任务等待中）、**RUNNING** （任务进行中）、**ERROR** （任务出错）、**CANCELLED** （任务已取消）。
 * @method void setStatus(string $Status) 设置该字段用于返回所查询内容的任务状态。
<br>取值：**FINISH**（任务已完成）、**PENDING** （任务等待中）、**RUNNING** （任务进行中）、**ERROR** （任务出错）、**CANCELLED** （任务已取消）。
 * @method string getType() 获取该字段用于返回调用音频审核接口时输入的音频审核类型，取值为：**AUDIO**（点播音频）和**LIVE_AUDIO**（直播音频），默认值为AUDIO。
 * @method void setType(string $Type) 设置该字段用于返回调用音频审核接口时输入的音频审核类型，取值为：**AUDIO**（点播音频）和**LIVE_AUDIO**（直播音频），默认值为AUDIO。
 * @method string getSuggestion() 获取该字段用于返回基于恶意标签的后续操作建议。当您获取到判定结果后，返回值表示系统推荐的后续操作；建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值：**Block**：建议屏蔽，**Review** ：建议人工复审，**Pass**：建议通过
 * @method void setSuggestion(string $Suggestion) 设置该字段用于返回基于恶意标签的后续操作建议。当您获取到判定结果后，返回值表示系统推荐的后续操作；建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值：**Block**：建议屏蔽，**Review** ：建议人工复审，**Pass**：建议通过
 * @method array getLabels() 获取该字段用于返回检测结果所对应的恶意标签。<br>返回值：**Porn**：色情，**Abuse**：谩骂，**Ad**：广告，**Custom**：自定义违规；以及其他令人反感、不安全或不适宜的内容类型。
 * @method void setLabels(array $Labels) 设置该字段用于返回检测结果所对应的恶意标签。<br>返回值：**Porn**：色情，**Abuse**：谩骂，**Ad**：广告，**Custom**：自定义违规；以及其他令人反感、不安全或不适宜的内容类型。
 * @method InputInfo getInputInfo() 获取该字段用于返回审核服务的媒体内容信息，主要包括传入文件类型和访问地址。
 * @method void setInputInfo(InputInfo $InputInfo) 设置该字段用于返回审核服务的媒体内容信息，主要包括传入文件类型和访问地址。
 * @method string getAudioText() 获取该字段用于返回音频文件识别出的对应文本内容，最大支持**前1000个字符**。
 * @method void setAudioText(string $AudioText) 设置该字段用于返回音频文件识别出的对应文本内容，最大支持**前1000个字符**。
 * @method array getAudioSegments() 获取该字段用于返回音频片段的审核结果，主要包括开始时间和音频审核的相应结果。<br>具体输出内容请参见AudioSegments及AudioResult数据结构的详细描述。
 * @method void setAudioSegments(array $AudioSegments) 设置该字段用于返回音频片段的审核结果，主要包括开始时间和音频审核的相应结果。<br>具体输出内容请参见AudioSegments及AudioResult数据结构的详细描述。
 * @method string getErrorType() 获取当任务状态为Error时，该字段用于返回对应错误的类型；任务状态非Error时，默认返回为空。
 * @method void setErrorType(string $ErrorType) 设置当任务状态为Error时，该字段用于返回对应错误的类型；任务状态非Error时，默认返回为空。
 * @method string getErrorDescription() 获取当任务状态为Error时，该字段用于返回对应错误的详细描述，任务状态非Error时默认返回为空。
 * @method void setErrorDescription(string $ErrorDescription) 设置当任务状态为Error时，该字段用于返回对应错误的详细描述，任务状态非Error时默认返回为空。
 * @method string getCreatedAt() 获取该字段用于返回被查询任务创建的时间，格式采用 ISO 8601标准。
 * @method void setCreatedAt(string $CreatedAt) 设置该字段用于返回被查询任务创建的时间，格式采用 ISO 8601标准。
 * @method string getUpdatedAt() 获取该字段用于返回被查询任务最后更新时间，格式采用 ISO 8601标准。
 * @method void setUpdatedAt(string $UpdatedAt) 设置该字段用于返回被查询任务最后更新时间，格式采用 ISO 8601标准。
 * @method string getLabel() 获取该字段用于返回检测结果所对应的标签。如果未命中恶意，返回Normal，如果命中恶意，则返回Labels中优先级最高的标签
 * @method void setLabel(string $Label) 设置该字段用于返回检测结果所对应的标签。如果未命中恶意，返回Normal，如果命中恶意，则返回Labels中优先级最高的标签
 * @method MediaInfo getMediaInfo() 获取媒体信息
 * @method void setMediaInfo(MediaInfo $MediaInfo) 设置媒体信息
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTaskDetailResponse extends AbstractModel
{
    /**
     * @var string 该字段用于返回创建音频审核任务后返回的任务ID（在Results参数中），用于标识需要查询任务详情的审核任务。
     */
    public $TaskId;

    /**
     * @var string 该字段用于返回调用音频审核接口时在Tasks参数内传入的数据ID参数，方便数据的辨别和管理。
     */
    public $DataId;

    /**
     * @var string 该字段用于返回调用音频审核接口时传入的BizType参数，方便数据的辨别和管理。
     */
    public $BizType;

    /**
     * @var string 该字段用于返回调用音频审核接口时传入的TaskInput参数中的任务名称，方便任务的识别与管理。
     */
    public $Name;

    /**
     * @var string 该字段用于返回所查询内容的任务状态。
<br>取值：**FINISH**（任务已完成）、**PENDING** （任务等待中）、**RUNNING** （任务进行中）、**ERROR** （任务出错）、**CANCELLED** （任务已取消）。
     */
    public $Status;

    /**
     * @var string 该字段用于返回调用音频审核接口时输入的音频审核类型，取值为：**AUDIO**（点播音频）和**LIVE_AUDIO**（直播音频），默认值为AUDIO。
     */
    public $Type;

    /**
     * @var string 该字段用于返回基于恶意标签的后续操作建议。当您获取到判定结果后，返回值表示系统推荐的后续操作；建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值：**Block**：建议屏蔽，**Review** ：建议人工复审，**Pass**：建议通过
     */
    public $Suggestion;

    /**
     * @var array 该字段用于返回检测结果所对应的恶意标签。<br>返回值：**Porn**：色情，**Abuse**：谩骂，**Ad**：广告，**Custom**：自定义违规；以及其他令人反感、不安全或不适宜的内容类型。
     */
    public $Labels;

    /**
     * @var InputInfo 该字段用于返回审核服务的媒体内容信息，主要包括传入文件类型和访问地址。
     */
    public $InputInfo;

    /**
     * @var string 该字段用于返回音频文件识别出的对应文本内容，最大支持**前1000个字符**。
     */
    public $AudioText;

    /**
     * @var array 该字段用于返回音频片段的审核结果，主要包括开始时间和音频审核的相应结果。<br>具体输出内容请参见AudioSegments及AudioResult数据结构的详细描述。
     */
    public $AudioSegments;

    /**
     * @var string 当任务状态为Error时，该字段用于返回对应错误的类型；任务状态非Error时，默认返回为空。
     */
    public $ErrorType;

    /**
     * @var string 当任务状态为Error时，该字段用于返回对应错误的详细描述，任务状态非Error时默认返回为空。
     */
    public $ErrorDescription;

    /**
     * @var string 该字段用于返回被查询任务创建的时间，格式采用 ISO 8601标准。
     */
    public $CreatedAt;

    /**
     * @var string 该字段用于返回被查询任务最后更新时间，格式采用 ISO 8601标准。
     */
    public $UpdatedAt;

    /**
     * @var string 该字段用于返回检测结果所对应的标签。如果未命中恶意，返回Normal，如果命中恶意，则返回Labels中优先级最高的标签
     */
    public $Label;

    /**
     * @var MediaInfo 媒体信息
     */
    public $MediaInfo;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TaskId 该字段用于返回创建音频审核任务后返回的任务ID（在Results参数中），用于标识需要查询任务详情的审核任务。
     * @param string $DataId 该字段用于返回调用音频审核接口时在Tasks参数内传入的数据ID参数，方便数据的辨别和管理。
     * @param string $BizType 该字段用于返回调用音频审核接口时传入的BizType参数，方便数据的辨别和管理。
     * @param string $Name 该字段用于返回调用音频审核接口时传入的TaskInput参数中的任务名称，方便任务的识别与管理。
     * @param string $Status 该字段用于返回所查询内容的任务状态。
<br>取值：**FINISH**（任务已完成）、**PENDING** （任务等待中）、**RUNNING** （任务进行中）、**ERROR** （任务出错）、**CANCELLED** （任务已取消）。
     * @param string $Type 该字段用于返回调用音频审核接口时输入的音频审核类型，取值为：**AUDIO**（点播音频）和**LIVE_AUDIO**（直播音频），默认值为AUDIO。
     * @param string $Suggestion 该字段用于返回基于恶意标签的后续操作建议。当您获取到判定结果后，返回值表示系统推荐的后续操作；建议您按照业务所需，对不同违规类型与建议值进行处理。<br>返回值：**Block**：建议屏蔽，**Review** ：建议人工复审，**Pass**：建议通过
     * @param array $Labels 该字段用于返回检测结果所对应的恶意标签。<br>返回值：**Porn**：色情，**Abuse**：谩骂，**Ad**：广告，**Custom**：自定义违规；以及其他令人反感、不安全或不适宜的内容类型。
     * @param InputInfo $InputInfo 该字段用于返回审核服务的媒体内容信息，主要包括传入文件类型和访问地址。
     * @param string $AudioText 该字段用于返回音频文件识别出的对应文本内容，最大支持**前1000个字符**。
     * @param array $AudioSegments 该字段用于返回音频片段的审核结果，主要包括开始时间和音频审核的相应结果。<br>具体输出内容请参见AudioSegments及AudioResult数据结构的详细描述。
     * @param string $ErrorType 当任务状态为Error时，该字段用于返回对应错误的类型；任务状态非Error时，默认返回为空。
     * @param string $ErrorDescription 当任务状态为Error时，该字段用于返回对应错误的详细描述，任务状态非Error时默认返回为空。
     * @param string $CreatedAt 该字段用于返回被查询任务创建的时间，格式采用 ISO 8601标准。
     * @param string $UpdatedAt 该字段用于返回被查询任务最后更新时间，格式采用 ISO 8601标准。
     * @param string $Label 该字段用于返回检测结果所对应的标签。如果未命中恶意，返回Normal，如果命中恶意，则返回Labels中优先级最高的标签
     * @param MediaInfo $MediaInfo 媒体信息
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("DataId",$param) and $param["DataId"] !== null) {
            $this->DataId = $param["DataId"];
        }

        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new TaskLabel();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new InputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("AudioText",$param) and $param["AudioText"] !== null) {
            $this->AudioText = $param["AudioText"];
        }

        if (array_key_exists("AudioSegments",$param) and $param["AudioSegments"] !== null) {
            $this->AudioSegments = [];
            foreach ($param["AudioSegments"] as $key => $value){
                $obj = new AudioSegments();
                $obj->deserialize($value);
                array_push($this->AudioSegments, $obj);
            }
        }

        if (array_key_exists("ErrorType",$param) and $param["ErrorType"] !== null) {
            $this->ErrorType = $param["ErrorType"];
        }

        if (array_key_exists("ErrorDescription",$param) and $param["ErrorDescription"] !== null) {
            $this->ErrorDescription = $param["ErrorDescription"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("MediaInfo",$param) and $param["MediaInfo"] !== null) {
            $this->MediaInfo = new MediaInfo();
            $this->MediaInfo->deserialize($param["MediaInfo"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

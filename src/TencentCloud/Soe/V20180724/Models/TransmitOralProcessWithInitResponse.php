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
namespace TencentCloud\Soe\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TransmitOralProcessWithInit返回参数结构体
 *
 * @method float getPronAccuracy() 获取发音精准度，取值范围[-1, 100]，当取-1时指完全不匹配，当为句子模式时，是所有已识别单词准确度的加权平均值，在reftext中但未识别出来的词不计入分数中。当为流式模式且请求中IsEnd未置1时，取值无意义。
 * @method void setPronAccuracy(float $PronAccuracy) 设置发音精准度，取值范围[-1, 100]，当取-1时指完全不匹配，当为句子模式时，是所有已识别单词准确度的加权平均值，在reftext中但未识别出来的词不计入分数中。当为流式模式且请求中IsEnd未置1时，取值无意义。
 * @method float getPronFluency() 获取发音流利度，取值范围[0, 1]，当为词模式时，取值无意义；当为流式模式且请求中IsEnd未置1时，取值无意义。取值无意义时，值为-1
 * @method void setPronFluency(float $PronFluency) 设置发音流利度，取值范围[0, 1]，当为词模式时，取值无意义；当为流式模式且请求中IsEnd未置1时，取值无意义。取值无意义时，值为-1
 * @method float getPronCompletion() 获取发音完整度，取值范围[0, 1]，当为词模式或自由说模式时，取值无意义；当为流式模式且请求中IsEnd未置1时，取值无意义。取值无意义时，值为-1
 * @method void setPronCompletion(float $PronCompletion) 设置发音完整度，取值范围[0, 1]，当为词模式或自由说模式时，取值无意义；当为流式模式且请求中IsEnd未置1时，取值无意义。取值无意义时，值为-1
 * @method array getWords() 获取详细发音评估结果
 * @method void setWords(array $Words) 设置详细发音评估结果
 * @method string getSessionId() 获取语音段唯一标识，一段语音一个SessionId
 * @method void setSessionId(string $SessionId) 设置语音段唯一标识，一段语音一个SessionId
 * @method string getAudioUrl() 获取已废弃，不再保存语音音频文件下载地址
 * @method void setAudioUrl(string $AudioUrl) 设置已废弃，不再保存语音音频文件下载地址
 * @method array getSentenceInfoSet() 获取断句中间结果，中间结果是局部最优而非全局最优的结果，所以中间结果有可能和最终整体结果对应部分不一致；中间结果的输出便于客户端UI更新；待用户发音完全结束后，系统会给出一个综合所有句子的整体结果。
 * @method void setSentenceInfoSet(array $SentenceInfoSet) 设置断句中间结果，中间结果是局部最优而非全局最优的结果，所以中间结果有可能和最终整体结果对应部分不一致；中间结果的输出便于客户端UI更新；待用户发音完全结束后，系统会给出一个综合所有句子的整体结果。
 * @method string getStatus() 获取评估 session 状态，“Evaluating"：评估中、"Failed"：评估失败、"Finished"：评估完成
 * @method void setStatus(string $Status) 设置评估 session 状态，“Evaluating"：评估中、"Failed"：评估失败、"Finished"：评估完成
 * @method float getSuggestedScore() 获取建议评分，取值范围[0,100]，评分方式为建议评分 = 准确度（PronAccuracy）× 完整度（PronCompletion）×（2 - 完整度（PronCompletion）），如若评分策略不符合请参考Words数组中的详细分数自定义评分逻辑。
 * @method void setSuggestedScore(float $SuggestedScore) 设置建议评分，取值范围[0,100]，评分方式为建议评分 = 准确度（PronAccuracy）× 完整度（PronCompletion）×（2 - 完整度（PronCompletion）），如若评分策略不符合请参考Words数组中的详细分数自定义评分逻辑。
 * @method integer getRefTextId() 获取匹配候选文本的序号，在句子多分支、情景对 话、段落模式下表示匹配到的文本序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRefTextId(integer $RefTextId) 设置匹配候选文本的序号，在句子多分支、情景对 话、段落模式下表示匹配到的文本序号
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getKeyWordHits() 获取主题词命中标志，0表示没命中，1表示命中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyWordHits(array $KeyWordHits) 设置主题词命中标志，0表示没命中，1表示命中
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getUnKeyWordHits() 获取负向主题词命中标志，0表示没命中，1表示命中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnKeyWordHits(array $UnKeyWordHits) 设置负向主题词命中标志，0表示没命中，1表示命中
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class TransmitOralProcessWithInitResponse extends AbstractModel
{
    /**
     * @var float 发音精准度，取值范围[-1, 100]，当取-1时指完全不匹配，当为句子模式时，是所有已识别单词准确度的加权平均值，在reftext中但未识别出来的词不计入分数中。当为流式模式且请求中IsEnd未置1时，取值无意义。
     */
    public $PronAccuracy;

    /**
     * @var float 发音流利度，取值范围[0, 1]，当为词模式时，取值无意义；当为流式模式且请求中IsEnd未置1时，取值无意义。取值无意义时，值为-1
     */
    public $PronFluency;

    /**
     * @var float 发音完整度，取值范围[0, 1]，当为词模式或自由说模式时，取值无意义；当为流式模式且请求中IsEnd未置1时，取值无意义。取值无意义时，值为-1
     */
    public $PronCompletion;

    /**
     * @var array 详细发音评估结果
     */
    public $Words;

    /**
     * @var string 语音段唯一标识，一段语音一个SessionId
     */
    public $SessionId;

    /**
     * @var string 已废弃，不再保存语音音频文件下载地址
     * @deprecated
     */
    public $AudioUrl;

    /**
     * @var array 断句中间结果，中间结果是局部最优而非全局最优的结果，所以中间结果有可能和最终整体结果对应部分不一致；中间结果的输出便于客户端UI更新；待用户发音完全结束后，系统会给出一个综合所有句子的整体结果。
     */
    public $SentenceInfoSet;

    /**
     * @var string 评估 session 状态，“Evaluating"：评估中、"Failed"：评估失败、"Finished"：评估完成
     */
    public $Status;

    /**
     * @var float 建议评分，取值范围[0,100]，评分方式为建议评分 = 准确度（PronAccuracy）× 完整度（PronCompletion）×（2 - 完整度（PronCompletion）），如若评分策略不符合请参考Words数组中的详细分数自定义评分逻辑。
     */
    public $SuggestedScore;

    /**
     * @var integer 匹配候选文本的序号，在句子多分支、情景对 话、段落模式下表示匹配到的文本序号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RefTextId;

    /**
     * @var array 主题词命中标志，0表示没命中，1表示命中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KeyWordHits;

    /**
     * @var array 负向主题词命中标志，0表示没命中，1表示命中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnKeyWordHits;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param float $PronAccuracy 发音精准度，取值范围[-1, 100]，当取-1时指完全不匹配，当为句子模式时，是所有已识别单词准确度的加权平均值，在reftext中但未识别出来的词不计入分数中。当为流式模式且请求中IsEnd未置1时，取值无意义。
     * @param float $PronFluency 发音流利度，取值范围[0, 1]，当为词模式时，取值无意义；当为流式模式且请求中IsEnd未置1时，取值无意义。取值无意义时，值为-1
     * @param float $PronCompletion 发音完整度，取值范围[0, 1]，当为词模式或自由说模式时，取值无意义；当为流式模式且请求中IsEnd未置1时，取值无意义。取值无意义时，值为-1
     * @param array $Words 详细发音评估结果
     * @param string $SessionId 语音段唯一标识，一段语音一个SessionId
     * @param string $AudioUrl 已废弃，不再保存语音音频文件下载地址
     * @param array $SentenceInfoSet 断句中间结果，中间结果是局部最优而非全局最优的结果，所以中间结果有可能和最终整体结果对应部分不一致；中间结果的输出便于客户端UI更新；待用户发音完全结束后，系统会给出一个综合所有句子的整体结果。
     * @param string $Status 评估 session 状态，“Evaluating"：评估中、"Failed"：评估失败、"Finished"：评估完成
     * @param float $SuggestedScore 建议评分，取值范围[0,100]，评分方式为建议评分 = 准确度（PronAccuracy）× 完整度（PronCompletion）×（2 - 完整度（PronCompletion）），如若评分策略不符合请参考Words数组中的详细分数自定义评分逻辑。
     * @param integer $RefTextId 匹配候选文本的序号，在句子多分支、情景对 话、段落模式下表示匹配到的文本序号
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $KeyWordHits 主题词命中标志，0表示没命中，1表示命中
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $UnKeyWordHits 负向主题词命中标志，0表示没命中，1表示命中
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("PronAccuracy",$param) and $param["PronAccuracy"] !== null) {
            $this->PronAccuracy = $param["PronAccuracy"];
        }

        if (array_key_exists("PronFluency",$param) and $param["PronFluency"] !== null) {
            $this->PronFluency = $param["PronFluency"];
        }

        if (array_key_exists("PronCompletion",$param) and $param["PronCompletion"] !== null) {
            $this->PronCompletion = $param["PronCompletion"];
        }

        if (array_key_exists("Words",$param) and $param["Words"] !== null) {
            $this->Words = [];
            foreach ($param["Words"] as $key => $value){
                $obj = new WordRsp();
                $obj->deserialize($value);
                array_push($this->Words, $obj);
            }
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("AudioUrl",$param) and $param["AudioUrl"] !== null) {
            $this->AudioUrl = $param["AudioUrl"];
        }

        if (array_key_exists("SentenceInfoSet",$param) and $param["SentenceInfoSet"] !== null) {
            $this->SentenceInfoSet = [];
            foreach ($param["SentenceInfoSet"] as $key => $value){
                $obj = new SentenceInfo();
                $obj->deserialize($value);
                array_push($this->SentenceInfoSet, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SuggestedScore",$param) and $param["SuggestedScore"] !== null) {
            $this->SuggestedScore = $param["SuggestedScore"];
        }

        if (array_key_exists("RefTextId",$param) and $param["RefTextId"] !== null) {
            $this->RefTextId = $param["RefTextId"];
        }

        if (array_key_exists("KeyWordHits",$param) and $param["KeyWordHits"] !== null) {
            $this->KeyWordHits = $param["KeyWordHits"];
        }

        if (array_key_exists("UnKeyWordHits",$param) and $param["UnKeyWordHits"] !== null) {
            $this->UnKeyWordHits = $param["UnKeyWordHits"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

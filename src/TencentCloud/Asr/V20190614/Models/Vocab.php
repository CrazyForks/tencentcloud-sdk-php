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
namespace TencentCloud\Asr\V20190614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * [词表内容](https://cloud.tencent.com/document/product/1093/41484#3.-.E8.BE.93.E5.87.BA.E5.8F.82.E6.95.B0)
 *
 * @method string getName() 获取热词表名称
 * @method void setName(string $Name) 设置热词表名称
 * @method string getDescription() 获取热词表描述
 * @method void setDescription(string $Description) 设置热词表描述
 * @method string getVocabId() 获取热词表ID
 * @method void setVocabId(string $VocabId) 设置热词表ID
 * @method array getWordWeights() 获取词权重列表
 * @method void setWordWeights(array $WordWeights) 设置词权重列表
 * @method string getCreateTime() 获取词表创建时间
 * @method void setCreateTime(string $CreateTime) 设置词表创建时间
 * @method string getUpdateTime() 获取词表更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置词表更新时间
 * @method integer getState() 获取热词表状态，1为默认状态即在识别时默认加载该热词表进行识别，0为初始状态
 * @method void setState(integer $State) 设置热词表状态，1为默认状态即在识别时默认加载该热词表进行识别，0为初始状态
 * @method array getTagInfos() 获取标签数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagInfos(array $TagInfos) 设置标签数组
注意：此字段可能返回 null，表示取不到有效值。
 */
class Vocab extends AbstractModel
{
    /**
     * @var string 热词表名称
     */
    public $Name;

    /**
     * @var string 热词表描述
     */
    public $Description;

    /**
     * @var string 热词表ID
     */
    public $VocabId;

    /**
     * @var array 词权重列表
     */
    public $WordWeights;

    /**
     * @var string 词表创建时间
     */
    public $CreateTime;

    /**
     * @var string 词表更新时间
     */
    public $UpdateTime;

    /**
     * @var integer 热词表状态，1为默认状态即在识别时默认加载该热词表进行识别，0为初始状态
     */
    public $State;

    /**
     * @var array 标签数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagInfos;

    /**
     * @param string $Name 热词表名称
     * @param string $Description 热词表描述
     * @param string $VocabId 热词表ID
     * @param array $WordWeights 词权重列表
     * @param string $CreateTime 词表创建时间
     * @param string $UpdateTime 词表更新时间
     * @param integer $State 热词表状态，1为默认状态即在识别时默认加载该热词表进行识别，0为初始状态
     * @param array $TagInfos 标签数组
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("VocabId",$param) and $param["VocabId"] !== null) {
            $this->VocabId = $param["VocabId"];
        }

        if (array_key_exists("WordWeights",$param) and $param["WordWeights"] !== null) {
            $this->WordWeights = [];
            foreach ($param["WordWeights"] as $key => $value){
                $obj = new HotWord();
                $obj->deserialize($value);
                array_push($this->WordWeights, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("TagInfos",$param) and $param["TagInfos"] !== null) {
            $this->TagInfos = $param["TagInfos"];
        }
    }
}

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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateApmInstance请求参数结构体
 *
 * @method string getName() 获取实例名
 * @method void setName(string $Name) 设置实例名
 * @method string getDescription() 获取实例描述信息
 * @method void setDescription(string $Description) 设置实例描述信息
 * @method integer getTraceDuration() 获取Trace数据保存时长，单位为天默认存储为3天
 * @method void setTraceDuration(integer $TraceDuration) 设置Trace数据保存时长，单位为天默认存储为3天
 * @method array getTags() 获取标签列表
 * @method void setTags(array $Tags) 设置标签列表
 * @method integer getSpanDailyCounters() 获取实例上报额度值，默认赋值为0表示不限制上报额度
 * @method void setSpanDailyCounters(integer $SpanDailyCounters) 设置实例上报额度值，默认赋值为0表示不限制上报额度
 * @method integer getPayMode() 获取实例的计费模式
 * @method void setPayMode(integer $PayMode) 设置实例的计费模式
 * @method integer getFree() 获取（0=付费版；1=tsf受限免费版；2=免费版）
 * @method void setFree(integer $Free) 设置（0=付费版；1=tsf受限免费版；2=免费版）
 */
class CreateApmInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例名
     */
    public $Name;

    /**
     * @var string 实例描述信息
     */
    public $Description;

    /**
     * @var integer Trace数据保存时长，单位为天默认存储为3天
     */
    public $TraceDuration;

    /**
     * @var array 标签列表
     */
    public $Tags;

    /**
     * @var integer 实例上报额度值，默认赋值为0表示不限制上报额度
     */
    public $SpanDailyCounters;

    /**
     * @var integer 实例的计费模式
     */
    public $PayMode;

    /**
     * @var integer （0=付费版；1=tsf受限免费版；2=免费版）
     */
    public $Free;

    /**
     * @param string $Name 实例名
     * @param string $Description 实例描述信息
     * @param integer $TraceDuration Trace数据保存时长，单位为天默认存储为3天
     * @param array $Tags 标签列表
     * @param integer $SpanDailyCounters 实例上报额度值，默认赋值为0表示不限制上报额度
     * @param integer $PayMode 实例的计费模式
     * @param integer $Free （0=付费版；1=tsf受限免费版；2=免费版）
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

        if (array_key_exists("TraceDuration",$param) and $param["TraceDuration"] !== null) {
            $this->TraceDuration = $param["TraceDuration"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ApmTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("SpanDailyCounters",$param) and $param["SpanDailyCounters"] !== null) {
            $this->SpanDailyCounters = $param["SpanDailyCounters"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Free",$param) and $param["Free"] !== null) {
            $this->Free = $param["Free"];
        }
    }
}

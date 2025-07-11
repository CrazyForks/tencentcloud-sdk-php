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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 合同组中每个子合同的发起信息
 *
 * @method array getFileIds() 获取签署文件资源Id列表，目前仅支持单个文件
 * @method void setFileIds(array $FileIds) 设置签署文件资源Id列表，目前仅支持单个文件
 * @method string getFlowName() 获取签署流程名称，长度不超过200个字符
 * @method void setFlowName(string $FlowName) 设置签署流程名称，长度不超过200个字符
 * @method array getFlowApprovers() 获取签署流程签约方列表，最多不超过5个参与方
 * @method void setFlowApprovers(array $FlowApprovers) 设置签署流程签约方列表，最多不超过5个参与方
 * @method integer getDeadline() 获取签署流程截止时间，十位数时间戳，最大值为33162419560，即3020年
 * @method void setDeadline(integer $Deadline) 设置签署流程截止时间，十位数时间戳，最大值为33162419560，即3020年
 * @method string getFlowDescription() 获取签署流程的描述，长度不超过1000个字符
 * @method void setFlowDescription(string $FlowDescription) 设置签署流程的描述，长度不超过1000个字符
 * @method string getFlowType() 获取签署流程的类型，长度不超过255个字符
 * @method void setFlowType(string $FlowType) 设置签署流程的类型，长度不超过255个字符
 * @method string getCallbackUrl() 获取已废弃，请使用【应用号配置】中的回调地址统一接收消息
 * @method void setCallbackUrl(string $CallbackUrl) 设置已废弃，请使用【应用号配置】中的回调地址统一接收消息
 * @method string getCustomerData() 获取第三方应用的业务信息，最大长度1000个字符。
 * @method void setCustomerData(string $CustomerData) 设置第三方应用的业务信息，最大长度1000个字符。
 * @method boolean getUnordered() 获取合同签署顺序类型(无序签,顺序签)，默认为false，即有序签署
 * @method void setUnordered(boolean $Unordered) 设置合同签署顺序类型(无序签,顺序签)，默认为false，即有序签署
 * @method array getComponents() 获取签署文件中的发起方的填写控件，需要在发起的时候进行填充
 * @method void setComponents(array $Components) 设置签署文件中的发起方的填写控件，需要在发起的时候进行填充
 * @method string getCustomShowMap() 获取合同显示的页卡模板，说明：只支持{合同名称}, {发起方企业}, {发起方姓名}, {签署方N企业}, {签署方N姓名}，且N不能超过签署人的数量，N从1开始
 * @method void setCustomShowMap(string $CustomShowMap) 设置合同显示的页卡模板，说明：只支持{合同名称}, {发起方企业}, {发起方姓名}, {签署方N企业}, {签署方N姓名}，且N不能超过签署人的数量，N从1开始
 * @method boolean getNeedSignReview() 获取本企业(发起方企业)是否需要签署审批
 * @method void setNeedSignReview(boolean $NeedSignReview) 设置本企业(发起方企业)是否需要签署审批
 * @method integer getFlowDisplayType() 获取在短信通知、填写、签署流程中，若标题、按钮、合同详情等地方存在“合同”字样时，可根据此配置指定文案，可选文案如下：  <ul><li> <b>0</b> :合同（默认值）</li> <li> <b>1</b> :文件</li> <li> <b>2</b> :协议</li><li> <b>3</b> :文书</li></ul>效果如下:![FlowDisplayType](https://qcloudimg.tencent-cloud.cn/raw/e4a2c4d638717cc901d3dbd5137c9bbc.png)
 * @method void setFlowDisplayType(integer $FlowDisplayType) 设置在短信通知、填写、签署流程中，若标题、按钮、合同详情等地方存在“合同”字样时，可根据此配置指定文案，可选文案如下：  <ul><li> <b>0</b> :合同（默认值）</li> <li> <b>1</b> :文件</li> <li> <b>2</b> :协议</li><li> <b>3</b> :文书</li></ul>效果如下:![FlowDisplayType](https://qcloudimg.tencent-cloud.cn/raw/e4a2c4d638717cc901d3dbd5137c9bbc.png)
 */
class FlowFileInfo extends AbstractModel
{
    /**
     * @var array 签署文件资源Id列表，目前仅支持单个文件
     */
    public $FileIds;

    /**
     * @var string 签署流程名称，长度不超过200个字符
     */
    public $FlowName;

    /**
     * @var array 签署流程签约方列表，最多不超过5个参与方
     */
    public $FlowApprovers;

    /**
     * @var integer 签署流程截止时间，十位数时间戳，最大值为33162419560，即3020年
     */
    public $Deadline;

    /**
     * @var string 签署流程的描述，长度不超过1000个字符
     */
    public $FlowDescription;

    /**
     * @var string 签署流程的类型，长度不超过255个字符
     */
    public $FlowType;

    /**
     * @var string 已废弃，请使用【应用号配置】中的回调地址统一接收消息
     * @deprecated
     */
    public $CallbackUrl;

    /**
     * @var string 第三方应用的业务信息，最大长度1000个字符。
     */
    public $CustomerData;

    /**
     * @var boolean 合同签署顺序类型(无序签,顺序签)，默认为false，即有序签署
     */
    public $Unordered;

    /**
     * @var array 签署文件中的发起方的填写控件，需要在发起的时候进行填充
     */
    public $Components;

    /**
     * @var string 合同显示的页卡模板，说明：只支持{合同名称}, {发起方企业}, {发起方姓名}, {签署方N企业}, {签署方N姓名}，且N不能超过签署人的数量，N从1开始
     */
    public $CustomShowMap;

    /**
     * @var boolean 本企业(发起方企业)是否需要签署审批
     */
    public $NeedSignReview;

    /**
     * @var integer 在短信通知、填写、签署流程中，若标题、按钮、合同详情等地方存在“合同”字样时，可根据此配置指定文案，可选文案如下：  <ul><li> <b>0</b> :合同（默认值）</li> <li> <b>1</b> :文件</li> <li> <b>2</b> :协议</li><li> <b>3</b> :文书</li></ul>效果如下:![FlowDisplayType](https://qcloudimg.tencent-cloud.cn/raw/e4a2c4d638717cc901d3dbd5137c9bbc.png)
     */
    public $FlowDisplayType;

    /**
     * @param array $FileIds 签署文件资源Id列表，目前仅支持单个文件
     * @param string $FlowName 签署流程名称，长度不超过200个字符
     * @param array $FlowApprovers 签署流程签约方列表，最多不超过5个参与方
     * @param integer $Deadline 签署流程截止时间，十位数时间戳，最大值为33162419560，即3020年
     * @param string $FlowDescription 签署流程的描述，长度不超过1000个字符
     * @param string $FlowType 签署流程的类型，长度不超过255个字符
     * @param string $CallbackUrl 已废弃，请使用【应用号配置】中的回调地址统一接收消息
     * @param string $CustomerData 第三方应用的业务信息，最大长度1000个字符。
     * @param boolean $Unordered 合同签署顺序类型(无序签,顺序签)，默认为false，即有序签署
     * @param array $Components 签署文件中的发起方的填写控件，需要在发起的时候进行填充
     * @param string $CustomShowMap 合同显示的页卡模板，说明：只支持{合同名称}, {发起方企业}, {发起方姓名}, {签署方N企业}, {签署方N姓名}，且N不能超过签署人的数量，N从1开始
     * @param boolean $NeedSignReview 本企业(发起方企业)是否需要签署审批
     * @param integer $FlowDisplayType 在短信通知、填写、签署流程中，若标题、按钮、合同详情等地方存在“合同”字样时，可根据此配置指定文案，可选文案如下：  <ul><li> <b>0</b> :合同（默认值）</li> <li> <b>1</b> :文件</li> <li> <b>2</b> :协议</li><li> <b>3</b> :文书</li></ul>效果如下:![FlowDisplayType](https://qcloudimg.tencent-cloud.cn/raw/e4a2c4d638717cc901d3dbd5137c9bbc.png)
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
        if (array_key_exists("FileIds",$param) and $param["FileIds"] !== null) {
            $this->FileIds = $param["FileIds"];
        }

        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("FlowApprovers",$param) and $param["FlowApprovers"] !== null) {
            $this->FlowApprovers = [];
            foreach ($param["FlowApprovers"] as $key => $value){
                $obj = new FlowApproverInfo();
                $obj->deserialize($value);
                array_push($this->FlowApprovers, $obj);
            }
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("FlowDescription",$param) and $param["FlowDescription"] !== null) {
            $this->FlowDescription = $param["FlowDescription"];
        }

        if (array_key_exists("FlowType",$param) and $param["FlowType"] !== null) {
            $this->FlowType = $param["FlowType"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("CustomerData",$param) and $param["CustomerData"] !== null) {
            $this->CustomerData = $param["CustomerData"];
        }

        if (array_key_exists("Unordered",$param) and $param["Unordered"] !== null) {
            $this->Unordered = $param["Unordered"];
        }

        if (array_key_exists("Components",$param) and $param["Components"] !== null) {
            $this->Components = [];
            foreach ($param["Components"] as $key => $value){
                $obj = new Component();
                $obj->deserialize($value);
                array_push($this->Components, $obj);
            }
        }

        if (array_key_exists("CustomShowMap",$param) and $param["CustomShowMap"] !== null) {
            $this->CustomShowMap = $param["CustomShowMap"];
        }

        if (array_key_exists("NeedSignReview",$param) and $param["NeedSignReview"] !== null) {
            $this->NeedSignReview = $param["NeedSignReview"];
        }

        if (array_key_exists("FlowDisplayType",$param) and $param["FlowDisplayType"] !== null) {
            $this->FlowDisplayType = $param["FlowDisplayType"];
        }
    }
}

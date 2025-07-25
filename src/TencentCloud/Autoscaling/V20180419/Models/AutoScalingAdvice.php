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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 伸缩组配置建议。
 *
 * @method string getAutoScalingGroupId() 获取伸缩组ID。
 * @method void setAutoScalingGroupId(string $AutoScalingGroupId) 设置伸缩组ID。
 * @method string getLevel() 获取伸缩组警告级别。取值范围：
<li>NORMAL：正常</li>
<li>WARNING：警告级别</li>
<li>CRITICAL：严重级别</li>
 * @method void setLevel(string $Level) 设置伸缩组警告级别。取值范围：
<li>NORMAL：正常</li>
<li>WARNING：警告级别</li>
<li>CRITICAL：严重级别</li>
 * @method array getAdvices() 获取伸缩组配置建议集合。
 * @method void setAdvices(array $Advices) 设置伸缩组配置建议集合。
 */
class AutoScalingAdvice extends AbstractModel
{
    /**
     * @var string 伸缩组ID。
     */
    public $AutoScalingGroupId;

    /**
     * @var string 伸缩组警告级别。取值范围：
<li>NORMAL：正常</li>
<li>WARNING：警告级别</li>
<li>CRITICAL：严重级别</li>
     */
    public $Level;

    /**
     * @var array 伸缩组配置建议集合。
     */
    public $Advices;

    /**
     * @param string $AutoScalingGroupId 伸缩组ID。
     * @param string $Level 伸缩组警告级别。取值范围：
<li>NORMAL：正常</li>
<li>WARNING：警告级别</li>
<li>CRITICAL：严重级别</li>
     * @param array $Advices 伸缩组配置建议集合。
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
        if (array_key_exists("AutoScalingGroupId",$param) and $param["AutoScalingGroupId"] !== null) {
            $this->AutoScalingGroupId = $param["AutoScalingGroupId"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Advices",$param) and $param["Advices"] !== null) {
            $this->Advices = [];
            foreach ($param["Advices"] as $key => $value){
                $obj = new Advice();
                $obj->deserialize($value);
                array_push($this->Advices, $obj);
            }
        }
    }
}

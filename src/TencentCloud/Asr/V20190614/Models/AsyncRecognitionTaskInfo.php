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
 * [音频流异步识别](https://cloud.tencent.com/document/api/1093/37824#AsyncRecognitionTasks)任务信息
 *
 * @method integer getTaskId() 获取任务ID
 * @method void setTaskId(integer $TaskId) 设置任务ID
 * @method string getUrl() 获取音频流Url
 * @method void setUrl(string $Url) 设置音频流Url
 */
class AsyncRecognitionTaskInfo extends AbstractModel
{
    /**
     * @var integer 任务ID
     */
    public $TaskId;

    /**
     * @var string 音频流Url
     */
    public $Url;

    /**
     * @param integer $TaskId 任务ID
     * @param string $Url 音频流Url
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

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}

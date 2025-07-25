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
 * 小程序音视频审核信息
 *
 * @method array getMiniProgramReviewList() 获取音视频审核信息列表。
 * @method void setMiniProgramReviewList(array $MiniProgramReviewList) 设置音视频审核信息列表。
 */
class MediaMiniProgramReviewInfo extends AbstractModel
{
    /**
     * @var array 音视频审核信息列表。
     */
    public $MiniProgramReviewList;

    /**
     * @param array $MiniProgramReviewList 音视频审核信息列表。
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
        if (array_key_exists("MiniProgramReviewList",$param) and $param["MiniProgramReviewList"] !== null) {
            $this->MiniProgramReviewList = [];
            foreach ($param["MiniProgramReviewList"] as $key => $value){
                $obj = new MediaMiniProgramReviewInfoItem();
                $obj->deserialize($value);
                array_push($this->MiniProgramReviewList, $obj);
            }
        }
    }
}

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
namespace TencentCloud\Iai\V20200303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteFace请求参数结构体
 *
 * @method string getPersonId() 获取人员ID，取值为创建人员接口中的PersonId。
 * @method void setPersonId(string $PersonId) 设置人员ID，取值为创建人员接口中的PersonId。
 * @method array getFaceIds() 获取待删除的人脸ID列表，数组元素取值为增加人脸接口返回的FaceId。
 * @method void setFaceIds(array $FaceIds) 设置待删除的人脸ID列表，数组元素取值为增加人脸接口返回的FaceId。
 */
class DeleteFaceRequest extends AbstractModel
{
    /**
     * @var string 人员ID，取值为创建人员接口中的PersonId。
     */
    public $PersonId;

    /**
     * @var array 待删除的人脸ID列表，数组元素取值为增加人脸接口返回的FaceId。
     */
    public $FaceIds;

    /**
     * @param string $PersonId 人员ID，取值为创建人员接口中的PersonId。
     * @param array $FaceIds 待删除的人脸ID列表，数组元素取值为增加人脸接口返回的FaceId。
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
        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("FaceIds",$param) and $param["FaceIds"] !== null) {
            $this->FaceIds = $param["FaceIds"];
        }
    }
}

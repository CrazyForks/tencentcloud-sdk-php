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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单字在原图中的坐标，以四个顶点坐标表示，以左上角为起点，顺时针返回。
 *
 * @method array getWordCoordinate() 获取单字在原图中的坐标，以四个顶点坐标表示，以左上角为起点，顺时针返回。
 * @method void setWordCoordinate(array $WordCoordinate) 设置单字在原图中的坐标，以四个顶点坐标表示，以左上角为起点，顺时针返回。
 */
class DetectedWordCoordPoint extends AbstractModel
{
    /**
     * @var array 单字在原图中的坐标，以四个顶点坐标表示，以左上角为起点，顺时针返回。
     */
    public $WordCoordinate;

    /**
     * @param array $WordCoordinate 单字在原图中的坐标，以四个顶点坐标表示，以左上角为起点，顺时针返回。
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
        if (array_key_exists("WordCoordinate",$param) and $param["WordCoordinate"] !== null) {
            $this->WordCoordinate = [];
            foreach ($param["WordCoordinate"] as $key => $value){
                $obj = new Coord();
                $obj->deserialize($value);
                array_push($this->WordCoordinate, $obj);
            }
        }
    }
}

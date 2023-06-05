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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSparkSessionBatchSqlLog返回参数结构体
 *
 * @method integer getState() 获取状态：0：初始化、1：成功、2：失败、3：取消、4：异常；
 * @method void setState(integer $State) 设置状态：0：初始化、1：成功、2：失败、3：取消、4：异常；
 * @method array getLogSet() 获取日志信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogSet(array $LogSet) 设置日志信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSparkSessionBatchSqlLogResponse extends AbstractModel
{
    /**
     * @var integer 状态：0：初始化、1：成功、2：失败、3：取消、4：异常；
     */
    public $State;

    /**
     * @var array 日志信息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogSet;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $State 状态：0：初始化、1：成功、2：失败、3：取消、4：异常；
     * @param array $LogSet 日志信息列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("LogSet",$param) and $param["LogSet"] !== null) {
            $this->LogSet = [];
            foreach ($param["LogSet"] as $key => $value){
                $obj = new SparkSessionBatchLog();
                $obj->deserialize($value);
                array_push($this->LogSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
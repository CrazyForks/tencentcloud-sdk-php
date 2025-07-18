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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteSpecifyPrivateZoneVpc返回参数结构体
 *
 * @method string getZoneId() 获取私有域id
 * @method void setZoneId(string $ZoneId) 设置私有域id
 * @method array getVpcSet() 获取本次删除的VPC
 * @method void setVpcSet(array $VpcSet) 设置本次删除的VPC
 * @method array getAccountVpcSet() 获取本次删除的关联账户的VPC
 * @method void setAccountVpcSet(array $AccountVpcSet) 设置本次删除的关联账户的VPC
 * @method string getUniqId() 获取唯一id
 * @method void setUniqId(string $UniqId) 设置唯一id
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DeleteSpecifyPrivateZoneVpcResponse extends AbstractModel
{
    /**
     * @var string 私有域id
     */
    public $ZoneId;

    /**
     * @var array 本次删除的VPC
     */
    public $VpcSet;

    /**
     * @var array 本次删除的关联账户的VPC
     */
    public $AccountVpcSet;

    /**
     * @var string 唯一id
     */
    public $UniqId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ZoneId 私有域id
     * @param array $VpcSet 本次删除的VPC
     * @param array $AccountVpcSet 本次删除的关联账户的VPC
     * @param string $UniqId 唯一id
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("VpcSet",$param) and $param["VpcSet"] !== null) {
            $this->VpcSet = [];
            foreach ($param["VpcSet"] as $key => $value){
                $obj = new VpcInfo();
                $obj->deserialize($value);
                array_push($this->VpcSet, $obj);
            }
        }

        if (array_key_exists("AccountVpcSet",$param) and $param["AccountVpcSet"] !== null) {
            $this->AccountVpcSet = [];
            foreach ($param["AccountVpcSet"] as $key => $value){
                $obj = new AccountVpcInfo();
                $obj->deserialize($value);
                array_push($this->AccountVpcSet, $obj);
            }
        }

        if (array_key_exists("UniqId",$param) and $param["UniqId"] !== null) {
            $this->UniqId = $param["UniqId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

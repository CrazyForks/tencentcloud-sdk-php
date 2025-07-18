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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DisableEventPersistence请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method boolean getDeleteLogSetAndTopic() 获取取值为true代表关闭集群审计时删除默认创建的日志集和主题，false代表不删除
 * @method void setDeleteLogSetAndTopic(boolean $DeleteLogSetAndTopic) 设置取值为true代表关闭集群审计时删除默认创建的日志集和主题，false代表不删除
 */
class DisableEventPersistenceRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var boolean 取值为true代表关闭集群审计时删除默认创建的日志集和主题，false代表不删除
     */
    public $DeleteLogSetAndTopic;

    /**
     * @param string $ClusterId 集群ID
     * @param boolean $DeleteLogSetAndTopic 取值为true代表关闭集群审计时删除默认创建的日志集和主题，false代表不删除
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("DeleteLogSetAndTopic",$param) and $param["DeleteLogSetAndTopic"] !== null) {
            $this->DeleteLogSetAndTopic = $param["DeleteLogSetAndTopic"];
        }
    }
}

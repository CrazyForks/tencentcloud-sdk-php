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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteAlarmNotices请求参数结构体
 *
 * @method string getModule() 获取模块名，这里填“monitor”
 * @method void setModule(string $Module) 设置模块名，这里填“monitor”
 * @method array getNoticeIds() 获取告警通知模板id列表
 * @method void setNoticeIds(array $NoticeIds) 设置告警通知模板id列表
 * @method array getNoticeBindPolicys() 获取通知模板与策略绑定关系
 * @method void setNoticeBindPolicys(array $NoticeBindPolicys) 设置通知模板与策略绑定关系
 */
class DeleteAlarmNoticesRequest extends AbstractModel
{
    /**
     * @var string 模块名，这里填“monitor”
     */
    public $Module;

    /**
     * @var array 告警通知模板id列表
     */
    public $NoticeIds;

    /**
     * @var array 通知模板与策略绑定关系
     */
    public $NoticeBindPolicys;

    /**
     * @param string $Module 模块名，这里填“monitor”
     * @param array $NoticeIds 告警通知模板id列表
     * @param array $NoticeBindPolicys 通知模板与策略绑定关系
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("NoticeIds",$param) and $param["NoticeIds"] !== null) {
            $this->NoticeIds = $param["NoticeIds"];
        }

        if (array_key_exists("NoticeBindPolicys",$param) and $param["NoticeBindPolicys"] !== null) {
            $this->NoticeBindPolicys = [];
            foreach ($param["NoticeBindPolicys"] as $key => $value){
                $obj = new NoticeBindPolicys();
                $obj->deserialize($value);
                array_push($this->NoticeBindPolicys, $obj);
            }
        }
    }
}

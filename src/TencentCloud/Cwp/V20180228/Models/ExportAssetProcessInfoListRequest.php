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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExportAssetProcessInfoList请求参数结构体
 *
 * @method string getQuuid() 获取查询指定Quuid主机的信息
 * @method void setQuuid(string $Quuid) 设置查询指定Quuid主机的信息
 * @method array getFilters() 获取过滤条件。
<li>Name - String - 是否必填：否 - 进程名</li>
<li>User - String - 是否必填：否 - 进程用户</li>
<li>Group - String - 是否必填：否 - 进程用户组</li>
<li>Pid - uint64 - 是否必填：否 - 进程ID</li>
<li>Ppid - uint64 - 是否必填：否 - 父进程ID</li>
<li>OsType - uint64 - 是否必填：否 - windows/linux</li>
<li>Status - string - 是否必填：否 - 进程状态：
0:全部
1:R 可执行
2:S 可中断
3:不可中断</li>
<li>RunTimeStart - String - 是否必填：否 - 运行开始时间</li>
<li>RunTimeEnd - String - 是否必填：否 - 运行结束时间</li>
<li>InstallByPackage - uint64 - 是否必填：否 - 是否包安装：0否，1是</li>
 * @method void setFilters(array $Filters) 设置过滤条件。
<li>Name - String - 是否必填：否 - 进程名</li>
<li>User - String - 是否必填：否 - 进程用户</li>
<li>Group - String - 是否必填：否 - 进程用户组</li>
<li>Pid - uint64 - 是否必填：否 - 进程ID</li>
<li>Ppid - uint64 - 是否必填：否 - 父进程ID</li>
<li>OsType - uint64 - 是否必填：否 - windows/linux</li>
<li>Status - string - 是否必填：否 - 进程状态：
0:全部
1:R 可执行
2:S 可中断
3:不可中断</li>
<li>RunTimeStart - String - 是否必填：否 - 运行开始时间</li>
<li>RunTimeEnd - String - 是否必填：否 - 运行结束时间</li>
<li>InstallByPackage - uint64 - 是否必填：否 - 是否包安装：0否，1是</li>
 * @method string getOrder() 获取排序方式，asc升序 或 desc降序
 * @method void setOrder(string $Order) 设置排序方式，asc升序 或 desc降序
 * @method string getBy() 获取排序方式：[FirstTime|StartTime]
 * @method void setBy(string $By) 设置排序方式：[FirstTime|StartTime]
 */
class ExportAssetProcessInfoListRequest extends AbstractModel
{
    /**
     * @var string 查询指定Quuid主机的信息
     */
    public $Quuid;

    /**
     * @var array 过滤条件。
<li>Name - String - 是否必填：否 - 进程名</li>
<li>User - String - 是否必填：否 - 进程用户</li>
<li>Group - String - 是否必填：否 - 进程用户组</li>
<li>Pid - uint64 - 是否必填：否 - 进程ID</li>
<li>Ppid - uint64 - 是否必填：否 - 父进程ID</li>
<li>OsType - uint64 - 是否必填：否 - windows/linux</li>
<li>Status - string - 是否必填：否 - 进程状态：
0:全部
1:R 可执行
2:S 可中断
3:不可中断</li>
<li>RunTimeStart - String - 是否必填：否 - 运行开始时间</li>
<li>RunTimeEnd - String - 是否必填：否 - 运行结束时间</li>
<li>InstallByPackage - uint64 - 是否必填：否 - 是否包安装：0否，1是</li>
     */
    public $Filters;

    /**
     * @var string 排序方式，asc升序 或 desc降序
     */
    public $Order;

    /**
     * @var string 排序方式：[FirstTime|StartTime]
     */
    public $By;

    /**
     * @param string $Quuid 查询指定Quuid主机的信息
     * @param array $Filters 过滤条件。
<li>Name - String - 是否必填：否 - 进程名</li>
<li>User - String - 是否必填：否 - 进程用户</li>
<li>Group - String - 是否必填：否 - 进程用户组</li>
<li>Pid - uint64 - 是否必填：否 - 进程ID</li>
<li>Ppid - uint64 - 是否必填：否 - 父进程ID</li>
<li>OsType - uint64 - 是否必填：否 - windows/linux</li>
<li>Status - string - 是否必填：否 - 进程状态：
0:全部
1:R 可执行
2:S 可中断
3:不可中断</li>
<li>RunTimeStart - String - 是否必填：否 - 运行开始时间</li>
<li>RunTimeEnd - String - 是否必填：否 - 运行结束时间</li>
<li>InstallByPackage - uint64 - 是否必填：否 - 是否包安装：0否，1是</li>
     * @param string $Order 排序方式，asc升序 或 desc降序
     * @param string $By 排序方式：[FirstTime|StartTime]
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}

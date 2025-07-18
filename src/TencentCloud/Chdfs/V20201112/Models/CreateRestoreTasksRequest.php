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
namespace TencentCloud\Chdfs\V20201112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRestoreTasks请求参数结构体
 *
 * @method string getFileSystemId() 获取文件系统ID
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统ID
 * @method array getRestoreTasks() 获取多个回热任务，上限为10
 * @method void setRestoreTasks(array $RestoreTasks) 设置多个回热任务，上限为10
 */
class CreateRestoreTasksRequest extends AbstractModel
{
    /**
     * @var string 文件系统ID
     */
    public $FileSystemId;

    /**
     * @var array 多个回热任务，上限为10
     */
    public $RestoreTasks;

    /**
     * @param string $FileSystemId 文件系统ID
     * @param array $RestoreTasks 多个回热任务，上限为10
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("RestoreTasks",$param) and $param["RestoreTasks"] !== null) {
            $this->RestoreTasks = [];
            foreach ($param["RestoreTasks"] as $key => $value){
                $obj = new RestoreTask();
                $obj->deserialize($value);
                array_push($this->RestoreTasks, $obj);
            }
        }
    }
}

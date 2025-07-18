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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 快照操作日志
 *
 * @method string getAction() 获取操作类型
CreateCfsSnapshot：创建快照
DeleteCfsSnapshot：删除快照
CreateCfsFileSystem：创建文件系统
UpdateCfsSnapshotAttribute：更新快照
 * @method void setAction(string $Action) 设置操作类型
CreateCfsSnapshot：创建快照
DeleteCfsSnapshot：删除快照
CreateCfsFileSystem：创建文件系统
UpdateCfsSnapshotAttribute：更新快照
 * @method string getActionTime() 获取操作时间
 * @method void setActionTime(string $ActionTime) 设置操作时间
 * @method string getActionName() 获取操作名称
CreateCfsSnapshot
DeleteCfsSnapshot
CreateCfsFileSystem
UpdateCfsSnapshotAttribute
 * @method void setActionName(string $ActionName) 设置操作名称
CreateCfsSnapshot
DeleteCfsSnapshot
CreateCfsFileSystem
UpdateCfsSnapshotAttribute
 * @method string getOperator() 获取操作者uin
 * @method void setOperator(string $Operator) 设置操作者uin
 * @method integer getResult() 获取1-任务进行中；2-任务成功；3-任务失败
 * @method void setResult(integer $Result) 设置1-任务进行中；2-任务成功；3-任务失败
 */
class SnapshotOperateLog extends AbstractModel
{
    /**
     * @var string 操作类型
CreateCfsSnapshot：创建快照
DeleteCfsSnapshot：删除快照
CreateCfsFileSystem：创建文件系统
UpdateCfsSnapshotAttribute：更新快照
     */
    public $Action;

    /**
     * @var string 操作时间
     */
    public $ActionTime;

    /**
     * @var string 操作名称
CreateCfsSnapshot
DeleteCfsSnapshot
CreateCfsFileSystem
UpdateCfsSnapshotAttribute
     */
    public $ActionName;

    /**
     * @var string 操作者uin
     */
    public $Operator;

    /**
     * @var integer 1-任务进行中；2-任务成功；3-任务失败
     */
    public $Result;

    /**
     * @param string $Action 操作类型
CreateCfsSnapshot：创建快照
DeleteCfsSnapshot：删除快照
CreateCfsFileSystem：创建文件系统
UpdateCfsSnapshotAttribute：更新快照
     * @param string $ActionTime 操作时间
     * @param string $ActionName 操作名称
CreateCfsSnapshot
DeleteCfsSnapshot
CreateCfsFileSystem
UpdateCfsSnapshotAttribute
     * @param string $Operator 操作者uin
     * @param integer $Result 1-任务进行中；2-任务成功；3-任务失败
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("ActionTime",$param) and $param["ActionTime"] !== null) {
            $this->ActionTime = $param["ActionTime"];
        }

        if (array_key_exists("ActionName",$param) and $param["ActionName"] !== null) {
            $this->ActionName = $param["ActionName"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }
    }
}

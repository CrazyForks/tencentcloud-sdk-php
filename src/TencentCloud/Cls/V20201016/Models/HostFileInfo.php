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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自建k8s-节点文件配置信息
 *
 * @method string getLogPath() 获取日志文件夹
 * @method void setLogPath(string $LogPath) 设置日志文件夹
 * @method string getFilePattern() 获取日志文件名
 * @method void setFilePattern(string $FilePattern) 设置日志文件名
 * @method array getCustomLabels() 获取metadata信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomLabels(array $CustomLabels) 设置metadata信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class HostFileInfo extends AbstractModel
{
    /**
     * @var string 日志文件夹
     */
    public $LogPath;

    /**
     * @var string 日志文件名
     */
    public $FilePattern;

    /**
     * @var array metadata信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomLabels;

    /**
     * @param string $LogPath 日志文件夹
     * @param string $FilePattern 日志文件名
     * @param array $CustomLabels metadata信息
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("LogPath",$param) and $param["LogPath"] !== null) {
            $this->LogPath = $param["LogPath"];
        }

        if (array_key_exists("FilePattern",$param) and $param["FilePattern"] !== null) {
            $this->FilePattern = $param["FilePattern"];
        }

        if (array_key_exists("CustomLabels",$param) and $param["CustomLabels"] !== null) {
            $this->CustomLabels = $param["CustomLabels"];
        }
    }
}

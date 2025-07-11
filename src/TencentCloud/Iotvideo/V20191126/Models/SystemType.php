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
namespace TencentCloud\Iotvideo\V20191126\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 系统类型
 *
 * @method array getAndroid() 获取安卓系统
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAndroid(array $Android) 设置安卓系统
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLinux() 获取linux系统
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLinux(array $Linux) 设置linux系统
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLiteOs() 获取LiteOs系统
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLiteOs(array $LiteOs) 设置LiteOs系统
注意：此字段可能返回 null，表示取不到有效值。
 */
class SystemType extends AbstractModel
{
    /**
     * @var array 安卓系统
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Android;

    /**
     * @var array linux系统
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Linux;

    /**
     * @var array LiteOs系统
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LiteOs;

    /**
     * @param array $Android 安卓系统
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Linux linux系统
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LiteOs LiteOs系统
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
        if (array_key_exists("Android",$param) and $param["Android"] !== null) {
            $this->Android = [];
            foreach ($param["Android"] as $key => $value){
                $obj = new OsData();
                $obj->deserialize($value);
                array_push($this->Android, $obj);
            }
        }

        if (array_key_exists("Linux",$param) and $param["Linux"] !== null) {
            $this->Linux = [];
            foreach ($param["Linux"] as $key => $value){
                $obj = new OsData();
                $obj->deserialize($value);
                array_push($this->Linux, $obj);
            }
        }

        if (array_key_exists("LiteOs",$param) and $param["LiteOs"] !== null) {
            $this->LiteOs = [];
            foreach ($param["LiteOs"] as $key => $value){
                $obj = new OsData();
                $obj->deserialize($value);
                array_push($this->LiteOs, $obj);
            }
        }
    }
}

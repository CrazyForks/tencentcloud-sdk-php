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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频裁剪结果文件信息（2017 版）
 *
 * @method integer getErrCode() 获取错误码
<li>0：成功；</li>
<li>其他值：失败。</li>
 * @method void setErrCode(integer $ErrCode) 设置错误码
<li>0：成功；</li>
<li>其他值：失败。</li>
 * @method string getMessage() 获取错误描述。
 * @method void setMessage(string $Message) 设置错误描述。
 * @method string getFileId() 获取输出目标文件的文件 ID。
 * @method void setFileId(string $FileId) 设置输出目标文件的文件 ID。
 * @method string getFileUrl() 获取输出目标文件的文件地址。
 * @method void setFileUrl(string $FileUrl) 设置输出目标文件的文件地址。
 * @method string getFileType() 获取输出目标文件的文件类型。
 * @method void setFileType(string $FileType) 设置输出目标文件的文件类型。
 */
class ClipFileInfo2017 extends AbstractModel
{
    /**
     * @var integer 错误码
<li>0：成功；</li>
<li>其他值：失败。</li>
     */
    public $ErrCode;

    /**
     * @var string 错误描述。
     */
    public $Message;

    /**
     * @var string 输出目标文件的文件 ID。
     */
    public $FileId;

    /**
     * @var string 输出目标文件的文件地址。
     */
    public $FileUrl;

    /**
     * @var string 输出目标文件的文件类型。
     */
    public $FileType;

    /**
     * @param integer $ErrCode 错误码
<li>0：成功；</li>
<li>其他值：失败。</li>
     * @param string $Message 错误描述。
     * @param string $FileId 输出目标文件的文件 ID。
     * @param string $FileUrl 输出目标文件的文件地址。
     * @param string $FileType 输出目标文件的文件类型。
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
        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }
    }
}

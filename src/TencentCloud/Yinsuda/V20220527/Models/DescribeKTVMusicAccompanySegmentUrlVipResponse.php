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
namespace TencentCloud\Yinsuda\V20220527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeKTVMusicAccompanySegmentUrlVip返回参数结构体
 *
 * @method integer getStatus() 获取0:成功获取 1:歌曲下架 2:无权限 3: 非包月会员 4:没有对应的链接
 * @method void setStatus(integer $Status) 设置0:成功获取 1:歌曲下架 2:无权限 3: 非包月会员 4:没有对应的链接
 * @method string getUrl() 获取伴奏链接

 * @method void setUrl(string $Url) 设置伴奏链接

 * @method string getExtName() 获取伴奏类型，如mkv，mp3等

 * @method void setExtName(string $ExtName) 设置伴奏类型，如mkv，mp3等

 * @method integer getSegmentBegin() 获取高潮开始时间

 * @method void setSegmentBegin(integer $SegmentBegin) 设置高潮开始时间

 * @method integer getSegmentEnd() 获取高潮结束时间

 * @method void setSegmentEnd(integer $SegmentEnd) 设置高潮结束时间

 * @method integer getFileSize() 获取链接文件大小 (单位:字节)

 * @method void setFileSize(integer $FileSize) 设置链接文件大小 (单位:字节)

 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeKTVMusicAccompanySegmentUrlVipResponse extends AbstractModel
{
    /**
     * @var integer 0:成功获取 1:歌曲下架 2:无权限 3: 非包月会员 4:没有对应的链接
     */
    public $Status;

    /**
     * @var string 伴奏链接

     */
    public $Url;

    /**
     * @var string 伴奏类型，如mkv，mp3等

     */
    public $ExtName;

    /**
     * @var integer 高潮开始时间

     */
    public $SegmentBegin;

    /**
     * @var integer 高潮结束时间

     */
    public $SegmentEnd;

    /**
     * @var integer 链接文件大小 (单位:字节)

     */
    public $FileSize;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Status 0:成功获取 1:歌曲下架 2:无权限 3: 非包月会员 4:没有对应的链接
     * @param string $Url 伴奏链接

     * @param string $ExtName 伴奏类型，如mkv，mp3等

     * @param integer $SegmentBegin 高潮开始时间

     * @param integer $SegmentEnd 高潮结束时间

     * @param integer $FileSize 链接文件大小 (单位:字节)

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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("ExtName",$param) and $param["ExtName"] !== null) {
            $this->ExtName = $param["ExtName"];
        }

        if (array_key_exists("SegmentBegin",$param) and $param["SegmentBegin"] !== null) {
            $this->SegmentBegin = $param["SegmentBegin"];
        }

        if (array_key_exists("SegmentEnd",$param) and $param["SegmentEnd"] !== null) {
            $this->SegmentEnd = $param["SegmentEnd"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}

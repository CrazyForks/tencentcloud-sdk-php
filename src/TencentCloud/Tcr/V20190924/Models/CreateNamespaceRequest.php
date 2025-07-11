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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateNamespace请求参数结构体
 *
 * @method string getRegistryId() 获取实例ID
 * @method void setRegistryId(string $RegistryId) 设置实例ID
 * @method string getNamespaceName() 获取命名空间的名称（长度2-30个字符，只能包含小写字母、数字及分隔符("."、"_"、"-")，且不能以分隔符开头、结尾或连续）
 * @method void setNamespaceName(string $NamespaceName) 设置命名空间的名称（长度2-30个字符，只能包含小写字母、数字及分隔符("."、"_"、"-")，且不能以分隔符开头、结尾或连续）
 * @method boolean getIsPublic() 获取是否公开，true为公开，fale为私有
 * @method void setIsPublic(boolean $IsPublic) 设置是否公开，true为公开，fale为私有
 * @method TagSpecification getTagSpecification() 获取云标签描述
 * @method void setTagSpecification(TagSpecification $TagSpecification) 设置云标签描述
 * @method boolean getIsAutoScan() 获取自动扫描级别，true为自动，false为手动
 * @method void setIsAutoScan(boolean $IsAutoScan) 设置自动扫描级别，true为自动，false为手动
 * @method boolean getIsPreventVUL() 获取安全阻断级别，true为自动，false为手动
 * @method void setIsPreventVUL(boolean $IsPreventVUL) 设置安全阻断级别，true为自动，false为手动
 * @method string getSeverity() 获取阻断漏洞等级，目前仅支持low、medium、high
 * @method void setSeverity(string $Severity) 设置阻断漏洞等级，目前仅支持low、medium、high
 * @method array getCVEWhitelistItems() 获取漏洞白名单列表
 * @method void setCVEWhitelistItems(array $CVEWhitelistItems) 设置漏洞白名单列表
 */
class CreateNamespaceRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $RegistryId;

    /**
     * @var string 命名空间的名称（长度2-30个字符，只能包含小写字母、数字及分隔符("."、"_"、"-")，且不能以分隔符开头、结尾或连续）
     */
    public $NamespaceName;

    /**
     * @var boolean 是否公开，true为公开，fale为私有
     */
    public $IsPublic;

    /**
     * @var TagSpecification 云标签描述
     */
    public $TagSpecification;

    /**
     * @var boolean 自动扫描级别，true为自动，false为手动
     */
    public $IsAutoScan;

    /**
     * @var boolean 安全阻断级别，true为自动，false为手动
     */
    public $IsPreventVUL;

    /**
     * @var string 阻断漏洞等级，目前仅支持low、medium、high
     */
    public $Severity;

    /**
     * @var array 漏洞白名单列表
     */
    public $CVEWhitelistItems;

    /**
     * @param string $RegistryId 实例ID
     * @param string $NamespaceName 命名空间的名称（长度2-30个字符，只能包含小写字母、数字及分隔符("."、"_"、"-")，且不能以分隔符开头、结尾或连续）
     * @param boolean $IsPublic 是否公开，true为公开，fale为私有
     * @param TagSpecification $TagSpecification 云标签描述
     * @param boolean $IsAutoScan 自动扫描级别，true为自动，false为手动
     * @param boolean $IsPreventVUL 安全阻断级别，true为自动，false为手动
     * @param string $Severity 阻断漏洞等级，目前仅支持low、medium、high
     * @param array $CVEWhitelistItems 漏洞白名单列表
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("IsPublic",$param) and $param["IsPublic"] !== null) {
            $this->IsPublic = $param["IsPublic"];
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = new TagSpecification();
            $this->TagSpecification->deserialize($param["TagSpecification"]);
        }

        if (array_key_exists("IsAutoScan",$param) and $param["IsAutoScan"] !== null) {
            $this->IsAutoScan = $param["IsAutoScan"];
        }

        if (array_key_exists("IsPreventVUL",$param) and $param["IsPreventVUL"] !== null) {
            $this->IsPreventVUL = $param["IsPreventVUL"];
        }

        if (array_key_exists("Severity",$param) and $param["Severity"] !== null) {
            $this->Severity = $param["Severity"];
        }

        if (array_key_exists("CVEWhitelistItems",$param) and $param["CVEWhitelistItems"] !== null) {
            $this->CVEWhitelistItems = [];
            foreach ($param["CVEWhitelistItems"] as $key => $value){
                $obj = new CVEWhitelistItem();
                $obj->deserialize($value);
                array_push($this->CVEWhitelistItems, $obj);
            }
        }
    }
}

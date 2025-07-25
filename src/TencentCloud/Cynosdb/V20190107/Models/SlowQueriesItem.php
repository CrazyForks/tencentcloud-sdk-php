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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例慢查询信息
 *
 * @method integer getTimestamp() 获取执行时间戳
 * @method void setTimestamp(integer $Timestamp) 设置执行时间戳
 * @method float getQueryTime() 获取执行时长，单位秒
 * @method void setQueryTime(float $QueryTime) 设置执行时长，单位秒
 * @method string getSqlText() 获取sql语句
 * @method void setSqlText(string $SqlText) 设置sql语句
 * @method string getUserHost() 获取客户端host
 * @method void setUserHost(string $UserHost) 设置客户端host
 * @method string getUserName() 获取用户名
 * @method void setUserName(string $UserName) 设置用户名
 * @method string getDatabase() 获取数据库名
 * @method void setDatabase(string $Database) 设置数据库名
 * @method float getLockTime() 获取锁时长，单位秒
 * @method void setLockTime(float $LockTime) 设置锁时长，单位秒
 * @method integer getRowsExamined() 获取扫描行数
 * @method void setRowsExamined(integer $RowsExamined) 设置扫描行数
 * @method integer getRowsSent() 获取返回行数
 * @method void setRowsSent(integer $RowsSent) 设置返回行数
 * @method string getSqlTemplate() 获取sql模板
 * @method void setSqlTemplate(string $SqlTemplate) 设置sql模板
 * @method string getSqlMd5() 获取sql语句md5
 * @method void setSqlMd5(string $SqlMd5) 设置sql语句md5
 * @method integer getSyncReadCountRemote() 获取远程读取次数
数据库内核版本大于3.1.12
 * @method void setSyncReadCountRemote(integer $SyncReadCountRemote) 设置远程读取次数
数据库内核版本大于3.1.12
 * @method integer getSyncReadBytesRemote() 获取远程读取的字节数
数据库内核版本大于3.1.12
 * @method void setSyncReadBytesRemote(integer $SyncReadBytesRemote) 设置远程读取的字节数
数据库内核版本大于3.1.12
 * @method integer getSyncReadTimeRemote() 获取远程读取所花费的时间（微秒）
数据库内核版本大于3.1.12
 * @method void setSyncReadTimeRemote(integer $SyncReadTimeRemote) 设置远程读取所花费的时间（微秒）
数据库内核版本大于3.1.12
 * @method integer getSyncWriteCountRemote() 获取远程写入次数
数据库内核版本大于3.1.12
 * @method void setSyncWriteCountRemote(integer $SyncWriteCountRemote) 设置远程写入次数
数据库内核版本大于3.1.12
 * @method integer getSyncWriteBytesRemote() 获取远程写入的字节数。
数据库内核版本大于3.1.12
 * @method void setSyncWriteBytesRemote(integer $SyncWriteBytesRemote) 设置远程写入的字节数。
数据库内核版本大于3.1.12
 * @method integer getSyncWriteTimeRemote() 获取远程写入所花费的时间（微秒）。
数据库内核版本大于3.1.12
 * @method void setSyncWriteTimeRemote(integer $SyncWriteTimeRemote) 设置远程写入所花费的时间（微秒）。
数据库内核版本大于3.1.12
 * @method integer getTrxCommitDelay() 获取事务提交延迟（微秒）
数据库内核版本大于3.1.12
 * @method void setTrxCommitDelay(integer $TrxCommitDelay) 设置事务提交延迟（微秒）
数据库内核版本大于3.1.12
 */
class SlowQueriesItem extends AbstractModel
{
    /**
     * @var integer 执行时间戳
     */
    public $Timestamp;

    /**
     * @var float 执行时长，单位秒
     */
    public $QueryTime;

    /**
     * @var string sql语句
     */
    public $SqlText;

    /**
     * @var string 客户端host
     */
    public $UserHost;

    /**
     * @var string 用户名
     */
    public $UserName;

    /**
     * @var string 数据库名
     */
    public $Database;

    /**
     * @var float 锁时长，单位秒
     */
    public $LockTime;

    /**
     * @var integer 扫描行数
     */
    public $RowsExamined;

    /**
     * @var integer 返回行数
     */
    public $RowsSent;

    /**
     * @var string sql模板
     */
    public $SqlTemplate;

    /**
     * @var string sql语句md5
     */
    public $SqlMd5;

    /**
     * @var integer 远程读取次数
数据库内核版本大于3.1.12
     */
    public $SyncReadCountRemote;

    /**
     * @var integer 远程读取的字节数
数据库内核版本大于3.1.12
     */
    public $SyncReadBytesRemote;

    /**
     * @var integer 远程读取所花费的时间（微秒）
数据库内核版本大于3.1.12
     */
    public $SyncReadTimeRemote;

    /**
     * @var integer 远程写入次数
数据库内核版本大于3.1.12
     */
    public $SyncWriteCountRemote;

    /**
     * @var integer 远程写入的字节数。
数据库内核版本大于3.1.12
     */
    public $SyncWriteBytesRemote;

    /**
     * @var integer 远程写入所花费的时间（微秒）。
数据库内核版本大于3.1.12
     */
    public $SyncWriteTimeRemote;

    /**
     * @var integer 事务提交延迟（微秒）
数据库内核版本大于3.1.12
     */
    public $TrxCommitDelay;

    /**
     * @param integer $Timestamp 执行时间戳
     * @param float $QueryTime 执行时长，单位秒
     * @param string $SqlText sql语句
     * @param string $UserHost 客户端host
     * @param string $UserName 用户名
     * @param string $Database 数据库名
     * @param float $LockTime 锁时长，单位秒
     * @param integer $RowsExamined 扫描行数
     * @param integer $RowsSent 返回行数
     * @param string $SqlTemplate sql模板
     * @param string $SqlMd5 sql语句md5
     * @param integer $SyncReadCountRemote 远程读取次数
数据库内核版本大于3.1.12
     * @param integer $SyncReadBytesRemote 远程读取的字节数
数据库内核版本大于3.1.12
     * @param integer $SyncReadTimeRemote 远程读取所花费的时间（微秒）
数据库内核版本大于3.1.12
     * @param integer $SyncWriteCountRemote 远程写入次数
数据库内核版本大于3.1.12
     * @param integer $SyncWriteBytesRemote 远程写入的字节数。
数据库内核版本大于3.1.12
     * @param integer $SyncWriteTimeRemote 远程写入所花费的时间（微秒）。
数据库内核版本大于3.1.12
     * @param integer $TrxCommitDelay 事务提交延迟（微秒）
数据库内核版本大于3.1.12
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("QueryTime",$param) and $param["QueryTime"] !== null) {
            $this->QueryTime = $param["QueryTime"];
        }

        if (array_key_exists("SqlText",$param) and $param["SqlText"] !== null) {
            $this->SqlText = $param["SqlText"];
        }

        if (array_key_exists("UserHost",$param) and $param["UserHost"] !== null) {
            $this->UserHost = $param["UserHost"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("LockTime",$param) and $param["LockTime"] !== null) {
            $this->LockTime = $param["LockTime"];
        }

        if (array_key_exists("RowsExamined",$param) and $param["RowsExamined"] !== null) {
            $this->RowsExamined = $param["RowsExamined"];
        }

        if (array_key_exists("RowsSent",$param) and $param["RowsSent"] !== null) {
            $this->RowsSent = $param["RowsSent"];
        }

        if (array_key_exists("SqlTemplate",$param) and $param["SqlTemplate"] !== null) {
            $this->SqlTemplate = $param["SqlTemplate"];
        }

        if (array_key_exists("SqlMd5",$param) and $param["SqlMd5"] !== null) {
            $this->SqlMd5 = $param["SqlMd5"];
        }

        if (array_key_exists("SyncReadCountRemote",$param) and $param["SyncReadCountRemote"] !== null) {
            $this->SyncReadCountRemote = $param["SyncReadCountRemote"];
        }

        if (array_key_exists("SyncReadBytesRemote",$param) and $param["SyncReadBytesRemote"] !== null) {
            $this->SyncReadBytesRemote = $param["SyncReadBytesRemote"];
        }

        if (array_key_exists("SyncReadTimeRemote",$param) and $param["SyncReadTimeRemote"] !== null) {
            $this->SyncReadTimeRemote = $param["SyncReadTimeRemote"];
        }

        if (array_key_exists("SyncWriteCountRemote",$param) and $param["SyncWriteCountRemote"] !== null) {
            $this->SyncWriteCountRemote = $param["SyncWriteCountRemote"];
        }

        if (array_key_exists("SyncWriteBytesRemote",$param) and $param["SyncWriteBytesRemote"] !== null) {
            $this->SyncWriteBytesRemote = $param["SyncWriteBytesRemote"];
        }

        if (array_key_exists("SyncWriteTimeRemote",$param) and $param["SyncWriteTimeRemote"] !== null) {
            $this->SyncWriteTimeRemote = $param["SyncWriteTimeRemote"];
        }

        if (array_key_exists("TrxCommitDelay",$param) and $param["TrxCommitDelay"] !== null) {
            $this->TrxCommitDelay = $param["TrxCommitDelay"];
        }
    }
}

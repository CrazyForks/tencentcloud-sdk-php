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

namespace TencentCloud\Trtc\V20190722;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Trtc\V20190722\Models as Models;

/**
 * @method Models\ControlAIConversationResponse ControlAIConversation(Models\ControlAIConversationRequest $req) 提供服务端控制机器人的功能
 * @method Models\CreateBasicModerationResponse CreateBasicModeration(Models\CreateBasicModerationRequest $req) 接口说明：
启动终端审核功能，完成房间内的音频审核。
 * @method Models\CreateCloudModerationResponse CreateCloudModeration(Models\CreateCloudModerationRequest $req) 接口说明：
启动云端审核功能，完成房间内的音视频切片，视频截帧，或者录制音频流，送审到指定的审核商，完成审核。

您可以通过此接口实现如下目标：
* 指定审核参数（ModerationParams）来指定审核需要的详细参数。
* 指定存储参数（ModerationStorageParams）将命中的审核文件指定上传到您希望的云存储，目前支持腾讯云（对象存储COS）和第三方AWS
 * @method Models\CreateCloudRecordingResponse CreateCloudRecording(Models\CreateCloudRecordingRequest $req) 接口说明：
启动云端录制功能，完成房间内的音视频录制，并上传到指定的云存储。您可以通过此 API 接口把TRTC 房间中的每一路音视频流做单独的录制又或者多路视频画面合流混成一路。

您可以通过此接口实现如下目标：
* 指定订阅流参数（RecordParams）来指定需要录制的主播的黑名单或者白名单。
* 指定录制存储参数（StorageParams）来指定上传到您希望的云存储，目前支持腾讯云（云点播VOD、对象存储COS）和第三方AWS
* 指定合流模式下的音视频转码详细参数（MixTranscodeParams），包括视频分辨率、视频码率、视频帧率、以及声音质量等
* 指定合流模式各路画面的位置和布局或者也可以指定自动模板的方式来配置。

关键名词：
* 单流录制：分别录制房间的订阅UserId的音频和视频，录制服务会实时将录制文件上传至您指定的云存储。
* 合流录制：将房间内订阅UserId的音视频混录成一个视频文件，并将录制文件上传至您指定的云存储。（录制结束后可前往云点播控制台https://console.cloud.tencent.com/vod/media 或 对象存储COS控制台https://console.cloud.tencent.com/cos/bucket查看文件）。
 * @method Models\CreateCloudSliceTaskResponse CreateCloudSliceTask(Models\CreateCloudSliceTaskRequest $req) 接口说明：
启动云端切片功能，完成房间内的音视频切片，并上传到指定的云存储。

您可以通过此接口实现如下目标：
* 指定切片参数（SliceParams）来指定需要切片的主播的黑名单或者白名单。
* 指定存储参数（SliceStorageParams）来指定上传到您希望的云存储，目前支持腾讯云（对象存储COS）和第三方AWS
 * @method Models\CreatePictureResponse CreatePicture(Models\CreatePictureRequest $req) 如果您需要在 [云端混流转码](https://cloud.tencent.com/document/product/647/16827) 时频繁新增自定义背景图或水印，可通过此接口上传新的图片素材。无需频繁新增图片的场景，建议直接在 [控制台 > 应用管理 > 素材管理](https://cloud.tencent.com/document/product/647/50769) 中操作。
 * @method Models\DeleteBasicModerationResponse DeleteBasicModeration(Models\DeleteBasicModerationRequest $req) 成功开启审核任务后，可以使用此接口来停止任务。
 * @method Models\DeleteCloudModerationResponse DeleteCloudModeration(Models\DeleteCloudModerationRequest $req) 成功开启云端审核任务后，可以使用此接口来停止送审。
 * @method Models\DeleteCloudRecordingResponse DeleteCloudRecording(Models\DeleteCloudRecordingRequest $req) 成功开启录制后，可以使用此接口来停止录制任务。停止录制成功后不代表文件全部传输完成，如果未完成后台将会继续上传文件，成功后通过事件回调通知客户文件全部传输完成状态。
 * @method Models\DeleteCloudSliceTaskResponse DeleteCloudSliceTask(Models\DeleteCloudSliceTaskRequest $req) 成功开启切片任务后，可以使用此接口来停止任务。停止切片成功后不代表文件全部传输完成，如果未完成后台将会继续上传文件，成功后通过事件回调通知客户文件全部传输完成状态。
 * @method Models\DeletePictureResponse DeletePicture(Models\DeletePictureRequest $req) 如果您需要在 [云端混流转码](https://cloud.tencent.com/document/product/647/16827) 时频繁删除自定义背景图或水印，可通过此接口删除已上传的图片。无需频繁删除图片的场景，建议直接在 [控制台 > 应用管理 > 素材管理](https://cloud.tencent.com/document/product/647/50769) 中操作。
 * @method Models\DeleteVoicePrintResponse DeleteVoicePrint(Models\DeleteVoicePrintRequest $req) 传入声纹ID，删除之前注册的声纹信息
 * @method Models\DescribeAIConversationResponse DescribeAIConversation(Models\DescribeAIConversationRequest $req) 查询AI对话任务状态。
 * @method Models\DescribeAITranscriptionResponse DescribeAITranscription(Models\DescribeAITranscriptionRequest $req) 查询AI转录任务状态。
 * @method Models\DescribeCallDetailInfoResponse DescribeCallDetailInfo(Models\DescribeCallDetailInfoRequest $req) 查询指定时间内的用户列表及用户通话质量数据，最大可查询14天内数据。DataType 不为null，查询起止时间不超过1个小时，查询用户不超过6个，支持跨天查询。DataType为null时，查询起止时间不超过4个小时， 默认查询6个用户，同时支持每页查询100以内用户个数（PageSize不超过100）。接口用于查询质量问题，不推荐作为计费使用。（同老接口DescribeCallDetail）
**注意**：
1.该接口只用于历史数据统计或核对数据使用，实时类关键业务逻辑不能使用。
2.该接口自2024年4月1日起正式商业化，需订阅套餐解锁调用能力，提供以下两种解锁方式，可任选其一解锁：
方式一：通过订阅[包月套餐](https://cloud.tencent.com/document/product/647/85386)「尊享版」（可查近7天）和「旗舰版」（可查近14天），[前往订阅](https://buy.cloud.tencent.com/trtc?trtcversion=top)。
方式二：通过订阅[监控仪表盘](https://cloud.tencent.com/document/product/647/81331)商业套餐包「基础版」（可查近7天）和「进阶版」（可查近14天），[前往订阅](https://buy.cloud.tencent.com/trtc_monitor)。
 * @method Models\DescribeCloudModerationResponse DescribeCloudModeration(Models\DescribeCloudModerationRequest $req) 成功开启审核任务后，可以使用此接口来查询审核任务状态和订阅的黑白名单信息。仅在任务进行时有效，任务退出后查询将会返回错误。
 * @method Models\DescribeCloudRecordingResponse DescribeCloudRecording(Models\DescribeCloudRecordingRequest $req) 成功开启录制后，可以使用此接口来查询录制状态。仅在录制任务进行时有效，录制退出后查询将会返回错误。
录制文件上传到云点播VOD时，StorageFileList中不会返回录制文件信息，请订阅相关录制文件回调事件，获取录制文件信息。
 * @method Models\DescribeCloudSliceTaskResponse DescribeCloudSliceTask(Models\DescribeCloudSliceTaskRequest $req) 成功开启切片后，可以使用此接口来查询切片任务状态。仅在任务进行时有效，任务退出后查询将会返回错误。
 * @method Models\DescribeMixTranscodingUsageResponse DescribeMixTranscodingUsage(Models\DescribeMixTranscodingUsageRequest $req) 获取TRTC混流转码的用量明细。
- 查询时间小于等于1天时，返回每5分钟粒度的数据；查询时间大于1天时，返回按天汇总的数据。
- 单次查询统计区间最多不能超过31天。
- 若查询当天用量，由于统计延迟等原因，返回数据可能不够准确。
- 该接口只用于历史用量数据统计或核对数据使用，关键业务逻辑不能使用。
- 默认接口请求频率限制：5次/秒。
 * @method Models\DescribePictureResponse DescribePicture(Models\DescribePictureRequest $req) 如果您需要在 [云端混流转码](https://cloud.tencent.com/document/product/647/16827) 时频繁查找自定义背景图或水印信息，可通过此接口查找已上传的图片信息。无需频繁查找图片信息的场景，建议直接在 [控制台 > 应用管理 > 素材管理](https://cloud.tencent.com/document/product/647/50769) 中查看。
 * @method Models\DescribeRecordStatisticResponse DescribeRecordStatistic(Models\DescribeRecordStatisticRequest $req) 查询云端录制计费时长。

- 查询时间小于等于1天时，返回每5分钟粒度的数据；查询时间大于1天时，返回按天汇总的数据。
- 单次查询统计区间最多不能超过31天。
- 若查询当天用量，由于统计延迟等原因，返回数据可能不够准确。
- 日结后付费将于次日上午推送账单，建议次日上午9点以后再来查询前一天的用量。
 * @method Models\DescribeRecordingUsageResponse DescribeRecordingUsage(Models\DescribeRecordingUsageRequest $req) 获取TRTC录制的用量明细。
- 查询时间小于等于1天时，返回每5分钟粒度的数据；查询时间大于1天时，返回按天汇总的数据。
- 单次查询统计区间最多不能超过31天。
- 若查询当天用量，由于统计延迟等原因，返回数据可能不够准确。
- 该接口只用于历史用量数据统计或核对数据使用，关键业务逻辑不能使用。
- 默认接口请求频率限制：5次/秒。
 * @method Models\DescribeRelayUsageResponse DescribeRelayUsage(Models\DescribeRelayUsageRequest $req) 获取TRTC旁路转推的用量明细。
- 查询时间小于等于1天时，返回每5分钟粒度的数据；查询时间大于1天时，返回按天汇总的数据。
- 单次查询统计区间最多不能超过31天。
- 若查询当天用量，由于统计延迟等原因，返回数据可能不够准确。
- 该接口只用于历史用量数据统计或核对数据使用，关键业务逻辑不能使用。
- 默认接口请求频率限制：5次/秒。
 * @method Models\DescribeRoomInfoResponse DescribeRoomInfo(Models\DescribeRoomInfoRequest $req) 查询SdkAppId下的房间列表。默认返回10条通话，一次最多返回100条通话。最大可查询14天内的数据。（同老接口DescribeRoomInformation）
**注意**：
1.该接口只用于历史数据统计或核对数据使用，实时类关键业务逻辑不能使用。
2.该接口自2024年4月1日起正式商业化，需订阅套餐解锁调用能力，提供以下两种解锁方式，可任意其一解锁：
方式一：通过订阅[包月套餐](https://cloud.tencent.com/document/product/647/85386)「尊享版」（可查近7天）和「旗舰版」（可查近14天），[前往订阅](https://buy.cloud.tencent.com/trtc?trtcversion=top)。
方式二：通过订阅[监控仪表盘](https://cloud.tencent.com/document/product/647/81331)商业套餐包「基础版」（可查近7天）和「进阶版」（可查近14天），[前往订阅](https://buy.cloud.tencent.com/trtc_monitor)。
 * @method Models\DescribeScaleInfoResponse DescribeScaleInfo(Models\DescribeScaleInfoRequest $req) 可查询SdkAppId每天的房间数和用户数，按天统计，可查询最近14天的数据。当天未结束，数据未统计完成，无法查到当天的房间数与用户数。（同老接口DescribeHistoryScale）
 * @method Models\DescribeStreamIngestResponse DescribeStreamIngest(Models\DescribeStreamIngestRequest $req) 您可以查询输入在线媒体流任务的状态。
 * @method Models\DescribeTRTCMarketQualityDataResponse DescribeTRTCMarketQualityData(Models\DescribeTRTCMarketQualityDataRequest $req) 查询TRTC监控仪表盘-数据大盘质量指标（包括下列指标）
joinSuccessRate：加入频道成功率。
joinSuccessIn5sRate：5s内加入频道成功率。
audioFreezeRate：音频卡顿率。
videoFreezeRate：视频卡顿率。
networkDelay ：网络延迟率。
注意：
1.调用接口需开通监控仪表盘【基础版】和【进阶版】，监控仪表盘【免费版】不支持调用，监控仪表盘[版本功能和计费说明](https://cloud.tencent.com/document/product/647/81331)。
2.查询时间范围根据监控仪表盘功能版本而定，【基础版】可查近30天，【进阶版】可查近60天。
 * @method Models\DescribeTRTCMarketQualityMetricDataResponse DescribeTRTCMarketQualityMetricData(Models\DescribeTRTCMarketQualityMetricDataRequest $req) 查询TRTC监控仪表盘-数据大盘质量指标（包括下列指标）
joinSuccessRate：加入频道成功率。
joinSuccessIn5sRate：5s内加入频道成功率。
audioFreezeRate：音频卡顿率。
videoFreezeRate：视频卡顿率。
networkDelay ：网络延迟率。
注意：
1.调用接口需开通监控仪表盘【基础版】和【进阶版】，监控仪表盘【免费版】不支持调用，监控仪表盘版本功能和计费说明：https://cloud.tencent.com/document/product/647/81331。
2.查询时间范围根据监控仪表盘功能版本而定，【基础版】可查近30天，【进阶版】可查近60天。
 * @method Models\DescribeTRTCMarketScaleDataResponse DescribeTRTCMarketScaleData(Models\DescribeTRTCMarketScaleDataRequest $req) 查询TRTC监控仪表盘-数据大盘规模指标（会返回通话人数，通话房间数，峰值同时在线人数，峰值同时在线频道数）
userCount：通话人数，
roomCount：通话房间数，从有用户加入频道到所有用户离开频道计为一个通话频道。
peakCurrentChannels：峰值同时在线频道数。
peakCurrentUsers：峰值同时在线人数。
注意：
1.调用接口需开通监控仪表盘【基础版】和【进阶版】，监控仪表盘【免费版】不支持调用，监控仪表盘[版本功能和计费说明](https://cloud.tencent.com/document/product/647/81331)。
2.查询时间范围根据监控仪表盘功能版本而定，【基础版】可查近30天，【进阶版】可查近60天。
 * @method Models\DescribeTRTCMarketScaleMetricDataResponse DescribeTRTCMarketScaleMetricData(Models\DescribeTRTCMarketScaleMetricDataRequest $req) 查询TRTC监控仪表盘-数据大盘规模指标（会返回通话人数，通话房间数，峰值同时在线人数，峰值同时在线频道数）
userCount：通话人数，
roomCount：通话房间数，从有用户加入频道到所有用户离开频道计为一个通话频道。
peakCurrentChannels：峰值同时在线频道数。
peakCurrentUsers：峰值同时在线人数。
注意：
1.调用接口需开通监控仪表盘【基础版】和【进阶版】，监控仪表盘【免费版】不支持调用，监控仪表盘版本功能和计费说明：https://cloud.tencent.com/document/product/647/81331。
2.查询时间范围根据监控仪表盘功能版本而定，【基础版】可查近30天，【进阶版】可查近60天。
 * @method Models\DescribeTRTCRealTimeQualityDataResponse DescribeTRTCRealTimeQualityData(Models\DescribeTRTCRealTimeQualityDataRequest $req) 查询TRTC监控仪表盘-实时监控质量指标（会返回下列指标）
-视频卡顿率
-音频卡顿率
注意：
1.调用接口需开通监控仪表盘【基础版】和【进阶版】，监控仪表盘【免费版】不支持调用，详情参考[监控仪表盘](https://cloud.tencent.com/document/product/647/81331)。
2.查询时间范围根据监控仪表盘功能版本而定，基础版可查近3小时，进阶版可查近12小时。
 * @method Models\DescribeTRTCRealTimeQualityMetricDataResponse DescribeTRTCRealTimeQualityMetricData(Models\DescribeTRTCRealTimeQualityMetricDataRequest $req) 查询TRTC监控仪表盘-实时监控质量指标（会返回下列指标）
-视频卡顿率
-音频卡顿率
注意：
1.调用接口需开通监控仪表盘【基础版】和【进阶版】，监控仪表盘【免费版】不支持调用，监控仪表盘版本功能和计费说明：https://cloud.tencent.com/document/product/647/81331。
2.查询时间范围根据监控仪表盘功能版本而定，基础版可查近3小时，进阶版可查近12小时。
 * @method Models\DescribeTRTCRealTimeScaleDataResponse DescribeTRTCRealTimeScaleData(Models\DescribeTRTCRealTimeScaleDataRequest $req) 查询TRTC监控仪表盘-实时监控规模指标（会返回下列指标）
-userCount（在线用户数）
-roomCount（在线房间数）
注意：
1.调用接口需开通监控仪表盘【基础版】和【进阶版】，监控仪表盘【免费版】不支持调用，详情参考[监控仪表盘](https://cloud.tencent.com/document/product/647/81331)。
2.查询时间范围根据监控仪表盘功能版本而定，基础版可查近3小时，进阶版可查近12小时。
 * @method Models\DescribeTRTCRealTimeScaleMetricDataResponse DescribeTRTCRealTimeScaleMetricData(Models\DescribeTRTCRealTimeScaleMetricDataRequest $req) 查询TRTC监控仪表盘-实时监控规模指标（会返回下列指标）
-userCount（在线用户数）
-roomCount（在线房间数）
注意：
1.调用接口需开通监控仪表盘【基础版】和【进阶版】，监控仪表盘【免费版】不支持调用，监控仪表盘版本功能和计费说明：https://cloud.tencent.com/document/product/647/81331。
2.查询时间范围根据监控仪表盘功能版本而定，基础版可查近3小时，进阶版可查近12小时。
xa0
3.除此之外您也可以通过订阅TRTC包月套餐(https://buy.cloud.tencent.com/trtc)尊享版或旗舰版解锁此接口（DescribeTRTCRealTimeScaleMetricData）的调用能力，请在开通包月套餐后，请提交工单联系售后解锁调用能力https://console.cloud.tencent.com/workorder/category
 * @method Models\DescribeTrtcMcuTranscodeTimeResponse DescribeTrtcMcuTranscodeTime(Models\DescribeTrtcMcuTranscodeTimeRequest $req) 查询旁路转码计费时长。
- 查询时间小于等于1天时，返回每5分钟粒度的数据；查询时间大于1天时，返回按天汇总的数据。
- 单次查询统计区间最多不能超过31天。
- 若查询当天用量，由于统计延迟等原因，返回数据可能不够准确。
- 日结后付费将于次日上午推送账单，建议次日上午9点以后再来查询前一天的用量。
 * @method Models\DescribeTrtcRoomUsageResponse DescribeTrtcRoomUsage(Models\DescribeTrtcRoomUsageRequest $req) 查询TRTC音视频房间维度用量。
- 单次只能查询一天数据，返回查询时间段内的汇总数据；通过多次查询可以查不同天数据。若查询跨天用量，由于统计延迟等原因，返回数据可能不够准确。
- 该接口只用于历史用量数据统计或核对数据使用，关键业务逻辑不能使用，不可用于账单核对，如需对账请使用账号/应用维度用量API：DescribeTrtcUsage。
- 默认接口请求频率限制：1次/15秒。
- 数据最早可查日期为2023年4月1日0点，最大可查范围近3个月。
 * @method Models\DescribeTrtcUsageResponse DescribeTrtcUsage(Models\DescribeTrtcUsageRequest $req) 获取TRTC音视频互动的用量明细，单位:分钟。
- 查询时间小于等于1天时，返回每5分钟粒度的数据；查询时间大于1天时，返回按天汇总的数据。
- 单次查询统计区间最多不能超过31天。
- 若查询当天用量，由于统计延迟等原因，返回数据可能不够准确。
- 该接口只用于历史用量数据统计或核对数据使用，关键业务逻辑不能使用。
- 默认接口请求频率限制：5次/秒。
 * @method Models\DescribeUnusualEventResponse DescribeUnusualEvent(Models\DescribeUnusualEventRequest $req) 查询SdkAppId下任意20条异常体验事件，返回异常体验ID与可能产生异常体验的原因。可查询14天内数据，查询起止时间不超过1个小时。支持跨天查询。（同老接口DescribeAbnormalEvent）
异常体验ID映射见：https://cloud.tencent.com/document/product/647/44916
 * @method Models\DescribeUserEventResponse DescribeUserEvent(Models\DescribeUserEventRequest $req) 查询用户某次通话内的进退房，视频开关等详细事件。可查询14天内数据。（同接口DescribeDetailEvent）
 * @method Models\DescribeUserInfoResponse DescribeUserInfo(Models\DescribeUserInfoRequest $req) 查询指定时间内的用户列表，最大可查询14天内数据，查询起止时间不超过4小时。默认每页查询6个用户，支持每页最大查询100个用户PageSize不超过100）。（同老接口DescribeUserInformation）
**注意**：
1.该接口只用于历史数据统计或核对数据使用，实时类关键业务逻辑不能使用。
2.该接口自2024年4月1日起正式商业化，需订阅套餐解锁调用能力，提供以下两种解锁方式，可任选其一解锁：
方式一：通过订阅[包月套餐](https://cloud.tencent.com/document/product/647/85386)「尊享版」（可查近7天）和「旗舰版」（可查近14天），[前往订阅](https://buy.cloud.tencent.com/trtc?trtcversion=top)。
方式二：通过订阅[监控仪表盘](https://cloud.tencent.com/document/product/647/81331)商业套餐包「基础版」（可查近7天）和「进阶版」（可查近14天），[前往订阅](https://buy.cloud.tencent.com/trtc_monitor)。
 * @method Models\DescribeVoicePrintResponse DescribeVoicePrint(Models\DescribeVoicePrintRequest $req) 查询先前注册的声纹信息
 * @method Models\DescribeWebRecordResponse DescribeWebRecord(Models\DescribeWebRecordRequest $req) 查询页面录制任务
 * @method Models\DismissRoomResponse DismissRoom(Models\DismissRoomRequest $req) 接口说明：把房间所有用户从房间移出，解散房间。支持所有平台，Android、iOS、Windows 和 macOS 需升级到 TRTC SDK 6.6及以上版本。
 * @method Models\DismissRoomByStrRoomIdResponse DismissRoomByStrRoomId(Models\DismissRoomByStrRoomIdRequest $req) 接口说明：把房间所有用户从房间移出，解散房间。支持所有平台，Android、iOS、Windows 和 macOS 需升级到 TRTC SDK 6.6及以上版本。
 * @method Models\ModifyCloudModerationResponse ModifyCloudModeration(Models\ModifyCloudModerationRequest $req) 成功开启云端审核任务后，可以使用此接口来更新订阅黑白名单。
 * @method Models\ModifyCloudRecordingResponse ModifyCloudRecording(Models\ModifyCloudRecordingRequest $req) 成功开启录制后，可以使用此接口来更新录制任务。仅在录制任务进行时有效，录制退出后更新将会返回错误。更新操作是全量覆盖，并不是增量更新的模式，也就是说每次更新都需要携带全量的信息。
 * @method Models\ModifyCloudSliceTaskResponse ModifyCloudSliceTask(Models\ModifyCloudSliceTaskRequest $req) 成功开启切片任务后，可以使用此接口来更新任务。用于更新指定订阅流白名单或者黑名单。
 * @method Models\ModifyPictureResponse ModifyPicture(Models\ModifyPictureRequest $req) 如果您需要在 [云端混流转码](https://cloud.tencent.com/document/product/647/16827) 时频繁修改自定义背景图或水印素材，可通过此接口修改已上传的图片。无需频繁修改图片素材的场景，建议直接在 [控制台 > 应用管理 > 素材管理](https://cloud.tencent.com/document/product/647/50769) 中操作。
 * @method Models\RegisterVoicePrintResponse RegisterVoicePrint(Models\RegisterVoicePrintRequest $req) 传入音频base64串，注册声纹信息，返回声纹ID
 * @method Models\RemoveUserResponse RemoveUser(Models\RemoveUserRequest $req) 接口说明：将用户从房间移出，适用于主播/房主/管理员踢人等场景。支持所有平台，Android、iOS、Windows 和 macOS 需升级到 TRTC SDK 6.6及以上版本。
 * @method Models\RemoveUserByStrRoomIdResponse RemoveUserByStrRoomId(Models\RemoveUserByStrRoomIdRequest $req) 接口说明：将用户从房间移出，适用于主播/房主/管理员踢人等场景。支持所有平台，Android、iOS、Windows 和 macOS 需升级到 TRTC SDK 6.6及以上版本。
 * @method Models\StartAIConversationResponse StartAIConversation(Models\StartAIConversationRequest $req) 启动AI对话任务，AI通道机器人进入TRTC房间，与房间内指定的成员进行AI对话，适用于智能客服，AI口语教师等场景

TRTC AI对话功能内置语音转文本能力，同时提供通道服务，即客户可灵活指定第三方AI模型（LLM）服务和文本转音频（TTS)服务，更多[功能说明](https://cloud.tencent.com/document/product/647/108901)。
 * @method Models\StartAITranscriptionResponse StartAITranscription(Models\StartAITranscriptionRequest $req) 启动转录机器人，后台会通过机器人拉流进行实时进行语音识别并下发字幕和转录消息。
转录机器人支持两种拉流方式，通过TranscriptionMode字段控制：
- 拉取全房间的流。
- 拉取特定用户的流。

服务端通过TRTC的自定义消息实时下发字幕以及转录消息，CmdId固定是1。客户端只需监听自定义消息的回调即可，比如[c++回调](https://cloud.tencent.com/document/product/647/79637#4cd82f4edb24992a15a25187089e1565)。其他客户端比如安卓、Web等同样可在该链接处找到。


**注意：**
TranscriptionMode为0时，需要保证一个房间内只发起一个任务，如果发起多个任务，则机器人之间会相互订阅，除非主动停止任务，否则只有10小时后任务才会超时退出，这种情况下建议填写SessionId，保证后续重复发起的任务失败。
 * @method Models\StartMCUMixTranscodeResponse StartMCUMixTranscode(Models\StartMCUMixTranscodeRequest $req) 接口说明：启动云端混流，并指定混流画面中各路画面的布局位置。

TRTC 的一个房间中可能会同时存在多路音视频流，您可以通过此 API 接口，通知腾讯云服务端将多路视频画面合成一路，并指定每一路画面的位置，同时将多路声音进行混音，最终形成一路音视频流，以便用于录制和直播观看。房间销毁后混流自动结束。

您可以通过此接口实现如下目标：
- 设置最终直播流的画质和音质，包括视频分辨率、视频码率、视频帧率、以及声音质量等。
- 设置各路画面的位置和布局，您只需要在启动时设置一次，排版引擎会自动完成后续的画面排布。
- 设置录制文件名，用于二次回放。
- 设置 CDN 直播流 ID，用于在 CDN 进行直播观看。

目前已经支持了如下几种布局模板：
- 悬浮模板：第一个进入房间的用户的视频画面会铺满整个屏幕，其他用户的视频画面从左下角依次水平排列，显示为小画面，最多4行，每行4个，小画面悬浮于大画面之上。最多支持1个大画面和15个小画面，如果用户只发送音频，仍然会占用画面位置。
- 九宫格模板：所有用户的视频画面大小一致，平分整个屏幕，人数越多，每个画面的尺寸越小。最多支持16个画面，如果用户只发送音频，仍然会占用画面位置。
- 屏幕分享模板：适合视频会议和在线教育场景的布局，屏幕分享（或者主讲的摄像头）始终占据屏幕左侧的大画面位置，其他用户依次垂直排列于右侧，最多两列，每列最多8个小画面。最多支持1个大画面和15个小画面。若上行分辨率宽高比与画面输出宽高比不一致时，左侧大画面为了保持内容的完整性采用缩放方式处理，右侧小画面采用裁剪方式处理。
- 画中画模板：适用于混合大小两路视频画面和其他用户混音，或者混合一路大画面和其他用户混音的场景。小画面悬浮于大画面之上，可以指定大小画面的用户以及小画面的显示位置，最多支持2个画面。
- 自定义模板：适用于在混流中指定用户的画面位置，或者预设视频画面位置的场景。当预设位置指定用户时，排版引擎会为该用户预留位置；当预设位置未指定用户时，排版引擎会根据进房间顺序自动填充。预设位置填满时，不再混合其他用户的画面和声音。自定义模板启用占位图功能时（LayoutParams中的PlaceHolderMode设置成1），在预设位置的用户没有上行视频时可显示对应的占位图（PlaceImageId）。

注意：
1、**混流转码为收费功能，调用接口将产生云端混流转码费用，详见[云端混流转码计费说明](https://cloud.tencent.com/document/product/647/49446)。**
2、2020年1月9号及以后创建的应用才能直接调用此接口。2020年1月9日之前创建的应用默认使用云直播的云端混流，如需切换至MCU混流，请[提交工单](https://console.cloud.tencent.com/workorder/category)寻求帮助。
3、客户端混流和服务端混流不能混用。
 * @method Models\StartMCUMixTranscodeByStrRoomIdResponse StartMCUMixTranscodeByStrRoomId(Models\StartMCUMixTranscodeByStrRoomIdRequest $req) 接口说明：启动云端混流，并指定混流画面中各路画面的布局位置。

TRTC 的一个房间中可能会同时存在多路音视频流，您可以通过此 API 接口，通知腾讯云服务端将多路视频画面合成一路，并指定每一路画面的位置，同时将多路声音进行混音，最终形成一路音视频流，以便用于录制和直播观看。

您可以通过此接口实现如下目标：
- 设置最终直播流的画质和音质，包括视频分辨率、视频码率、视频帧率、以及声音质量等。
- 设置各路画面的位置和布局，您只需要在启动时设置一次，排版引擎会自动完成后续的画面排布。
- 设置录制文件名，用于二次回放。
- 设置 CDN 直播流 ID，用于在 CDN 进行直播观看。

目前已经支持了如下几种布局模板：
- 悬浮模板：第一个进入房间的用户的视频画面会铺满整个屏幕，其他用户的视频画面从左下角依次水平排列，显示为小画面，最多4行，每行4个，小画面悬浮于大画面之上。最多支持1个大画面和15个小画面，如果用户只发送音频，仍然会占用画面位置。
- 九宫格模板：所有用户的视频画面大小一致，平分整个屏幕，人数越多，每个画面的尺寸越小。最多支持16个画面，如果用户只发送音频，仍然会占用画面位置。
- 屏幕分享模板：适合视频会议和在线教育场景的布局，屏幕分享（或者主讲的摄像头）始终占据屏幕左侧的大画面位置，其他用户依次垂直排列于右侧，最多两列，每列最多8个小画面。最多支持1个大画面和15个小画面。若上行分辨率宽高比与画面输出宽高比不一致时，左侧大画面为了保持内容的完整性采用缩放方式处理，右侧小画面采用裁剪方式处理。
- 画中画模板：适用于混合大小两路视频画面和其他用户混音，或者混合一路大画面和其他用户混音的场景。小画面悬浮于大画面之上，可以指定大小画面的用户以及小画面的显示位置。
- 自定义模板：适用于在混流中指定用户的画面位置，或者预设视频画面位置的场景。当预设位置指定用户时，排版引擎会为该用户预留位置；当预设位置未指定用户时，排版引擎会根据进房间顺序自动填充。预设位置填满时，不再混合其他用户的画面和声音。自定义模板启用占位图功能时（LayoutParams中的PlaceHolderMode设置成1），在预设位置的用户没有上行视频时可显示对应的占位图（PlaceImageId）。

注意：
1、**混流转码为收费功能，调用接口将产生云端混流转码费用，详见[云端混流转码计费说明](https://cloud.tencent.com/document/product/647/49446)。**
2、2020年1月9号及以后创建的应用才能直接调用此接口。2020年1月9日之前创建的应用默认使用云直播的云端混流，如需切换至MCU混流，请[提交工单](https://console.cloud.tencent.com/workorder/category)寻求帮助。
3、客户端混流和服务端混流不能混用。
 * @method Models\StartPublishCdnStreamResponse StartPublishCdnStream(Models\StartPublishCdnStreamRequest $req) 接口说明：  
启动一个混流转推任务，将  TRTC 房间的多路音视频流混成一路音视频流，编码后推到直播 CDN 或者回推到 TRTC 房间。也支持不转码直接转推 TRTC 房间的单路流。启动成功后，会返回一个 SdkAppid 维度唯一的任务 Id（TaskId）。您需要保存该 TaskId，后续需要依赖此 TaskId 更新和结束任务。可以参考文档： [功能说明](https://cloud.tencent.com/document/product/647/84721#b9a855f4-e38c-4616-9b07-fc44e0e8282a) 和 [常见问题](https://cloud.tencent.com/document/product/647/62620)

注意：
您可以在控制台开通旁路转推回调功能，对转推 CDN 状态的事件进行监控，回调请参考文档：[旁路转推回调说明](https://cloud.tencent.com/document/product/647/88552)  
您发起混流转推任务时，可能会产生如下费用：  
MCU 混流转码费用，请参考文档：[云端混流转码计费说明](https://cloud.tencent.com/document/product/647/49446)  
转推非腾讯云 CDN 费用，请参考文档：[云端转推计费说明](https://cloud.tencent.com/document/product/647/82155)
 * @method Models\StartStreamIngestResponse StartStreamIngest(Models\StartStreamIngestRequest $req) 将一个在线媒体流推到TRTC房间，更多功能说明见[输入媒体流进房](https://cloud.tencent.com/document/product/647/102957#50940aad-d90f-4473-9f46-d5dd46917653)。
使用输入在线媒体流功能需先订阅 [尊享版或旗舰版套餐包](https://cloud.tencent.com/document/product/647/85386) 解锁能力位。
 * @method Models\StartWebRecordResponse StartWebRecord(Models\StartWebRecordRequest $req) 通过此接口可以发起 WEB 页面录制任务，在接口参数中指定录制 URL，录制分辨率，录制结果存储等参数。
因为参数或API逻辑问题会立即返回结果。而因为页面问题，如页面无法访问，会在回调中返回结果，请关注。
 * @method Models\StopAIConversationResponse StopAIConversation(Models\StopAIConversationRequest $req) 停止AI对话任务
 * @method Models\StopAITranscriptionResponse StopAITranscription(Models\StopAITranscriptionRequest $req) 停止AI转录任务。
 * @method Models\StopMCUMixTranscodeResponse StopMCUMixTranscode(Models\StopMCUMixTranscodeRequest $req) 接口说明：结束云端混流
 * @method Models\StopMCUMixTranscodeByStrRoomIdResponse StopMCUMixTranscodeByStrRoomId(Models\StopMCUMixTranscodeByStrRoomIdRequest $req) 接口说明：结束云端混流
 * @method Models\StopPublishCdnStreamResponse StopPublishCdnStream(Models\StopPublishCdnStreamRequest $req) 接口说明：
停止指定的混流转推任务。如果没有调用 Stop 接口停止任务，所有参与混流转推的主播离开 TRTC 房间超过 AgentParams.MaxIdleTime 设置的时间后，任务也会自动停止。
 * @method Models\StopStreamIngestResponse StopStreamIngest(Models\StopStreamIngestRequest $req) 停止一个输入在线媒体流任务。
 * @method Models\StopWebRecordResponse StopWebRecord(Models\StopWebRecordRequest $req) 停止页面录制任务
 * @method Models\UpdateAIConversationResponse UpdateAIConversation(Models\UpdateAIConversationRequest $req) 更新AIConversation参数
 * @method Models\UpdatePublishCdnStreamResponse UpdatePublishCdnStream(Models\UpdatePublishCdnStreamRequest $req) 接口说明：
成功发起混流转推后，可以使用此接口来更新任务。仅在任务进行时有效，任务退出后更新将会返回错误。更新操作为增量更新模式。
注意：为了保障推流的稳定性，更新不支持任务在纯音频、音视频、纯视频之间进行切换。
 * @method Models\UpdateStreamIngestResponse UpdateStreamIngest(Models\UpdateStreamIngestRequest $req) 更新输入在线媒体流任务的StreamUrl
 * @method Models\UpdateVoicePrintResponse UpdateVoicePrint(Models\UpdateVoicePrintRequest $req) 传入声纹ID以及对应音频信息，更新对应声纹信息
 */

class TrtcClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "trtc.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "trtc";

    /**
     * @var string
     */
    protected $version = "2019-07-22";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("trtc")."\\"."V20190722\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}

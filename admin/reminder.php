<?php

require_once(VIEW_DIR . "/ViewAdmin.php");
require_once(MODEL_DIR . '/AdminJob.php');
require_once(MODEL_DIR . '/AdminJobmemo.php');


$jobId = (string) filter_input(INPUT_GET, 'jid', FILTER_DEFAULT);

//案件有効性確認
$job = new Model_AdminJob();

$jobInfo = $job->getJob($jobId);

if (!$jobInfo) {
    //エラー
    print 'error';
}
$adminJobMemo = new Model_AdminJobmemo();
if ($adminJobMemo->checkMemoExist($jobId)) {
    //レコードが存在する場合
    $remindInfo = $adminJobMemo->getRemindInfo($jobId);

    for ($i = 1; $i <= 5; $i++) {
        $remindInfo['userSelected'][$i] = '';
    }
    $remindInfo['userSelected'][$remindInfo['user']] = ' selected';

    $remindInfo['remindDate'] = $remindInfo['notification_date'];
    $remindInfo['remindMessage'] = $remindInfo['notification'];
    $remindInfo['remindMemo'] = $remindInfo['memo'];
} else {
    //レコードが存在しない場合

    $remindInfo['userSelected'][1] = 'selected';
    $remindInfo['userSelected'][2] = '';
    $remindInfo['userSelected'][3] = '';
    $remindInfo['userSelected'][4] = '';
    $remindInfo['userSelected'][5] = '';

    $remindInfo['remindDate'] = '';
    $remindInfo['remindMessage'] = '';
    $remindInfo['remindMemo'] = '';
}
//表示
$view = new ViewAdmin();
$view->displayReminderInfo($jobInfo, $remindInfo);

<?php

/*
 * job_admin_image.php
 * 求人情報画像設定
 * 
 * @author     Kenji Ueno <ueno@crew-m.com>
 * @version    1.0
 * */

mb_language("japanese");
mb_internal_encoding("UTF-8");

session_start();

require_once(LIB_DIR . '/config/admin_conf.php');
require_once(VIEW_DIR . "/ViewAdmin.php");
require_once(UTIL_DIR . '/AdminDataConvertUtil.php');

require_once(MODEL_DIR . '/AdminJob.php');
$mode = (string) filter_input(INPUT_POST, 'mode', FILTER_DEFAULT);

if ($mode == '') {
    $mode = (string) filter_input(INPUT_GET, 'mode', FILTER_DEFAULT);
    $jobId = (string) filter_input(INPUT_GET, 'jid', FILTER_DEFAULT);
} else {
    $jobId = (string) filter_input(INPUT_POST, 'jid', FILTER_DEFAULT);
}

$view = new ViewAdmin();

//コメント取得
$job = new Model_AdminJob();
$jobInfo = $job->getJob($jobId);
if ($jobInfo == false) {
    //不正アクセス対策
    $view->displayJobEditError();
}

//画像取得
$imgFile = array();
for ($i = 0; $i <= 4; $i++) {
    $imgFile[$i] = AdminDataConvertUtil::checkImageExistForWeb($jobId, $i);
}

$view->displayImgRegist($jobId, $jobInfo, $imgFile);

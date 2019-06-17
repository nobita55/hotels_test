<?php

/*
 * ajax_urgent_admin.php
 * 急募管理 for Ajax
 * 
 * @author     Kenji Ueno <ueno@crew-m.com>
 * @version    1.0
 * */

mb_language("japanese");
mb_internal_encoding("UTF-8");

require_once(CONTROLLER_DIR . '/AdminAjaxRecommendController.php');

$mode = (string) filter_input(INPUT_POST, 'mode');
$ajaxRecommendCont = new AdminAjaxRecommendController();

switch ($mode) {
    case 'getJobs':
        //登録案件取得
        $searchJobId = (string) filter_input(INPUT_POST, 'searchJobId');
        $searchRecJobId = (string) filter_input(INPUT_POST, 'searchRecJobId');
        $centralManager = (int) filter_input(INPUT_POST, 'centralManager', FILTER_VALIDATE_INT);

        $ajaxRecommendCont->getJobs($searchJobId, $searchRecJobId,$centralManager);
        break;

    case 'getRecommends':
        //急募案件取得
        $ajaxRecommendCont->getRecommends();
        break;

    case 'getJobForNewRecommend':
        //案件詳細取得
        $jobId = (string) filter_input(INPUT_POST, 'jobId');
        $ajaxRecommendCont->getJob($jobId);
        break;

    case 'saveRecommend':
        //案件保存
        $jobId = (string) filter_input(INPUT_POST, 'jobid');
        $catchCopy = (string) filter_input(INPUT_POST, 'catchcopy');
        $sortRank = (int) filter_input(INPUT_POST, 'sort_rank', FILTER_VALIDATE_INT);
        $openFlag = (boolean) filter_input(INPUT_POST, 'open_flag', FILTER_VALIDATE_BOOLEAN);
        $regData = array(
            'jobid' => $jobId,
            'catchcopy' => $catchCopy,
            'open_flag' => $openFlag,
            'sort_rank' => $sortRank
        );
        $ajaxRecommendCont->saveRecommend($regData);
        break;
    case 'getRecommend':
        $jobId = (string) filter_input(INPUT_POST, 'jobId');
        $ajaxRecommendCont->getRecommend($jobId);
        break;
    case 'deleteRecommend';
        $jobId = (string) filter_input(INPUT_POST, 'jobId');
        $ajaxRecommendCont->deleteRecommend($jobId);
        break;
}
exit;

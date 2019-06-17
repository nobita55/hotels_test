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

require_once(CONTROLLER_DIR . '/AdminAjaxUrgentController.php');

$mode = (string) filter_input(INPUT_POST, 'mode');
$ajaxUrgentCont = new AdminAjaxUrgentController();

switch ($mode) {
    case 'getJobs':
        //登録案件取得
        $searchJobId = (string) filter_input(INPUT_POST, 'searchJobId');
        $searchRecJobId = (string) filter_input(INPUT_POST, 'searchRecJobId');
        $ajaxUrgentCont->getJobs($searchJobId, $searchRecJobId);
        break;

    case 'getUrgents':
        //急募案件取得
        $ajaxUrgentCont->getUrgents();
        break;

    case 'getJobForNewUrgent':
        //案件詳細取得
        $jobId = (string) filter_input(INPUT_POST, 'jobId');
        $ajaxUrgentCont->getJob($jobId);
        break;

    case 'saveUrgent':
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
        $ajaxUrgentCont->saveUrgent($regData);
        break;
    case 'getUrgent':
        $jobId = (string) filter_input(INPUT_POST, 'jobId');
        $ajaxUrgentCont->getUrgent($jobId);
        break;
    case 'deleteUrgent';
        $jobId = (string) filter_input(INPUT_POST, 'jobId');
        $ajaxUrgentCont->deleteUrgent($jobId);
        break;
}
exit;

<?php

/*
 * ajax_edit_job.php
 * 求人管理 for Ajax
 * 
 * @author     Kenji Ueno <ueno@crew-m.com>
 * @version    1.0
 * */

mb_language("japanese");
mb_internal_encoding("UTF-8");

require_once(CONTROLLER_DIR . '/AdminAjaxJobController.php');

$mode = (string) filter_input(INPUT_POST, 'mode');
$ajaxjobCont = new AdminAjaxJobController();
switch ($mode) {
    case 'openJob';
        $jobId = (string) filter_input(INPUT_POST, 'jobId');
        $ajaxjobCont->openJob($jobId);
        break;
    case 'closeJob';
        $jobId = (string) filter_input(INPUT_POST, 'jobId');
        $ajaxjobCont->closeJob($jobId);
        break;
    case 'getMemo';
        $jobId = (string) filter_input(INPUT_POST, 'jobId');
        $ajaxjobCont->getMemo($jobId);
        break;
    case 'updateMemo';
        $jobId = (string) filter_input(INPUT_POST, 'jobId');
        $memo = (string) filter_input(INPUT_POST, 'memo');
        $ajaxjobCont->updateMemo($jobId, $memo);
        break;
}
exit;

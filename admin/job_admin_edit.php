<?php

/*
 * job_edit.php
 * 求人情報入力
 * 
 * @author     Kenji Ueno <ueno@crew-m.com>
 * @version    1.0
 * */

mb_language("japanese");
mb_internal_encoding("UTF-8");

session_start();


require_once(LIB_DIR . '/config/admin_conf.php');
require_once(CONTROLLER_DIR . '/AdminJobEditController.php');



$mode = (string) filter_input(INPUT_POST, 'mode', FILTER_DEFAULT);
if ($mode == '') {
    $mode = (string) filter_input(INPUT_GET, 'mode', FILTER_DEFAULT);
}
$jobEditCon = new AdminJobEditController();

switch ($mode) {
    case 'new';
        $jobEditCon->inputNew();
        break;
    case 'edit';
        $jobId = (string) filter_input(INPUT_GET, 'jid', FILTER_DEFAULT);
        $jobEditCon->inputEdit($jobId);
        break;
    case 'copy';
        $jobId = (string) filter_input(INPUT_GET, 'jid', FILTER_DEFAULT);
        $jobEditCon->inputCopy($jobId);
        break;
    case 'check_new';
        $jobEditCon->checkNew();
        break;
    case 'check_edit';
        $jobId = (string) filter_input(INPUT_POST, 'jid', FILTER_DEFAULT);
        $submit = (string) filter_input(INPUT_POST, 'submit', FILTER_DEFAULT);
        if ($submit == '削除') {
            $jobEditCon->delete($jobId);
        }
        $jobEditCon->checkEdit($jobId);
        break;
    case 'confirm_new';
        $submit = (string) filter_input(INPUT_POST, 'submit', FILTER_DEFAULT);
        if ($submit == '戻る') {
            $jobEditCon->changeNew();
        }
        $jobEditCon->confirmNew();
        break;
    case 'confirm_edit';
        $jobId = (string) filter_input(INPUT_POST, 'jid', FILTER_DEFAULT);
        $submit = (string) filter_input(INPUT_POST, 'submit', FILTER_DEFAULT);

        if ($submit == '戻る') {
            $jobEditCon->changeEdit($jobId);
        }
        $jobEditCon->confirmEdit($jobId);
        break;
}
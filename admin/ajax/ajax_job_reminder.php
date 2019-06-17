<?php

/*
 * ajax_job_reminder.php
 * 募集原稿メモリマインダー機能 for Ajax
 * 
 * @author     Kenji Ueno <ueno@crew-m.com>
 * @version    1.0
 * */

mb_language("japanese");
mb_internal_encoding("UTF-8");

require_once(LIB_DIR . '/config/admin_conf.php');
require_once(CONTROLLER_DIR . '/AdminAjaxJobReminderController.php');

$ajaxJobReminderCont = new AdminAjaxJobReminderController();

$mode = (string) filter_input(INPUT_POST, 'mode');


if ($mode == 'saveReminder') {
    $jobId = (string) filter_input(INPUT_POST, 'jobId');
    $user = (string) filter_input(INPUT_POST, 'user');
    $remindDate = (string) filter_input(INPUT_POST, 'remindDate');
    $remindMessage = (string) filter_input(INPUT_POST, 'remindMessage');
    $remindMemo = (string) filter_input(INPUT_POST, 'remindMemo');

    $ajaxJobReminderCont->saveReminder($jobId,$user,$remindDate,$remindMessage,$remindMemo);
}
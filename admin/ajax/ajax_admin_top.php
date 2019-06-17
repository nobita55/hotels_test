<?php

/*
 * ajax_admin_top.php
 * 管理ツールTOP for Ajax
 * 
 * @author     Kenji Ueno <ueno@crew-m.com>
 * @version    1.0
 * */

mb_language("japanese");
mb_internal_encoding("UTF-8");
require_once(LIB_DIR . '/config/admin_conf.php');

require_once(MODEL_DIR . '/AdminJob.php');
require_once(MODEL_DIR . '/AdminFreeMemo.php');

//error_log('OK1');

$mode = (string) filter_input(INPUT_POST, 'mode');
switch ($mode) {
    case 'getInitParam':

        $job = new Model_AdminJob();

        $freeMemoModel = new Model_AdminFreeMemo();

        $jobNum = $job->countActiveNum();
        $jobNumPresentMonth = $job->countActiveNumPresentMonth();

        $freeMemo = $freeMemoModel->getFreeMemo(1);
        $freeMemoText = $freeMemo['memo'];

        $data = array();

        $data['jobNum'] = $jobNum;
        $data['jobNumPresentMonth'] = $jobNumPresentMonth;
        $data['freeMemoText'] = $freeMemoText;
        
        outPutJson($data);
        break;

    case 'saveFreeText':
        $freeText = (string) filter_input(INPUT_POST, 'freeText');
        $freeMemoModel = new Model_AdminFreeMemo();
        $result = $freeMemoModel->updateFreeMemo(1, $freeText);

        if ($result) {
            outPutJsonWithOkCode();
        } else {
            outputErrorForAjax('登録できませんでした');
        }
        break;
}

function outPutJson($data) {
    header('Content-Type: application/json');
    echo json_encode($data);
    exit;
}

//処理完了
function outPutJsonWithOkCode($data = null) {
    $status = array();
    $status['statusCode'] = 1;
    $status['result'] = $data;
    header('Content-Type: application/json');
    echo json_encode($status);
    exit;
}

//入力エラー出力
function outputErrorForAjax($errMessages) {
    $status = array();
    $status['statusCode'] = 99;
    $status['errorMessages'] = $errMessages;
    header('Content-Type: application/json');
    echo json_encode($status);
    exit;
}

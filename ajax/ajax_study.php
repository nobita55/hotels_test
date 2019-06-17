<?php

/**
 * ajx_study.php
 * 
 * 
 * @author     Kenji Ueno <ueno@crew-m.com>
 * @version    1.0
 * */
require_once(MODEL_DIR . '/Job.php');
require_once(UTIL_DIR . '/DataConvertUtil.php');

$mode = (string) filter_input(INPUT_POST, 'mode');
$tab = (string) filter_input(INPUT_POST, 'tab');
$jobIds = filter_input(INPUT_POST, 'jobIds', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);

switch ($mode) {
    case 'getJobs':
        $jobList = array();
        $job = new Model_Job();

        $jobIdsSort = array();

        foreach ($jobIds as $key => $val) {
            $rw = array('年', '月');
            $val = str_replace($rw, '/', $val);
            $val = str_replace('日', '', $val);
            $val = str_replace(' JST', '', $val);

            //Error::errorLogOut('案件番号無効');

            $jobIdsSort[$key] = new DateTime($val);
        }
        arsort($jobIdsSort);

        foreach ($jobIdsSort as $key => $val) {
            $result = $job->getJob($key, 'active');
            if (!$result) {
                $result['jobStatus'] = false;
            } else {
                $result['jobStatus'] = true;
            }
            $result = DataConvertUtil::dataEditSingleJobCommon($result);
            array_push($jobList, $result);
        }
        outPutJsonWithOkCode($jobList);
        break;
}

//処理完
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

//Json出力
function outPutJson($data) {
    header('Content-Type: application/json');
    echo json_encode($data);
    exit;
}

<?php

/*
 * ajax_search_job.php
 * 案件検索 for Ajax
 * 
 * @author     Kenji Ueno <ueno@crew-m.com>
 * @version    1.0
 * */

mb_language("japanese");
mb_internal_encoding("UTF-8");

require_once(CONTROLLER_DIR . '/AdminAjaxSearchJobController.php');

$mode = (string) filter_input(INPUT_POST, 'mode');
$ajaxSearchJobCont = new AdminAjaxSearchJobController();

switch ($mode) {
    case 'loadAllJobs';
        $status = (int) filter_input(INPUT_POST, 'statusFlag', FILTER_VALIDATE_INT);
        $delete = (int) filter_input(INPUT_POST, 'deleteFlag', FILTER_VALIDATE_INT);

        $ajaxSearchJobCont->loadAllJobs($status, $delete);
        break;
    case 'searchJobs';
        $status = (int) filter_input(INPUT_POST, 'statusFlag', FILTER_VALIDATE_INT);
        $delete = (int) filter_input(INPUT_POST, 'deleteFlag', FILTER_VALIDATE_INT);

        $searchParams = array();
        $searchParams['prefecture'] = filter_input(INPUT_POST, 'prefecture', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
        $searchParams['employmentStatus'] = filter_input(INPUT_POST, 'employmentStatus', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
        $searchParams['facilityCategory'] = filter_input(INPUT_POST, 'facilityCategory', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
        $searchParams['workingTerm'] = filter_input(INPUT_POST, 'workingTerm', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
        $searchParams['dormPoint'] = filter_input(INPUT_POST, 'dormPoint', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
        $searchParams['jobCategory'] = filter_input(INPUT_POST, 'jobCategory', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
        $searchParams['feature'] = filter_input(INPUT_POST, 'feature', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);

        $searchParams['facilityCategoryAndOr'] = (int) filter_input(INPUT_POST, 'fcAndOr', FILTER_VALIDATE_INT);
        $searchParams['workingTermAndOr'] = (int) filter_input(INPUT_POST, 'wtAndOr', FILTER_VALIDATE_INT);
        $searchParams['dormAndOr'] = (int) filter_input(INPUT_POST, 'dpAndOr', FILTER_VALIDATE_INT);
        $searchParams['jobCategoryAndOr'] = (int) filter_input(INPUT_POST, 'jcAndOr', FILTER_VALIDATE_INT);
        $searchParams['featureAndOr'] = (int) filter_input(INPUT_POST, 'ftAndOr', FILTER_VALIDATE_INT);

        $searchParams['isLiveIn'] = (int) filter_input(INPUT_POST, 'isLiveIn', FILTER_VALIDATE_INT);
        $searchParams['isResort'] = (int) filter_input(INPUT_POST, 'isResort', FILTER_VALIDATE_INT);
        $searchParams['isBonus'] = (int) filter_input(INPUT_POST, 'isBonus', FILTER_VALIDATE_INT);

        $searchParams['hotelName'] = (string) filter_input(INPUT_POST, 'searcHotelName');

        //フリーワード処理
        $keyword = (string) filter_input(INPUT_POST, 'searchFreeWord', FILTER_DEFAULT);
        //全角スペースを半角スペースへ変換
        $keyword = str_replace("　", " ", $keyword);
        //半角スペース2個を1個へ変換
        $keyword = str_replace("  ", " ", $keyword);
        $searchParams['keywords'] = explode(" ", $keyword);
        $searchParams['keywordAndOr'] = (int) filter_input(INPUT_POST, 'fwAndOr', FILTER_VALIDATE_INT);

        //エラーログへ配列の値を出力
        // error_log(var_export($searchParams, true));

        $ajaxSearchJobCont->searchJobs($searchParams, $status, $delete);
        break;
    case 'easySearchJobs';
        $status = (int) filter_input(INPUT_POST, 'statusFlag', FILTER_VALIDATE_INT);
        $delete = (int) filter_input(INPUT_POST, 'deleteFlag', FILTER_VALIDATE_INT);

        $searchParams = array();
        $searchParams['jobId'] = (int) filter_input(INPUT_POST, 'jobId', FILTER_VALIDATE_INT);
        $searchParams['recJobId'] = (string) filter_input(INPUT_POST, 'recJobId');
        $searchParams['centralManager'] = (int) filter_input(INPUT_POST, 'centralManager', FILTER_VALIDATE_INT);

        //エラーログへ配列の値を出力
        // error_log(var_export($searchParams, true));

        $ajaxSearchJobCont->easySearchJobs($searchParams, $status, $delete);
        break;
}
exit;

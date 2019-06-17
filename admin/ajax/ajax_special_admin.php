<?php

/*
 * ajax_special_admin.php
 * 特集管理 for Ajax
 * 
 * @author     Kenji Ueno <ueno@crew-m.com>
 * @version    1.0
 * */
ini_set('memory_limit', '128M');

mb_language("japanese");
mb_internal_encoding("UTF-8");

require_once(CONTROLLER_DIR . '/AdminAjaxSpecialController.php');

$mode = (string) filter_input(INPUT_POST, 'mode');
$ajaxSpecialCont = new AdminAjaxSpecialController();

switch ($mode) {
    case 'getSpecials':
        $ajaxSpecialCont->getSpecials();
        break;
    case 'getSpecial':
        $specialId = (int) filter_input(INPUT_POST, 'specialid', FILTER_VALIDATE_INT);
        $ajaxSpecialCont->getSpecial($specialId);
        break;
    case 'insertSpecial':
        $title = (string) filter_input(INPUT_POST, 'title');
        $pageTitle = (string) filter_input(INPUT_POST, 'pageTitle');
        $comment = (string) filter_input(INPUT_POST, 'comment');
        $memo = (string) filter_input(INPUT_POST, 'memo');
        $isStatic = (int) filter_input(INPUT_POST, 'isStatic', FILTER_VALIDATE_INT);
        $url = (string) filter_input(INPUT_POST, 'url');

        $title = delMoreReturn($title);

        $regData = array(
            'title' => $title,
            'pageTitle' => $pageTitle,
            'comment' => $comment,
            'memo' => $memo,
            'isStatic' => $isStatic,
            'url' => $url
        );
        $ajaxSpecialCont->insertSpecial($regData);
        break;
    case 'updateSpecial':
        $specialId = (int) filter_input(INPUT_POST, 'specialid', FILTER_VALIDATE_INT);
        $title = (string) filter_input(INPUT_POST, 'title');
        $pageTitle = (string) filter_input(INPUT_POST, 'pageTitle');
        $comment = (string) filter_input(INPUT_POST, 'comment');
        $memo = (string) filter_input(INPUT_POST, 'memo');
        $isStatic = (int) filter_input(INPUT_POST, 'isStatic', FILTER_VALIDATE_INT);
        $url = (string) filter_input(INPUT_POST, 'url');
        //error_log(var_export($isStatic, true));

        $title = delMoreReturn($title);

        $imgDelete = array();
        for ($i = 0; $i <= 2; $i++) {
            $imgDelete[$i] = (string) filter_input(INPUT_POST, 'imgDelete' . $i, FILTER_DEFAULT);
        }

        $regData = array(
            'specialid' => $specialId,
            'title' => $title,
            'pageTitle' => $pageTitle,
            'comment' => $comment,
            'memo' => $memo,
            'isStatic' => $isStatic,
            'url' => $url,
            'imgDelete' => $imgDelete
        );
        $ajaxSpecialCont->updateSpecial($regData);
        break;
    case 'deleteSpecial';
        $specialId = (int) filter_input(INPUT_POST, 'specialid', FILTER_VALIDATE_INT);
        $ajaxSpecialCont->deleteSpecial($specialId);
        break;
    /* 案件選択機能 */
    case 'loadJobsInSp';
        $specialId = (int) filter_input(INPUT_POST, 'specialid', FILTER_VALIDATE_INT);
        $ajaxSpecialCont->loadJobsInSp($specialId);
        break;
    case 'loadAllJobs';
        $specialId = (int) filter_input(INPUT_POST, 'specialid', FILTER_VALIDATE_INT);
        $ajaxSpecialCont->loadAllJobs($specialId);
        break;
    case 'searchJobs';
        $specialId = (int) filter_input(INPUT_POST, 'specialid', FILTER_VALIDATE_INT);

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

        $ajaxSpecialCont->searchJobs($specialId, $searchParams);
        break;
    case 'easySearchJobs';
        $specialId = (int) filter_input(INPUT_POST, 'specialid', FILTER_VALIDATE_INT);

        $searchParams = array();
        $searchParams['jobId'] = (int) filter_input(INPUT_POST, 'jobId', FILTER_VALIDATE_INT);
        $searchParams['recJobId'] = (string) filter_input(INPUT_POST, 'recJobId');
        $searchParams['centralManager'] = (int) filter_input(INPUT_POST, 'centralManager', FILTER_VALIDATE_INT);
        
//エラーログへ配列の値を出力
        // error_log(var_export($searchParams, true));

        $ajaxSpecialCont->easySearchJobs($specialId, $searchParams);
        break;
    case 'addJob';
        $specialId = (int) filter_input(INPUT_POST, 'specialid', FILTER_VALIDATE_INT);
        $jobId = (int) filter_input(INPUT_POST, 'jobId', FILTER_VALIDATE_INT);

        $ajaxSpecialCont->addJob($specialId, $jobId);
        break;

    case 'addAllJobs';
        $specialId = (int) filter_input(INPUT_POST, 'specialid', FILTER_VALIDATE_INT);
        $jobIds = filter_input(INPUT_POST, 'jobIds', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);

        $ajaxSpecialCont->addAllJobs($specialId, $jobIds);
        break;
    case 'deleteJob';
        $specialId = (int) filter_input(INPUT_POST, 'specialid', FILTER_VALIDATE_INT);
        $jobId = (int) filter_input(INPUT_POST, 'jobId', FILTER_VALIDATE_INT);

        $ajaxSpecialCont->deleteJob($specialId, $jobId);

        break;
    case 'deleteAllJobs';
        $specialId = (int) filter_input(INPUT_POST, 'specialid', FILTER_VALIDATE_INT);
        $ajaxSpecialCont->deleteAllJobs($specialId);
        break;
    case 'reSorting';
        $specialId = (int) filter_input(INPUT_POST, 'specialid', FILTER_VALIDATE_INT);
        $newSortingList = filter_input(INPUT_POST, 'newSortingList', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);

        $ajaxSpecialCont->reSorting($specialId, $newSortingList);
        break;
    case 'randomSorting';
        $specialId = (int) filter_input(INPUT_POST, 'specialid', FILTER_VALIDATE_INT);

        $ajaxSpecialCont->randomSorting($specialId);
        break;
}
exit;

function delMoreReturn($val) {
    $val = preg_replace("/\r\n|\r|\n/", "\n", $val);
    $count = substr_count($val, "\n");
    error_log(var_export($count, true));
    if ($count >= 2) {
        $tvals = explode("\n", $val);
        $tvals[0] = $tvals[0] . "\n";
        $val = implode('', $tvals);
    }
    return $val;
}

/*
function imgProcess($specialId) {
    require_once(UTIL_DIR . '/ImageUtil.php');

    $uploadTmpDir = IMG_WORK_DIR . '/sp_tmp/';
    $uploadImgDir = SPECIAL_IMG_DIR;
    $uploadImgBkDir = IMG_WORK_DIR . '/sp_backup/';
    $deleteImgDir = HTDOCS_DIR;

    $minWidth = MIN_IMG_WIDTH;
    $minHeight = MIN_IMG_HEIGHT;

//error_log(var_export($_FILES, true));
//ファイル種別確認
    for ($i = 0; $i <= 2; $i++) {
        if (!empty($_FILES['imgFile' . $i]['tmp_name']) && is_uploaded_file($_FILES['imgFile' . $i]['tmp_name'])) {
            if ($_FILES['imgFile' . $i]['type'] == 'image/jpeg' || $_FILES['imgFile' . $i]['type'] == 'image/png' || $_FILES['imgFile' . $i]['type'] == 'image/gif') {
                
            } else {
                $isError = true;
            }
        }
    }

    if ($isError) {
        $this->outputErrorForAjax('画像以外のファイルが選択されいます');
    }

    for ($i = 0; $i <= 2; $i++) {
        if (!empty($_FILES['imgFile' . $i]['tmp_name']) && is_uploaded_file($_FILES['imgFile' . $i]['tmp_name'])) {
            if ($_FILES['imgFile' . $i]['type'] == 'image/jpeg') {
                $ext = 'jpg';
            } elseif ($_FILES['imgFile' . $i]['type'] == 'image/png') {
                $ext = 'png';
            } elseif ($_FILES['imgFile' . $i]['type'] == 'image/gif') {
                $ext = 'gif';
            }
            $imgTmpFiles[$i] = date('YmdHis') . '_' . sprintf("%08d", $specialId) . '_0' . $i . '.' . $ext;
            $uploadFile = $uploadTmpDir . $imgTmpFiles[$i];
            move_uploaded_file($_FILES['imgFile' . $i]['tmp_name'], $uploadFile);

            //画像加工
            $tmpFile = $uploadFile;
            $image = new ImageUtil();
            $image->setBaseFile($tmpFile);
            $ext = $image->getExtFromExif();

            $backupImgFile = $uploadImgBkDir . 'bk_' . sprintf("%08d_%02d", $specialId, $i) . '.' . $ext;
            $newImgFileName = $uploadImgDir . sprintf("%08d_%02d", $specialId, $i) . '.jpg';
            //バックアップ保存
            copy($tmpFile, $backupImgFile);

            //リサイズ画像保存
            $result = $image->resizeImageOutJpeg($newImgFileName, $minWidth, $minHeight);
        }
    }

    outPutJsonWithOkCode();
}
*/
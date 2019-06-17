<?php

ini_set('memory_limit', '128M');
mb_language("japanese");
mb_internal_encoding("UTF-8");

require_once(VALIDATION_DIR . '/AdminFormValidation.php');
require_once(MODEL_DIR . '/AdminJob.php');
require_once(UTIL_DIR . '/ImageUtil.php');

$uploadTmpDir = IMG_WORK_DIR . '/tmp/';
$uploadImgDir = IMG_WORK_DIR . '/cojob/';
$uploadImgBkDir = IMG_WORK_DIR . '/backup/';
$deleteImgDir = HTDOCS_DIR;

$minWidth = MIN_IMG_WIDTH;
$minHeight = MIN_IMG_HEIGHT;

$isError = false;

$jobId = (string) filter_input(INPUT_POST, 'jid', FILTER_DEFAULT);

//案件確認
$job = new Model_AdminJob();
$jobInfo = $job->getJob($jobId);
if (!$jobInfo) {
    outputErrorForAjax('エラーが発生しました');
}
$imgDelete = array();
for ($i = 0; $i <= 4; $i++) {
    $imgDelete[$i] = (string) filter_input(INPUT_POST, 'imgDelete' . $i, FILTER_DEFAULT);
}

//error_log(var_export($_POST, true));

$imgComment = array();
for ($i = 1; $i <= 4; $i++) {
    $imgComment[$i] = (string) filter_input(INPUT_POST, 'imgComment' . $i, FILTER_DEFAULT);
    //error_log(var_export($imgComment[$i], true));
    if (AdminFormValidation::checkOverLimitLength($imgComment[$i], 20)) {
        $isError = true;
    }
}
if ($isError) {
    outputErrorForAjax('入力にエラーがあり登録できませんでした');
}
//コメント記録
$data = array();
$data['imgComment2'] = $imgComment[2];
$data['imgComment3'] = $imgComment[3];
$data['imgComment4'] = $imgComment[4];

$result = $job->updateImgComment($jobId, $data);
if (!$result) {
    outputErrorForAjax('エラーが発生しました');
}

//画像削除
for ($i = 0; $i <= 4; $i++) {
    //error_log(var_export($imgDelete[$i], true));
    if (!empty($imgDelete[$i]) && $imgDelete[$i] == 1) {
        $deleteFile = AdminDataConvertUtil::checkImageExist($jobId, $i);
        if ($deleteFile != false) {
            $file = $deleteFile['fileName'];
            unlink($file);
        }
    }
}
//error_log(var_export($_FILES, true));
//ファイル種別確認
for ($i = 0; $i <= 4; $i++) {
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

for ($i = 0; $i <= 4; $i++) {
    if (!empty($_FILES['imgFile' . $i]['tmp_name']) && is_uploaded_file($_FILES['imgFile' . $i]['tmp_name'])) {
        if ($_FILES['imgFile' . $i]['type'] == 'image/jpeg') {
            $ext = 'jpg';
        } elseif ($_FILES['imgFile' . $i]['type'] == 'image/png') {
            $ext = 'png';
        } elseif ($_FILES['imgFile' . $i]['type'] == 'image/gif') {
            $ext = 'gif';
        }
        $imgTmpFiles[$i] = date('YmdHis') . '_' . sprintf("%08d", $jobId) . '_0' . $i . '.' . $ext;
        $uploadFile = $uploadTmpDir . $imgTmpFiles[$i];
        move_uploaded_file($_FILES['imgFile' . $i]['tmp_name'], $uploadFile);

        //画像加工
        $tmpFile = $uploadFile;
        $image = new ImageUtil();
        $image->setBaseFile($tmpFile);
        $ext = $image->getExtFromExif();

        $backupImgFile = $uploadImgBkDir . 'bk_' . sprintf("%08d_%02d", $jobId, $i) . '.' . $ext;
        $newImgFileName = $uploadImgDir . sprintf("%08d_%02d", $jobId, $i) . '.jpg';
        //バックアップ保存
        copy($tmpFile, $backupImgFile);

        //リサイズ画像保存
        $result = $image->resizeImageOutJpeg($newImgFileName, $minWidth, $minHeight);

        /*
          if ($ext == 'jpg') {
          $result = $image->resizeJpegFileMake($newImgFileName, $minWidth, $minHeight);
          } elseif ($ext == 'png') {
          $result = $image->resizePngFileMake($newImgFileName, $minWidth, $minHeight);
          } elseif ($ext == 'gif') {
          $result = $image->resizeGifFileMake($newImgFileName, $minWidth, $minHeight);
          } */
    }
}

outPutJsonWithOkCode();

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

//Json出力
function outPutJson($data) {
    //header('Content-Type: application/json');
    echo json_encode($data);
    exit;
}

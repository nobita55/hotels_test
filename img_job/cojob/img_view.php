<?php

//ファイル名取得
$fileName = (string) filter_input(INPUT_GET, 'file', FILTER_DEFAULT);

if (!preg_match("/.*?\.jpg/", $fileName)) {
    //拡張子jpg以外は出力なし
    exit;
}

$file = IMG_WORK_DIR . '/cojob/' . $fileName;

//ファイルの存在確認
if (file_exists($file)) {
    $img = file_get_contents($file);
    header('Content-type: image/jpeg');
    echo $img;
}
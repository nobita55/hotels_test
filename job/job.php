<?php
/**
 * ホテルズワーク
 * 一般サイド求人情報ディスパッチャー
 * 
 * index.php
 * 
 * @author     Kenji Ueno <ueno@crew-m.com>
 * @version    1.0
 * */
//---------------------------------------

mb_language("japanese");
mb_internal_encoding("UTF-8");
session_start();

//---------------------------------------
$mode = (string) filter_input(INPUT_GET, 'mode', FILTER_DEFAULT);
$action = (string) filter_input(INPUT_GET, 'action', FILTER_DEFAULT);
if (empty($mode)) {
    $mode = 'index';
}

$className = ucfirst(strtolower($mode)) . 'Controller';
$classFile = CONTROLLER_DIR . '/General/' . $className . '.php';

//var_dump($classFile);

if (!file_exists($classFile)) {
    //エラー
    Error::errorGeneral404Display('ec001:ページが存在しません');
}

require_once($classFile);
// クラスインスタンス生成
if (empty($action)) {
    $action = 'index';
}
$actionMethod = $action . 'Action';


$controller = new $className();
if (!method_exists($controller, $actionMethod)) {
    //エラー
    Error::errorGeneral404Display('ec002:ページが存在しません');
}
$controller->$actionMethod();

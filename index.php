<?php

/**
 * index.php
 * ホテルズワークTOPページ
 * 
 * @author     Kenji Ueno <ueno@crew-m.com>
 * @version    1.0
 * */
//表示
//---------------------------------------

mb_language("japanese");
mb_internal_encoding("UTF-8");
session_start();

//---------------------------------------
$mode = 'index';
$action = 'index';

$className = ucfirst(strtolower($mode)) . 'Controller';
$classFile = CONTROLLER_DIR . '/General/' . $className . '.php';

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


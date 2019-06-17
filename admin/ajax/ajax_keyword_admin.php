<?php

/*
 * ajax_keyword_admin.php
 * キーワード管理 for Ajax
 * 
 * @author     Kenji Ueno <ueno@crew-m.com>
 * @version    1.0
 * */

mb_language("japanese");
mb_internal_encoding("UTF-8");

//require_once("init.php");
require_once(MODEL_DIR . '/AdminKeyword.php');
require_once(CONTROLLER_DIR . '/AdminAjaxKeywordController.php');

$mode = (string) filter_input(INPUT_POST, 'mode');
$ajaxKeywordCont = new AdminAjaxKeywordController();

switch ($mode) {
    case 'getSearchWords':
        //キーワード取得
        $ajaxKeywordCont->getSearchWords();
        break;

    case 'getKeywords':
        //キーワード取得
        $ajaxKeywordCont->getKeywords();
        break;
    case 'saveKeyword':
        //キーワード保存
        $keyword = (string) filter_input(INPUT_POST, 'keyword');
        $sortRank = (int) filter_input(INPUT_POST, 'sort_rank', FILTER_VALIDATE_INT);
        if ($sortRank == 0) {
            $sortRank = 1;
        }
        $id = (int) filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
        $regData = array(
            'keyword' => $keyword,
            'sortRank' => $sortRank,
            'id' => $id
        );
        $ajaxKeywordCont->saveKeyword($regData);
        break;
    case 'deleteKeyword':
        //キーワード削除
        $id = (int) filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
        $ajaxKeywordCont->deleteKeyword($id);
        break;
    case 'getKeyword':
        $id = (string) filter_input(INPUT_POST, 'id');
        $ajaxKeywordCont->getKeyword($id);
        break;
}
exit;

<?php

/*
 * ajax_company_entry.php
 * 企業用フォーム for Ajax
 * 
 * @author     Shusaku Sakamoto <sakamoto@crew-m.com>
 * @version    1.0
 * */

mb_language("japanese");
mb_internal_encoding("UTF-8");

require_once(CONTROLLER_DIR . '/AdminAjaxForcomController.php');

$mode = (string) filter_input(INPUT_POST, 'mode');
$status = (int) filter_input(INPUT_POST, 'status');
$id = (int) filter_input(INPUT_POST, 'id');

$ajaxForcomCont = new AdminAjaxForcomController();

switch ($mode) {
    case 'changeReleased':
        //ホテルズワークへ掲載したか否かのカラム変更
        $ajaxForcomCont->changeReleased($status, $id);
        break;
    case 'changeJobcard':
        //求人票作成したか否かのカラム変更
        $ajaxForcomCont->changeJobcard($status, $id);
        break;
}
exit;
<?php

/*
 * ajax_top_special_admin.php
 * トップ特集設定 for Ajax
 * 
 * @author     Kenji Ueno <ueno@crew-m.com>
 * @version    1.0
 * */

mb_language("japanese");
mb_internal_encoding("UTF-8");

require_once(MODEL_DIR . '/AdminTopSpecial.php');
require_once(CONTROLLER_DIR . '/AdminAjaxTopSpecialController.php');

$mode = (string) filter_input(INPUT_POST, 'mode');
$ajaxTopSpecialCont = new AdminAjaxTopSpecialController();

switch ($mode) {
    case 'getSpecials':
        $ajaxTopSpecialCont->getSpecials();
        break;

    case 'getTopSpecials':
        $ajaxTopSpecialCont->getTopSpecials();
        break;

    case 'getSpecialForNewTopSpecial':
        $specialId = (string) filter_input(INPUT_POST, 'specialid');
        $ajaxTopSpecialCont->getSpecial($specialId);
        break;

    case 'saveTopSpecial':
        $specialId = (string) filter_input(INPUT_POST, 'specialId');
        $catchCopy = (string) filter_input(INPUT_POST, 'catchcopy');
        $sortRank = (int) filter_input(INPUT_POST, 'sort_rank', FILTER_VALIDATE_INT);
        $openFlag = (boolean) filter_input(INPUT_POST, 'open_flag', FILTER_VALIDATE_BOOLEAN);
        $topFlag = (boolean) filter_input(INPUT_POST, 'top_flag', FILTER_VALIDATE_BOOLEAN);
        $imgFlag = (boolean) filter_input(INPUT_POST, 'img_flag', FILTER_VALIDATE_BOOLEAN);
        $regData = array(
            'specialid' => $specialId,
            'catchcopy' => $catchCopy,
            'open_flag' => $openFlag,
            'top_flag' => $topFlag,
            'img_flag' => $imgFlag,
            'sort_rank' => $sortRank
        );
        $ajaxTopSpecialCont->saveTopSpecial($regData);
        break;
    case 'getTopSpecial':
        $specialId = (string) filter_input(INPUT_POST, 'specialid');
        $ajaxTopSpecialCont->getTopSpecial($specialId);
        break;
    case 'deleteTopSpecial';
        $specialId = (string) filter_input(INPUT_POST, 'specialid');
        $ajaxTopSpecialCont->deleteTopSpecial($specialId);
        break;
}
exit;

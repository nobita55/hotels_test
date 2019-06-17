<?php

/*
 * company_entry.php
 * 求人申し込み表示
 * 
 * @author     Kenji Ueno <ueno@crew-m.com>
 * @version    1.0
 * */

require_once(VIEW_DIR . "/ViewAdminCompanyEntry2.php");
require_once(UTIL_DIR . "/AdminDataConvertUtil.php");
require_once(MODEL_DIR . '/AdminCompanyEntry2.php');
require_once(FORM_DIR . "/CompanyEntry2Form.php");

$mode = (string) filter_input(INPUT_GET, 'mode', FILTER_DEFAULT);

switch ($mode) {
    case 'contact';
        $id = (int) filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $manager = (int) filter_input(INPUT_GET, 'manager', FILTER_VALIDATE_INT);

        $entry = new Model_AdminCompanyEntry2();
        $results = $entry->updateContact($id, $manager);
        if (!$results) {
            //エラー
            print 'error';
            exit;
        }

        header('Location: /admin/company_entry.php?mode=list');
        break;
    case 'detail';
        //詳細表示
        $id = (int) filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        $entry = new Model_AdminCompanyEntry2();
        $result = $entry->getDetail($id);
        if (!$result) {
            //エラー
            print 'error';
            exit;
        }
        $form = new CompanyEntry2Form();


        $formParams = $form->convertDataForDetail($result);
        $view = new ViewAdminCompanyEntry2();
        $view->displayDetailPage($formParams);
        break;
    case 'list';

        $entry = new Model_AdminCompanyEntry2();
        $results = $entry->getList();
        if (!$results) {
            //エラー
            print 'error';
            exit;
        }
        //
        //var_dump($results);s
        foreach ($results as $key => $val) {
            if (!empty($val['contact'])) {
                $results[$key]['manager'] = AdminDataConvertUtil::getCentralManager($val['contact']);
                $results[$key]['contactDate'] = $val['contact_date'];
            }
        }
        //var_dump($results);s
        $view = new ViewAdminCompanyEntry2();
        $view->displayListPage($results);
        break;
}

print 'error';
exit;

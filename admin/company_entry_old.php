<?php

/*
 * company_entry.php
 * 求人申し込み表示
 * 
 * @author     Kenji Ueno <ueno@crew-m.com>
 * @version    1.0
 * */

require_once(VIEW_DIR . "/ViewAdminCompanyEntry.php");
require_once(UTIL_DIR . "/AdminDataConvertUtil.php");
require_once(MODEL_DIR . '/AdminCompanyEntry.php');
require_once(FORM_DIR . "/CompanyEntryForm.php");

$mode = (string) filter_input(INPUT_GET, 'mode', FILTER_DEFAULT);

switch ($mode) {
    case 'contact';
        $id = (int) filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        $manager = (int) filter_input(INPUT_GET, 'manager', FILTER_VALIDATE_INT);

        $entry = new Model_AdminCompanyEntry();
        $results = $entry->updateContact($id, $manager);
        if (!$results) {
            //エラー
            print 'error';
            exit;
        }

        header('Location: /admin/company_entry_old.php?mode=list');
        break;
    case 'detail';
        //詳細表示
        $id = (int) filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        $entry = new Model_AdminCompanyEntry();
        $result = $entry->getDetail($id);
        if (!$result) {
            //エラー
            print 'error';
            exit;
        }
        $form = new CompanyEntryForm();


        $formParams = $form->convertDataForDetail($result);
        $view = new ViewAdminCompanyEntry();
        $view->displayDetailPage($formParams);
        break;
    case 'list';

        $entry = new Model_AdminCompanyEntry();
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
        $view = new ViewAdminCompanyEntry();
        $view->displayListPage($results);
        break;
}

print 'error';
exit;

<?php

/*
 * company_entry_download.php
 * 請求一覧ダウンロード
 * 
 * @author     Shusaku Sakamoto <sakamoto@crew-m.com>
 * @version    1.0

 *  * */

mb_language("japanese");
mb_internal_encoding("UTF-8");
require_once(LIB_DIR . '/config/admin_conf.php');
require_once(MODEL_DIR . '/AdminCompanyEntry2.php');
require_once(FORM_DIR . "/CompanyEntry2Form.php");
//require_once(VIEW_DIR . "/ViewAdminCompanyEntry2.php");
require_once(VENDOR_DIR . '/PHPExcel/Classes/PHPExcel.php');
require_once(VENDOR_DIR . '/PHPExcel/Classes/PHPExcel/IOFactory.php');
$id = (string) filter_input(INPUT_GET, 'id', FILTER_DEFAULT);

$entry = new Model_AdminCompanyEntry2();
$results = $entry->getDetail($id);
if (!$results) {
    //エラー
    print 'error';
    exit;
}

//$form = new CompanyEntry2Form();
//$results = $form->convertDataForDetail($results);

global $gvPrefName;

/* エクセル表示用にコンバート */
$results['f_prefecture_id'] = $gvPrefName[$results['f_prefecture_id']];

$results['holiday'] = str_replace("<br />", "\r　" , $results['holiday']);
$results['holiday'] = str_replace("<br/>", "\r　" , $results['holiday']);
$results['billing_day'] = str_replace("<br/>", "\r　" , $results['billing_day']);
$results['billing_day'] = str_replace("<br />", "\r　" , $results['billing_day']);
$results['dorm'] = str_replace("<br/>", "\r　" , $results['dorm']);
$results['dorm'] = str_replace("<br />", "\r　" , $results['dorm']);
$results['work_shift'] = str_replace("<br/>", "\r　" , $results['work_shift']);
$results['work_shift'] = str_replace("<br />", "\r　" , $results['work_shift']);
$results['work_shift'] = str_replace("&nbsp;", " " , $results['work_shift']);

//$results['holiday'] = preg_replace("/<br/>/", "\r" , $results['holiday']);

//$results['job_detail'] = preg_replace("/\n/", "PHP_EOL" , $results['job_detail']);
   
/*
var_dump($results);
        $view = new ViewAdminCompanyEntry2();
        $view->displayDetailPage($results);
*/

/* * ******************************************************************
 * エクセル出力
 */

//設定
$exColumnNum = 29;

$exColumn = array();
$exColumn[0] = 'ID';
$exColumn[1] = '企業名';
$exColumn[2] = '企業名（フリガナ）';
$exColumn[3] = '施設名（部署名）';
$exColumn[4] = 'ご担当者氏名';
$exColumn[5] = 'ご担当者フリガナ';
$exColumn[6] = "メールアドレス";
$exColumn[7] = "電話番号";
$exColumn[8] = "事業所の郵便番号";
$exColumn[9] = "事業所の都道府県";
$exColumn[10] = "事業所の住所";
$exColumn[11] = "就業場所";
$exColumn[12] = "職種";
$exColumn[13] = "仕事の内容";
$exColumn[14] = "勤務シフト";
$exColumn[15] = "休日・休暇";
$exColumn[16] = "時間外労働";
$exColumn[17] = "雇用形態・期間";
$exColumn[18] = "手当";
$exColumn[19] = "加入保険";
$exColumn[20] = "給与・賞与";
$exColumn[21] = "賃金締日・支払日";
$exColumn[22] = "寮・社宅情報";
$exColumn[23] = "必要な学歴";
$exColumn[24] = "必要な経験・免許・資格";
$exColumn[25] = "年齢制限";
$exColumn[26] = "定年制";
$exColumn[27] = "ホームページ";
$exColumn[28] = "備考";

$exColumnKey[0] = 'id';
$exColumnKey[1] = 'company_name';
$exColumnKey[2] = 'company_name_kana';
$exColumnKey[3] = 'facility_name';
$exColumnKey[4] = 'name';
$exColumnKey[5] = 'name_kana';
$exColumnKey[6] = 'mail';
$exColumnKey[7] = 'tel';
$exColumnKey[8] = 'post_code';
$exColumnKey[9] = 'f_prefecture_id';
$exColumnKey[10] = 'address';
$exColumnKey[11] = 'job_address';
$exColumnKey[12] = 'job_category';
$exColumnKey[13] = 'job_detail';
$exColumnKey[14] = 'work_shift';
$exColumnKey[15] = 'holiday';
$exColumnKey[16] = 'overtime_work';
$exColumnKey[17] = 'employment';
$exColumnKey[18] = 'allowance';
$exColumnKey[19] = 'insurance';
$exColumnKey[20] = 'salary_min';
$exColumnKey[21] = 'billing_day';
$exColumnKey[22] = 'dorm';
$exColumnKey[23] = 'educational';
$exColumnKey[24] = 'must_skill';
$exColumnKey[25] = 'age';
$exColumnKey[26] = 'retirement';
$exColumnKey[27] = 'website';
$exColumnKey[28] = 'memo';

//エクセルファイルの新規作成
$excel = new PHPExcel();

// シートの設定
$excel->setActiveSheetIndex(0); //何番目のシートか
$sheet = $excel->getActiveSheet(); //有効になっているシートを代入

//項目名セット
for ($i = 0; $i < $exColumnNum; $i++) {
    $sheet->setCellValueByColumnAndRow(0, $i, $exColumn[$i]);
}

//内容セット
for ($i = 0; $i < $exColumnNum; $i++) {
    $column = $exColumnKey[$i];
    $sheet->setCellValueByColumnAndRow(1, $i, $results[$column]);

}

//自動改行
/*$sheet->getStyle('B13')->getAlignment()->setWrapText(true);
$sheet->getRowDimension(15)->setRowHeight(35);
*/

$sheet->getColumnDimension('A')->setWidth(35);

// セルに値を入力
//$sheet->setCellValue('A1', 'こんにちは！'); //A1のセルにこんにちは！という値を入力
// Excel2007形式で出力する
$writer = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
//$fileName = 'invoice_list_' . $year . $month . '.xlsx';
$fileName = 'invoice_list_test.xlsx';
$file = './excel/excel_output/' . $fileName;
$writer->save($file);

header('Content-Type: application/vnd.ms-excel');
// ダイアログボックスに表示するファイル名
header("Content-Disposition: attachment; filename=$fileName");
// 対象ファイルを出力する。
readfile($file);
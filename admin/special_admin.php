<?php

/*
 * special_admin.php
 * 特集管理
 * 
 * @author     Kenji Ueno <ueno@crew-m.com>
 * @version    1.0
 * */

require_once(VIEW_DIR . "/ViewAdmin.php");
require_once(UTIL_DIR . "/AdminDataConvertUtil.php");

//検索項目生成
$searchParams = array();

//エリア
$searchParams['prefectureCk'] = AdminDataConvertUtil::makeCheckBoxList($gvSortPref, $gvPrefName);

//雇用形態
$searchParams['esCk'] = AdminDataConvertUtil::makeCheckBoxList($gvSortEmploymentStatus, $gvEmploymentStatus);

//施設区分
$searchParams['fcCk'] = AdminDataConvertUtil::makeCheckBoxList($gvSortFacilityCategory, $gvFacilityCategory);
//勤務期間
$searchParams['wtCk'] = AdminDataConvertUtil::makeCheckBoxList($gvSortWorkingTerm, $gvWorkingTerm);
//寮社宅のポイント
$searchParams['dpCk'] = AdminDataConvertUtil::makeCheckBoxList($gvSortDormPoint, $gvDormPoint);
//職種
$searchParams['jobCategoryCk'] = AdminDataConvertUtil::makeCheckBoxListIncludeCat(
                $gvSortDepartment, $gvDepartment, $gvJobCategoryMap, $gvJobCategory);

//特長
$searchParams['featureCk'] = AdminDataConvertUtil::makeCheckBoxListIncludeCat(
                $gvSortFeatureCat, $gvFeatureCat, $gvFeatureMap, $gvFeature);

$view = new ViewAdmin();
$view->displaySpecial($searchParams);

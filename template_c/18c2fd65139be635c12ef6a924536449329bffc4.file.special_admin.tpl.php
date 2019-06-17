<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-07 14:50:09
         compiled from "./templates/special_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141355182556f09fdfd44ae2-00636047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18c2fd65139be635c12ef6a924536449329bffc4' => 
    array (
      0 => './templates/special_admin.tpl',
      1 => 1496806987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141355182556f09fdfd44ae2-00636047',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56f09fdfe4ca02_90708579',
  'variables' => 
  array (
    'searchParams' => 0,
    'row' => 0,
    'fcat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f09fdfe4ca02_90708579')) {function content_56f09fdfe4ca02_90708579($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <title>ホテルズワーク管理 | 特集管理</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/normalize.css" rel="stylesheet" type="text/css"/>
        <link href="css/admin_extra.css" rel="stylesheet" type="text/css"/>
        <link href="css/admin_special.css" rel="stylesheet" type="text/css"/>
        <link href="css/admin_search_ctl.css" rel="stylesheet" type="text/css"/>
        <link href="css/admin_special_img.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <?php echo '<script'; ?>
 src="js/vender/jquery.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/vender/jquery-ui.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/vender/underscore.js" type="text/javascript"><?php echo '</script'; ?>
>
        <link href="js/vender/dist/sweetalert.css" rel="stylesheet" type="text/css">
        <?php echo '<script'; ?>
 src="js/vender/dist/sweetalert.min.js"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
 src="js/admin.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/admin_special_img.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/admin_special.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/validation.js" type="text/javascript"><?php echo '</script'; ?>
>
    </head>
    <body>
        <header class="header">
            <div class="MenuContainer">
                <input id="menu" type="checkbox" name="menu" class="HiddenCheckbox"/>
                <label for="menu" class="MenuIcon"></label>
                <h2 class="MenuHeader">Menu</h2>
                <nav class="Menu">
                    <ul class="Menu-list">
                        <li class="Menu-item"><a href="./index.html" class="Menu-link">管理ツールTOP</a></li>
                        <li class="Menu-item"><a href="./job_search_admin.php" class="Menu-link">求人情報管理</a></li>
                        <li class="Menu-item"><a href="./recommend_admin.html" class="Menu-link">お勧めの仕事管理</a></li>
                        <li class="Menu-item"><a href="./keyword_admin.html" class="Menu-link">キーワード設定</a></li>
                        <li class="Menu-item"><a href="./special_admin.php" class="Menu-link">特集管理</a></li>
                        <li class="Menu-item"><a href="./special_top.html" class="Menu-link">特集表示設定</a></li>
                    </ul>
                </nav>
            </div>
            <h2 class="topText"><a href="./index.html" class="linkTop">ホテルズワーク管理</a> <span class="topTextSep">|</span> <span class="topToolName">特集管理</span>
            </h2>
        </header>
        <div class="container cBg">
            <div class="leftContents">
                <h2>特集管理</h2>
                <div class="leftControllers">
                    <div class="specialListBox">
                        <div class="specialsBox">
                            <table class="specialsTable">
                                <thead class="scrollHead">
                                    <tr>
                                        <th class="specialId">特集番号</th>
                                        <th class="specialTitle">タイトル</th>
                                        <th class="specialRegNum">案件数</th>
                                    </tr>
                                </thead>
                                <tbody class="scrollBody specialsScroll jsSpecialsList">

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="specialEntryBox">
                        <div class="boxFormUpper">
                            <div class="boxFormInputCommon">
                                <div>
                                    <label for="isStatic"><span class="fieldSubject">静的特集ページを使用</span></label>
                                    <input type="checkbox" name="isStatic" id="isStatic" value="1" style="width:20px;height:20px; vertical-align: middle; margin:5px;">
                                </div>
                                <div><span class="fieldSubject">リスト用タイトル</span><br> <textarea class="titleTarea" name="title"></textarea><span class="remainTitle">24</span></div>
                                <div class="pageTitle"><span class="fieldSubject">ページ用タイトル</span><input type="button" class="btnCopy jsCopyBtn" name="btnCopy" value="上からコピー"><br>
                                    <textarea class="titleTarea" name="pageTitle"></textarea><span class="remainPageTitle">24</span></div>
                                <div><span class="fieldSubject">内容</span><br> <textarea class="commentTarea" name="comment"></textarea></div>
                                <div><span class="fieldSubject">メモ</span><br> <textarea class="memo" name="memo"></textarea></div>
                                <div class="jsPageUrl"><span class="fieldSubject">ページURL</span><br> <input type="text" name="url" value="" size="120"></div>
                            </div>
                            <div class="boxFormBtns">
                                <div class="boxFormBtns1">
                                    <div class="height2linePad20"><span class="formStatus">新規入力</span></div>
                                    <div class="line40">
                                        <input type="button" class="btnNew jsBtnNew" name="btnNew" value="新規"><br>
                                        <input type="button" class="btnSave jsBtnSave" name="btnSave" value="保存"><br>
                                    </div>
                                </div>
                                <div class="boxFormBtns2">
                                    <div class="height2line"></div>
                                    <div class="line40">
                                        <input type="button" class="btnDel jsBtnDel" name="btnDel" value="削除"><br>
                                        <input type="button" class="btnSelect jsBtnSelect" name="btnSelect" value="案件"><br>
                                    </div>
                                </div>    
                            </div>   
                        </div>

                        <div class="th">
                            リスト用画像
                        </div>
                        <div class="td">
                            <div class="tdBox">
                                <div class="tdBoxL">
                                    <div>登録済みの画像:</div>
                                    <div><img class="registImg0" src="/admin/img/no_image_square.jpg" width="200" height="200" alt=""></div>
                                    <div><input type="checkbox" name="delete0" id="delete0" value="1" style="width:20px;height:20px; vertical-align: middle; margin:5px;"><label for="delete0">画像を完全に削除する</label></div>
                                </div>
                                <div class="tdBoxC">
                                    <div class="dragAreaSquare jsDragImg0">
                                        <div class="fileSelectBtnGroupSquare">
                                            <span id="img0">
                                                <input type="file" name="img0">
                                            </span>
                                            <button type="button" class="btnFileSelect jsFileSelectImg0">ファイルを選択</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tdBoxR">
                                    <div>選択中の画像:</div>
                                    <div class="imgFileName0"></div>
                                    <div class="btnBox"><button type="button" class="btnCancel jsCancelImg0" onclick="fileCancel(0);">選択をキャンセル</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="th jsBannerImg">
                            看板画像
                        </div>

                        <div class="td jsBannerImg">
                            <div class="tdBox">
                                <div class="tdBoxL">
                                    <div>登録済みの画像:</div>
                                    <div><img class="registImg1" src="/admin/img/no_image.gif" width="200" height="140" alt=""></div>
                                    <div><input type="checkbox" name="delete1" id="delete1" value="1" style="width:20px;height:20px; vertical-align: middle; margin:5px;">
                                        <label for="delete1">画像を完全に削除する</label></div>
                                </div>
                                <div class="tdBoxC">
                                    <div class="dragArea jsDragImg1">
                                        <div class="fileSelectBtnGroup">
                                            <span id="img1">
                                                <input type="file" name="img1">
                                            </span>
                                            <button type="button" class="btnFileSelect jsFileSelectImg1">ファイルを選択</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="tdBoxR">
                                    <div>選択中の画像:</div>
                                    <div class="imgFileName1"></div>
                                    <div class="btnBox"><button type="button" class="btnCancel jsCancelImg1" onclick="fileCancel(1);">選択をキャンセル</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rightContents">
                <div class="rightHeader">
                    <div class="rhSubject">特集案件管理</div>
                    <div class="registEnd"><input type="button" class="registEndBtn jsRegistEndBtn" name="registEndBtn" value="登録終了"></div>
                    <div class="rhSpNumSubject">特集番号</div>
                    <div class="rhSpNum"></div>
                    <div class="rhTitleSubject">タイトル</div>
                    <div class="rhTitle"></div>
                    <div class="rhRegNumSubject">登録案件数</div>
                    <div class="rhRegNum"><span class="registedNum"></span>件</div>
                    <div class="rhViewPcPage"><a href="" id="linkPcSpecial" class="euplink" target="_blank">特集ページ表示</a></div>
                </div>

                <!-- 検索作業中 -->
                <div class="searchController">
                    <div class="searchArea">
                        <div class="searchCategory">
                            <div class="searchCategoryName">
                                エリア
                                <input type="button" class="selectClearBtn jsAreaSelectClearBtn" name="selectClearBtn" value="選択解除">
                            </div>
                        </div>
                        <ul class="listParams areaList">
                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['searchParams']->value['prefectureCk']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                             <li><label for="pref_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
"><input type=checkbox id="pref_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemName'], ENT_QUOTES, 'UTF-8', true);?>
</label>
                        <?php } ?>
                        </ul>
                        <div class="searchCategory">
                            <div class="searchCategoryName">
                                雇用形態
                                <input type="button" class="selectClearBtn jsEsSelectClearBtn" name="selectClearBtn" value="選択解除">
                            </div>
                        </div>
                        <ul class="listParams employmentStatusList">
                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['searchParams']->value['esCk']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                             <li><label for="es_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
"><input type=checkbox id="es_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemName'], ENT_QUOTES, 'UTF-8', true);?>
</label>
                        <?php } ?>
                        </ul>

                        <div class="searchCategory">
                            <div class="searchCategoryName">
                                施設区分
                                <input type="button" class="selectClearBtn jsFcSelectClearBtn" name="selectClearBtn" value="選択解除">
                            </div>
                            <div class="andOrBox">
                                <input type="radio" name="fcAndOr" id="fcAnd" value="1"><label for="fcAnd">AND</label>
                                <input type="radio" name="fcAndOr" id="fcOr" value="2" checked><label for="fcOr">OR</label>
                            </div>
                        </div>
                        <ul class="listParams facilityCategoryList">
                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['searchParams']->value['fcCk']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                             <li><label for="fc_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
"><input type=checkbox id="fc_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemName'], ENT_QUOTES, 'UTF-8', true);?>
</label>
                        <?php } ?>
                        </ul>
                        <div class="searchCategory">
                            <div class="searchCategoryName">
                                勤務期間
                                <input type="button" class="selectClearBtn jsWtSelectClearBtn" name="selectClearBtn" value="選択解除">
                            </div>
                            <div class="andOrBox">
                                <input type="radio" name="wtAndOr" id="wtAnd" value="1"><label for="wtAnd">AND</label>
                                <input type="radio" name="wtAndOr" id="wtOr" value="2" checked><label for="wtOr">OR</label>
                            </div>
                        </div>
                        <ul class="listParams workingTermList">
                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['searchParams']->value['wtCk']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                             <li><label for="wt_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
"><input type=checkbox id="wt_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemName'], ENT_QUOTES, 'UTF-8', true);?>
</label>
                        <?php } ?>
                        </ul>
                        <div class="searchCategory">
                            <div class="searchCategoryName">
                                寮社宅
                                <input type="button" class="selectClearBtn jsLiveSelectClearBtn" name="selectClearBtn" value="選択解除">
                                <label for="isLiveIn"><input type=checkbox id="isLiveIn">住み込み可</label>
                            </div>
                            <div class="andOrBox">
                                <input type="radio" name="dpAndOr" id="dpAnd" value="1"><label for="dpAnd">AND</label>
                                <input type="radio" name="dpAndOr" id="dpOr" value="2" checked><label for="dpOr">OR</label>
                            </div>
                        </div>
                        <ul class="listParams dormPointList">
                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['searchParams']->value['dpCk']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                             <li><label for="dp_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
"><input type=checkbox id="dp_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemName'], ENT_QUOTES, 'UTF-8', true);?>
</label>
                        <?php } ?>
                        </ul>
                    </div>

                    <div class="searchJobCategory">
                        <div class="searchCategory">
                            <div class="searchCategoryName">
                                職種
                                <input type="button" class="selectClearBtn jsJcSelectClearBtn" name="selectClearBtn" value="選択解除">
                            </div>
                            <div class="andOrBox">
                                <input type="radio" name="jcAndOr" id="jcAnd" value="1"><label for="jcAnd">AND</label>
                                <input type="radio" name="jcAndOr" id="jcOr" value="2" checked><label for="jcOr">OR</label>
                            </div>
                        </div>
                        <ul class="listParams jobCategoryList">
                            <?php  $_smarty_tpl->tpl_vars['fcat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fcat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['searchParams']->value['jobCategoryCk']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fcat']->key => $_smarty_tpl->tpl_vars['fcat']->value) {
$_smarty_tpl->tpl_vars['fcat']->_loop = true;
?>
                                <!-- サブカテゴリー分ループ -->
                                <li class="listCategory"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fcat']->value['catName'], ENT_QUOTES, 'UTF-8', true);?>
 <a href="" class="euplinkSmall jsJcCheckAll<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fcat']->value['catNo'], ENT_QUOTES, 'UTF-8', true);?>
">[全て]</a>　<a href="" class="euplinkSmall jsJcCheckClear<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fcat']->value['catNo'], ENT_QUOTES, 'UTF-8', true);?>
">[解除]</a></li>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fcat']->value['item']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                <!-- チェックボックス分ループ -->
                                 <li><label for="jc_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
"><input type=checkbox id="jc_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
"  class="jsDepartmentCheck<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fcat']->value['catNo'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemName'], ENT_QUOTES, 'UTF-8', true);?>
</label>
                            <?php } ?>
                                <!-- チェックボックス分ループ -->
                                <!-- サブカテゴリー分ループ -->
                            <?php } ?>
                        </ul>
                    </div>   

                    <div class="searchFeature">
                        <div class="searchCategory">
                            <div class="searchCategoryName">
                                特長
                                <input type="button" class="selectClearBtn jsFtSelectClearBtn" name="selectClearBtn" value="選択解除">
                            </div>
                            <div class="andOrBox">
                                <input type="radio" name="ftAndOr" id="ftAnd" value="1"><label for="ftAnd">AND</label>
                                <input type="radio" name="ftAndOr" id="ftOr" value="2" checked><label for="ftOr">OR</label>
                            </div>
                        </div>
                        <ul class="listParams feartureList">
                            <?php  $_smarty_tpl->tpl_vars['fcat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fcat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['searchParams']->value['featureCk']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fcat']->key => $_smarty_tpl->tpl_vars['fcat']->value) {
$_smarty_tpl->tpl_vars['fcat']->_loop = true;
?>
                                <!-- サブカテゴリー分ループ -->
                                <li class="listCategory"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fcat']->value['catName'], ENT_QUOTES, 'UTF-8', true);?>
</li>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fcat']->value['item']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                <!-- チェックボックス分ループ -->
                                 <li><label for="ft_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
"><input type=checkbox id="ft_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemVal'], ENT_QUOTES, 'UTF-8', true);?>
"  class="jsDepartmentCheck<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fcat']->value['catNo'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['itemName'], ENT_QUOTES, 'UTF-8', true);?>
</label>
                            <?php } ?>
                                <!-- チェックボックス分ループ -->
                                <!-- サブカテゴリー分ループ -->
                            <?php } ?>
                        </ul>
                    </div>                    

                    <div class="searchOther">
                        <div class="searchCategory">
                            <div class="searchCategoryName">リゾート案件</div>
                        </div>
                        <div class="bonus">
                            <label for="isResort"><input type=checkbox id="isResort">リゾート指定</label>
                        </div>
                        <div class="searchCategory">
                            <div class="searchCategoryName">就労ボーナス</div>
                        </div>
                        <div class="bonus">
                            <label for="isBonus"><input type=checkbox id="isBonus">設定あり</label>
                        </div>
                        <div class="searchCategory">
                            <div class="searchCategoryName">フリーワード</div>
                            <div class="andOrBox">
                                <input type="radio" name="fwAndOr" id="fwAnd" value="1"><label for="fwAnd">AND</label>
                                <input type="radio" name="fwAndOr" id="fwOr" value="2" checked><label for="fwOr">OR</label>
                            </div>
                        </div>
                        <div>
                            <input type="text" name="fw" class="formFw"><br>
                            <span class="fwInfo">※半角スペース区切りで3ワードまで</span>
                        </div>
                        <div class="searchCategory">
                            <div class="searchCategoryName">施設名</div>
                        </div>
                        <div>
                            <input type="text" name="hotelName" class="formHotelName">
                        </div>
                        <div class="searchBtnBox">
                            <input type="button" class="searchBtn jsSearchCloseBtn" name="searchCloseBtn" value="閉じる">　
                            <input type="button" class="searchBtn jsSearchBtn" name="searchBtn" value="検索">　
                        </div>
                    </div> 
                </div>
                <!-- 検索作業中 -->

                <div class="rightMain">
                    <div class="leftListContens">
                        <div class="boxLeftUpper">
                            <span class="boxLeftUpperSub">
                                特集登録済案件 
                            </span>
                            <span class="randomBtnBox">
                                <input type="button" class="sortBtn jsRandomBtn" name="randomBtn" value="ランダム">
                            </span>
                            <span class="sortBtnBox">
                                <input type="button" class="sortBtn jsSortBtn" name="sortBtn" value="並び更新">
                            </span>
                        </div>
                        <div>
                            <table class="jobsInSpTable">
                                <thead class="scrollHead">
                                    <tr>
                                        <th class="jobInSpSN">&nbsp;</th>
                                        <th class="jobInSpJobId">JID</th>
                                        <th class="jobInSpHotelsName">親会社 施設等</th>
                                        <th class="jobInSpTitle">原稿タイトル</th>
                                        <th class="jobInSpPref">都道府県</th>
                                        <th class="jobInSpSort">並び</th>
                                    </tr>
                                </thead>
                                <tbody class="scrollBody jobsInSpScroll jsJobsInSpList">

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="centerContller">
                        <div class="buttons">
                            <div>
                                <a href="#" class="myButton jsBtnRegJob">&lt;</a>
                            </div>
                            <div>
                                <a href="#" class="myButton jsBtnDelJob">&gt;</a>
                            </div>
                            <div>　　</div>
                            <div>
                                <a href="#" class="myButton jsBtnRegAllJob">&lt;&lt;</a>
                            </div>
                            <div>
                                <a href="#" class="myButton jsBtnDelAllJob">&gt;&gt;</a>
                            </div>
                        </div>
                    </div>
                    <div class="rightListContens">
                        <div class="boxRightUpper">
                            <div class="boxRightUpperLeft">
                               <div class="resultCount">
                                表示数：全件数 <span class="searchResultNum"></span>件 / <span class="searchAllNum"></span>件 
                                </div>
                                <div class="easySearch">
                                    JID:<input type="text" name="jobId" class="formJobId">
                                    求人ID:<input type="text" name="recJobId" class="formRecJobId">
                                    担当:<select name="centralManager" class="formCentralManager">
                                        <option value="0"></option>
                                        <option value="1">小池</option>
                                        <option value="2">長澤</option>
                                        <option value="3">梶</option>
                                        <option value="5">宅間</option>
                                        <option value="6">大原</option>
                                        <option value="99">その他</option>
                                    </select>
                                    <a href="#" class="jsEasySearchBtn euplink"><i class="fa fa-search"></i></a>
                                </div>
                                <input type="button" class="searchBtn jsSearchOpenBtn" name="searchBtn" value="詳細検索">　
                                <input type="button" class="searchClearBtn jsSearchClearBtn" name="searchClearBtn" value="全件表示">
                            </div>
                            <div class="boxRightUpperRight">
                                <input type="checkbox" class="srListSwitch jsSrListSwitch" name="srListSwitch" checked> 登録済案件表示
                            </div>
                        </div>
                        <div>
                            <table class="jobsTable">
                                <thead class="scrollHead">
                                    <tr>
                                        <th class="jobId">JID</th>
                                        <th class="recJobId">求人ID</th>
                                        <th class="hotelsName">親会社 施設等</th>
                                        <th class="jobTitle">原稿タイトル</th>
                                        <th class="jobPref">都道府県</th>
                                    </tr>
                                </thead>
                                <tbody class="scrollBody jobsScroll jsJobsList">

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>  
</html>
<?php }} ?>

<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-08-08 17:04:11
         compiled from "./templates/detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2648730456f0d9e4ad4189-34731304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e1d0b9470b366b74ce636e33b76334c184e91d6' => 
    array (
      0 => './templates/detail.tpl',
      1 => 1502179023,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2648730456f0d9e4ad4189-34731304',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56f0d9e4eab202_53702950',
  'variables' => 
  array (
    'jobInfo' => 0,
    'imgFile' => 0,
    'recommendJobs' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f0d9e4eab202_53702950')) {function content_56f0d9e4eab202_53702950($_smarty_tpl) {?><!DOCTYPE html>
<html dir="ltr" lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="/css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="/css/common.css" type="text/css" media="screen">
<link rel="stylesheet" href="/css/header.css" type="text/css" media="screen">
<link rel="stylesheet" href="/css/footer.css" type="text/css" media="screen">
<link rel="stylesheet" href="/css/searchpanel.css" type="text/css" media="screen">
<link rel="stylesheet" href="/css/font-awesome.css" type="text/css" media="screen">
<link rel="stylesheet" href="/css/listingcards.css" type="text/css" media="screen">
<link rel="stylesheet" href="/css/card.css" type="text/css" media="screen">
<link rel="stylesheet" href="/css/pager.css" type="text/css" media="screen">
<link rel="apple-touch-icon" href="/img/common/apple-touch-icon.png">
<link rel="stylesheet" href="/css/jobdetail.css" type="text/css" media="screen">
<?php echo '<script'; ?>
 src="/js/vender/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/vender/underscore.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/like.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/js/job_detail.js" type="text/javascript"><?php echo '</script'; ?>
>
<title>仕事詳細-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobInfo']->value['titleExcMark'], ENT_QUOTES, 'UTF-8', true);?>
-ホテルズワーク</title>
<meta name="keywords" content="ホテル,旅館,求人,リゾート,バイト,正社員,アルバイト">
<meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobInfo']->value['place'], ENT_QUOTES, 'UTF-8', true);?>
のお仕事、<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobInfo']->value['sub_title'], ENT_QUOTES, 'UTF-8', true);?>
 宿泊施設(ホテル・旅館・リゾート)に特化したアルバイト・正社員求人の「ホテルズワーク」">
</head>
<body>

<!-- ヘッダー -->
<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('HTDOCS_DIR'))."/templates/header_common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- / ヘッダー -->

<div id="wrapper" itemscope itemtype="http://schema.org/JobPosting">
 
    <div class="jobdetail">
    <div class="detailMainBox">
    <div class="detailMainBoxL">
    <div class="mainImg01">
        <?php if ($_smarty_tpl->tpl_vars['imgFile']->value[0]) {?>
            <img class="" width="475" height="475"  src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imgFile']->value[0]['fileName'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="image">
        <?php } else { ?>
            <img class="" width="475" height="475"  src="/img/common/noimg/job_no_img.png">
        <?php }?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['imgFile']->value[1]) {?>
    <div class="mainImg02"> <img class="" width="475" height="475" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imgFile']->value[1]['fileName'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="image"></div>
    <?php }?>
    </div>
        
        
    <div class="detailMainBoxR">
    <div class="detailMainTitle" itemprop="title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobInfo']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</div>
        
    <div class="detailMainSubTitle"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobInfo']->value['sub_title'], ENT_QUOTES, 'UTF-8', true);?>
</div>
        
    <p itemprop="description">
    <?php echo nl2br($_smarty_tpl->tpl_vars['jobInfo']->value['job_pr']);?>

    </p>
        
    <?php if ($_smarty_tpl->tpl_vars['jobInfo']->value['is_live_in']==1) {?><div class="liveIn" itemprop="employmentType">寮・社宅の案件です。通勤・通いも可能ですご相談ください。</div>
    <?php } elseif ($_smarty_tpl->tpl_vars['jobInfo']->value['is_live_in']==0) {?><div class="liveIn" itemprop="employmentType">寮・社宅が必要な方もご相談ください。</div>
    <?php }?>
        
    <div class="summaryTable">
    <table>
        <tbody>
            <tr>
                <th>勤務地（概要）</th>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobInfo']->value['place'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                </tr>
            <tr>
                <th>職種</th>
                <td itemprop="occupationalCategory"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobInfo']->value['jobCategory'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                </tr>
            <tr>
                <th>雇用形態</th>
                <td itemprop="employmentType"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobInfo']->value['employmentStatus'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                </tr>
            <tr>
                <th>給与</th>
                <td itemprop="baseSalary"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobInfo']->value['salaryUnit'], ENT_QUOTES, 'UTF-8', true);
echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['jobInfo']->value['salary_min']), ENT_QUOTES, 'UTF-8', true);?>
 円 ～ <?php if ($_smarty_tpl->tpl_vars['jobInfo']->value['salary_max']) {
echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['jobInfo']->value['salary_max']), ENT_QUOTES, 'UTF-8', true);?>
 円<?php }?></td>
                </tr>
            <tr>
                <th>就労ボーナス</th>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['jobInfo']->value['gift_money']||$_smarty_tpl->tpl_vars['jobInfo']->value['gift_money_info']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['jobInfo']->value['gift_money']) {?>
                    <div><?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['jobInfo']->value['gift_money']), ENT_QUOTES, 'UTF-8', true);?>
 円</div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['jobInfo']->value['gift_money_info']) {?>
                    <div><?php echo nl2br($_smarty_tpl->tpl_vars['jobInfo']->value['gift_money_info']);?>
</div>
                    <?php }?>
                    <?php } else { ?>
                        <div>当社規定あり</div>
                    <?php }?>
                </td>
                </tr>
            <tr>
                <th>求人ID</th>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobInfo']->value['rec_job_id'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                </tr>
            </tbody>
    </table></div>
        
    <div class="detailMainEntryBt"><a href="/entry/input?jid=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobInfo']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
">かんたんWEB応募<i class="fa fa-pencil"></i></a></div>
    <div class="detailMainSPTelBt"><a href="tel:0120979188"><span>電話で相談</span><div>0120-979-188</div></a></div>
    <div class="detailMainPCTel"><img src="/img/job/detail/detailtel.gif" width="475" height="65" alt=""/></div>
    <div class="telMoreInfo">
    <div class="receptionTime">受付：月～金曜　10～19時　土曜　10～17時</div>
    <div><span class="offerID">求人ID</span>:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobInfo']->value['rec_job_id'], ENT_QUOTES, 'UTF-8', true);?>
</div>
    </div>
    <div class="detailStudyBt studyBtOn jsStudyBtOn" data-del-jid="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobInfo']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"><a href="#"><i class="fa fa-heart"></i>気になる!</a></div>
    <div class="detailStudyBt jsStudyBtOff" data-add-jid="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobInfo']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"><a href="#"><i class="fa fa-heart-o"></i>気になる!</a></div>
    </div>
    </div>
    
    
    
    <h2>募集要項</h2>
    
    <table class="detailTable">
        <tbody>
            <tr>
                <th>仕事内容</th>
                <td><?php echo nl2br($_smarty_tpl->tpl_vars['jobInfo']->value['description']);?>
</td>
                </tr>
            <tr>
                <th>勤務期間</th>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobInfo']->value['working_term'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                </tr>
            <tr>
                <th>勤務時間</th>
                <td itemprop="workHours"><?php echo nl2br($_smarty_tpl->tpl_vars['jobInfo']->value['working_hours']);?>
</td>
                </tr>
            <tr>
                <th>休日・休暇</th>
                <td><?php echo nl2br($_smarty_tpl->tpl_vars['jobInfo']->value['holiday']);?>
</td>
                </tr>
            <tr>
                <th>応募資格</th>
                <td itemprop="qualifications"><?php echo nl2br($_smarty_tpl->tpl_vars['jobInfo']->value['qualifications']);?>
</td>
                </tr>
            <tr>
                <th>給与</th>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobInfo']->value['salaryUnit'], ENT_QUOTES, 'UTF-8', true);
echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['jobInfo']->value['salary_min']), ENT_QUOTES, 'UTF-8', true);?>
 円 ～ <?php if ($_smarty_tpl->tpl_vars['jobInfo']->value['salary_max']) {
echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['jobInfo']->value['salary_max']), ENT_QUOTES, 'UTF-8', true);?>
 円<?php }?>
                    <br>
                    <?php echo nl2br($_smarty_tpl->tpl_vars['jobInfo']->value['salary_info']);?>
</td>
                </tr>
            <tr>
                <th>福利厚生・待遇</th>
                <td><?php echo nl2br($_smarty_tpl->tpl_vars['jobInfo']->value['condition_info']);?>
</td>
                </tr>
            <?php if ($_smarty_tpl->tpl_vars['jobInfo']->value['trial']) {?>
            <tr>
                <th>試用期間</th>
                <td><?php echo nl2br($_smarty_tpl->tpl_vars['jobInfo']->value['trial']);?>
</td>
                </tr>
            <?php }?>
            <tr>
                <th>就労ボーナス</th>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['jobInfo']->value['gift_money']||$_smarty_tpl->tpl_vars['jobInfo']->value['gift_money_info']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['jobInfo']->value['gift_money']) {?>
                    <div><?php echo htmlspecialchars(number_format($_smarty_tpl->tpl_vars['jobInfo']->value['gift_money']), ENT_QUOTES, 'UTF-8', true);?>
 円</div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['jobInfo']->value['gift_money_info']) {?>
                    <div><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobInfo']->value['gift_money_info'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <?php }?>
                    <?php } else { ?>
                    <div>当社規定あり※詳細はお問合せ下さい</div>
                    <?php }?>
                </td>
                </tr>
            <tr>
                <th>特長</th>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobInfo']->value['feature'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                </tr>
            </tbody>
    </table>
    
    <div class="entryBtCol2Box">
        
    <div class="entryBtCol2BoxL">
    <div class="detailMainEntryBt"><a href="/entry/input?jid=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobInfo']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
">かんたんWEB応募<i class="fa fa-pencil"></i></a></div>
    </div>
    <div class="detailMainSPTelBt"><a href="tel:0120979188"><span>電話で相談</span><div>0120-979-188</div></a></div>
    <div class="entryBtCol2BoxR">
    <div class="detailMainPCTel"><img src="/img/job/detail/detailtel.gif" width="475" height="65" alt=""/></div>
    <div class="telMoreInfo">
    <div class="receptionTime">受付：月～金曜　10～19時　土曜　10～17時</div>
    <div><span class="offerID">求人ID</span>:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobInfo']->value['rec_job_id'], ENT_QUOTES, 'UTF-8', true);?>
</div>
    </div>
    </div>
        
    </div>
    <div class="detailStudyBt studyBtOn jsStudyBtOn" data-del-jid="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobInfo']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"><a href="#"><i class="fa fa-heart"></i>気になる!</a></div>
    <div class="detailStudyBt jsStudyBtOff" data-add-jid="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobInfo']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"><a href="#"><i class="fa fa-heart-o"></i>気になる!</a></div>
    
    <h2>施設情報</h2>
    
    <table class="detailTable">
        <tbody>
            <?php if ($_smarty_tpl->tpl_vars['jobInfo']->value['hotels_name']) {?>
            <tr>
                <th itemprop="hiringOrganization">施設名</th>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobInfo']->value['hotels_name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                </tr>
            <?php }?>
            <tr>
                <th>施設区分</th>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobInfo']->value['facilityCategory'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                </tr>
            <tr>
                <th>勤務地（概要）</th>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobInfo']->value['place'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                </tr>
            <tr>
                <th>交通機関</th>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobInfo']->value['access'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                </tr>
            </tbody>
    </table>
    
    <?php if ($_smarty_tpl->tpl_vars['jobInfo']->value['is_live_in']) {?>
    <h2>寮・社宅情報</h2>
    
    <table class="detailTable">
        <tbody>
            <tr>
                <th>寮・社宅のポイント</th>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobInfo']->value['dormPoint'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                </tr>
            <tr>
                <th>寮・社宅の情報</th>
                <td><?php echo nl2br($_smarty_tpl->tpl_vars['jobInfo']->value['dorm_info']);?>
</td>
                </tr>
            </tbody>
    </table>
    <?php }?>
    
    <div class="gallery">
    <?php if ($_smarty_tpl->tpl_vars['imgFile']->value[2]) {?>
    <div><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imgFile']->value[2]['fileName'], ENT_QUOTES, 'UTF-8', true);?>
" width="320" height="320" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobInfo']->value['img2_comment'], ENT_QUOTES, 'UTF-8', true);?>
"/><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobInfo']->value['img2_comment'], ENT_QUOTES, 'UTF-8', true);?>
</span></div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['imgFile']->value[3]) {?>
    <div><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imgFile']->value[3]['fileName'], ENT_QUOTES, 'UTF-8', true);?>
" width="320" height="320" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobInfo']->value['img3_comment'], ENT_QUOTES, 'UTF-8', true);?>
"/><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobInfo']->value['img3_comment'], ENT_QUOTES, 'UTF-8', true);?>
</span></div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['imgFile']->value[4]) {?>
    <div><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['imgFile']->value[4]['fileName'], ENT_QUOTES, 'UTF-8', true);?>
" width="320" height="320" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobInfo']->value['img4_comment'], ENT_QUOTES, 'UTF-8', true);?>
"/><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobInfo']->value['img4_comment'], ENT_QUOTES, 'UTF-8', true);?>
</span></div>
    <?php }?>
    </div>
    
    
    
    <div class="entryBtCol2Box">
        
    <div class="entryBtCol2BoxL">
    <div class="detailMainEntryBt"><a href="/entry/input?jid=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobInfo']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
">かんたんWEB応募<i class="fa fa-pencil"></i></a></div>
    </div>
    <div class="detailMainSPTelBt"><a href="tel:0120979188"><span>電話で相談</span><div>0120-979-188</div></a></div>
    <div class="entryBtCol2BoxR">
    <div class="detailMainPCTel"><img src="/img/job/detail/detailtel.gif" width="475" height="65" alt=""/></div>
    <div class="telMoreInfo">
    <div class="receptionTime">受付：月～金曜　10～19時　土曜　10～17時</div>
    <div><span class="offerID">求人ID</span>:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobInfo']->value['rec_job_id'], ENT_QUOTES, 'UTF-8', true);?>
</div>
    </div>
    </div>
        
    </div>
    <div class="detailStudyBt studyBtOn jsStudyBtOn" data-del-jid="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobInfo']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"><a href="#"><i class="fa fa-heart"></i>気になる!</a></div>
    <div class="detailStudyBt jsStudyBtOff" data-add-jid="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jobInfo']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"><a href="#"><i class="fa fa-heart-o"></i>気になる!</a></div>
    
    
    <h3>この求人を見た人におすすめ</h3>
    
    <div class="recommendCards">
    <div class="cards-simple-wrapper">
        <div class="row">
            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recommendJobs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
            <div class="col-sm-6 col-md-3"> <a href="/job/detail/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
">
                <?php if ($_smarty_tpl->tpl_vars['row']->value['img']['fileName']) {?>
                <div class="card-simple" data-background-image="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['img']['fileName'], ENT_QUOTES, 'UTF-8', true);?>
" style=" background-image:url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['img']['fileName'], ENT_QUOTES, 'UTF-8', true);?>
);">
                <?php } else { ?>
                <div class="card-simple" data-background-image="/img/common/noimg/job_no_img.png" style=" background-image:url(/img/common/noimg/job_no_img.png);">
                <?php }?>
                    <div class="card-simple-background">
                        <?php if ($_smarty_tpl->tpl_vars['row']->value['isBonus']) {?>
                        <div class="card-simple-price">就労ボーナス付</div>
                        <?php }?>
                    </div>
                    <!-- /.card-simple-background --> 
                </div>
                <!-- /.card-simple --> 
                </a>
                <div class="cardListInfo"><span class="cardListPref"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['prefecture'], ENT_QUOTES, 'UTF-8', true);?>
</span><span class="cardListCategory"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['jobCategoryText'], ENT_QUOTES, 'UTF-8', true);?>
</span></div>
                <div class="cardListTitle"><a href="/job/detail/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</a></div>
                <div class="moreInfo">
                    <div><i class="fa fa-map-marker fa-fw"></i><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['city'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="subCardemploy"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['employmentStatusText'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <?php if ($_smarty_tpl->tpl_vars['row']->value['is_live_in']==1) {?><div class="subCardDormOK" itemprop="employmentType">寮・社宅完備</div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['is_live_in']==0) {?><div class="subCardDormNG" itemprop="employmentType">通勤・通い</div>
                    <?php }?>
                </div>
            </div>
            <!-- /.col-* -->
            <?php } ?>
            </div>
        </div>
    </div>
</div>

</div>
<!-- / WRAPPER --> 

<!-- フッター -->
<?php echo $_smarty_tpl->getSubTemplate (((string)@constant('HTDOCS_DIR'))."/templates/footer_common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- / フッター -->

</body>
</html><?php }} ?>

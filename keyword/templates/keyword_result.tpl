<!DOCTYPE html>
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
<script src="/js/vender/jquery.min.js" type="text/javascript"></script>
<script src="/js/vender/underscore.js" type="text/javascript"></script>
<script src="/js/vender/jquery.magnific-popup.js" type="text/javascript"></script>
<link rel="stylesheet" href="/js/vender/magnific-popup.css" type="text/css" media="screen">
<script src="/js/like.js" type="text/javascript"></script>
<script src="/js/job_list.js" type="text/javascript"></script>
<script src="/js/keyword_result.js" type="text/javascript"></script>
<title>求人一覧-ホテルズワーク</title>
<meta name="description" content="ホテル・旅館・リゾート求人の「ホテルズワーク」。宿泊施設に特化したアルバイト・正社員求人サイト">
<meta name="keywords" content="ホテル,旅館,求人,リゾート,バイト,正社員,アルバイト">
</head>
<body>

<!-- ヘッダー -->
{include file="`$smarty.const.HTDOCS_DIR`/templates/header_common.tpl"}
<!-- / ヘッダー -->

<div class="searchBox">
        <div class="listHeaderSearchBox"> 
<div class="wrapperSearch" data-jc="{$searchParam.jobCategory}" data-jd="{$searchParam.department}">
<form>
<div class="freeword listHeaderFW">
    <input type="text" value="{$searchWord}" name="keyword" id="s" placeholder="勤務地や職種等キーワードで探す">
    <input type="button" id="searchsubmit" class="jsSearchBtn" value="&#xf002;">
</div>
</form>
</div>

</div>

    </div>

<div id="wrapper">
    
    <div class="cards-simple-wrapper">
        <div class="row">
            {foreach from=$jobs item=row }
            <div class="col-sm-6 col-md-3" itemscope itemtype="http://schema.org/JobPosting"><a href="/job/detail/{$row.id}">
                {if $row.img.fileName}
                    <div class="card-simple" data-background-image="{$row.img.fileName}" style=" background-image:url({$row.img.fileName});" itemprop="image" content="https://hotelswork.net/{$row.img.fileName}">
                {else}
                <div class="card-simple" data-background-image="/img/common/noimg/job_no_img.png" style=" background-image:url(/img/common/noimg/job_no_img.png);">
                {/if}
                    <div class="card-simple-background">
                        {if $row.isBonus}
                        <div class="card-simple-price">就労ボーナス付</div>
                        {/if}
                    </div>
                    <!-- /.card-simple-background --> 
                </div>
                <!-- /.card-simple --> 
                </a>
                <div class="cardListInfo"><span class="cardListPref">{$row.prefecture}</span><span class="cardListCategory" itemprop="occupationalCategory">{$row.jobCategoryText}</span></div>
                <div class="cardListTitle" itemprop="title"><a href="/job/detail/{$row.id}">{$row.title}</a></div>
                <div class="moreInfo">
                    <div><i class="fa fa-map-marker fa-fw"></i>{$row.city}</div>
                    <div>
                        <i class="fa fa-jpy fa-fw"></i><span itemprop="baseSalary">{$row.salary_unit} {$row.salary_min|number_format}円～</span>
                    </div>
                    <div>{if $row.gift_money != null}<i class="fa fa-smile-o fa-fw"></i>祝い金 
                            {$row.gift_money|number_format} 円
                        {else}
                        &nbsp;
                        {/if}
                    </div>
                    <div class="subCardemploy" itemprop="employmentType">{$row.employmentStatusText}</div>
                    {if $row.is_live_in == 1}<div class="subCardDormOK" itemprop="employmentType">寮・社宅完備</div>
                    {else if $row.is_live_in == 0}<div class="subCardDormNG" itemprop="employmentType">通勤・通い</div>
                    {/if}
                </div>
                <div class="listBtBox">
                <div class="listStudyBt jsStudyBtOff half" data-add-jid="{$row.id}"><a href="#"><i class="fa fa-heart"></i>気になる</a></div>
                <div class="listStudyBt listStudyBtOn jsStudyBtOn half" data-del-jid="{$row.id}"><a href="#"><i class="fa fa-heart"></i>気になる</a></div>
                <div class="listTelBt half"><a href="tel:0120979188">電話相談</a></div>
                <div class="listDetailBt half"><a href="/job/detail/{$row.id}">詳細</a></div>
                </div>
                
            </div>
            <!-- /.col-* -->
            {/foreach}
            
            
        </div>
        <!-- /.row --> 
    </div>
    <!-- /.cards-simple-wrapper -->


    <ul class="pagerBox">
        <li class="pagerLeftBox">
            {if $pageInfo.prev}
            <a href="/search/result{$pageInfo.prevParam}"><div class="pre pageNaviOn">前の{$pageInfo.listNumByPage}件</div></a>
            {else}
            <div class="pre pageNaviOff">前の{$pageInfo.listNumByPage}件</div>
            {/if}
            
        </li>
        <li class="pagerMainBox">
                <span class="all">{$pageInfo.recordsNum}</span>件 <span>{$pageInfo.page}</span>/<span>{$pageInfo.pageNum}</span>
        </li>
        <li class="pagerRightBox">
            {if $pageInfo.next}
                <a href="/search/result/{$pageInfo.nextParam}"><div class="next pageNaviOn">次の{$pageInfo.listNumByPage}件</div></a>
            {else}
                <div class="next pageNaviOff">次の{$pageInfo.listNumByPage}件</div>
            {/if}
        </li>
    </ul>
</div>
<!-- / WRAPPER --> 

<!-- フッター -->
{include file="`$smarty.const.HTDOCS_DIR`/templates/footer_common.tpl"}
<!-- / フッター -->

</body>
</html>
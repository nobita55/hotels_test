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
<link rel="stylesheet" href="/css/special.css" type="text/css" media="screen">
<script src="/js/vender/jquery.min.js" type="text/javascript"></script>
<script src="/js/vender/underscore.js" type="text/javascript"></script>
<script src="/js/like.js" type="text/javascript"></script>
<script src="/js/job_list.js" type="text/javascript"></script>
<title>{if $specialInfo.page_title}{$specialInfo.page_title}{else}{$specialInfo.title}{/if}-ホテルズワーク</title>
<meta name="description" content="ホテル・旅館・リゾート求人の「ホテルズワーク」。宿泊施設に特化したアルバイト・正社員求人サイト">
<meta name="keywords" content="ホテル,旅館,求人,リゾート,バイト,正社員,アルバイト">
</head>
<body>

<!-- ヘッダー -->
{include file="`$smarty.const.HTDOCS_DIR`/templates/header_common.tpl"}
<!-- / ヘッダー -->

<div class="specialBox">
    <div class="specialBoxInner">
    {if $specialInfo.img}
    <div id="mainBanner">
        <div class="mainBannerFlame">
        <img src="{$specialInfo.img.fileName}" alt=""/>
        </div>
    </div>
    {/if}
        
    <div class="specialTitle"><h2>{if $specialInfo.page_title}{$specialInfo.page_title|nl2br nofilter}{else}{$specialInfo.title|nl2br nofilter}{/if}</h2></div>
    <p>{$specialInfo.comment|nl2br nofilter}</p>
    </div>
</div>
 
<div id="wrapper">
    <div class="cards-simple-wrapper">
        <div class="row">
            {foreach from=$jobs item=row }
            <div class="col-sm-6 col-md-3" itemscope itemtype="http://schema.org/JobPosting"> <a href="/job/detail/{$row.id}">
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
                    <div itemprop="baseSalary"><i class="fa fa-jpy fa-fw"></i>{$row.salary_unit} {$row.salary_min|number_format}円～</div>
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

</div>
<!-- / WRAPPER --> 


<!-- フッター -->
{include file="`$smarty.const.HTDOCS_DIR`/templates/footer_common.tpl"}
<!-- / フッター -->
</body>
</html>
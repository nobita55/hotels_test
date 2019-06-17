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
<title>特集一覧-ホテルズワーク</title>
<meta name="description" content="ホテル・旅館・リゾート求人の「ホテルズワーク」。宿泊施設に特化したアルバイト・正社員求人サイト">
<meta name="keywords" content="ホテル,旅館,求人,リゾート,バイト,正社員,アルバイト">
</head>
<body>

<!-- ヘッダー -->
{include file="`$smarty.const.HTDOCS_DIR`/templates/header_common.tpl"}
<!-- / ヘッダー -->

<div class="specialPageTitle">
    <div id="wrapperSpecial">
        <h2>特集一覧</h2>
    </div>
</div>
<div id="wrapper">
    <div class="cards-simple-wrapper">
        <div class="row">
            {foreach from=$specials item=row }
                <div class="col-sm-6 colSpecial" itemscope itemtype="http://schema.org/JobPosting">
                {if $row.img.fileName}
                <div class="card-simple" data-background-image="{$row.img.fileName}" style=" background-image:url({$row.img.fileName});" itemprop="image" content="https://hotelswork.net/{$row.img.fileName}">
                {else}
                <div class="card-simple" data-background-image="/img/common/noimg/special_no_img.png" style=" background-image:url(/img/common/noimg/special_no_img.png);">
                {/if}
                    <a href="/special/contens/{$row.id}">
                    <div class="card-simple-background special-background"></div>
                    <!-- /.card-simple-background --> 
                    </a> </div>
                <!-- /.card-simple -->
                <div class="moreSPInfo">
                    <div class="cardListSPTitle" itemprop="title"><a href="/special/contens/{$row.id}">{$row.title}</a></div>
                    <div class="cardListSPInfo">{$row.comment}</div>
                </div>
            </div>
            <!-- /.col-* -->
            {/foreach}            
        </div>
        <!-- /.row --> 
        
        <div class="specialListMoreBt"><a href="/special/more">もっと見る</a></div>
        
    </div>
    <!-- /.cards-simple-wrapper -->
    <ul class="pagerBox">
        <li class="pagerLeftBox">
            {if $pageInfo.prev}
            <a href="/special/list/{$pageInfo.prev}"><div class="pre pageNaviOn">前の{$pageInfo.listNumByPage}件</div></a>
            {else}
            <div class="pre pageNaviOff">前の{$pageInfo.listNumByPage}件</div>
            {/if}
            
        </li>
        <li class="pagerMainBox">
                <span class="all">{$pageInfo.recordsNum}</span>件 <span>{$pageInfo.page}</span>/<span>{$pageInfo.pageNum}</span>
        </li>
        <li class="pagerRightBox">
            {if $pageInfo.next}
                <a href="/special/list/{$pageInfo.next}"><div class="next pageNaviOn">次の{$pageInfo.listNumByPage}件</div></a>
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
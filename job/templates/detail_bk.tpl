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
<link rel="stylesheet" href="/css/jobdetail.css" type="text/css" media="screen">
<script src="/js/vender/jquery.min.js" type="text/javascript"></script>
<script src="/js/vender/underscore.js" type="text/javascript"></script>
<script src="/js/like.js" type="text/javascript"></script>
<script src="/js/job_detail.js" type="text/javascript"></script>
<title>仕事詳細-{$jobInfo.titleExcMark}-ホテルズワーク</title>
<meta name="keywords" content="ホテル,旅館,求人,リゾート,バイト,正社員,アルバイト">
<meta name="description" content="{$jobInfo.place}のお仕事、{$jobInfo.sub_title} 宿泊施設(ホテル・旅館・リゾート)に特化したアルバイト・正社員求人の「ホテルズワーク」">
</head>
<body>

<!-- ヘッダー -->
{include file="`$smarty.const.HTDOCS_DIR`/templates/header_common.tpl"}
<!-- / ヘッダー -->

<div id="wrapper" itemscope itemtype="http://schema.org/JobPosting">
 
    <div class="jobdetail">
    <div class="detailMainBox">
    <div class="detailMainBoxL">
    <div class="mainImg01">
        {if $imgFile.0}
            <img class="" width="475" height="475"  src="{$imgFile.0.fileName}" itemprop="image">
        {else}
            <img class="" width="475" height="475"  src="/img/common/noimg/job_no_img.png">
        {/if}
    </div>
    {if $imgFile.1}
    <div class="mainImg02"> <img class="" width="475" height="475" src="{$imgFile.1.fileName}" itemprop="image"></div>
    {/if}
    </div>
        
        
    <div class="detailMainBoxR">
    <div class="detailMainTitle" itemprop="title">{$jobInfo.title}</div>
        
    <div class="detailMainSubTitle">{$jobInfo.sub_title}</div>
        
    <p itemprop="description">
    {$jobInfo.job_pr|nl2br nofilter}
    </p>
        
    {if $jobInfo.is_live_in == 1}<div class="liveIn" itemprop="employmentType">寮・社宅の案件です。通勤・通いも可能です。ご相談ください。</div>
    {else if $jobInfo.is_live_in == 0}<div class="liveIn" itemprop="employmentType">寮・社宅が必要な方もご相談ください。</div>
    {/if}
        
    <div class="summaryTable">
    <table>
        <tbody>
            <tr>
                <th>勤務地（概要）</th>
                <td>{$jobInfo.place}</td>
                </tr>
            <tr>
                <th>職種</th>
                <td itemprop="occupationalCategory">{$jobInfo.jobCategory}</td>
                </tr>
            <tr>
                <th>雇用形態</th>
                <td itemprop="employmentType">{$jobInfo.employmentStatus}</td>
                </tr>
            <tr>
                <th>給与</th>
                <td itemprop="baseSalary">{$jobInfo.salaryUnit}{$jobInfo.salary_min|number_format} 円 ～ {if $jobInfo.salary_max}{$jobInfo.salary_max|number_format} 円{/if}</td>
                </tr>
            <tr>
                <th>就労ボーナス</th>
                <td>
                    {if $jobInfo.gift_money || $jobInfo.gift_money_info}
                    {if $jobInfo.gift_money}
                    <div>{$jobInfo.gift_money|number_format} 円</div>
                    {/if}
                    {if $jobInfo.gift_money_info}
                    <div>{$jobInfo.gift_money_info|nl2br nofilter}</div>
                    {/if}
                    {else}
                        <div>当社規定あり</div>
                    {/if}
                </td>
                </tr>
            <tr>
                <th>求人ID</th>
                <td>{$jobInfo.rec_job_id}</td>
                </tr>
            </tbody>
    </table></div>
        
    <div class="detailMainEntryBt"><a href="/entry/input?jid={$jobInfo.id}">かんたんWEB応募<i class="fa fa-pencil"></i></a></div>
    <div class="detailMainSPTelBt"><a href="tel:0120979188"><span>電話で相談</span><div>0120-979-188</div></a></div>
    <div class="detailMainPCTel"><img src="/img/job/detail/detailtel.gif" width="475" height="65" alt=""/></div>
    <div class="telMoreInfo">
    <div class="receptionTime">受付：月～金曜　10～19時　土曜　10～17時</div>
    <div><span class="offerID">求人ID</span>:{$jobInfo.rec_job_id}</div>
    </div>
    <div class="detailStudyBt studyBtOn jsStudyBtOn" data-del-jid="{$jobInfo.id}"><a href="#"><i class="fa fa-heart"></i>気になる!</a></div>
    <div class="detailStudyBt jsStudyBtOff" data-add-jid="{$jobInfo.id}"><a href="#"><i class="fa fa-heart-o"></i>気になる!</a></div>
    </div>
    </div>
    
    
    
    <h2>募集要項</h2>
    
    <table class="detailTable">
        <tbody>
            <tr>
                <th>仕事内容</th>
                <td>{$jobInfo.description|nl2br nofilter}</td>
                </tr>
            <tr>
                <th>勤務期間</th>
                <td>{$jobInfo.working_term}</td>
                </tr>
            <tr>
                <th>勤務時間</th>
                <td itemprop="workHours">{$jobInfo.working_hours|nl2br nofilter}</td>
                </tr>
            <tr>
                <th>休日・休暇</th>
                <td>{$jobInfo.holiday|nl2br nofilter}</td>
                </tr>
            <tr>
                <th>応募資格</th>
                <td itemprop="qualifications">{$jobInfo.qualifications|nl2br nofilter}</td>
                </tr>
            <tr>
                <th>給与</th>
                <td>{$jobInfo.salaryUnit}{$jobInfo.salary_min|number_format} 円 ～ {if $jobInfo.salary_max}{$jobInfo.salary_max|number_format} 円{/if}
                    <br>
                    {$jobInfo.salary_info|nl2br nofilter}</td>
                </tr>
            <tr>
                <th>福利厚生・待遇</th>
                <td>{$jobInfo.condition_info|nl2br nofilter}</td>
                </tr>
            {if $jobInfo.trial}
            <tr>
                <th>試用期間</th>
                <td>{$jobInfo.trial|nl2br nofilter}</td>
                </tr>
            {/if}
            <tr>
                <th>就労ボーナス</th>
                <td>
                    {if $jobInfo.gift_money || $jobInfo.gift_money_info}
                    {if $jobInfo.gift_money}
                    <div>{$jobInfo.gift_money|number_format} 円</div>
                    {/if}
                    {if $jobInfo.gift_money_info}
                    <div>{$jobInfo.gift_money_info}</div>
                    {/if}
                    {else}
                    <div>当社規定あり※詳細はお問合せ下さい</div>
                    {/if}
                </td>
                </tr>
            <tr>
                <th>特長</th>
                <td>{$jobInfo.feature}</td>
                </tr>
                            <tr>
                <th>更新日</th>
                <td>{$smarty.now|date_format:'%Y/%m/%d'}</td>
                </tr>
            </tbody>
    </table>
    
    <div class="entryBtCol2Box">
        
    <div class="entryBtCol2BoxL">
    <div class="detailMainEntryBt"><a href="/entry/input?jid={$jobInfo.id}">かんたんWEB応募<i class="fa fa-pencil"></i></a></div>
    </div>
    <div class="detailMainSPTelBt"><a href="tel:0120979188"><span>電話で相談</span><div>0120-979-188</div></a></div>
    <div class="entryBtCol2BoxR">
    <div class="detailMainPCTel"><img src="/img/job/detail/detailtel.gif" width="475" height="65" alt=""/></div>
    <div class="telMoreInfo">
    <div class="receptionTime">受付：月～金曜　10～19時　土曜　10～17時</div>
    <div><span class="offerID">求人ID</span>:{$jobInfo.rec_job_id}</div>
    </div>
    </div>
        
    </div>
    <div class="detailStudyBt studyBtOn jsStudyBtOn" data-del-jid="{$jobInfo.id}"><a href="#"><i class="fa fa-heart"></i>気になる!</a></div>
    <div class="detailStudyBt jsStudyBtOff" data-add-jid="{$jobInfo.id}"><a href="#"><i class="fa fa-heart-o"></i>気になる!</a></div>
    
    <h2>施設情報</h2>
    
    <table class="detailTable">
        <tbody>
            {if $jobInfo.hotels_name}
            <tr>
                <th itemprop="hiringOrganization">施設名</th>
                <td>{$jobInfo.hotels_name}</td>
                </tr>
            {/if}
            <tr>
                <th>施設区分</th>
                <td>{$jobInfo.facilityCategory}</td>
                </tr>
            <tr>
                <th>勤務地（概要）</th>
                <td>{$jobInfo.place}</td>
                </tr>
            <tr>
                <th>交通機関</th>
                <td>{$jobInfo.access}</td>
                </tr>
            </tbody>
    </table>
    
    {if $jobInfo.is_live_in}
    <h2>寮・社宅情報</h2>
    
    <table class="detailTable">
        <tbody>
            <tr>
                <th>寮・社宅のポイント</th>
                <td>{$jobInfo.dormPoint}</td>
                </tr>
            <tr>
                <th>寮・社宅の情報</th>
                <td>{$jobInfo.dorm_info|nl2br nofilter}</td>
                </tr>
            </tbody>
    </table>
    {/if}
    
    <div class="gallery">
    {if $imgFile.2}
    <div><img src="{$imgFile.2.fileName}" width="320" height="320" alt="{$jobInfo.img2_comment}"/><span>{$jobInfo.img2_comment}</span></div>
    {/if}
    {if $imgFile.3}
    <div><img src="{$imgFile.3.fileName}" width="320" height="320" alt="{$jobInfo.img3_comment}"/><span>{$jobInfo.img3_comment}</span></div>
    {/if}
    {if $imgFile.4}
    <div><img src="{$imgFile.4.fileName}" width="320" height="320" alt="{$jobInfo.img4_comment}"/><span>{$jobInfo.img4_comment}</span></div>
    {/if}
    </div>
    
    
    
    <div class="entryBtCol2Box">
        
    <div class="entryBtCol2BoxL">
    <div class="detailMainEntryBt"><a href="/entry/input?jid={$jobInfo.id}">かんたんWEB応募<i class="fa fa-pencil"></i></a></div>
    </div>
    <div class="detailMainSPTelBt"><a href="tel:0120979188"><span>電話で相談</span><div>0120-979-188</div></a></div>
    <div class="entryBtCol2BoxR">
    <div class="detailMainPCTel"><img src="/img/job/detail/detailtel.gif" width="475" height="65" alt=""/></div>
    <div class="telMoreInfo">
    <div class="receptionTime">受付：月～金曜　10～19時　土曜　10～17時</div>
    <div><span class="offerID">求人ID</span>:{$jobInfo.rec_job_id}</div>
    </div>
    </div>
        
    </div>
    <div class="detailStudyBt studyBtOn jsStudyBtOn" data-del-jid="{$jobInfo.id}"><a href="#"><i class="fa fa-heart"></i>気になる!</a></div>
    <div class="detailStudyBt jsStudyBtOff" data-add-jid="{$jobInfo.id}"><a href="#"><i class="fa fa-heart-o"></i>気になる!</a></div>
    
    
    <h3>この求人を見た人におすすめ</h3>
    
    <div class="recommendCards">
    <div class="cards-simple-wrapper">
        <div class="row">
            {foreach from=$recommendJobs item=row }
            <div class="col-sm-6 col-md-3"> <a href="/job/detail/{$row.id}">
                {if $row.img.fileName}
                <div class="card-simple" data-background-image="{$row.img.fileName}" style=" background-image:url({$row.img.fileName});">
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
                <div class="cardListInfo"><span class="cardListPref">{$row.prefecture}</span><span class="cardListCategory">{$row.jobCategoryText}</span></div>
                <div class="cardListTitle"><a href="/job/detail/{$row.id}">{$row.title}</a></div>
                <div class="moreInfo">
                    <div><i class="fa fa-map-marker fa-fw"></i>{$row.city}</div>
                    <div class="subCardemploy">{$row.employmentStatusText}</div>
                    {if $row.is_live_in == 1}<div class="subCardDormOK" itemprop="employmentType">寮・社宅完備</div>
                    {else if $row.is_live_in == 0}<div class="subCardDormNG" itemprop="employmentType">通勤・通い</div>
                    {/if}
                </div>
            </div>
            <!-- /.col-* -->
            {/foreach}
            </div>
        </div>
    </div>
</div>

</div>
<!-- / WRAPPER --> 

<!-- フッター -->
{include file="`$smarty.const.HTDOCS_DIR`/templates/footer_common.tpl"}
<!-- / フッター -->

</body>
</html>
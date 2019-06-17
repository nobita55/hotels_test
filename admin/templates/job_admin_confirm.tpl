<!DOCTYPE html>
<html>
    <head>
        <title>ホテルズワーク管理 | 求人情報管理</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/normalize.css" rel="stylesheet" type="text/css"/>
        <link href="css/admin.css" rel="stylesheet" type="text/css"/>
        <link href="css/admin_job_confirm.css" rel="stylesheet" type="text/css"/>
        <script src="js/vender/jquery.js" type="text/javascript"></script>
        <link href="js/vender/dist/sweetalert.css" rel="stylesheet" type="text/css">
        <script src="js/vender/dist/sweetalert.min.js"></script>
    </head>
    <body>
        <header class="header">
            <h2 class="topTextJobEdit"><a href="./index.html" class="linkTop">ホテルズワーク管理</a> <span class="topTextSep">|</span> 
                <span class="topToolName">
                    {if $formType=='edit'}
                    求人情報変更 確認画面
                    {else}
                    求人情報新規入力 確認画面
                    {/if}
                </span>
            </h2>
        </header>
        <div class="container cBg">
            <div class="contents">
                <form name="form1" method="POST" action="/admin/job_admin_edit.php" enctype="multipart/form-data">
                    <input type="hidden" name="mode" value="{$formParams.mode}">
                    <input type="hidden" name="jid" value="{$formParams.jobId}">
                    <div class="main">
                        <div class="leftBox">
                            <div class="rowTitleLarge">
                                <div class="w600 borR mailLinkBox">
                                    <div class="mailLinkTitle">求人情報 
                                    </div>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w200">求人情報ID</div>
                                <div class="w160">担当</div>
                                <div class="w120">ステータス</div>
                                <div class="w120 borR">リゾート指定</div>
                            </div>
                            <div class="rowContents">
                                <div class="w200">{$formParams.recJobId}</div>
                                <div class="w160">{$formParams.centralManager}</div>
                                <div class="w120">{$formParams.statusText}</div>
                                <div class="w120 borR">
                                    {if $formParams.isResort}
                                    リゾート求人
                                    {else}
                                    一般求人
                                    {/if}
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w200">登録日</div>
                                <div class="w400 borR">募集期限</div>
                            </div>
                            <div class="rowContents">
                                <div class="w200">{$formParams.registDate}</div>
                                <div class="w400 borR">{$formParams.expire}</div>
                            </div>
                            <div class="rowTitle">
                                <div class="w200">更新日</div>
                                <div class="w400 borR"><span class="must">【必須】 </span>並び用日時</div>
                            </div>
                            <div class="rowContents">
                                <div class="w200">{$formParams.update}
                                </div>
                                <div class="w400 borR">
                                    {$formParams.sortDate}
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR"><span class="must">【必須】 </span>雇用形態</div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">    
                                    {$formParams.employmentStatus}
                                </div>
                            </div>
                            <div class="rowTitle jsGeneralParam">
                                <div class="w600 borR">職種[一般求人]</div>
                            </div>
                            <div class="rowContents jsGeneralParam">
                                <div class="w600 borR">
                                {foreach from=$formParams.jobCategoryCkList item=fcat}
                                {if !empty($fcat.margeParams)}
                                    <div class="tdh"><strong>{$fcat.catName}</strong><br>{$fcat.margeParams}</div>
                                {/if}
                                {/foreach}
                                </div>
                            </div>
                            <div class="rowTitleLarge">
                                <div class="w600 borR">勤務先情報</div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR">親会社 施設等<span class="caution">※管理用</span>
                                </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    {$formParams.companyNameHush}
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR">施設名<span class="caution">※表示用</span>
                                </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    {$formParams.hotelsName}
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR"><span class="must">【必須】 </span>施設区分
                                </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    {$formParams.facilityCategoryCkList}
                                </div>
                            </div>
                              <div class="rowTitle">
                                <div class="w200"><span class="must">【必須】 </span>都道府県</div>
                                <div class="w400 borR"><span class="must">【必須】 </span>勤務地(市町村名等)</div>
                            </div>
                            <div class="rowContents">
                                <div class="w200">
                                    {$formParams.prefecture}
                                </div>
                                <div class="w400 borR">
                                    {$formParams.city}
                                </div>
                            </div>                              
                            <div class="rowTitle">
                                <div class="w600 borR">交通機関
                                </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                     {$formParams.access}
                                </div>
                            </div>
                            <div class="rowTitleLarge">
                                <div class="w600 borR">タイトルおよび仕事アピール情報</div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR"><span class="must">【必須】 </span>タイトル 
                                </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    {$formParams.title}
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR"><span class="must">【必須】 </span>サブタイトル 
                                </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    {$formParams.subTitle}
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR">メインの本文 </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR borB">
                                    {{$formParams.jobPr}|nl2br nofilter}
                                </div>
                            </div>
                        </div>
                        <div class="centerBox">
                            <div class="rowTitleLarge">
                            <div class="w600 borR">募集要項</div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR">仕事内容 </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    {{$formParams.description}|nl2br nofilter}
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR">勤務期間
                                </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    {$formParams.workingTermCkList}
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR"><span class="must">【必須】 </span>勤務時間 </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                     {{$formParams.workingHours}|nl2br nofilter}
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR"><span class="must">【必須】 </span>休日・休暇 </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                     {{$formParams.holiday}|nl2br nofilter}
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR"><span class="must">【必須】 </span>応募資格・応募条件 </span></div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                     {{$formParams.qualifications}|nl2br nofilter}
                                </div>
                            </div>
                            <div class="rowTitleLarge">
                                <div class="w600 borR">給与・待遇</div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR"><span class="must">【必須】 </span>給与の下限と上限</div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    {$formParams.salaryUnit} {$formParams.salaryMin}円{if !empty($formParams.salaryMax)}～{$formParams.salaryMax}円{/if}
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR">給与説明 </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    {{$formParams.salaryInfo}|nl2br nofilter}
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR"><span class="must">【必須】 </span>福利厚生・待遇 </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    {{$formParams.conditionInfo}|nl2br nofilter}
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR">試用期間 </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    {{$formParams.trial}|nl2br nofilter}
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR">就労ボーナス</div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    {if !empty($formParams.giftMoney)}{$formParams.giftMoney}円{/if}
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR">就労ボーナス説明 </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR borB">
                                    {{$formParams.giftMoneyInfo}|nl2br nofilter}
                                </div>
                            </div>
                           
                        </div>

                        <div class="rightBox">
                             <div class="rowTitleLarge">
                                <div class="w400 borR">寮・社宅の情報</div>
                            </div>    
                            <div class="rowTitle">
                                <div class="w400 borR">住み込み</div>
                            </div>
                            <div class="rowContents">
                                <div class="w400 borR">
                                    {if $formParams.isLiveIn}
                                    住み込み可（寮・社宅完備または館内住み込み） 
                                    {/if}
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w400 borR">寮・社宅のポイント</div>
                            </div>
                            <div class="rowContents">
                                <div class="w400 borR">
                                    {$formParams.dormPointCkList}
                                </div>
                            </div>    
                            <div class="rowTitle">
                                <div class="w400 borR">寮・社宅の情報</div>
                            </div>
                            <div class="rowContents">
                                <div class="w400 borR">
                                    {{$formParams.dormInfo}|nl2br nofilter}
                                </div>
                            </div>    
                            <div class="rowTitleLarge">
                                <div class="w400 borR">特長</div>
                            </div>
                            <div class="rowTitle jsGeneralParam">
                                <div class="w400 borR">特徴</div>
                            </div>
                            <div class="rowContents jsGeneralParam">
                                <div class="w400 borR">
                                {foreach from=$formParams.featureCkList item=fcat}
                                {if !empty($fcat.margeParams)}
                                    <div class="tdh"><strong>{$fcat.catName}</strong><br>{$fcat.margeParams}</div>
                                {/if}
                                {/foreach}
                                </div>
                            </div>
                            <div class="rowTitleLarge">
                                <div class="w400 borR">操作</div>
                            </div>
                            <div class="rowContents">
                                <div class="w400 borR borB btnArea">
                                    <div>
                                    <input type="submit" name="submit" value="戻る">　　　
                                    <input type="submit" name="submit" value="この内容で保存する">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script src="js/admin.js" type="text/javascript"></script>
    </body>  
</html>

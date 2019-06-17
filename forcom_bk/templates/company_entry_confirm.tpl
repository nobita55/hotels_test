<!DOCTYPE html>
<html>
    <head>
        <title>セントラルクルー | 求人申し込みフォーム</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/forcom_bk/css/normalize.css" rel="stylesheet" type="text/css"/>
        <link href="/forcom_bk/css/admin.css" rel="stylesheet" type="text/css"/>
        <link href="/forcom_bk/css/company_entry.css" rel="stylesheet" type="text/css"/>
        <script src="/forcom_bk/js/vender/jquery.js" type="text/javascript"></script>
    </head>
    <body>
        <header class="header">
            <h2 class="topTextJobEdit">
                求人申込書 確認画面
            </h2>
        </header>
        <div class="container cBg">
            <div class="contents">
                <form id="form1" name="form1" method="POST" action="/forcom_bk/confirm" enctype="multipart/form-data">
                    <div class="main">
                        <div class="leftBox">
                            <div class="rowTitleLarge">
                                <div class="w900 borR">
                                    <div class="mailLinkTitle">求人情報
                                    </div>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w450"><span class="must">【必須】 </span>企業名</div>
                                <div class="w450 borR"><span class="must">【必須】 </span>施設名(勤務先)</div>
                            </div>
                            <div class="rowContents">
                                <div class="w450">
                                    {$formParams.companyName}
                                </div>
                                <div class="w450 borR">
                                    {$formParams.facilityName}
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w450"><span class="must">【必須】 </span>本社住所</div>
                                <div class="w450 borR"><span class="must">【必須】 </span>勤務先住所</div>

                            </div>
                            <div class="rowContents">
                                <div class="w450">
                                    <table>
                                        <tr><td class="leftCell">郵便番号</td>
                                            <td class="rightCell">
                                                <div class="jsFormPostcode">
                                                    {$formParams.companyPostcode}
                                                </div>
                                            </td>
                                        </tr>
                                        <tr><td class="leftCell">都道府県</td>
                                            <td class="rightCell">
                                                <div class="companyPrefecture">
                                                 {$formParams.companyPrefecture}
                                                </div>
                                            </td>
                                        </tr>
                                        <tr><td class="leftCell">住所</td>
                                            <td class="rightCell">
                                                <div class="jsFormAddress">
                                                    {{$formParams.companyAddress}|nl2br nofilter}
                                                </div>
                                            </td>
                                        </tr>
                                        <tr><td class="leftCell">TEL</td>
                                            <td class="rightCell">
                                                <div class="jsFormAddress">
                                                    {$formParams.companyTel}
                                                </div>
                                            </td>
                                        </tr>
                                        <tr><td class="leftCell">FAX</td>
                                            <td class="rightCell">
                                                <div class="jsFormAddress">
                                                     {$formParams.companyFax}
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                   
                                </div>
                                <div class="w450 borR">
                                    {if $formParams.facilitySame}
                                        本社住所と同じ
                                    {else}
                                    <table>
                                        <tr><td class="leftCell">郵便番号</td>
                                            <td class="rightCell">
                                                <div class="jsFormPostcode">
                                                    {$formParams.facilityPostcode}
                                                </div>
                                            </td>
                                        </tr>
                                        <tr><td class="leftCell">都道府県</td>
                                            <td class="rightCell">
                                                <div class="jsFormPrefecture">
                                                {$formParams.facilityPrefecture}
                                                </div>
                                            </td>
                                        </tr>
                                        <tr><td class="leftCell">住所</td>
                                            <td class="rightCell">
                                                <div class="jsFormAddress">
                                                   {{$formParams.facilityAddress}|nl2br nofilter}
                                                </div>
                                            </td>
                                        </tr>
                                        <tr><td class="leftCell">TEL</td>
                                            <td class="rightCell">
                                                <div class="jsFormAddress">
                                                    {$formParams.facilityTel}
                                                </div>
                                            </td>
                                        </tr>
                                        <tr><td class="leftCell">FAX</td>
                                            <td class="rightCell">
                                                <div class="jsFormAddress">
                                                    {$formParams.facilityFax}
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                     {/if}
                                </div>
                            </div>
                            <div class="rowTitleLarge">
                                <div class="w900 borR">
                                    <div class="mailLinkTitle">ご担当者様情報
                                    </div>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w200">部署</div>
                                <div class="w200">役職</div>
                                <div class="w250"><span class="must">【必須】 </span>担当者名</div>
                                <div class="w250 borR">携帯番号</div>
                            </div>
                            <div class="rowContents">
                                <div class="w200">
                                    {$formParams.department}
                                </div>
                                <div class="w200">
                                    {$formParams.title}
                                </div>
                                <div class="w250">
                                    {$formParams.name}
                                </div>
                                <div class="w250 borR">
                                    {$formParams.mobile}
                                </div>
                            </div>
                            <div class="rowTitleLarge">
                                <div class="w900 borR">
                                    <div class="mailLinkTitle">募集要件
                                    </div>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w300"><span class="must">【必須】 </span>求人数</div>
                                <div class="w600 borR"><span class="must">【必須】 </span>有効求人期間<span class="caution"> ※半角数字のみ</span></div>
                            </div>
                            <div class="rowContents">
                                <div class="w300">
                                    {$formParams.needNum} 人
                                </div>
                                <div class="w600 borR">
                                    {if $formParams.termOpen}
                                        随時相談可能
                                    {else}
                                        {$formParams.termFrom}　～　{$formParams.termTo}
                                    {/if}
                                </div>
                            </div>
                            <div class="rowTitleLarge">
                                <div class="w900 borR">勤怠情報</div>
                            </div>
                            <div class="rowTitle">
                                <div class="w900 borR"><span class="must">【必須】 </span>雇用形態</div>
                            </div>
                            <div class="rowContents">
                                <div class="w900 borR">
                                    {$formParams.employmentStatus}
                                </div>
                            </div>
                            <div class="rowTitle jsGeneralParam">
                                <div class="w900 borR"><span class="must">【必須】 </span>職種 <span class="caution"> ※複数選択可</span></div>
                            </div>
                            <div class="rowContents jsGeneralParam">
                                <div class="w900 borR">
                                {foreach from=$formParams.jobCategoryCkList item=fcat}
                                {if !empty($fcat.margeParams)}
                                    <div class="tdh"><strong>{$fcat.catName}</strong><br>{$fcat.margeParams}</div>
                                {/if}
                                {/foreach}
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w450"><span class="must">【必須】 </span>仕事内容</div>
                                <div class="w450 borR"><span class="must">【必須】 </span>勤務時間</div>
                            </div>
                            <div class="rowContents">
                                <div class="w450">
                                    {{$formParams.description}|nl2br nofilter}
                                </div>
                                <div class="w450 borR">
                                    {{$formParams.workingHours}|nl2br nofilter}
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w450"><span class="must">【必須】 </span>休日・ 休暇</div>
                                <div class="w450 borR">必要な経験・資格 </div>
                            </div>
                            <div class="rowContents">
                                <div class="w450">
                                    {{$formParams.holiday}|nl2br nofilter}
                                </div>
                                <div class="w450 borR">
                                    {{$formParams.qualifications}|nl2br nofilter}
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w450"><span class="must">【必須】 </span>給与形態</div>
                                <div class="w450 borR">福利厚生・待遇</div>
                            </div>
                            <div class="rowContents">
                                <div class="w450">
                                    {$formParams.salaryUnit} {$formParams.salaryMin}円{if !empty($formParams.salaryMax)}～{$formParams.salaryMax}円{/if}
                                    <br>
                                    {$formParams.salaryInfo}
                                </div>
                                <div class="w450 borR">
                                    {{$formParams.conditionInfo}|nl2br nofilter}
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w450">就労時必要物</div>
                                <div class="w450 borR">その他特記事項</div>
                            </div>
                            <div class="rowContents">
                                <div class="w450">
                                    {{$formParams.needItem}|nl2br nofilter}
                                </div>
                                <div class="w450 borR">
                                    {{$formParams.memo}|nl2br nofilter}
                                </div>
                            </div>
                            <div class="rowTitleLarge">
                                <div class="w900 borR">寮・社宅の情報</div>
                            </div>
                            <div class="rowTitle">
                                <div class="w450">寮・社宅のポイント</div>
                                <div class="w450 borR">寮・社宅の情報</div>
                            </div>
                            <div class="rowContents">
                                <div class="w450">
                                    {$formParams.dormPointCkList}
                                </div>
                                <div class="w450 borR">
                                    {{$formParams.dormInfo}|nl2br nofilter}
                                </div>
                            </div>    
                            <div class="rowContents">
                                <div class="w900 borR borB btnArea">
                                    <div>
                                    <input type="button" onclick="location.href='/forcom_bk/change'" name="back"  value="修正する">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="submit" name="submit" value="この内容で申し込む">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script src="/forcom_bk/js/admin.js" type="text/javascript"></script>
        <script src="/forcom_bk/js/company_entry.js" type="text/javascript"></script>
    </body>  
</html>

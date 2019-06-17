<!DOCTYPE html>
<html>
    <head>
        <title>ホテルズワーク管理 | 求人情報管理</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/normalize.css" rel="stylesheet" type="text/css"/>
        <link href="css/admin.css" rel="stylesheet" type="text/css"/>
        <link href="css/admin_job_edit.css" rel="stylesheet" type="text/css"/>
        <script src="js/vender/jquery.js" type="text/javascript"></script>
        <link href="js/vender/dist/sweetalert.css" rel="stylesheet" type="text/css">
        <script src="js/vender/dist/sweetalert.min.js"></script>
    </head>
    <body>
        <header class="header">
            <h2 class="topTextJobEdit"><a href="./index.html" class="linkTop">ホテルズワーク管理</a> <span class="topTextSep">|</span> 
                <span class="topToolName">
                    {if $formType=='edit'}
                    求人情報変更
                    {else}
                    求人情報新規入力
                    {/if}
                </span>
            </h2>
        </header>
        <div class="container cBg">
            <div class="contents">
                <form id="form1" name="form1" method="POST" action="/admin/job_admin_edit.php" enctype="multipart/form-data">
                    <input type="hidden" name="mode" value="{$formParams.mode}">
                    <input type="hidden" name="jid" value="{$formParams.jobId}">
                    {if $errFlag.master}
                    <div class="masterError">入力内容にエラーがあります</div>
                    {/if}
                    <div class="main">
                        <div class="leftBox">
                            <div class="rowTitleLarge">
                                <div class="w600 borR mailLinkBox">
                                    <div class="mailLinkTitle">求人情報
                                    </div>
                                    <div class="mailLink">
                                        {if !empty($formParams.jobId)}
                                        <a class="euplink copyJob" href="./job_admin_edit.php?mode=copy&jid={$formParams.jobId}">原稿コピー</a>　
                                        {/if}
                                    </div>
                                </div>
                            </div>
                            <div class="rowTitle">
                                
                                <div class="w200"><span class="must">【必須】 </span>求人ID<span class="caution">※半角英数</span></div>
                                <div class="w160">担当</div>
                                <div class="w120">ステータス</div>
                                <div class="w120 borR">リゾート指定</div>
                            </div>
                            <div class="rowContents">
                                <div class="w200">
                                    <input type="text" class="recJobId" size="20" maxlength="20" name="recJobId" value="{$formParams.recJobId}">
                                    {if $errFlag.recJobId}
                                    <div class="error">{$errMessage.recJobId}</div>
                                    {/if}
                                    </div>
                                <div class="w160">
                                    <select name="centralManager" class="jsManager">
                                        <option value="0">選択してください</option>
                                        {foreach from=$formParams.centralManagerList item=row }
                                        <option value="{$row.itemVal}" {$row.selected}>{$row.itemName}</option>
                                        {/foreach}
                                    </select>
                                </div>
                                <div class="w120">
                                    {$formParams.statusText}
                                </div>
                                <div class="w120 borR">
                                    <label for="isResort">
                                    <div>
                                    <input type="checkbox" name="isResort" class="isResort" id="isResort" value="1" {$formParams.isResortChecked}><label for="isResort">リゾート求人</label>
                                    </div>
                                    </label>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w200">登録日</div>
                                <div class="w400 borR">募集期限<span class="caution">※カレンダーが表示されない場合半角で入力</span></div>
                            </div>
                            <div class="rowContents">
                                <div class="w200">{$formParams.registDate}</div>
                                <div class="w400 borR">
                                    <input type="date" class="expire" name="expire" value="{$formParams.expire}"> 入力形式例：2016-01-01
                                    {if $errFlag.expire}
                                    <div class="error">{$errMessage.expire}</div>
                                    {/if}
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w200">更新日</div>
                                <div class="w400 borR"><span class="must">【必須】 </span>並び用日時</div>
                            </div>
                            <div class="rowContents">
                                <div class="w200">{$formParams.update}
                                </div>
                                <div class="w400 borR">
                                    <input type="text" class="sortDate" size="20" maxlength="20" name="sortDate" value="{$formParams.sortDate}">
                                    <input type="button" class="jsSortdateNowBtn" value="最新に変更">
                                    {if $errFlag.sortDate}
                                    <div class="error">{$errMessage.sortDate}</div>
                                    {/if}
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR"><span class="must">【必須】 </span>雇用形態</div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">    
                                    <input type="radio" name="employmentStatus" id="select1" value="1" {$formParams.employmentStatusChecked.1}>
                                    <label for="select1">派遣スタッフ</label>
                                    <input type="radio" name="employmentStatus" id="select2" value="2" {$formParams.employmentStatusChecked.2}>
                                    <label for="select2">職業紹介</label>
                                    <input type="radio" name="employmentStatus" id="select3" value="3" {$formParams.employmentStatusChecked.3}>
                                    <label for="select3">紹介予定派遣</label>
                                    <input type="radio" name="employmentStatus" id="select4" value="4" {$formParams.employmentStatusChecked.4}>
                                    <label for="select4">常用目的紹介</label>
                                    <input type="radio" name="employmentStatus" id="select5" value="5" {$formParams.employmentStatusChecked.5}>
                                    <label for="select5">社員紹介</label>
                                    <!--
                                    <input type="radio" name="employmentStatus" id="select6" value="6" {$formParams.employmentStatusChecked.6}>
                                    <label for="select6">その他</label>
                                    -->
                                    {if $errFlag.employmentStatus}
                                    <div class="error">{$errMessage.employmentStatus}</div>
                                    {/if}
                                </div>
                            </div>
                            <div class="rowTitle jsGeneralParam">
                                <div class="w600 borR"><span class="must">【必須】 </span>職種</div>
                            </div>
                            <div class="rowContents jsGeneralParam">
                                <div class="w600 borR">
                                    <ul class="checkBoxListSmall">
                                        {foreach from=$formParams.jobCategoryCkList item=fcat }
                                        <!-- サブカテゴリー分ループ -->
                                        <li class="checkBoxListCategory">{$fcat.catName} <a href="" class="euplinkSmall jsJcCheckAll{$fcat.catNo}">[全て]</a>　<a href="" class="euplinkSmall jsJcCheckClear{$fcat.catNo}">[解除]</a></li>
                                        {foreach from=$fcat.item item=row }
                                        <!-- チェックボックス分ループ -->
                                        <label for="jobCategory{$row.itemVal}">
                                        <li><input type="checkbox" class="jsDepartmentCheck{$fcat.catNo}" name="jobCategory[]" id="jobCategory{$row.itemVal}" value="{$row.itemVal}" {$row.checked}>
                                        {$row.itemName} 
                                        </li></label>
                                        {/foreach}
                                        <!-- チェックボックス分ループ -->
                                        <!-- サブカテゴリー分ループ -->
                                        {/foreach}  
                                     </ul>
                                    {if $errFlag.jobCategory}
                                    <div class="error">{$errMessage.jobCategory}</div>
                                    {/if}
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR">役職</div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <ul class="checkBoxList">
                                    {foreach from=$formParams.positionCkList item=row }
                                    <label for="position{$row.itemVal}">
                                    <li><input type="checkbox" name="position[]" id="position{$row.itemVal}" value="{$row.itemVal}" {$row.checked}>
                                    {$row.itemName} 
                                    </li></label>
                                    {/foreach}
                                     </ul>
                                    {if $errFlag.position}
                                    <div class="error">{$errMessage.position}</div>
                                    {/if}
                                </div>
                            </div>
                            <div class="rowTitleLarge">
                                <div class="w600 borR">勤務先情報</div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR">親会社 施設等<span class="caution">※管理用</span><span class="notes">　※残り<span class="remainCompanyNameHush">100</span>文字</span>
                                </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <input type="text" name="companyNameHush" size="80" maxlength="200" value="{$formParams.companyNameHush}" class="w600input">
                                    {if $errFlag.companyNameHush}
                                    <div class="error">{$errMessage.companyNameHush}</div>
                                    {/if}
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR">施設名<span class="caution">※表示用</span><span class="notes">　※残り<span class="remainHotelsName">60</span>文字</span>
                                </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <input type="text" name="hotelsName" size="80" maxlength="200" value="{$formParams.hotelsName}" class="w600input">
                                    {if $errFlag.hotelsName}
                                    <div class="error">{$errMessage.hotelsName}</div>
                                    {/if}
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR"><span class="must">【必須】 </span>施設区分
                                </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <ul class="checkBoxList">
                                    {foreach from=$formParams.facilityCategoryCkList item=row }
                                    <label for="facility{$row.itemVal}">
                                    <li><input type="checkbox" name="facilityCategory[]" id="facility{$row.itemVal}" value="{$row.itemVal}" {$row.checked}>
                                    {$row.itemName} 
                                    </li>
                                    </label>
                                    {/foreach}
                                     </ul>
                                    {if $errFlag.facilityCategory}
                                    <div class="error">{$errMessage.facilityCategory}</div>
                                    {/if}
                                </div>
                            </div>
                              <div class="rowTitle">
                                <div class="w200"><span class="must">【必須】 </span>都道府県</div>
                                <div class="w400 borR"><span class="must">【必須】 </span>勤務地(市町村名等)<span class="notes">　※残り<span class="remainCity">12</span>文字</span></div>
                            </div>
                            <div class="rowContents">
                                <div class="w200">
                                    <select name="prefecture" class="prefecture">
                                    <option value="0">選択してください</option>
                                    {foreach from=$formParams.prefectureList item=row }
                                        <option value="{$row.itemVal}" {$row.selected}>{$row.itemName}</option>
                                    {/foreach}
                                    </select>
                                    {if $errFlag.prefecture}
                                    <div class="error">{$errMessage.prefecture}</div>
                                    {/if}
                                    </div>
                                <div class="w400 borR">
                                    <input type="text" name="city" size="30" maxlength="30" value="{$formParams.city}">
                                    {if $errFlag.city}
                                    <div class="error">{$errMessage.city}</div>
                                    {/if}
                                </div>
                            </div>                              
                            <div class="rowTitle">
                                <div class="w600 borR">交通機関<span class="notes">　※残り<span class="remainAccess">200</span>文字</span>
                                </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <input type="text" name="access" size="80" maxlength="200" value="{$formParams.access}" class="w600input">
                                    {if $errFlag.access}
                                    <div class="error">{$errMessage.access}</div>
                                    {/if}
                                </div>
                            </div>
                            <div class="rowTitleLarge">
                                <div class="w600 borR">タイトルおよび仕事アピール情報</div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR"><span class="must">【必須】 </span>タイトル <span class="notes">※残り<span class="remainTitle">58</span>文字</span>
                                </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <input type="text" name="title" size="80" maxlength="200" value="{$formParams.title}" class="w600input">
                                    {if $errFlag.title}
                                    <div class="error">{$errMessage.title}</div>
                                    {/if}
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR"><span class="must">【必須】 </span>サブタイトル <span class="notes">※残り<span class="remainSubTitle">58</span>文字</span>
                                </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <input type="text" name="subTitle" size="80" maxlength="200" value="{$formParams.subTitle}" class="w600input">
                                    {if $errFlag.subTitle}
                                    <div class="error">{$errMessage.subTitle}</div>
                                    {/if}
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR">メインの本文 <span class="notes">※300文字以内</span></div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR borB">
                                    <textarea  name="jobPr">{$formParams.jobPr}</textarea>
                                    {if $errFlag.jobPr}
                                    <div class="error">{$errMessage.jobPr}</div>
                                    {/if}
                                    <div class="textRemainNum">残り<span class="remainJobPr">300</span>文字</div>
                                </div>
                            </div>
                        </div>
                        <div class="centerBox">
                            <div class="rowTitlesLarge">
                            <div class="w600 borR">募集要項</div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR">仕事内容 <span class="notes">※600文字以内</span></div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <textarea  name="description">{$formParams.description}</textarea>
                                    {if $errFlag.description}
                                    <div class="error">{$errMessage.description}</div>
                                    {/if}
                                    <div class="textRemainNum">残り<span class="remainDescription">600</span>文字</div>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR">勤務期間
                                </div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <ul class="checkBoxList">
                                    {foreach from=$formParams.workingTermCkList item=row }
                                    <label for="workingTerm{$row.itemVal}">
                                     <li><input type="checkbox" name="workingTerm[]" id="workingTerm{$row.itemVal}" value="{$row.itemVal}" {$row.checked}>
                                    {$row.itemName} 
                                    </li></label>
                                    {/foreach}
                                     </ul>
                                    {if $errFlag.workingTerm}
                                    <div class="error">{$errMessage.workingTerm}</div>
                                    {/if}
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR"><span class="must">【必須】 </span>勤務時間 <span class="notes">※600文字以内</span></div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <textarea  name="workingHours">{$formParams.workingHours}</textarea>
                                    {if $errFlag.workingHours}
                                    <div class="error">{$errMessage.workingHours}</div>
                                    {/if}
                                    <div class="textRemainNum">残り<span class="remainWorkingHours">600</span>文字</div>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR"><span class="must">【必須】 </span>休日・休暇 <span class="notes">※600文字以内</span></div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <textarea  name="holiday">{$formParams.holiday}</textarea>
                                    {if $errFlag.holiday}
                                    <div class="error">{$errMessage.holiday}</div>
                                    {/if}
                                    <div class="textRemainNum">残り<span class="remainHoliday">600</span>文字</div>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR"><span class="must">【必須】 </span>応募資格・応募条件 <span class="notes">※600文字以内</span></div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <textarea  name="qualifications">{$formParams.qualifications}</textarea>
                                    {if $errFlag.qualifications}
                                    <div class="error">{$errMessage.qualifications}</div>
                                    {/if}
                                    <div class="textRemainNum">残り<span class="remainQualifications">600</span>文字</div>
                                </div>
                            </div>
                            <div class="rowTitleLarge">
                                <div class="w600 borR">給与・待遇</div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR"><span class="must">【必須】 </span>給与の下限と上限<span class="caution">※半角数字で入力。上限を設けない場合、上限は空欄可</span></div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <select name="salaryUnit" class="jsSalaryUnit">
                                        <option value="0">選択してください</option>
                                        {foreach from=$formParams.salaryUnitList item=row }
                                        <option value="{$row.itemVal}" {$row.selected}>{$row.itemName}</option>
                                        {/foreach}
                                    </select>
                                    <input type="text" name="salaryMin" size="7" maxlength="7" class="textLineInput80" placeholder="" value="{$formParams.salaryMin}"> 円
                                        ～
                                    <input type="text" name="salaryMax" size="7" maxlength="7" class="textLineInput80" placeholder="" value="{$formParams.salaryMax}"> 円
                                    {if $errFlag.salary}
                                    <div class="error">{$errMessage.salary}</div>
                                    {/if}
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR">給与説明 <span class="notes">※600文字以内</span></div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <textarea  name="salaryInfo">{$formParams.salaryInfo}</textarea>
                                    {if $errFlag.salaryInfo}
                                    <div class="error">{$errMessage.salaryInfo}</div>
                                    {/if}
                                    <div class="textRemainNum">残り<span class="remainSalaryInfo">600</span>文字</div>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR"><span class="must">【必須】 </span>福利厚生・待遇 <span class="notes">※600文字以内</span></div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <textarea  name="conditionInfo">{$formParams.conditionInfo}</textarea>
                                    {if $errFlag.conditionInfo}
                                    <div class="error">{$errMessage.conditionInfo}</div>
                                    {/if}
                                    <div class="textRemainNum">残り<span class="remainConditionInfo">600</span>文字</div>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR">試用期間 <span class="notes">※600文字以内</span></div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <textarea  name="trial">{$formParams.trial}</textarea>
                                    {if $errFlag.trial}
                                    <div class="error">{$errMessage.trial}</div>
                                    {/if}
                                    <div class="textRemainNum">残り<span class="remainTrial">600</span>文字</div>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR">就労ボーナス<span class="caution">※半角数字で入力</span></div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR">
                                    <input type="text" name="giftMoney" size="7" maxlength="7" value="{$formParams.giftMoney}"> 円
                                   {if $errFlag.giftMoney}
                                    <div class="error">{$errMessage.giftMoney}</div>
                                    {/if}
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w600 borR">就労ボーナス説明 <span class="notes">※600文字以内</span></div>
                            </div>
                            <div class="rowContents">
                                <div class="w600 borR borB">
                                    <textarea  name="giftMoneyInfo">{$formParams.giftMoneyInfo}</textarea>
                                    {if $errFlag.giftMoneyInfo}
                                    <div class="error">{$errMessage.giftMoneyInfo}</div>
                                    {/if}
                                    <div class="textRemainNum">残り<span class="remainGiftMoneyInfo">600</span>文字</div>
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
                                    <input type="checkbox" class="jsIsLiveIn" name="isLiveIn" id="isLiveIn" value="1" {$formParams.isLiveInChecked}>
                                    <label for="isLiveIn">
                                    住み込み可（寮・社宅完備または館内住み込み）
                                    </label>
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w400 borR">寮・社宅のポイント</div>
                            </div>
                            <div class="rowContents">
                                <div class="w400 borR">
                                    <ul class="checkBoxListSmall">
                                    {foreach from=$formParams.dormPointCkList item=row }  
                                    <label for="dormPoint{$row.itemVal}">
                                    <li><input type="checkbox" name="dormPoint[]" id="dormPoint{$row.itemVal}" value="{$row.itemVal}" {$row.checked}>
                                    {$row.itemName}
                                    </li></label>
                                    {/foreach}
                                     </ul>
                                    {if $errFlag.dormPoint}
                                    <div class="error">{$errMessage.dormPoint}</div>
                                    {/if}
                                </div>
                            </div>    
                                <div class="rowTitle">
                                <div class="w400 borR">寮・社宅の情報</div>
                            </div>
                            <div class="rowContents">
                                <div class="w400 borR">
                                    <textarea  name="dormInfo" class="rightTextArea">{$formParams.dormInfo}</textarea>
                                    {if $errFlag.dormInfo}
                                    <div class="error">{$errMessage.dormInfo}</div>
                                    {/if}
                                    <div class="textRemainNum">残り<span class="remainDormInfo">600</span>文字</div>
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
                                    <ul class="checkBoxListSmall">
                                        {foreach from=$formParams.featureCkList item=fcat }
                                        <!-- サブカテゴリー分ループ -->
                                        <li class="checkBoxListCategory">{$fcat.catName}</li>
                                        {foreach from=$fcat.item item=row }
                                        <!-- チェックボックス分ループ -->
                                        <label for="feature{$row.itemVal}">
                                        <li><input type="checkbox" name="feature[]" id="feature{$row.itemVal}" value="{$row.itemVal}" {$row.checked}>
                                        {$row.itemName} 
                                        </li></label>
                                        {/foreach}
                                        <!-- チェックボックス分ループ -->
                                        <!-- サブカテゴリー分ループ -->
                                        {/foreach}  
                                     </ul>
                                    {if $errFlag.feature}
                                    <div class="error">{$errMessage.feature}</div>
                                    {/if}
                                </div>
                            </div>
                            <div class="rowTitleLarge">
                                <div class="w400 borR">操作</div>
                            </div>
                            <div class="rowContents">
                                <div class="w400 borR borB btnArea">
                                    <div>
                                        {if $formType=='edit'}
                                    　　<input type="submit" class="jsDelBtn" name="submit" value="削除">　　　　
                                        {/if}
                                        <input type="submit" name="submit" value="入力内容の確認画面へ">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script src="./js/admin.js" type="text/javascript"></script>
        <script src="./js/job_admin_edit.js" type="text/javascript"></script>
    </body>  
</html>

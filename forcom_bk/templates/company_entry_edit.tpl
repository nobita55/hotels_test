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
                求人申込書
            </h2>
        </header>
        <div class="container cBg">
            <div class="contents">
                <form id="form1" name="form1" method="POST" action="/forcom_bk/check" enctype="multipart/form-data">
                    {if $errFlag.master}
                    <div class="masterError">入力内容にエラーがあります</div>
                    {/if}
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
                                    <input type="text" class="companyName" size="58" maxlength="100" name="companyName" value="{$formParams.companyName}">
                                    {if $errFlag.companyName}
                                        <div class="error">{$errMessage.companyName}</div>
                                    {/if}
                                </div>
                                <div class="w450 borR">
                                    <input type="text" class="facilityName" size="58" maxlength="100" name="facilityName" value="{$formParams.facilityName}">
                                    {if $errFlag.facilityName}
                                        <div class="error">{$errMessage.facilityName}</div>
                                    {/if}
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w450"><span class="must">【必須】 </span>本社住所</div>
                                <div class="w450 borR"><span class="must">【必須】 </span>勤務先住所 <input type="checkbox" name="facilitySame" value="1" {$formParams.facilitySameChecked}>本社住所と同じ</div>

                            </div>
                            <div class="rowContents">
                                <div class="w450">
                                    <table>
                                        <tr><td class="leftCell">郵便番号</td>
                                            <td class="rightCell">
                                                <div class="jsFormPostcode">
                                                    <input type="text" name="companyPostcode" size="10" maxlength="10"  value="{$formParams.companyPostcode}">
                                                    <span class="caution"> ※半角数字ハイフンのみ</span> <input type="button" class="jsBtnAddressInput1" value="住所入力">
                                                </div>
                                                {if $errFlag.companyPostcode}
                                                    <div class="error">{$errMessage.companyPostcode}</div>
                                                {/if}
                                            </td>
                                        </tr>
                                        <tr><td class="leftCell">都道府県</td>
                                            <td class="rightCell">
                                                <div class="companyPrefecture">
                                                <select name="companyPrefecture">
                                                    <option value="">選択してください</option>
                                                    {foreach from=$formParams.companyPrefectureList item=row }
                                                    <option value="{$row.itemVal}" {$row.selected}>{$row.itemName}</option>
                                                    {/foreach}
                                                </select>
                                                </div>
                                                {if $errFlag.companyPrefecture}
                                                    <div class="error">{$errMessage.companyPrefecture}</div>
                                                {/if}
                                            </td>
                                        </tr>
                                        <tr><td class="leftCell">住所</td>
                                            <td class="rightCell">
                                                <div class="jsFormAddress">
                                                    <textarea name="companyAddress" class="companyAddress">{$formParams.companyAddress}</textarea>
                                                </div>
                                                {if $errFlag.companyAddress}
                                                    <div class="error">{$errMessage.companyAddress}</div>
                                                {/if}
                                            </td>
                                        </tr>
                                        <tr><td class="leftCell">TEL</td>
                                            <td class="rightCell">
                                                <div class="jsFormAddress">
                                                    <input type="text" name="companyTel" size="15" maxlength="20"  value="{$formParams.companyTel}">
                                                </div>
                                                {if $errFlag.companyTel}
                                                    <div class="error">{$errMessage.companyTel}</div>
                                                {/if}
                                            </td>
                                        </tr>
                                        <tr><td class="leftCell">FAX</td>
                                            <td class="rightCell">
                                                <div class="jsFormAddress">
                                                    <input type="text" name="companyFax" size="15" maxlength="20"  value="{$formParams.companyFax}">
                                                </div>
                                                {if $errFlag.companyFax}
                                                    <div class="error">{$errMessage.companyFax}</div>
                                                {/if}
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="w450 borR">
                                    <table>
                                        <tr><td class="leftCell">郵便番号</td>
                                            <td class="rightCell">
                                                <div class="jsFormPostcode">
                                                    <input type="text" name="facilityPostcode" size="10" maxlength="10"  value="{$formParams.facilityPostcode}">
                                                    <span class="caution"> ※半角数字ハイフンのみ</span> <input type="button" class="jsBtnAddressInput2" value="住所入力">
                                                </div>
                                                {if $errFlag.facilityPostcode}
                                                    <div class="error">{$errMessage.facilityPostcode}</div>
                                                {/if}
                                            </td>
                                        </tr>
                                        <tr><td class="leftCell">都道府県</td>
                                            <td class="rightCell">
                                                <div class="jsFormPrefecture">
                                                <select name="facilityPrefecture">
                                                    <option value="">選択してください</option>
                                                    {foreach from=$formParams.facilityPrefectureList item=row }
                                                    <option value="{$row.itemVal}" {$row.selected}>{$row.itemName}</option>
                                                    {/foreach}
                                                </select>
                                                </div>
                                                {if $errFlag.facilityPrefecture}
                                                    <div class="error">{$errMessage.facilityPrefecture}</div>
                                                {/if}
                                            </td>
                                        </tr>
                                        <tr><td class="leftCell">住所</td>
                                            <td class="rightCell">
                                                <div class="jsFormAddress">
                                                    <textarea name="facilityAddress" class="facilityAddress">{$formParams.facilityAddress}</textarea>
                                                </div>
                                                {if $errFlag.facilityAddress}
                                                    <div class="error">{$errMessage.facilityAddress}</div>
                                                {/if}
                                            </td>
                                        </tr>
                                        <tr><td class="leftCell">TEL</td>
                                            <td class="rightCell">
                                                <div class="jsFormAddress">
                                                    <input type="text" name="facilityTel" size="15" maxlength="20"  value="{$formParams.facilityTel}">
                                                </div>
                                                {if $errFlag.facilityTel}
                                                    <div class="error">{$errMessage.facilityTel}</div>
                                                {/if}
                                            </td>
                                        </tr>
                                        <tr><td class="leftCell">FAX</td>
                                            <td class="rightCell">
                                                <div class="jsFormAddress">
                                                    <input type="text" name="facilityFax" size="15" maxlength="20"  value="{$formParams.facilityFax}">
                                                </div>
                                                {if $errFlag.facilityFax}
                                                    <div class="error">{$errMessage.facilityFax}</div>
                                                {/if}
                                            </td>
                                        </tr>
                                    </table>
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
                                    <input type="text" name="department" size="20" maxlength="30"  value="{$formParams.department}">
                                    {if $errFlag.department}
                                        <div class="error">{$errMessage.department}</div>
                                    {/if}
                                </div>
                                <div class="w200">
                                    <input type="text" name="title" size="20" maxlength="30"  value="{$formParams.title}">
                                    {if $errFlag.title}
                                        <div class="error">{$errMessage.title}</div>
                                    {/if}
                                </div>
                                <div class="w250">
                                    <input type="text" name="name" size="30" maxlength="30"  value="{$formParams.name}">
                                    {if $errFlag.name}
                                        <div class="error">{$errMessage.name}</div>
                                    {/if}
                                </div>
                                <div class="w250 borR">
                                    <input type="text" name="mobile" size="30" maxlength="30"  value="{$formParams.mobile}">
                                    {if $errFlag.mobile}
                                        <div class="error">{$errMessage.mobile}</div>
                                    {/if}
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
                                    <input type="text" name="needNum" size="10" maxlength="30"  value="{$formParams.needNum}"> 人
                                    {if $errFlag.needNum}
                                        <div class="error">{$errMessage.needNum}</div>
                                    {/if}
                                </div>
                                <div class="w600 borR">
                                    <input type="text" name="termFromYear" size="6" maxlength="30"  value="{$formParams.termFromYear}">年
                                    <input type="text" name="termFromMonth" size="4" maxlength="30"  value="{$formParams.termFromMonth}">月
                                    <input type="text" name="termFromDay" size="4" maxlength="30"  value="{$formParams.termFromDay}">日～
                                    <input type="text" name="termToYear" size="6" maxlength="30"  value="{$formParams.termToYear}">年
                                    <input type="text" name="termToMonth" size="4" maxlength="30"  value="{$formParams.termToMonth}">月
                                    <input type="text" name="termToDay" size="4" maxlength="30"  value="{$formParams.termToDay}">日
                                    <input type="checkbox" name="termOpen" id="termOpen" value="1" {$formParams.termOpenChecked}> <label for="termOpen">随時相談可能</label>
                                    {if $errFlag.term}
                                        <div class="error">{$errMessage.term}</div>
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
                                    <ul class="checkBoxListSmall">
                                        <label for="employmentStatus1">
                                            <li>
                                                <input type="radio" name="employmentStatus" id="employmentStatus1" value="1" {$formParams.employmentStatusChecked.1}>
                                                社員紹介
                                            </li>
                                        </label>
                                        <label for="employmentStatus2">
                                            <li>
                                                <input type="radio" name="employmentStatus" id="employmentStatus2" value="2" {$formParams.employmentStatusChecked.2}>
                                                紹介予定派遣
                                            </li>
                                        </label>
                                        <label for="employmentStatus3">
                                            <li>
                                                <input type="radio" name="employmentStatus" id="employmentStatus3" value="3" {$formParams.employmentStatusChecked.3}>
                                                常用目的紹介 
                                            </li>
                                        </label>
                                    </ul>
                                    {if $errFlag.employmentStatus}
                                        <div class="error">{$errMessage.employmentStatus}</div>
                                    {/if}
                                </div>
                            </div>
                            <div class="rowTitle jsGeneralParam">
                                <div class="w900 borR"><span class="must">【必須】 </span>職種 <span class="caution"> ※複数選択可</span></div>
                            </div>
                            <div class="rowContents jsGeneralParam">
                                <div class="w900 borR">
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
                                <div class="w450"><span class="must">【必須】 </span>仕事内容</div>
                                <div class="w450 borR"><span class="must">【必須】 </span>勤務時間</div>
                            </div>
                            <div class="rowContents">
                                <div class="w450">
                                    <textarea  name="description" class="description">{$formParams.description}</textarea>
                                    <div class="textRemainNum">残り<span class="remainDescription">600</span>文字</div>
                                    {if $errFlag.description}
                                    <div class="error">{$errMessage.description}</div>
                                    {/if}
                                </div>
                                <div class="w450 borR">
                                    <textarea  name="workingHours" class="workingHours">{$formParams.workingHours}</textarea>
                                    <div class="textRemainNum">残り<span class="remainWorkingHours">600</span>文字</div>
                                    {if $errFlag.workingHours}
                                    <div class="error">{$errMessage.workingHours}</div>
                                    {/if}
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w450"><span class="must">【必須】 </span>休日・ 休暇</div>
                                <div class="w450 borR">必要な経験・資格 </div>
                            </div>
                            <div class="rowContents">
                                <div class="w450">
                                    <textarea  name="holiday" class="holiday">{$formParams.holiday}</textarea>
                                    <div class="textRemainNum">残り<span class="remainHoliday">600</span>文字</div>
                                    {if $errFlag.holiday}
                                    <div class="error">{$errMessage.holiday}</div>
                                    {/if}
                                </div>
                                <div class="w450 borR">
                                    <textarea  name="qualifications" class="qualifications">{$formParams.qualifications}</textarea>
                                    <div class="textRemainNum">残り<span class="remainQualifications">600</span>文字</div>
                                    {if $errFlag.qualifications}
                                    <div class="error">{$errMessage.qualifications}</div>
                                    {/if}
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w450"><span class="must">【必須】 </span>給与形態</div>
                                <div class="w450 borR">福利厚生・待遇</div>
                            </div>
                            <div class="rowContents">
                                <div class="w450">
                                    <select name="salaryUnit" class="jsSalaryUnit">
                                        <option value="0">選択してください</option>
                                        {foreach from=$formParams.salaryUnitList item=row }
                                        <option value="{$row.itemVal}" {$row.selected}>{$row.itemName}</option>
                                        {/foreach}
                                    </select>
                                    <input type="text" name="salaryMin" size="7" maxlength="10" class="salaryMin" placeholder="" value="{$formParams.salaryMin}"> 円
                                    ～
                                    <input type="text" name="salaryMax" size="7" maxlength="10" class="salaryMax" placeholder="" value="{$formParams.salaryMax}"> 円
                                    <textarea  name="salaryInfo" class="salaryInfo">{$formParams.salaryInfo}</textarea>
                                    <div class="textRemainNum">残り<span class="remainSalaryInfo">600</span>文字</div>
                                    {if $errFlag.salary}
                                    <div class="error">{$errMessage.salary}</div>
                                    {/if}
                                </div>
                                <div class="w450 borR">
                                    <textarea  name="conditionInfo" class="conditionInfo">{$formParams.conditionInfo}</textarea>
                                    <div class="textRemainNum">残り<span class="remainConditionInfo">600</span>文字</div>
                                    {if $errFlag.conditionInfo}
                                    <div class="error">{$errMessage.conditionInfo}</div>
                                    {/if}
                                </div>
                            </div>
                            <div class="rowTitle">
                                <div class="w450">就労時必要物</div>
                                <div class="w450 borR">その他特記事項</div>
                            </div>
                            <div class="rowContents">
                                <div class="w450">
                                    <textarea  name="needItem" class="needItem">{$formParams.needItem}</textarea>
                                    <div class="textRemainNum">残り<span class="remainNeedItem">600</span>文字</div>
                                    {if $errFlag.needItem}
                                    <div class="error">{$errMessage.needItem}</div>
                                    {/if}
                                </div>
                                <div class="w450 borR">
                                    <textarea  name="memo" class="memo">{$formParams.memo}</textarea>
                                    <div class="textRemainNum">残り<span class="remainMemo">600</span>文字</div>
                                    {if $errFlag.memo}
                                    <div class="error">{$errMessage.memo}</div>
                                    {/if}
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
                                    <ul class="checkBoxListSmall">
                                    {foreach from=$formParams.dormPointCkList item=row }  
                                    <label for="dormPoint{$row.itemVal}">
                                    <li><input type="checkbox" name="dormPoint[]" id="dormPoint{$row.itemVal}" value="{$row.itemVal}" {$row.checked}>
                                    {$row.itemName}
                                    </li></label>
                                    {/foreach}
                                    </ul>
                                </div>
                                <div class="w450 borR">
                                    <textarea  name="dormInfo" class="dormInfo">{$formParams.dormInfo}</textarea>
                                    <div class="textRemainNum">残り<span class="remainDormInfo">600</span>文字</div>
                                    {if $errFlag.dormInfo}
                                    <div class="error">{$errMessage.dormInfo}</div>
                                    {/if}
                                </div>
                            </div>    
                            <div class="rowContents">
                                <div class="w900 borR borB btnArea">
                                    <div>
                                        <input type="submit" name="submit" value="入力内容の確認画面へ">
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
        <script src="/forcom_bk/js/vender/ajaxzip3.js" type="text/javascript" charset="UTF-8"></script>
    </body>  
</html>

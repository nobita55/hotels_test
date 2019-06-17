<!DOCTYPE html>
<html>
    <head>
        <title>ホテルズワーク管理 | 求人情報管理</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/normalize.css" rel="stylesheet" type="text/css"/>
        <link href="css/admin.css" rel="stylesheet" type="text/css"/>

        <link href="css/admin_search_job.css" rel="stylesheet" type="text/css"/>
        <link href="css/admin_search_ctl.css" rel="stylesheet" type="text/css"/>
        <link href="css/magnific-popup.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <script src="js/vender/jquery.js" type="text/javascript"></script>
        <script src="js/vender/jquery-ui.js" type="text/javascript"></script>
        <script src="js/vender/underscore.js" type="text/javascript"></script>
        <link href="js/vender/dist/sweetalert.css" rel="stylesheet" type="text/css">
        <script src="js/vender/dist/sweetalert.min.js"></script>
        
        <script src="js/vender/jquery.magnific-popup.js" type="text/javascript"></script>
        <script src="js/admin.js" type="text/javascript"></script>
        <script src="js/admin_search_ctl.js" type="text/javascript"></script>
        <script src="js/admin_search_job.js" type="text/javascript"></script>
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
            <h2 class="topText"><a href="./index.html" class="linkTop">ホテルズワーク管理</a> <span class="topTextSep">|</span> <span class="topToolName">求人情報管理</span>
            </h2>
        </header>
        <div class="container cBg">
            <div class="contents">

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
                        {foreach from=$searchParams.prefectureCk item=row }
                             <li><label for="pref_{$row.itemVal}"><input type=checkbox id="pref_{$row.itemVal}">{$row.itemName}</label>
                        {/foreach}
                        </ul>
                        <div class="searchCategory">
                            <div class="searchCategoryName">
                                雇用形態
                                <input type="button" class="selectClearBtn jsEsSelectClearBtn" name="selectClearBtn" value="選択解除">
                            </div>
                        </div>
                        <ul class="listParams employmentStatusList">
                        {foreach from=$searchParams.esCk item=row }
                             <li><label for="es_{$row.itemVal}"><input type=checkbox id="es_{$row.itemVal}">{$row.itemName}</label>
                        {/foreach}
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
                        {foreach from=$searchParams.fcCk item=row }
                             <li><label for="fc_{$row.itemVal}"><input type=checkbox id="fc_{$row.itemVal}">{$row.itemName}</label>
                        {/foreach}
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
                        {foreach from=$searchParams.wtCk item=row }
                             <li><label for="wt_{$row.itemVal}"><input type=checkbox id="wt_{$row.itemVal}">{$row.itemName}</label>
                        {/foreach}
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
                        {foreach from=$searchParams.dpCk item=row }
                             <li><label for="dp_{$row.itemVal}"><input type=checkbox id="dp_{$row.itemVal}">{$row.itemName}</label>
                        {/foreach}
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
                            {foreach from=$searchParams.jobCategoryCk item=fcat }
                                <!-- サブカテゴリー分ループ -->
                                <li class="listCategory">{$fcat.catName} <a href="" class="euplinkSmall jsJcCheckAll{$fcat.catNo}">[全て]</a>　<a href="" class="euplinkSmall jsJcCheckClear{$fcat.catNo}">[解除]</a></li>
                            {foreach from=$fcat.item item=row }
                                <!-- チェックボックス分ループ -->
                                 <li><label for="jc_{$row.itemVal}"><input type=checkbox id="jc_{$row.itemVal}"  class="jsDepartmentCheck{$fcat.catNo}">{$row.itemName}</label>
                            {/foreach}
                                <!-- チェックボックス分ループ -->
                                <!-- サブカテゴリー分ループ -->
                            {/foreach}
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
                            {foreach from=$searchParams.featureCk item=fcat }
                                <!-- サブカテゴリー分ループ -->
                                <li class="listCategory">{$fcat.catName}</li>
                            {foreach from=$fcat.item item=row }
                                <!-- チェックボックス分ループ -->
                                 <li><label for="ft_{$row.itemVal}"><input type=checkbox id="ft_{$row.itemVal}"  class="jsDepartmentCheck{$fcat.catNo}">{$row.itemName}</label>
                            {/foreach}
                                <!-- チェックボックス分ループ -->
                                <!-- サブカテゴリー分ループ -->
                            {/foreach}
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

                <div class="main">
                    <div class="listContens">
                        <div class="boxUpper">
                            <div class="boxUpperLeft">
                                <input type="button" class="newJobClearBtn jsNewJobRegistBtn" name="newJobClearBtn" value="新規求人登録">
                               <div class="resultCount">
                                表示件数：全件数 <span class="searchResultNum"></span>件 / <span class="searchAllNum"></span>件 
                                </div>
                                <div class="easySearch">
                                    JID:<input type="text" name="jobId" class="formJobId">
                                    求人ID:<input type="text" name="recJobId" class="formRecJobId">
                                    担当:<select name="centralManager" class="formCentralManager">
                                        <option value="0"></option>
                                        {foreach from=$searchParams.centralManagerList item=row }
                                        <option value="{$row.itemVal}" {$row.selected}>{$row.itemName}</option>
                                        {/foreach}
                                    </select>
                                    <a href="#" class="jsEasySearchBtn euplink"><i class="fa fa-search"></i></a>
                                </div>
                                <input type="button" class="searchBtn jsSearchOpenBtn" name="searchBtn" value="詳細検索">　
                                <input type="button" class="searchClearBtn jsSearchClearBtn" name="searchClearBtn" value="全件表示">
                                <div class="targetSelecter">
                                状態：
                                <span class ="fwNormal">
                                    <input type="radio" name="fwStatus" id="fwStatus1" class="srListSwitch" value="1" checked><label for="fwStatus1">全て</label>
                                    <input type="radio" name="fwStatus" id="fwStatus2" class="srListSwitch" value="2"><label for="fwStatus2">掲載</label>
                                    <input type="radio" name="fwStatus" id="fwStatus3" class="srListSwitch" value="3" ><label for="fwStatus3">非掲載</label>
                                　　</span>
                                削除：
                                <span class ="fwNormal">
                                    <input type="radio" name="fwDeleted" id="fwDeleted1" class="srListSwitch" value="1"><label for="fwDeleted1">全て</label>
                                    <input type="radio" name="fwDeleted" id="fwDeleted2" class="srListSwitch" value="2" checked><label for="fwDeleted2">削除を含まない</label>
                                    <input type="radio" name="fwDeleted" id="fwDeleted3" class="srListSwitch" value="3" ><label for="fwDeleted3">削除のみ</label>
                                </span>　
                                </div>
                            </div>
                        </div>
                        <div>
                            <table class="jobsTable">
                                <thead class="scrollHead">
                                    <tr>
                                        <th class="jobNumber">JID</th>
                                        <th class="jobCtrButtons">操作</th>
                                        <th class="jobId">求人ID</th>
                                        <th class="jobManager">担当</th>
                                        <th class="jobStatus">状態</th>
                                        <th class="jobDeleted">削除</th>
                                        <th class="jobMemo">メモ</th>
                                        <th class="jobPref">都道府県</th>
                                        <th class="jobHotel">親会社 施設等</th>
                                        <th class="jobTitle">タイトル</th>
                                        <th class="jobShokushu">職種</th>
                                        <th class="jobKoyo">雇用</th>
                                        <th class="jobRegistDate">登録日</th>
                                        <th class="jobModifyDate">更新日</th>
                                        <th class="jobSortdate">並び用日時</th>
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

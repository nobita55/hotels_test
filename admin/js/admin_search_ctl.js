var selectedJobJid = null;
var selectedJobElement = null;

//検索項目個数指定
//手動での対応が必要
//共用でとりあえず300を設定
var searchItemMaxNo = 300;

//var searchAreaItemMaxNo = 100;

//表示対象制御
var vrSwitchStatus = 2;
var vrSwitchDelete = 2;

//検索結果数
var sNum = null;
var sniNum = null;

//一括登録用
var searchedJobs = null;

var searchMode = 'all';

$(function () {
    /*案件選択------------------------------------*/

    //案件リスト
    $(document).on({
        "mouseenter": function () {
            if (selectedJobJid !== $(this).parent().attr('class')) {
                $(this).parent().css('background-color', '#eee');
            }
        },
        "mouseleave": function () {
            if (selectedJobJid !== $(this).parent().attr('class')) {
                $(this).parent().css('background-color', '');
            }
        },
        "click": function () {
            if (selectedJobJid != null) {
                $(selectedJobElement).css('background-color', '');
            }
            $(this).parent().css('background-color', '#98c3d6');
            selectedJobJid = $(this).parent().attr('class');
            selectedJobElement = $(this).parent();
        }
    }, ".jsJobsList td");

    //選択解除
    $(".jsAreaSelectClearBtn").on("click", function () {
        initSearchChecked('pref', searchItemMaxNo);
    });

    $(".jsEsSelectClearBtn").on("click", function () {
        initSearchChecked('es', searchItemMaxNo);
    });
    $(".jsFcSelectClearBtn").on("click", function () {
        initSearchChecked('fc', searchItemMaxNo);
    });
    $(".jsWtSelectClearBtn").on("click", function () {
        initSearchChecked('wt', searchItemMaxNo);
    });
    $(".jsLiveSelectClearBtn").on("click", function () {
        initSearchChecked('dp', searchItemMaxNo);
    });
    $(".jsJcSelectClearBtn").on("click", function () {
        initSearchChecked('jc', searchItemMaxNo);
    });
    $(".jsFtSelectClearBtn").on("click", function () {
        initSearchChecked('ft', searchItemMaxNo);
    });

//職種部門ごと制御
    $(document).on('click', '.jsJcCheckAll1', function (e) {
        $('.jsDepartmentCheck1').prop("checked", true);
        return false;
    });
    $(document).on('click', '.jsJcCheckClear1', function (e) {
        $('.jsDepartmentCheck1').prop("checked", false);
        return false;
    });
    $(document).on('click', '.jsJcCheckAll2', function (e) {
        $('.jsDepartmentCheck2').prop("checked", true);
        return false;
    });
    $(document).on('click', '.jsJcCheckClear2', function (e) {
        $('.jsDepartmentCheck2').prop("checked", false);
        return false;
    });
    $(document).on('click', '.jsJcCheckAll3', function (e) {
        $('.jsDepartmentCheck3').prop("checked", true);
        return false;
    });
    $(document).on('click', '.jsJcCheckClear3', function (e) {
        $('.jsDepartmentCheck3').prop("checked", false);
        return false;
    });
    $(document).on('click', '.jsJcCheckAll4', function (e) {
        $('.jsDepartmentCheck4').prop("checked", true);
        return false;
    });
    $(document).on('click', '.jsJcCheckClear4', function (e) {
        $('.jsDepartmentCheck4').prop("checked", false);
        return false;
    });
    $(document).on('click', '.jsJcCheckAll5', function (e) {
        $('.jsDepartmentCheck5').prop("checked", true);
        return false;
    });
    $(document).on('click', '.jsJcCheckClear5', function (e) {
        $('.jsDepartmentCheck5').prop("checked", false);
        return false;
    });
    $(document).on('click', '.jsJcCheckAll6', function (e) {
        $('.jsDepartmentCheck6').prop("checked", true);
        return false;
    });
    $(document).on('click', '.jsJcCheckClear6', function (e) {
        $('.jsDepartmentCheck6').prop("checked", false);
        return false;
    });
    $(document).on('click', '.jsJcCheckAll7', function (e) {
        $('.jsDepartmentCheck7').prop("checked", true);
        return false;
    });
    $(document).on('click', '.jsJcCheckClear7', function (e) {
        $('.jsDepartmentCheck7').prop("checked", false);
        return false;
    });
    $(document).on('click', '.jsJcCheckAll99', function (e) {
        $('.jsDepartmentCheck99').prop("checked", true);
        return false;
    });
    $(document).on('click', '.jsJcCheckClear99', function (e) {
        $('.jsDepartmentCheck99').prop("checked", false);
        return false;
    });
//-------------------------------------------------------------------------
    //全件表示ボタン
    $(".jsSearchClearBtn").on("click", function () {
        //確認ダイアログ
        swal({
            title: "検索条件を破棄して全ての案件を表示します",
            text: "よろしいですか？",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#e78a1c",
            confirmButtonText: "OK",
            closeOnConfirm: true
        },
        function () {
            //OK時
            initSearch();

            vrSwitchStatus = $('input[name="fwStatus"]:checked').val();
            vrSwitchDelete = $('input[name="fwDeleted"]:checked').val();
            searchMode = 'all';
            //全案件取得
            //案件リスト生成
            ajaxLoadAllJobs(vrSwitchStatus, vrSwitchDelete);
            return false;
        });
        return false;

    });

    //検索ボタン
    $(".jsSearchBtn").on("click", function () {
        searchMode = 'search';
        jobSearch();
        return false;
    });

    //検索ボタン
    $(".jsEasySearchBtn").on("click", function () {
        searchMode = 'easy';
        jobEasySearch();
        return false;
    });


    //詳細検索ボタン
    $(".jsSearchOpenBtn").on("click", function () {
        $(".searchController").show();
    });

    //検索パネル閉じる
    $(".jsSearchCloseBtn").on("click", function () {
        $(".searchController").hide();
    });

    /*
     //メモ入力欄オープン
     $(document).on('click', '.jsMemoCtr', function () {
     var selectedJobNumber = $(this).parent().parent().attr('class');
     //.メモを取得
     ajaxGetMemo(selectedJobNumber);
     });
     */
});

/*
 * 関数
 */

//初期化
/*
 function pageLoad() {
 //検索フォーム初期化
 initSearch();
 initAndOr();
 
 //案件リスト生成
 vrSwitchStatus = $('input[name="fwStatus"]:checked').val();
 vrSwitchDelete = $('input[name="fwDeleted"]:checked').val();
 $(".searchController").hide();
 
 ajaxLoadAllJobs();
 }
 */
//ajax通信マスター
function ajaxMaster(postData, url, successFunc, errorFunc) {
    $.ajax({
        type: "POST",
        url: url,
        dataType: "json",
        data: postData,
        //通信成功
        success: function (data, dataType)
        {
            successFunc(data, dataType);
        },
        //通信失敗
        error: function (XMLHttpRequest, textStatus, errorThrown)
        {
            return errorFunc(XMLHttpRequest, textStatus, errorThrown);
        }
    });
}

/*案件選択------------------------------------*/
function jobEasySearch() {
    vrSwitchStatus = $('input[name="fwStatus"]:checked').val();
    vrSwitchDelete = $('input[name="fwDeleted"]:checked').val();

    var searchJobId = $(':text[name="jobId"]').val();
    searchJobId = $.trim(searchJobId);
    var searchRecJobId = $(':text[name="recJobId"]').val();
    searchRecJobId = $.trim(searchRecJobId);

    var searchCentralManager = $('.formCentralManager').val();

    //POSTデータ作成
    var postData = {mode: 'easySearchJobs', statusFlag: vrSwitchStatus, deleteFlag: vrSwitchDelete,
        jobId: searchJobId, recJobId: searchRecJobId, centralManager: searchCentralManager
    };
    ajaxSearchJobs(postData);
}

function jobSearch() {
    vrSwitchStatus = $('input[name="fwStatus"]:checked').val();
    vrSwitchDelete = $('input[name="fwDeleted"]:checked').val();

    var searcHotelName = $(':text[name="hotelName"]').val();
    searcHotelName = $.trim(searcHotelName);
    var searchFreeWord = $(':text[name="fw"]').val();
    searchFreeWord = $.trim(searchFreeWord);

    var fcAndOr = $('input[name="fcAndOr"]:checked').val();
    var wtAndOr = $('input[name="wtAndOr"]:checked').val();
    var dpAndOr = $('input[name="dpAndOr"]:checked').val();
    var jcAndOr = $('input[name="jcAndOr"]:checked').val();
    var ftAndOr = $('input[name="ftAndOr"]:checked').val();
    var fwAndOr = $('input[name="fwAndOr"]:checked').val();

    if ($("#isLiveIn").prop('checked')) {
        var isLiveIn = 1;
    } else {
        var isLiveIn = 0;
    }

    if ($("#isResort").prop('checked')) {
        var isResort = 1;
    } else {
        var isResort = 0;
    }

    if ($("#isBonus").prop('checked')) {
        var isBonus = 1;
    } else {
        var isBonus = 0;
    }

    var searchPref = new Object();
    var searchEs = new Object();
    var searchFc = new Object();
    var searchWt = new Object();
    var searchDp = new Object();
    var searchJc = new Object();
    var searchFt = new Object();

    searchPref = ckSearchCheck('pref', searchItemMaxNo, searchPref);
    searchEs = ckSearchCheck('es', searchItemMaxNo, searchEs);
    searchFc = ckSearchCheck('fc', searchItemMaxNo, searchFc);
    searchWt = ckSearchCheck('wt', searchItemMaxNo, searchWt);
    searchDp = ckSearchCheck('dp', searchItemMaxNo, searchDp);
    searchJc = ckSearchCheck('jc', searchItemMaxNo, searchJc);
    searchFt = ckSearchCheck('ft', searchItemMaxNo, searchFt);

    //POSTデータ作成
    var postData = {mode: 'searchJobs', statusFlag: vrSwitchStatus, deleteFlag: vrSwitchDelete,
        prefecture: searchPref, employmentStatus: searchEs,
        facilityCategory: searchFc, workingTerm: searchWt, dormPoint: searchDp,
        jobCategory: searchJc, feature: searchFt,
        searcHotelName: searcHotelName, searchFreeWord: searchFreeWord,
        isLiveIn: isLiveIn, isResort: isResort, isBonus: isBonus,
        wtAndOr: wtAndOr, dpAndOr: dpAndOr, fcAndOr: fcAndOr,
        jcAndOr: jcAndOr, ftAndOr: ftAndOr, fwAndOr: fwAndOr
    };
    ajaxSearchJobs(postData);
}

function ckSearchCheck(ident, limit, obj) {
    for (var i = 1; i <= limit; i++) {
        if ($('#' + ident + '_' + i).prop('checked')) {
            obj[i] = '1';
        }
    }
    return obj;
}

function initSearch() {
    //チェックボックス解除
    initSearchChecked('pref', searchItemMaxNo);
    initSearchChecked('es', searchItemMaxNo);
    initSearchChecked('fc', searchItemMaxNo);
    initSearchChecked('wt', searchItemMaxNo);
    initSearchChecked('dp', searchItemMaxNo);
    initSearchChecked('jc', searchItemMaxNo);
    initSearchChecked('ft', searchItemMaxNo);

    //入力フォーム初期化
    $("input[name='fw']").val('');
    $("input[name='hotelName']").val('');
    $("input[name='jobId']").val('');
    $("input[name='recJobId']").val('');

    $('#isResort').prop('checked', false);
    $('#isBonus').prop('checked', false);
    $('#isLiveIn').prop('checked', false);
}

function initAndOr() {
    $('input[name="fwAndOr"]').val(['2']);
}


function initSearchChecked(ident, limit) {
    for (var i = 1; i <= limit; i++) {
        $('#' + ident + '_' + i).prop('checked', false);
    }
}

/*特集登録系*/

/*ajax通信*/

//全案件取得
function ajaxLoadAllJobs(sf, df) {
    var url = "./ajax/ajax_search_job.php";
    var postData = {mode: 'loadAllJobs', statusFlag: sf, deleteFlag: df};
    //成功処理定義
    var sfunc = function (data, dataType) {
        //処理
        var count = data['count'];

        jobsDataAll = [];
        var i = 0;
        _.each(data['data'], function (rowData, index) {
            //rowData.registedClass = ' jsRegisted';
            jobsDataAll[index] = rowData;
        });

        $(".searchAllNum").html(data['count']);

        sNum = data['count'];
        $(".searchResultNum").html(sNum);
        displayList('tableSearchJobs', ".jsJobsList", jobsDataAll);

    };
    //失敗処理定義
    var efunc = function (XMLHttpRequest, textStatus, errorThrown) {
        swal("エラーが発生しました");
        //alert('エラーが発生しました:' + errorThrown);
        return false;
    };
    ajaxMaster(postData, url, sfunc, efunc);
}

//案件検索
function ajaxSearchJobs(postData) {
    var url = "./ajax/ajax_search_job.php";
    //成功処理定義
    var sfunc = function (data, dataType) {
        //処理
        var count = data['count'];

        jobsDataAll = [];

        var i = 0;
        _.each(data['data'], function (rowData, index) {
            //rowData.registedClass = ' jsRegisted';
            jobsDataAll[index] = rowData;
        });

        $(".searchAllNum").html(data['countAll']);

        sNum = data['count'];

        $(".searchResultNum").html(sNum);
        displayList('tableSearchJobs', ".jsJobsList", jobsDataAll);

    };
    //失敗処理定義
    var efunc = function (XMLHttpRequest, textStatus, errorThrown) {
        swal("エラーが発生しました");
        //alert('エラーが発生しました:' + errorThrown);
        return false;
    };
    ajaxMaster(postData, url, sfunc, efunc);
}
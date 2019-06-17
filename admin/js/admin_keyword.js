var selectedKeywordId = null;
var selectedKeywordElement = null;

$(function () {
    /*
     * イベント定義
     */
    //初期化
    $(window).load(function () {
        firstLoad();
    });

    //検索ワードリスト
    $(document).on({
        "mouseenter": function () {
            $(this).parent().css('background-color', '#eee');
        },
        "mouseleave": function () {
            $(this).parent().css('background-color', '');
        }
    }, ".jsCountList td");

    //人気ワードリスト
    $(document).on({
        "mouseenter": function () {
            if (selectedKeywordId !== $(this).parent().attr('class')) {
                $(this).parent().css('background-color', '#eee');
            }
        },
        "mouseleave": function () {
            if (selectedKeywordId !== $(this).parent().attr('class')) {
                $(this).parent().css('background-color', '');
            }
        },
        "click": function () {
            if (selectedKeywordId != null) {
                $(selectedKeywordElement).css('background-color', '');
            }
            $(this).parent().css('background-color', '#9e6151');
            selectedKeywordId = $(this).parent().attr('class');
            selectedKeywordElement = $(this).parent();
            ajaxSetFormKeyword(selectedKeywordId);
        }
    }, ".jsKeywordList td");

    //人気ワード保存
    $(document).on('click', '.jsBtnSave', function () {
        //アラート確認
        if (!confirm('キーワードを保存します。よろしいですか？')) {
            return false;
        }
        var id;
        id = selectedKeywordId;
        ajaxSaveKeyword(id);
    });

    //新規
    $(document).on('click', '.jsBtnNew', function () {
        clearSlectedKeyword();
        clearKeywordForm();
    });

    //削除
    $(document).on('click', '.jsBtnDel', function () {
        //アラート確認
        if (!confirm('キーワードを削除します。よろしいですか？')) {
            return false;
        }
        var id;
        id = selectedKeywordId;
        ajaxDeleteKeyword(id);
    });

});

/*
 * 関数定義[AJax通信]
 */

//人気ワードを保存
function ajaxSaveKeyword(id) {
    var data = {mode: 'saveKeyword',
        id: id,
        sort_rank: $("input[name='sort_rank']").val(),
        keyword: $("input[name='keyword']").val()
    };

    $.ajax({
        type: "POST",
        url: "./ajax/ajax_keyword_admin.php",
        dataType: "json",
        data: data,
        //通信成功
        success: function (data, dataType)
        {
            //エラー判定
            if (data['statusCode'] != 1) {
                alert('エラー:' + data['errorMessages']);
                return false;
            }
            //フォームクリア
            clearKeywordForm();
            clearSlectedKeyword();
            ajaxLoadKeyword();
        },
        //通信失敗
        error: function (XMLHttpRequest, textStatus, errorThrown)
        {
            alert('エラーが発生しました:' + errorThrown);
            return false;
        }
    });
}

//人気ワードを保存
function ajaxDeleteKeyword(id) {
    var data = {mode: 'deleteKeyword',
        id: id
    };

    $.ajax({
        type: "POST",
        url: "./ajax/ajax_keyword_admin.php",
        dataType: "json",
        data: data,
        //通信成功
        success: function (data, dataType)
        {
            //エラー判定
            if (data['statusCode'] != 1) {
                alert('エラー:' + data['errorMessages']);
                return false;
            }
            //フォームクリア
            clearKeywordForm();
            clearSlectedKeyword();
            ajaxLoadKeyword();
        },
        //通信失敗
        error: function (XMLHttpRequest, textStatus, errorThrown)
        {
            alert('エラーが発生しました:' + errorThrown);
            return false;
        }
    });
}

//フォームへ反映
function ajaxSetFormKeyword(id) {
    var data = {mode: 'getKeyword', id: id};
    $.ajax({
        type: "POST",
        url: "./ajax/ajax_keyword_admin.php",
        dataType: "json",
        data: data,
        //通信成功
        success: function (data, dataType)
        {
            //エラー判定
            if (data['statusCode'] != 1) {
                alert('エラー:' + data['errorMessages']);
                return false;
            }
            var resultData = data['result'];
            setFormData(resultData);
        },
        //通信失敗
        error: function (XMLHttpRequest, textStatus, errorThrown)
        {
            alert('エラーが発生しました:' + errorThrown);
            return false;
        }
    });
}

//検索ワードリスト取得
function ajaxLoadSearchWords() {
    var data = {mode: 'getSearchWords'};
    $.ajax({
        type: "POST",
        url: "./ajax/ajax_keyword_admin.php",
        dataType: "json",
        data: data,
        //通信成功
        success: function (data, dataType)
        {
            //console.log(data);
            displaySearchWordList(data);
        },
        //通信失敗
        error: function (XMLHttpRequest, textStatus, errorThrown)
        {
            alert('エラーが発生しました:' + errorThrown);
            return false;
        }
    });
}

//人気ワード一覧取得
function ajaxLoadKeyword() {
    var data = {mode: 'getKeywords'};
    $.ajax({
        type: "POST",
        url: "./ajax/ajax_keyword_admin.php",
        dataType: "json",
        data: data,
        //通信成功
        success: function (data, dataType)
        {
            displayKeywordList(data);
        },
        //通信失敗
        error: function (XMLHttpRequest, textStatus, errorThrown)
        {
            alert('エラーが発生しました:' + errorThrown);
            return false;
        }
    });
}

/*
 * 関数
 */

//初期化
function firstLoad() {
    //登録案件リスト読み込み
    ajaxLoadSearchWords();
    //急募案件リスト読み込み
    ajaxLoadKeyword();
}

function clearSlectedKeyword() {
    $(selectedKeywordElement).css('background-color', '');
    selectedKeywordId = null;
    selectedKeywordElement = null;
}

/*
 * 画面更新
 * 
 */

//フォームクリア
function clearKeywordForm() {
    $("input[name='keyword']").val('');
    $("input[name='sort_rank']").val('');
    $(".jsStatus").html('新規');
}

function setFormData(data) {
    $("input[name='keyword']").val(data['word']);
    $("input[name='sort_rank']").val(data['sort_rank']);
    $(".jsStatus").html('更新');
}

//人気ワード
function displayKeywordList(beData) {
    var tableTags = makeTags(beData, 'tableKeyword');
    $(".jsKeywordList").html(tableTags);
}

//検索ワード
function displaySearchWordList(beData) {
    var tableTags = makeTags(beData, 'tableSearchWord');
    $(".jsCountList").html(tableTags);
}

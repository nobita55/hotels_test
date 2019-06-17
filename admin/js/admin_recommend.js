var selectedJobId = null;
var selectedJobElement = null;
var selectedRecommendId = null;
var selectedRecommendElement = null;

var editingJobId = null;

$(function () {
    /*
     * イベント定義
     */
    //初期化
    $(window).load(function () {
        pageLoad();
    });

    //案件リスト
    $(document).on({
        "mouseenter": function () {
            if (selectedJobId !== $(this).parent().attr('class')) {
                $(this).parent().css('background-color', '#eee');
            }
        },
        "mouseleave": function () {
            if (selectedJobId !== $(this).parent().attr('class')) {
                $(this).parent().css('background-color', '');
            }
        },
        "click": function () {
            if (selectedJobId != null) {
                $(selectedJobElement).css('background-color', '');
            }
            $(this).parent().css('background-color', '#98c3d6');
            selectedJobId = $(this).parent().attr('class');
            selectedJobElement = $(this).parent();
        }
    }, ".jsJobList td");

    //急募リスト
    $(document).on({
        "mouseenter": function () {
            if (selectedRecommendId !== $(this).parent().attr('class')) {
                $(this).parent().css('background-color', '#eee');
            }
        },
        "mouseleave": function () {
            if (selectedRecommendId !== $(this).parent().attr('class')) {
                $(this).parent().css('background-color', '');
            }
        },
        "click": function () {
            if (selectedRecommendId != null) {
                $(selectedRecommendElement).css('background-color', '');
            }
            $(this).parent().css('background-color', '#9e6151');
            selectedRecommendId = $(this).parent().attr('class');
            selectedRecommendElement = $(this).parent();
            editingJobId = null;
            ajaxSetFormRecommend(selectedRecommendId);
        }
    }, ".jsRecommendList td");

    //検索ボタン
    $(document).on('click', '.btnSearch', function () {
        clearSlectedJob();
        var url = "./ajax/ajax_recommend_admin.php";
        searchJob(url);
    });

    //案件から入力画面へ反映
    $(document).on('click', '.jsBtnRegJob', function () {
        //選択確認
        if (selectedJobId == null) {
            swal("案件が選択されていません。");
            //alert('案件が選択されていません。');
            return false;
        }
        //確認ダイアログ
        swal({
            title: "登録します",
            text: "よろしいですか？",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#e78a1c",
            confirmButtonText: "OK",
            closeOnConfirm: true
        },
        function () {
            ajaxSaveRecommend(selectedJobId, 1);
        });
        //clearSlectedRecommend();
        //ajaxSetFormFromJob(selectedJobId);
    });

    //急募削除
    $(document).on('click', '.jsBtnDelJob', function () {
        //選択確認
        if (selectedRecommendId == null) {
            swal("案件が選択されていません。");
            //alert('案件が選択されていません。');
            return false;
        }
        //確認ダイアログ
        swal({
            title: "削除します",
            text: "よろしいですか？",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#e78a1c",
            confirmButtonText: "削除",
            closeOnConfirm: true
        },
        function () {
            //OK時
            ajaxDeleteRecommend(selectedRecommendId);
        });

        return false;
    });

    //急募保存
    $(document).on('click', '.btnSave', function () {
        //選択確認
        if (editingJobId === null && selectedRecommendId == null) {
            swal("登録する内容がありません。");
            //alert('急募案件へ登録する内容がありません。');
            return false;
        }
        //確認ダイアログ
        swal({
            title: "登録します",
            text: "よろしいですか？",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#e78a1c",
            confirmButtonText: "OK",
            closeOnConfirm: true
        },
        function () {
            //OK時
            var jobId;
            if (selectedRecommendId == null) {
                jobId = editingJobId;
            } else {
                jobId = selectedRecommendId;
            }
            ajaxSaveRecommend(jobId, 2);
        });
        return false;

    });

});

/*
 * 関数定義[AJax通信]
 */

//急募から削除
function ajaxDeleteRecommend(jobId) {
    var data = {mode: 'deleteRecommend', jobId: jobId};
    $.ajax({
        type: "POST",
        url: "./ajax/ajax_recommend_admin.php",
        dataType: "json",
        data: data,
        //通信成功
        success: function (data, dataType)
        {
            //エラー判定
            if (data['statusCode'] != 1) {
                swal('エラー:' + data['errorMessages']);
                //alert('エラー:' + data['errorMessages']);
                return false;
            }
            clearRecommendForm();
            clearSlectedRecommend();
            ajaxLoadRecommend();
        },
        //通信失敗
        error: function (XMLHttpRequest, textStatus, errorThrown)
        {
            swal('エラーが発生しました');
            //alert('エラーが発生しました:' + errorThrown);
            return false;
        }
    });
}

//急募へ登録
function ajaxSaveRecommend(jobId, type) {
    var openFlag;
    if (type == 2) {
        if ($("input[name='open_flag']:checked").val()) {
            openFlag = 1;
        } else {
            openFlag = 0;
        }
    } else {
        openFlag = 1;
    }
    var data = {mode: 'saveRecommend',
        jobid: jobId,
        sort_rank: $("input[name='sort_rank']").val(),
        open_flag: openFlag,
        catchcopy: $("textarea[name='catchcopy']").val()
    };

    $.ajax({
        type: "POST",
        url: "./ajax/ajax_recommend_admin.php",
        dataType: "json",
        data: data,
        //通信成功
        success: function (data, dataType)
        {
            //エラー判定
            if (data['statusCode'] != 1) {
                swal('エラー:' + data['errorMessages']);
                //alert('エラー:' + data['errorMessages']);
                return false;
            }
            //フォームクリア
            editingJobId = null;
            clearRecommendForm();
            clearSlectedRecommend();
            ajaxLoadRecommend();
        },
        //通信失敗
        error: function (XMLHttpRequest, textStatus, errorThrown)
        {
            swal('エラーが発生しました');
            //alert('エラーが発生しました:' + errorThrown);
            return false;
        }
    });
}

//急募変更フォームへ反映
function ajaxSetFormRecommend(jobId) {
    var data = {mode: 'getRecommend', jobId: jobId};
    $.ajax({
        type: "POST",
        url: "./ajax/ajax_recommend_admin.php",
        dataType: "json",
        data: data,
        //通信成功
        success: function (data, dataType)
        {
            //エラー判定
            if (data['statusCode'] != 1) {
                swal('エラー:' + data['errorMessages']);
                //alert('エラー:' + data['errorMessages']);
                return false;
            }
            var resultData = data['result'];
            setFormData(resultData);
            $(".formStatus").html('更新中');
        },
        //通信失敗
        error: function (XMLHttpRequest, textStatus, errorThrown)
        {
            swal('エラーが発生しました');
            //alert('エラーが発生しました:' + errorThrown);
            return false;
        }
    });


}

//急募入力画面へ反映
function ajaxSetFormFromJob(jobId) {
    //既に登録されているかを確認かつデータを取得
    var data = {mode: 'getJobForNewRecommend', jobId: jobId};
    $.ajax({
        type: "POST",
        url: "./ajax/ajax_recommend_admin.php",
        dataType: "json",
        data: data,
        //通信成功
        success: function (data, dataType)
        {
            //既登録エラー判定
            if (data['statusCode'] != 1) {
                swal('エラー:' + data['errorMessages']);
                //alert('エラー:' + data['errorMessages']);
                return false;
            }
            var resultData = data['result'];
            editingJobId = resultData['id'];
            setFormNewData(resultData);
            $("input[name='open_flag']").prop("checked", true);
            $(".formStatus").html('新規登録中');

        },
        //通信失敗
        error: function (XMLHttpRequest, textStatus, errorThrown)
        {
            swal('エラーが発生しました');
            //alert('エラーが発生しました:' + errorThrown);
            return false;
        }
    });
}

//急募案件取得
function ajaxLoadRecommend() {
    var data = {mode: 'getRecommends'};
    $.ajax({
        type: "POST",
        url: "./ajax/ajax_recommend_admin.php",
        dataType: "json",
        data: data,
        //通信成功
        success: function (data, dataType)
        {
            displayList('tableRecommend', ".jsRecommendList", data);
        },
        //通信失敗
        error: function (XMLHttpRequest, textStatus, errorThrown)
        {
            swal('エラーが発生しました');
            //alert('エラーが発生しました:' + errorThrown);
            return false;
        }
    });
}

/*
 * 関数
 */

//初期化
function pageLoad() {
    clearSlectedJob();
    clearSlectedRecommend();
    clearRecommendForm();
    editingJobId = null;
    //登録案件リスト読み込み
    var url = "./ajax/ajax_recommend_admin.php";
    ajaxLoadJobs(url, null);
    //急募案件リスト読み込み
    ajaxLoadRecommend();
}


function clearSlectedJob() {
    $(selectedJobElement).css('background-color', '');
    selectedJobId = null;
    selectedJobElement = null;

}
function clearSlectedRecommend() {
    $(selectedRecommendElement).css('background-color', '');
    selectedRecommendId = null;
    selectedRecommendElement = null;
}

/*
 * 画面更新
 * 
 */

//フォームクリア
function clearRecommendForm() {
    $(".jsFormJobId").html('');
    $(".jsFormCompanyName").html('');
    $(".jsFormJobTitle").html('');
    $("input[name='sort_rank']").val('');
    $("textarea[name='catchcopy']").val('');
    $("input[name='open_flag']").prop("checked", false);
    $(".formStatus").html('');
}

function setFormNewData(data) {
    var jobLink = getJobLink(data);
    $(".jsFormJobId").html(jobLink);
    //$(".jsFormJobId").html(data['Job_id']);

    $(".jsFormCompanyName").html(data['companyName']);
    $(".jsFormJobTitle").html(data['title']);
    $("input[name='sort_rank']").val('');
    $("textarea[name='catchcopy']").val('');
    $("input[name='open_flag']").prop("checked", false);
}

function setFormData(data) {
    var jobLink = getJobLink(data);
    $(".jsFormJobId").html(jobLink);
    //$(".jsFormJobId").html(data['Job_id']);

    $(".jsFormJobTitle").html(data['title']);
    $(".jsFormCompanyName").html(data['company_name']);
    $("input[name='sort_rank']").val(data['sort_rank']);
    $("textarea[name='catchcopy']").val(data['catchcopy']);
    if (data['is_open'] == 1) {
        $("input[name='open_flag']").prop("checked", true);
    } else {
        $("input[name='open_flag']").prop("checked", false);
    }
}

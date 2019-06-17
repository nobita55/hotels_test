$(function () {
    /*
     * イベント定義
     */
    //初期化
    $(window).load(function () {
        pageLoad();
    });

    /*案件選択------------------------------------*/
    //新規作成ボタン
    $(".jsNewJobRegistBtn").on("click", function () {
        window.open('/admin/job_admin_edit.php?mode=new', "_blank");
    });

    //掲載制御
    $(document).on('click', '.jsOpenJob', function () {
        var selectedJobNumber = $(this).parent().parent().attr('class');
        //確認ダイアログ
        swal({
            title: "求人を掲載にします",
            text: "よろしいですか？",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#e78a1c",
            confirmButtonText: "OK",
            closeOnConfirm: true
        },
        function () {
            //OK時
            ajaxOpenJob(selectedJobNumber);
            return false;
        });
        return false;
    });

    $(document).on('click', '.jsCloseJob', function () {
        var selectedJobNumber = $(this).parent().parent().attr('class');
        //確認ダイアログ
        swal({
            title: "求人を非掲載にします",
            text: "よろしいですか？",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#e78a1c",
            confirmButtonText: "OK",
            closeOnConfirm: true
        },
        function () {
            //OK時
            ajaxCloseJob(selectedJobNumber);
            return false;
        });

    });

    //メモ入力欄オープン
    $(document).on('click', '.jsMemoCtr', function () {
        //var selectedJobNumber = $(this).parent().parent().attr('class');
        //.メモを取得
        //ajaxGetMemo(selectedJobNumber);


    });


    //リマインダーオープン
    $(document).on('click', '.jsMemoCtr', function () {
        var selectedJobId = $(this).parent().parent().attr('class');

        $.magnificPopup.open({
            items: {src: '/admin/reminder.php?jid=' + selectedJobId},
            type: 'iframe'
        }, 0);
    });

});

/*
 * 関数
 */

//初期化
function pageLoad() {
    //検索フォーム初期化
    initSearch();
    initAndOr();

    //案件リスト生成
    vrSwitchStatus = $('input[name="fwStatus"]:checked').val();
    vrSwitchDelete = $('input[name="fwDeleted"]:checked').val();
    $(".searchController").hide();

    ajaxLoadAllJobs(vrSwitchStatus, vrSwitchDelete);
}

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

/*特集登録系*/

/*ajax通信*/

function ajaxOpenJob(jobId) {
    var url = "./ajax/ajax_edit_job.php";
    var postData = {mode: 'openJob', jobId: jobId};
    //成功処理定義
    var sfunc = function (data, dataType) {
        //エラー判定
        if (data['statusCode'] != 1) {
            swal('エラー:' + data['errorMessages']);
            //alert('エラー:' + data['errorMessages']);
            return false;
        }
        //リスト再表示
        if (searchMode == 'easy') {
            jobEasySearch();
        } else if (searchMode == 'search') {
            jobSearch();
        } else {
            vrSwitchStatus = $('input[name="fwStatus"]:checked').val();
            vrSwitchDelete = $('input[name="fwDeleted"]:checked').val();
            ajaxLoadAllJobs(vrSwitchStatus, vrSwitchDelete);
        }

    };
    //失敗処理定義
    var efunc = function (XMLHttpRequest, textStatus, errorThrown) {
        swal("エラーが発生しました");
        //alert('エラーが発生しました:' + errorThrown);
        return false;
    };
    ajaxMaster(postData, url, sfunc, efunc);
}

function ajaxCloseJob(jobId) {
    var url = "./ajax/ajax_edit_job.php";
    var postData = {mode: 'closeJob', jobId: jobId};
    //成功処理定義
    var sfunc = function (data, dataType) {
        //エラー判定
        if (data['statusCode'] != 1) {
            swal('エラー:' + data['errorMessages']);
            //alert('エラー:' + data['errorMessages']);
            return false;
        }
        //リスト再表示
        if (searchMode == 'easy') {
            jobEasySearch();
        } else if (searchMode == 'search') {
            jobSearch();
        } else {
            vrSwitchStatus = $('input[name="fwStatus"]:checked').val();
            vrSwitchDelete = $('input[name="fwDeleted"]:checked').val();
            ajaxLoadAllJobs(vrSwitchStatus, vrSwitchDelete);
        }

    };
    //失敗処理定義
    var efunc = function (XMLHttpRequest, textStatus, errorThrown) {
        swal("エラーが発生しました");
        //alert('エラーが発生しました:' + errorThrown);
        return false;
    };
    ajaxMaster(postData, url, sfunc, efunc);
}

/*
function ajaxGetMemo(jobId) {
    var url = "/admin/ajax/ajax_edit_job.php";
    var postData = {mode: 'getMemo', jobId: jobId};
    //成功処理定義
    var sfunc = function (data, dataType) {
        //エラー判定
        if (data['statusCode'] != 1) {
            swal("エラーが発生しました", data['errorMessages'], "error");
            return false;
        } else {
            var memo = data['result']['memo'];
            if (memo == null) {
                memo = '';
            }
            swal({
                title: '管理用メモ入力',
                text: '<textarea name="popMemoInput">' + memo + '</textarea>',
                //type: "warning",
                html: true,
                showCancelButton: true,
                confirmButtonColor: "#e78a1c",
                confirmButtonText: "保存",
                closeOnConfirm: true
            },
            function () {
                //OK時
                var memo = $("textarea[name='popMemoInput']").val();
                ajaxUpdateMemo(jobId, memo);
            });

            return false;
        }
    };
    //失敗処理定義
    var efunc = function (XMLHttpRequest, textStatus, errorThrown) {
        swal("エラーが発生しました", errorThrown, "error");
        return false;
    };
    ajaxMaster(postData, url, sfunc, efunc);
}
*/
/*
function ajaxUpdateMemo(jobId, memo) {
    var url = "/admin/ajax/ajax_edit_job.php";
    var postData = {mode: 'updateMemo', jobId: jobId, memo: memo};
    //成功処理定義
    var sfunc = function (data, dataType) {
        //エラー判定
        if (data['statusCode'] != 1) {
            swal("エラーが発生しました", data['errorMessages'], "error");
            return false;
        } else {
            //更新

        }
    };
    //失敗処理定義
    var efunc = function (XMLHttpRequest, textStatus, errorThrown) {
        swal("エラーが発生しました", errorThrown, "error");
        return false;
    };
    ajaxMaster(postData, url, sfunc, efunc);
}
*/
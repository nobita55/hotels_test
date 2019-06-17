var selectedSpecialId = null;
var selectedSpecialElement = null;
var selectedTopSpecialId = null;
var selectedTopSpecialElement = null;

var editingSpecialId = null;

//色付用
var spNoListInsp = null;

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
            if (selectedSpecialId !== $(this).parent().attr('class')) {
                $(this).parent().css('background-color', '#eee');
            }
        },
        "mouseleave": function () {
            if (selectedSpecialId !== $(this).parent().attr('class')) {
                $(this).parent().css('background-color', '');
            }
        },
        "click": function () {
            if (selectedSpecialId != null) {
                $(selectedSpecialElement).css('background-color', '');
            }
            $(this).parent().css('background-color', '#98c3d6');
            selectedSpecialId = $(this).parent().attr('class');
            selectedSpecialElement = $(this).parent();
        }
    }, ".jsSpecialList td");

    //急募リスト
    $(document).on({
        "mouseenter": function () {
            if (selectedTopSpecialId !== $(this).parent().attr('class')) {
                $(this).parent().css('background-color', '#eee');
            }
        },
        "mouseleave": function () {
            if (selectedTopSpecialId !== $(this).parent().attr('class')) {
                $(this).parent().css('background-color', '');
            }
        },
        "click": function () {
            if (selectedTopSpecialId != null) {
                $(selectedTopSpecialElement).css('background-color', '');
            }
            $(this).parent().css('background-color', '#9e6151');
            selectedTopSpecialId = $(this).parent().attr('class');
            selectedTopSpecialElement = $(this).parent();
            selectedSpecialId = null;
            ajaxSetFormTopSpecial(selectedTopSpecialId);
        }
    }, ".jsTopSpecialList td");


    //案件から入力画面へ反映
    $(document).on('click', '.jsBtnRegJob', function () {
        //選択確認
        if (selectedSpecialId == null) {
            alert('案件が選択されていません。');
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
            ajaxSaveTopSpecial(selectedSpecialId, 1);
        });
        //clearSlectedTopSpecial();
        //ajaxSetFormFromSpecial(selectedSpecialId);
    });

    //急募削除
    $(document).on('click', '.jsBtnDelJob', function () {
        //選択確認
        if (selectedTopSpecialId == null) {
            alert('案件が選択されていません。');
            return false;
        }
        //アラート確認
        if (!confirm('削除します。よろしいですか？')) {
            return false;
        }
        ajaxDeleteSpspecial(selectedTopSpecialId);
    });

    //急募保存
    $(document).on('click', '.btnSave', function () {
        //選択確認
        if (editingSpecialId === null && selectedTopSpecialId == null) {
            alert('登録する内容がありません。');
            return false;
        }
        //アラート確認
        if (!confirm('登録します。よろしいですか？')) {
            return false;
        }

        var specialId;
        if (selectedTopSpecialId == null) {
            specialId = editingSpecialId;
        } else {
            specialId = selectedTopSpecialId;
        }
        ajaxSaveTopSpecial(specialId, 2);
    });

});

/*
 * 関数定義[AJax通信]
 */

//登録案件取得
function ajaxLoadSpecials() {
    var data = {mode: 'getSpecials'};
    $.ajax({
        type: "POST",
        url: "./ajax/ajax_top_special_admin.php",
        dataType: "json",
        data: data,
        //通信成功
        success: function (data, dataType)
        {
            //登録済色付のため追加
            var specials = []
            _.each(data, function (rowData, index) {
                var result = _.find(spNoListInsp, function (num) {
                    return num == rowData.Number;
                });

                if (result === undefined) {
                    rowData.registedClass = '';
                } else {
                    rowData.registedClass = ' jsRegisted';
                }
                specials[index] = rowData;
            });
            //
            displayList('tableSpecial', ".jsSpecialList", specials);
        },
        //通信失敗
        error: function (XMLHttpRequest, textStatus, errorThrown)
        {
            alert('エラーが発生しました:' + errorThrown);
            return false;
        }
    });
}

//急募から削除
function ajaxDeleteSpspecial(specialId) {
    var data = {mode: 'deleteTopSpecial', specialid: specialId};
    $.ajax({
        type: "POST",
        url: "./ajax/ajax_top_special_admin.php",
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
            clearTopSpecialForm();
            clearSlectedTopSpecial();
            ajaxLoadTopSpecial();
        },
        //通信失敗
        error: function (XMLHttpRequest, textStatus, errorThrown)
        {
            alert('エラーが発生しました:' + errorThrown);
            return false;
        }
    });
}

//急募へ登録
function ajaxSaveTopSpecial(specialId, type) {
    var openFlag;
    var topFlag;
    var imgFlag;
    if (type == 2) {
        if ($("input[name='open_flag']:checked").val()) {
            openFlag = 1;
        } else {
            openFlag = 0;
        }
        if ($("input[name='top_flag']:checked").val()) {
            topFlag = 1;
        } else {
            topFlag = 0;
        }
        if ($("input[name='img_flag']:checked").val()) {
            imgFlag = 1;
        } else {
            imgFlag = 0;
        }
    } else {
        openFlag = 1;
    }
    var data = {mode: 'saveTopSpecial',
        specialId: specialId,
        sort_rank: $("input[name='sort_rank']").val(),
        open_flag: openFlag,
        top_flag: topFlag,
        img_flag: imgFlag,
        catchcopy: $("textarea[name='catchcopy']").val()
    };

    $.ajax({
        type: "POST",
        url: "./ajax/ajax_top_special_admin.php",
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
            editingSpecialIdv = null;
            clearTopSpecialForm();
            clearSlectedTopSpecial();
            ajaxLoadTopSpecial();
        },
        //通信失敗
        error: function (XMLHttpRequest, textStatus, errorThrown)
        {
            alert('エラーが発生しました:' + errorThrown);
            return false;
        }
    });
}

//急募変更フォームへ反映
function ajaxSetFormTopSpecial(specialId) {
    var data = {mode: 'getTopSpecial', specialid: specialId};
    $.ajax({
        type: "POST",
        url: "./ajax/ajax_top_special_admin.php",
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
            $(".formStatus").html('更新中');
        },
        //通信失敗
        error: function (XMLHttpRequest, textStatus, errorThrown)
        {
            alert('エラーが発生しました:' + errorThrown);
            return false;
        }
    });


}

//急募入力画面へ反映
function ajaxSetFormFromSpecial(specialId) {

    //既に登録されているかを確認かつデータを取得
    var data = {mode: 'getSpecialForNewTopSpecial', specialid: specialId};
    $.ajax({
        type: "POST",
        url: "./ajax/ajax_top_special_admin.php",
        dataType: "json",
        data: data,
        //通信成功
        success: function (data, dataType)
        {
            //既登録エラー判定
            if (data['statusCode'] != 1) {
                alert('エラー:' + data['errorMessages']);
                return false;
            }
            //console.log(data);

            var resultData = data['result'];
            editingSpecialId = resultData['id'];
            setFormNewData(resultData);
            $("input[name='open_flag']").prop("checked", true);
            $("input[name='top_flag']").prop("checked", false);
            $(".formStatus").html('新規登録中');

        },
        //通信失敗
        error: function (XMLHttpRequest, textStatus, errorThrown)
        {
            alert('エラーが発生しました:' + errorThrown);
            return false;
        }
    });
}

//急募案件取得
function ajaxLoadTopSpecial() {
    var data = {mode: 'getTopSpecials'};
    $.ajax({
        type: "POST",
        url: "./ajax/ajax_top_special_admin.php",
        dataType: "json",
        data: data,
        //通信成功
        success: function (data, dataType)
        {
            //色付のため追加
            spNoListInsp = [];
            _.each(data, function (rowData, index) {
                spNoListInsp.push(rowData.special_id);
            });
            displayList('tableTopSpecial', ".jsTopSpecialList", data);
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
function pageLoad() {
    clearSlectedSpecial();
    clearSlectedTopSpecial();
    clearTopSpecialForm();
    editingSpecialId = null;
    //登録案件リスト読み込み

    ajaxLoadSpecials();
    //急募案件リスト読み込み
    ajaxLoadTopSpecial();
}


function clearSlectedSpecial() {
    $(selectedSpecialElement).css('background-color', '');
    selectedSpecialId = null;
    selectedSpecialElement = null;

}
function clearSlectedTopSpecial() {
    $(selectedTopSpecialElement).css('background-color', '');
    selectedTopSpecialId = null;
    selectedTopSpecialElement = null;
}

/*
 * 画面更新
 * 
 */

//フォームクリア
function clearTopSpecialForm() {
    $(".jsFormSpecialTitle").html('');
    $("input[name='sort_rank']").val('');
    $("textarea[name='catchcopy']").val('');
    $("input[name='open_flag']").prop("checked", false);
    $("input[name='top_flag']").prop("checked", false);
    $("input[name='img_flag']").prop("checked", false);
    $(".formStatus").html('');
}

function setFormNewData(data) {
    $(".jsFormSpecialTitle").html(data['title']);
    $("input[name='sort_rank']").val('');
    $("textarea[name='catchcopy']").val('');
    $("input[name='open_flag']").prop("checked", false);
    $("input[name='top_flag']").prop("checked", false);
    $("input[name='img_flag']").prop("checked", false);
}

function setFormData(data) {
    $(".jsFormSpecialTitle").html(data['title']);
    $("input[name='sort_rank']").val(data['sort_rank']);
    $("textarea[name='catchcopy']").val(data['catch']);
    if (data['is_open'] == 1) {
        $("input[name='open_flag']").prop("checked", true);
    } else {
        $("input[name='open_flag']").prop("checked", false);
    }
    if (data['is_top'] == 1) {
        $("input[name='top_flag']").prop("checked", true);
    } else {
        $("input[name='top_flag']").prop("checked", false);
    }
    if (data['is_img'] == 1) {
        $("input[name='img_flag']").prop("checked", true);
    } else {
        $("input[name='img_flag']").prop("checked", false);
    }
}

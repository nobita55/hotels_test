//画像
var selectedFileBin = null;
var imgFileBin = [];

/*特集管理------------------------------------*/
var selectedSpecialId = null;
var selectedSpecialElement = null;
//入力文字数設定
var titleLimit = 24;

/*案件選択------------------------------------*/
var selectedJobInSpJobId = null;
var selectedJobInSpElement = null;

var selectedJobJobId = null;
var selectedJobElement = null;

//検索項目個数指定
//手動での対応が必要
//共用でとりあえず300を設定
var searchItemMaxNo = 300;

//登録済案件表示切替用変数
var sInSpData = null;
var IdListInsp = null;

var sDataAll = null;
var sDataNotIncludeReg = null;

//検索結果数

var sNum = null;
var sniNum = null;

//一括登録用
var searchedJobs = null;

//URL
var pcSpecialUrl = "/special/contens/";

$(function () {
    /*
     * イベント定義
     */
    //初期化
    $(window).load(function () {
        pageLoad();
    });

    /*
     * イベント定義
     */
    /*================================================
     ファイル選択関係イベント設定
     =================================================*/
    $('.container').bind('drop', function (e) {
// デフォルトの挙動を停止
        e.preventDefault();
    }).bind('dragenter', function () {
// デフォルトの挙動を停止
        return false;
    }).bind('dragover', function () {
// デフォルトの挙動を停止
        return false;
    });
    for (var i = 0; i <= 2; i++) {
        initDragArea(i);
        initFileSelectBtn(i);
    }

    /*特集管理------------------------------------*/
    //特集リストイベント
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
            $(this).parent().css('background-color', '#9e6151');
            selectedSpecialId = $(this).parent().attr('class');
            selectedSpecialElement = $(this).parent();
            ajaxSetFormSpecial(selectedSpecialId);
        }
    }, ".jsSpecialsList td");

    //特集新規入力
    $(document).on('click', '.jsBtnNew', function () {
        //確認ダイアログ
        swal({
            title: "新規入力のためフォームをリセットします",
            text: "よろしいですか？",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#e78a1c",
            confirmButtonText: "OK",
            closeOnConfirm: true
        },
        function () {
            //OK時
            clearSlectedSpecial();
            clearForm();
            selectedSpecialId = null;
        });
        return false;

    });

    //特集削除
    $(document).on('click', '.jsBtnDel', function () {
        //選択確認
        if (selectedSpecialId == null) {
            swal('特集が選択されていません。');
            return false;
        }
        swal({
            title: "特集を削除します",
            text: "よろしいですか？",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#e78a1c",
            confirmButtonText: "OK",
            closeOnConfirm: true
        },
        function () {
            ajaxDeleteSpecial(selectedSpecialId);
        });
        return false;
    });

    //特集保存
    $(document).on('click', '.jsBtnSave', function () {
        //アラート確認
        swal({
            title: "特集を登録します",
            text: "よろしいですか？",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#e78a1c",
            confirmButtonText: "OK",
            closeOnConfirm: false
        },
        function () {
            //バリデーション
            if (!validateSpecial()) {
                return false;
            }
            ajaxSaveSpecial(selectedSpecialId);
        });
        return false;
    });


    //チェック制御
    $("#isStatic").change(function () {
        if ($(this).is(':checked')) {
            $('.jsPageUrl').show();
            $('.jsBannerImg').hide();
        } else {
            $('.jsBannerImg').show();
            $('.jsPageUrl').hide();
        }
    });

    //入力文字数カウント表示（リスト用タイトル）
    $("textarea[name='title']").keyup(function () {
        var remain = stringRemainNumNotIncRetuern(this, titleLimit);
        $(".remainTitle").html(remain);
        if (remain < 0) {
            $(".remainTitle").css('color', '#ff0000');
        } else {
            $(".remainTitle").css('color', '#aaaaaa');
        }
    });
    
    //入力文字数カウント表示（ページ用タイトル）
    $("textarea[name='pageTitle']").keyup(function () {
        var remain = stringRemainNum(this, titleLimit);
        $(".remainPageTitle").html(remain);
        if (remain < 0) {
            $(".remainPageTitle").css('color', '#ff0000');
        } else {
            $(".remainPageTitle").css('color', '#aaaaaa');
        }
    });

    //特集案件選択遷移ボタン
    $(document).on('click', '.jsBtnSelect', function () {
        //選択確認
        if (selectedSpecialId == null) {
            swal('特集が選択されていません。');
            //alert('特集が選択されていません。');
            return false;
        }
        //案件情報表示
        viewJobsInSpecialAdmin();
        $(".searchController").hide();
        $('.leftContents').hide();
        $('.rightContents').show();
    });

    /*案件選択------------------------------------*/

    //特集内案件リスト
    $(document).on({
        "mouseenter": function () {
            if (selectedJobInSpJobId !== $(this).parent().attr('class')) {
                $(this).parent().css('background-color', '#eee');
            }
        },
        "mouseleave": function () {
            if (selectedJobInSpJobId !== $(this).parent().attr('class')) {
                $(this).parent().css('background-color', '');
            }
        },
        "click": function () {
            if (selectedJobInSpJobId != null) {
                $(selectedJobInSpElement).css('background-color', '');
            }
            $(this).parent().css('background-color', '#9e6151');
            selectedJobInSpJobId = $(this).parent().attr('class');
            selectedJobInSpElement = $(this).parent();
            //ajaxSetFormSpecial(selectedJobInSpElement, selectedJobInSpJobId);
        }
    }, ".jsJobsInSpList td");

    //案件リスト
    $(document).on({
        "mouseenter": function () {
            if (selectedJobJobId !== $(this).parent().attr('class')) {
                $(this).parent().css('background-color', '#eee');
            }
        },
        "mouseleave": function () {
            if (selectedJobJobId !== $(this).parent().attr('class')) {
                $(this).parent().css('background-color', '');
            }
        },
        "click": function () {
            if (selectedJobJobId != null) {
                $(selectedJobElement).css('background-color', '');
            }
            $(this).parent().css('background-color', '#98c3d6');
            selectedJobJobId = $(this).parent().attr('class');
            selectedJobElement = $(this).parent();
            //ajaxSetFormSpecial(selectedJobJobId);
        }
    }, ".jsJobsList td");


    //案件選択終了
    $(".registEndBtn").on("click", function () {
        $('.leftContents').show();
        $('.rightContents').hide();

        initSpecialEdit();
    });

    //選択解除
    $(".jsAreaSelectClearBtn").on("click", function () {
        initSearchChecked('pref', searchAreaItemMaxNo);
    });
    $(".jsHouseSelectClearBtn").on("click", function () {
        initSearchChecked('house', searchHouseItemMaxNo);
    });
    $(".jsIncomeSelectClearBtn").on("click", function () {
        initSearchChecked('income', searchIncomeItemMaxNo);
    });
    $(".jsMeritSelectClearBtn").on("click", function () {
        initSearchChecked('merit', searchMeritItemMaxNo);
    });

    /*******************************************************************************/
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
            //全案件取得
            //案件リスト生成
            ajaxLoadAllJobs(selectedSpecialId);
            return false;
        });
        return false;

    });

    //検索ボタン
    $(".jsSearchBtn").on("click", function () {
        jobSearch();
        return false;
    });

    //検索ボタン
    $(".jsEasySearchBtn").on("click", function () {
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
//-------------------------------------------------------------------------
    //登録済案件表示非表示切り替えボタン
    $(".jsSrListSwitch").on("click", function () {
        if ($('.srListSwitch').prop('checked')) {
            $(".searchResultNum").html(sNum);
            displayList('tableSpJobs', ".jsJobsList", sDataAll);
            refColorJobsInSp();
        } else {
            $(".searchResultNum").html(sniNum + '(' + sNum + ')');
            displayList('tableSpJobs', ".jsJobsList", sDataNotIncludeReg);
            clearColorJobsInSp();
        }
    });

    //案件登録ボタン(1件)
    $(".jsBtnRegJob").on("click", function () {
        //選択確認
        if (selectedJobJobId == null) {
            swal('特集が選択されていません。');
            //alert('案件が選択されていません。');
            return false;
        }
        ajaxRegistJob(selectedSpecialId, selectedJobJobId);
    });

    //案件削除ボタン(1件)
    $(".jsBtnDelJob").on("click", function () {
        //選択確認
        if (selectedJobInSpJobId == null) {
            swal('特集が選択されていません。');
            //alert('案件が選択されていません。');
            return false;
        }

        swal({
            title: "特集から選択した案件を削除します",
            text: "よろしいですか？",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#e78a1c",
            confirmButtonText: "OK",
            closeOnConfirm: true
        },
        function () {
            ajaxDeleteJob(selectedSpecialId, selectedJobInSpJobId);
        });
        return false;


    });

    //案件登録ボタン(表示全て)
    $(".jsBtnRegAllJob").on("click", function () {
        //アラート確認
        swal({
            title: "検索結果の案件を全て特集へ登録します",
            text: "よろしいですか？",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#e78a1c",
            confirmButtonText: "OK",
            closeOnConfirm: true
        },
        function () {
            ajaxRegistAllJobs(selectedSpecialId, searchedJobs);
        });
        return false;


    });

    //案件削除ボタン(全て)
    $(".jsBtnDelAllJob").on("click", function () {
        //アラート確認
        swal({
            title: "特集に登録された全ての案件を削除します",
            text: "よろしいですか？",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#e78a1c",
            confirmButtonText: "OK",
            closeOnConfirm: true
        },
        function () {
            ajaxDeleteAllJobs(selectedSpecialId);
        });
        return false;
    });

    //並び更新ボタン
    $(".jsSortBtn").on("click", function () {
        //アラート確認
        swal({
            title: "並び順を更新します",
            text: "よろしいですか？",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#e78a1c",
            confirmButtonText: "OK",
            closeOnConfirm: true
        },
        function () {
            //フォームから値を取得
            var newSort = new Object();
            _.each(IdListInsp, function (Id, index) {
                var ns = $("input[name='newSort_" + Id + "']").val();
                ns = toHankakuNum(ns);
                //入力値数値判定
                if (ns != '' && isFinite(ns) && ns >= 1) {
                    newSort[Id] = ns;
                }
            });
            //console.log(newSort);
            ajaxReSorting(selectedSpecialId, newSort);
        });
        return false;
    });
    
    //並び更新ボタン
    $(".jsRandomBtn").on("click", function () {
        //アラート確認
        swal({
            title: "現在の並び順をリセットして、ランダムに並び替えます",
            text: "よろしいですか？",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#e78a1c",
            confirmButtonText: "OK",
            closeOnConfirm: true
        },
        function () {
            ajaxRandomSorting(selectedSpecialId);
        });
        return false;
    });
    
    //コピーボタン
    $(".jsCopyBtn").on("click", function () {
        $("textarea[name='pageTitle']").val($("textarea[name='title']").val());
        
    });
});


/*＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊
 * 関数
 *＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊＊*/

//初期化
function pageLoad() {
    initSpecialEdit();
}

//初期化
function initSpecialEdit() {
    clearSlectedSpecial();
    clearForm();
    selectedSpecialId = null;
    ajaxLoadSpecials();
}

//バリデーション
function validateSpecial() {
    var title = $("textarea[name='title']").val();
    var pageTitle = $("textarea[name='pageTitle']").val();
    var comment = $("textarea[name='comment']").val();
    var url = $("input[name='url']").val();
//タイトル必須
    var tmpTitle = title;
    tmpTitle = tmpTitle.replace(/\r?\n/g, "");
    if (!checkMustAndTextLimit(tmpTitle, 24)) {
        swal('エラー', 'リスト用タイトルは必ず24文字以内で入力してください。', 'error');
        return false;
    }
    
    tmpTitle = pageTitle;
    tmpTitle = tmpTitle.replace(/\r?\n/g, "");
    if (!checkTextLimit(tmpTitle, 24)) {
        swal('エラー', 'ページ用タイトルは24文字以内で入力してください。', 'error');
        return false;
    }

//内容必須
    if (comment == '' || comment == null) {
        swal('エラー', '内容を必ず入力してください。', 'error');
        return false;
    }

//静的の場合URL必須
    if ($('#isStatic').is(':checked')) {
        if (!checkMustAndTextLimit(url, 255)) {
            swal('エラー', 'URLを必ず255文字以内で入力してください。', 'error');
            return false;
        }
    }
    return true;
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

/*特集管理------------------------------------*/

//特集リスト取得
function ajaxLoadSpecials() {
    var url = "./ajax/ajax_special_admin.php";
    var postData = {mode: 'getSpecials'};
    //成功処理定義
    var sfunc = function (data, dataType) {
        displayList('tableSpecials', ".jsSpecialsList", data);
    };
    //失敗処理定義
    var efunc = function (XMLHttpRequest, textStatus, errorThrown) {
        swal('エラーが発生しました');
        //alert('エラーが発生しました:' + errorThrown);
        return false;
    };

    ajaxMaster(postData, url, sfunc, efunc);
}

//特集変更フォームへ反映
function ajaxSetFormSpecial(specialId) {
    var url = "./ajax/ajax_special_admin.php";
    var postData = {mode: 'getSpecial', specialid: specialId};
    //成功処理定義
    var sfunc = function (data, dataType) {
        //エラー判定
        if (data['statusCode'] != 1) {
            swal('エラー:' + data['errorMessages']);
            //alert('エラー:' + data['errorMessages']);
            return false;
        }
        var resultData = data['result'];
        setFormData(resultData);

        $(".formStatus").html('特集番号<br>' + resultData['id'] + '<br>更新中');
    };
    //失敗処理定義
    var efunc = function (XMLHttpRequest, textStatus, errorThrown) {
        swal('エラーが発生しました');
        //alert('エラーが発生しました:' + errorThrown);
        return false;
    };

    ajaxMaster(postData, url, sfunc, efunc);
}

//特集を保存
function ajaxSaveSpecial(specialId) {
    var url = "./ajax/ajax_special_admin.php";

    //画像処理
    var imgDelete0 = $("input[name='delete0']:checked").val();
    var imgDelete1 = $("input[name='delete1']:checked").val();

    //データ送信
    var fd = new FormData();

    if (specialId == null) {
        //新規        
        fd.append("mode", 'insertSpecial');
    } else {
        //更新
        fd.append("mode", 'updateSpecial');
        fd.append("specialid", specialId);
    }

    fd.append("title", $("textarea[name='title']").val());
    fd.append("pageTitle", $("textarea[name='pageTitle']").val());
    fd.append("comment", $("textarea[name='comment']").val());
    fd.append("memo", $("textarea[name='memo']").val());
    fd.append("url", $("input[name='url']").val());

    if ($('#isStatic').is(':checked')) {
        fd.append("isStatic", 1);
    } else {
        fd.append("isStatic", 0);
    }

    fd.append("imgDelete0", imgDelete0);
    fd.append("imgDelete1", imgDelete1);

    fd.append("imgFile0", imgFileBin[0]);
    fd.append("imgFile1", imgFileBin[1]);

    $.ajax({
        type: "POST",
        url: "/admin/ajax/ajax_special_admin.php",
        data: fd,
        processData: false,
        contentType: false,
        dataType: 'json',
        //通信成功
        success: function (data, dataType)
        {
            //エラー判定
            if (data['statusCode'] != 1) {
                swal("エラー", data['errorMessages'], "error");
                fileCancel(0);
                fileCancel(1);
                return false;
            }
            //$('.fileName').html('');
            imgFileBin = [];
            selectedFileBin = null;

            swal({
                title: "登録",
                text: "特集の登録が完了しました。",
                showCancelButton: false,
                confirmButtonColor: "#e78a1c",
                confirmButtonText: "OK",
                closeOnConfirm: false},
            function () {
                location.reload();
                return false;
            });
        },
        //通信失敗
        error: function (XMLHttpRequest, textStatus, errorThrown)
        {
            swal("エラー", "エラーが発生しました" + textStatus, "error");
            return false;
        }
    });
}

//特集を削除
function ajaxDeleteSpecial(specialId) {
    var url = "./ajax/ajax_special_admin.php";
    var postData = {mode: 'deleteSpecial', specialid: specialId};
    //成功処理定義
    var sfunc = function (data, dataType) {
        //エラー判定
        if (data['statusCode'] != 1) {
            swal('エラー:' + data['errorMessages']);
            //alert('エラー:' + data['errorMessages']);
            return false;
        }
        initSpecialEdit();
    };
    //失敗処理定義
    var efunc = function (XMLHttpRequest, textStatus, errorThrown) {
        swal('エラーが発生しました');
        //alert('エラーが発生しました:' + errorThrown);
        return false;
    };

    ajaxMaster(postData, url, sfunc, efunc);
}

//特集選択をクリア
function clearSlectedSpecial() {
    $(selectedSpecialElement).css('background-color', '');
    selectedSpecialId = null;
    selectedSpecialElement = null;
}

//フォームクリア
function clearForm() {
    $("textarea[name='title']").val('');
    $("input[name='pageTitle']").val('');
    $("textarea[name='comment']").val('');
    $("textarea[name='memo']").val('');
    $(".formStatus").html('新規入力');
    $('input[name="isStatic"]').prop("checked", false);
    $('.jsBannerImg').show();
    $('.jsPageUrl').hide();

    fileCancel(0);
    fileCancel(1);
    imgReset('img0');
    imgReset('img1');
    $(".registImg0").attr("src", "/admin/img/no_image_square.jpg");
    $(".registImg1").attr("src", "/admin/img/no_image.gif");

    $("input[name='url']").val('');

    //文字数処理 リスト用タイトル
    var remain = stringRemainNumNotIncRetuern($("textarea[name='title']"), titleLimit);
    $(".remainTitle").html(remain);
    $(".remainTitle").css('color', '#aaaaaa');
    
    //文字数処理 ページ用タイトル
    var remain = stringRemainNumNotIncRetuern($("textarea[name='pageTitle']"), titleLimit);
    $(".remainPageTitle").html(remain);
    $(".remainPageTitle").css('color', '#aaaaaa');
}

//フォームへデータ反映
function setFormData(data) {
    $("textarea[name='title']").val(data['title']);
    $("textarea[name='pageTitle']").val(data['page_title']);
    data['comment'] = data['comment'].replace(/<br>/g, '\n');
    data['comment'] = data['comment'].replace(/<BR>/g, '\n');

    $("textarea[name='comment']").val(data['comment']);
    $("textarea[name='memo']").val(data['memo']);
    $("input[name='url']").val(data['url']);

    //特集ページタイプスイッチ

    if (data['is_static'] == 1) {
        $('input[name="isStatic"]').prop("checked", true);
        $('.jsPageUrl').show();
        $('.jsBannerImg').hide();
    } else {
        $('input[name="isStatic"]').prop("checked", false);
        $('.jsBannerImg').show();
        $('.jsPageUrl').hide();
    }

    //文字数処理
    var remain = stringRemainNumNotIncRetuern($("textarea[name='title']"), titleLimit);
    $(".remainTitle").html(remain);
    $(".remainTitle").css('color', '#aaaaaa');

    //画像表示
    if (data['isImgExist'][0] != false) {
        $(".registImg0").attr("src", data['isImgExist'][0]['fileName']);
    } else {
        $(".registImg0").attr("src", "/admin/img/no_image_square.jpg");
    }

    if (data['isImgExist'][1] != false) {
        $(".registImg1").attr("src", data['isImgExist'][1]['fileName']);
    } else {
        $(".registImg1").attr("src", "/admin/img/no_image.gif");
    }


}

/*案件選択------------------------------------*/
function viewJobsInSpecialAdmin() {
    //検索フォーム初期化
    initSearch();
    initAndOr();

    //特集タイトル取得
    ajaxGetSpecialInfo(selectedSpecialId);
    //特集登録案件リスト生成
    ajaxLoadJobsInSp(selectedSpecialId);
    //案件リスト生成
    ajaxLoadAllJobs(selectedSpecialId);
}

function jobEasySearch() {

    var searchJobId = $(':text[name="jobId"]').val();
    searchJobId = $.trim(searchJobId);
    var searchRecJobId = $(':text[name="recJobId"]').val();
    searchRecJobId = $.trim(searchRecJobId);

    var searchCentralManager = $('.formCentralManager').val();

    //POSTデータ作成
    var postData = {mode: 'easySearchJobs', specialid: selectedSpecialId,
        jobId: searchJobId, recJobId: searchRecJobId, centralManager: searchCentralManager
    };
    ajaxSearchJobs(postData);
}

function jobSearch() {

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
    var postData = {mode: 'searchJobs', specialid: selectedSpecialId,
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

function toHankakuNum(num)
{
    han = "0123456789";
    zen = "０１２３４５６７８９";
    str = "";
    for (i = 0; i < num.length; i++)
    {
        c = num.charAt(i);
        n = zen.indexOf(c, 0);
        if (n >= 0)
            c = han.charAt(n);
        str += c;
    }
    return str;
}

function refColorJobsInSp() {
    _.each(IdListInsp, function (rowData, index) {
        var rJobId = rowData;
        $('.jsJobsInSpList .' + rJobId).css('color', '#000000');
        $('.jsJobsInSpList .' + rJobId).css('font-weight', 'normal');
    });
    _.each(sDataAll, function (rowData, index) {
        var rJobId = rowData.id;
        $('.jsJobsInSpList .' + rJobId).css('color', '#952507');
        $('.jsJobsInSpList .' + rJobId).css('font-weight', 'bold');
    });

}

function clearColorJobsInSp() {
    _.each(IdListInsp, function (rowData, index) {
        var rJobId = rowData;
        $('.jsJobsInSpList .' + rJobId).css('color', '#000000');
        $('.jsJobsInSpList .' + rJobId).css('font-weight', 'normal');
    });
}

/*特集登録系*/

/*ajax通信*/
//特集詳細取得
function ajaxGetSpecialInfo(specialId) {
    var url = "./ajax/ajax_special_admin.php";
    var postData = {mode: 'getSpecial', specialid: specialId};
    //成功処理定義
    var sfunc = function (data, dataType) {
        //エラー判定
        if (data['statusCode'] != 1) {
            swal('エラー:' + data['errorMessages']);
            //alert('エラー:' + data['errorMessages']);
            return false;
        }
        var resultData = data['result'];
        $(".rhSpNum").html(resultData['id']);
        $(".rhTitle").html(resultData['title']);

        $("#linkPcSpecial").attr("href", pcSpecialUrl + resultData['id']);
    };
    //失敗処理定義
    var efunc = function (XMLHttpRequest, textStatus, errorThrown) {
        swal('エラーが発生しました');
        //alert('エラーが発生しました:' + errorThrown);
        return false;
    };
    ajaxMaster(postData, url, sfunc, efunc);
}

//特集内案件リスト取得
function ajaxLoadJobsInSp(specialId) {
    var url = "./ajax/ajax_special_admin.php";
    var postData = {mode: 'loadJobsInSp', specialid: specialId};
    //成功処理定義
    var sfunc = function (data, dataType) {
        //処理
        var count = data['count'];
        $(".registedNum").html(data['count']);
        sInSpData = data['data'];
        IdListInsp = [];
        _.each(data['data'], function (rowData, index) {
            IdListInsp.push(rowData.job_id);
        });

        displayList('tableSpJobsInSp', ".jsJobsInSpList", sInSpData);

    };
    //失敗処理定義
    var efunc = function (XMLHttpRequest, textStatus, errorThrown) {
        swal('エラーが発生しました');
        //alert('エラーが発生しました:' + errorThrown);
        return false;
    };
    ajaxMaster(postData, url, sfunc, efunc);

}

//全案件取得
function ajaxLoadAllJobs(specialId) {
    var url = "./ajax/ajax_special_admin.php";
    var postData = {mode: 'loadAllJobs', specialid: specialId};
    //成功処理定義
    var sfunc = function (data, dataType) {
        //処理
        var count = data['count'];

        sDataAll = [];
        sDataNotIncludeReg = [];
        searchedJobs = [];
        var i = 0;
        _.each(data['data'], function (rowData, index) {
            var result = _.find(IdListInsp, function (num) {
                return num == rowData.id;
            });

            if (result === undefined) {
                rowData.registedClass = '';
                sDataNotIncludeReg[i] = rowData;
                searchedJobs[i] = rowData.id;
                i++;
            } else {
                rowData.registedClass = ' jsRegisted';
            }
            sDataAll[index] = rowData;
        });

        $(".searchAllNum").html(data['count']);

        sNum = data['count'];
        sniNum = i;

        if ($('.srListSwitch').prop('checked')) {
            $(".searchResultNum").html(sNum);
            displayList('tableSpJobs', ".jsJobsList", sDataAll);
            refColorJobsInSp();
        } else {
            $(".searchResultNum").html(sniNum + '(' + sNum + ')');
            displayList('tableSpJobs', ".jsJobsList", sDataNotIncludeReg);
            clearColorJobsInSp();
        }
    };
    //失敗処理定義
    var efunc = function (XMLHttpRequest, textStatus, errorThrown) {
        swal('エラーが発生しました');
        //alert('エラーが発生しました:' + errorThrown);
        return false;
    };
    ajaxMaster(postData, url, sfunc, efunc);
}

//案件検索
function ajaxSearchJobs(postData) {
    var url = "./ajax/ajax_special_admin.php";
    //成功処理定義
    var sfunc = function (data, dataType) {
        //処理
        var count = data['count'];

        sDataAll = [];
        sDataNotIncludeReg = [];

        searchedJobs = [];

        var i = 0;
        _.each(data['data'], function (rowData, index) {
            var result = _.find(IdListInsp, function (num) {
                return num == rowData.id;
            });

            if (result === undefined) {
                rowData.registedClass = '';
                sDataNotIncludeReg[i] = rowData;
                searchedJobs[i] = rowData.id;
                i++;
            } else {
                rowData.registedClass = ' jsRegisted';
            }
            sDataAll[index] = rowData;
        });

        $(".searchAllNum").html(data['countAll']);

        sNum = data['count'];
        sniNum = i;

        if ($('.srListSwitch').prop('checked')) {
            $(".searchResultNum").html(sNum);
            displayList('tableSpJobs', ".jsJobsList", sDataAll);
            refColorJobsInSp();
        } else {
            $(".searchResultNum").html(sniNum + '(' + sNum + ')');
            displayList('tableSpJobs', ".jsJobsList", sDataNotIncludeReg);
            clearColorJobsInSp();
        }
    };
    //失敗処理定義
    var efunc = function (XMLHttpRequest, textStatus, errorThrown) {
        swal('エラーが発生しました1' + errorThrown);
        //alert('エラーが発生しました:' + errorThrown);
        return false;
    };
    ajaxMaster(postData, url, sfunc, efunc);
}

//1件登録
function ajaxRegistJob(specialId, jobId) {
    var url = "./ajax/ajax_special_admin.php";
    var postData = {mode: 'addJob', specialid: specialId, jobId: jobId};
    //成功処理定義
    var sfunc = function (data, dataType) {
        //エラー判定
        if (data['statusCode'] != 1) {
            swal('エラー:' + data['errorMessages']);
            //alert('エラー:' + data['errorMessages']);
            return false;
        }
        //特集登録案件リスト生成
        ajaxLoadJobsInSp(selectedSpecialId);
        //案件リスト生成
        jobSearch();

    };
    //失敗処理定義
    var efunc = function (XMLHttpRequest, textStatus, errorThrown) {
        swal('エラーが発生しました');
        //alert('エラーが発生しました:' + errorThrown);
        return false;
    };
    ajaxMaster(postData, url, sfunc, efunc);
}

//全件登録
function ajaxRegistAllJobs(specialId, jobIds) {
    console.log(jobIds);
    var url = "./ajax/ajax_special_admin.php";
    var postData = {mode: 'addAllJobs', specialid: specialId, jobIds: jobIds};
    //成功処理定義
    var sfunc = function (data, dataType) {
        //エラー判定
        if (data['statusCode'] != 1) {
            swal('エラー:' + data['errorMessages']);
            //alert('エラー:' + data['errorMessages']);
            return false;
        }
        //特集登録案件リスト生成
        ajaxLoadJobsInSp(selectedSpecialId);
        //案件リスト生成
        jobSearch();
    };
    //失敗処理定義
    var efunc = function (XMLHttpRequest, textStatus, errorThrown) {
        swal('エラーが発生しました');
        //alert('エラーが発生しました:' + errorThrown);
        return false;
    };
    ajaxMaster(postData, url, sfunc, efunc);
}

//1件削除
function ajaxDeleteJob(specialId, jobId) {
    var url = "./ajax/ajax_special_admin.php";
    var postData = {mode: 'deleteJob', specialid: specialId, jobId: jobId};
    //成功処理定義
    var sfunc = function (data, dataType) {
        //エラー判定
        if (data['statusCode'] != 1) {
            swal('エラー:' + data['errorMessages']);
            //alert('エラー:' + data['errorMessages']);
            return false;
        }
        //特集登録案件リスト生成
        ajaxLoadJobsInSp(selectedSpecialId);
        //案件リスト生成
        jobSearch();

    };
    //失敗処理定義
    var efunc = function (XMLHttpRequest, textStatus, errorThrown) {
        swal('エラーが発生しました');
        //alert('エラーが発生しました:' + errorThrown);
        return false;
    };
    ajaxMaster(postData, url, sfunc, efunc);
}

//全件削除
function ajaxDeleteAllJobs(specialId) {
    var url = "./ajax/ajax_special_admin.php";
    var postData = {mode: 'deleteAllJobs', specialid: specialId};
    //成功処理定義
    var sfunc = function (data, dataType) {
        //エラー判定
        if (data['statusCode'] != 1) {
            swal('エラー:' + data['errorMessages']);
            //alert('エラー:' + data['errorMessages']);
            return false;
        }
        //特集登録案件リスト生成
        ajaxLoadJobsInSp(selectedSpecialId);
        //案件リスト生成
        jobSearch();

    };
    //失敗処理定義
    var efunc = function (XMLHttpRequest, textStatus, errorThrown) {
        swal('エラーが発生しました');
        //alert('エラーが発生しました:' + errorThrown);
        return false;
    };
    ajaxMaster(postData, url, sfunc, efunc);
}

function ajaxReSorting(specialId, sortObj) {
    var url = "./ajax/ajax_special_admin.php";
    var postData = {mode: 'reSorting', specialid: specialId, newSortingList: sortObj};
    //成功処理定義
    var sfunc = function (data, dataType) {
        //エラー判定
        if (data['statusCode'] != 1) {
            swal('エラー:' + data['errorMessages']);
            //alert('エラー:' + data['errorMessages']);
            return false;
        }
        //特集登録案件リスト生成
        ajaxLoadJobsInSp(selectedSpecialId);
        //案件リスト生成
        jobSearch();

    };
    //失敗処理定義
    var efunc = function (XMLHttpRequest, textStatus, errorThrown) {
        swal('エラーが発生しました');
        //alert('エラーが発生しました:' + errorThrown);
        return false;
    };
    ajaxMaster(postData, url, sfunc, efunc);
}

function ajaxRandomSorting(specialId) {
    var url = "./ajax/ajax_special_admin.php";
    var postData = {mode: 'randomSorting', specialid: specialId};
    //成功処理定義
    var sfunc = function (data, dataType) {
        //エラー判定
        if (data['statusCode'] != 1) {
            swal('エラー:' + data['errorMessages']);
            return false;
        }
        //特集登録案件リスト生成
        ajaxLoadJobsInSp(selectedSpecialId);
        //案件リスト生成
        jobSearch();
    };
    //失敗処理定義
    var efunc = function (XMLHttpRequest, textStatus, errorThrown) {
        swal('エラーが発生しました');
        //alert('エラーが発生しました:' + errorThrown);
        return false;
    };
    ajaxMaster(postData, url, sfunc, efunc);
}
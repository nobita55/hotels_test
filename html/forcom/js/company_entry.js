//エラーメッセージ設定
var errMessage = [];
errMessage['companyName'] = '<div class="mustText">企業名を入力してください</div>';
errMessage['companyNameKana'] = '<div class="mustText">フリガナを入力してください</div>';
errMessage['facilityName'] = '<div class="mustText">施設名を入力してください</div>';
errMessage['name'] = '<div class="mustText">氏名を入力して下さい</div>';
errMessage['nameKana'] = '<div class="mustText">フリガナを入力して下さい</div>';
errMessage['mail'] = '<div class="mustText">メールアドレスを入力して下さい</div>';
errMessage['mail2'] = '<div class="mustText">メールアドレスを入力して下さい</div>';
errMessage['tel'] = '<div class="mustText">電話番号を入力して下さい</div>';
errMessage['postCode'] = '<div class="mustText">郵便番号を入力して下さい</div>';
errMessage['address'] = '<div class="mustText">住所を入力して下さい</div>';
errMessage['jobCategory'] = '<div class="mustText">職種を入力して下さい</div>';




var textLimit = 600;
var textLimitTitle = 60;

$(function () {
    /*
     * イベント定義
     */
    //初期化
    $(window).load(function () {
    });

    //住所自動入力
    $(".jsBtnAddressInput1").on("click", function () {
        AjaxZip3.zip2addr('companyPostcode', '', 'companyPrefecture', 'companyAddress');
    });

    $(".jsBtnAddressInput2").on("click", function () {
        AjaxZip3.zip2addr('facilityPostcode', '', 'facilityPrefecture', 'facilityAddress');
    });

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

    //テキストカウンター
    $("textarea[name='description']").keyup(function () {
        textCounter(this, 600, 'remainDescription', '#777', '#f00');
    });
    $("textarea[name='workingHours']").keyup(function () {
        textCounter(this, 600, 'remainWorkingHours', '#777', '#f00');
    });
    $("textarea[name='holiday']").keyup(function () {
        textCounter(this, 600, 'remainHoliday', '#777', '#f00');
    });
    $("textarea[name='qualifications']").keyup(function () {
        textCounter(this, 600, 'remainQualifications', '#777', '#f00');
    });
    $("textarea[name='salaryInfo']").keyup(function () {
        textCounter(this, 600, 'remainSalaryInfo', '#777', '#f00');
    });
    $("textarea[name='conditionInfo']").keyup(function () {
        textCounter(this, 600, 'remainConditionInfo', '#777', '#f00');
    });
    $("textarea[name='needItem']").keyup(function () {
        textCounter(this, 600, 'remainNeedItem', '#777', '#f00');
    });
    $("textarea[name='memo']").keyup(function () {
        textCounter(this, 600, 'remainMemo', '#777', '#f00');
    });
    $("textarea[name='dormInfo']").keyup(function () {
        textCounter(this, 600, 'remainDormInfo', '#777', '#f00');
    });

    $(document).on('click', '.jsBackBtn', function (e) {
        location.href = "/forcom/change";
    });

    //エンター無効
    $("input").keydown(function (e) {
        if ((e.which && e.which === 13) || (e.keyCode && e.keyCode === 13)) {
            return false;
        } else {
            return true;
        }
    });

    //データ入力チェック
    $("input[name='companyName']").change(function () {
        checkInputText('companyName', this);
    });
    $("input[name='companyNameKana']").change(function () {
        checkInputText('companyNameKana', this);
    });
    $("input[name='facilityName']").change(function () {
        checkInputText('facilityName', this);
    });

    $("input[name='name']").change(function () {
        checkInputText('name', this);
    });
    $("input[name='nameKana']").change(function () {
        checkInputText('nameKana', this);
    });
    $("input[name='mail']").change(function () {
        checkInputText('mail', this);
    });
    $("input[name='mail2']").change(function () {
        checkInputText('mail2', this);
    });

    $("input[name='tel']").change(function () {
        checkInputText('tel', this);
    });
    $("input[name='postCode']").change(function () {
        checkInputText('postCode', this);
    });
    $("input[name='pref']").change(function () {
        checkInputText('pref', this);
    });
    $("input[name='address']").change(function () {
        checkInputText('address', this);
    });
    $("input[name='jobCategory']").change(function () {
        checkInputText('jobCategory', this);
    });






});

/*
 function checkCompanyName(type, obj) {
 var errF = false;
 if (type == 'name') {
 var item = "companyName";
 var fId = "#companyName";
 } else if (type == 'furigana') {
 var item = "companyNameKana";
 var fId = "#companyNameKana";
 }
 
 var errClass = "redBackground";
 
 $(fId + " .mustText").remove();
 if ($(obj).val() == "") {
 errF = true;
 }
 
 if (errF) {
 $(obj).addClass(errClass);
 $(fId + "> input").before(errMessage[item]);
 } else {
 $(obj).removeClass(errClass);
 }
 return errF;
 }*/

function checkInputText(type, obj) {
    var errF = false;

    /*
     switch (type) {
     case 'companyName':
     var item = "companyName";
     var fId = "#companyName";
     console.log(fId);
     break;
     case 'companyNameKana':
     var item = "companyNameKana";
     var fId = "#companyNameKana";
     break;
     case 'facilityName':
     var item = "facilityName";
     var fId = "#facilityName";
     break;
     default:
     break;
     }
     */

    var item = type;
    var fId = "#" + type


    /*
     if (type == 'name') {
     var item = "companyName";
     var fId = "#companyName";
     } else if (type == 'furigana') {
     var item = "companyNameKana";
     var fId = "#companyNameKana";
     }
     */
    var errClass = "redBackground";

    $(fId + " .mustText").remove();
    if ($(obj).val() == "") {
        errF = true;
    }

    if (errF) {
        $(obj).addClass(errClass);
        $(fId).prepend(errMessage[item]);
    } else {
        $(obj).removeClass(errClass);
    }
    return errF;
}
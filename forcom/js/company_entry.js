//エラーメッセージ設定
var errMessage = [];
errMessage['companyName'] = '<div class="mustText">企業名を入力して下さい</div>';
errMessage['companyNameKana'] = '<div class="mustText">フリガナを入力して下さい</div>';
errMessage['facilityName'] = '<div class="mustText">施設名を入力して下さい</div>';
errMessage['name'] = '<div class="mustText">氏名を入力して下さい</div>';
errMessage['nameKana'] = '<div class="mustText">フリガナを入力して下さい</div>';
errMessage['mail'] = '<div class="mustText">メールアドレスを入力して下さい</div>';
errMessage['mail2'] = '<div class="mustText">メールアドレスを入力して下さい</div>';
errMessage['tel'] = '<div class="mustText">電話番号を入力して下さい</div>';
errMessage['postCode'] = '<div class="mustText">郵便番号を入力して下さい</div>';
errMessage['address'] = '<div class="mustText">住所を入力して下さい</div>';
errMessage['jobCategory'] = '<div class="mustText">職種を入力して下さい</div>';
errMessage['jobDetail'] = '<div class="mustText">仕事の内容を入力して下さい</div>';
errMessage['jobAddress'] = '<div class="mustText">就業場所を入力して下さい</div>';
errMessage['shift'] = '<div class="mustText">勤務シフトを入力して下さい</div>';


var textLimit = 600;
var textLimitTitle = 60;

$(function () {
    /*
     * イベント定義
     */
    //初期化
    $(window).load(function () {
        if ($("#jobAddress1").is(':checked')) {
            $("input[name='jobAddressText']").removeClass('redBackground');
            $("input[name='jobAddressText']").prop('disabled', true);
        }
    });

    //住所自動入力
    $(".jsBtnAddressInput1").on("click", function () {
       
        AjaxZip3.zip2addr('postCode', '', 'pref', 'address');
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
    $("textarea[name='jobDetail']").change(function () {
        checkInputText('jobDetail', this);
    });

    //就業場所
    $("input[name='jobAddressText']").change(function () {
        checkInputText('jobAddress', this);
    });
    
    $("#jobAddress1").change(function () {
	if ($(this).is(':checked')) {
                $("input[name='jobAddressText']").val('');
		$("input[name='jobAddressText']").removeClass('redBackground');
                $("#jobAddress .mustText").remove();
                $("input[name='jobAddressText']").prop('disabled', true);
	} else {
                $("input[name='jobAddressText']").prop('disabled', false);
                checkInputText('jobAddress', $("input[name='jobAddressText']"));
	}
    });

    //シフト
    $("textarea[name='shift']").change(function () {
        checkInputText('shift', this);
    });
});

function checkInputText(type, obj) {
    var errF = false;

    var item = type;
    var fId = "#" + type
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

/*
function checkShift() {
    var errF = false;
    var errClass = "redBackground";

    
    if ($("input[name='worktimeFirst']").val() == "") {
        errF = true;
    } else if ($("input[name='worktimeEnd']").val() == "") {
        errF = true;
    } else if ($("input[name='resttimeFirst']").val() == "") {
        errF = true;
    } else if ($("input[name='resttimeEnd']").val() == "") {
        errF = true;
    } else if ($("select[name='shift']").val() == "") {
        errF = true;
    }
    
    if(errF == false){
        $("input[name='worktimeFirst']").removeClass(errClass);
        $("input[name='worktimeEnd']").removeClass(errClass);
        $("input[name='resttimeFirst']").removeClass(errClass);
        $("input[name='resttimeEnd']").removeClass(errClass);
        $("#shift .mustText").remove();
    } else{
        $("input[name='worktimeFirst']").addClass(errClass);
        $("input[name='worktimeEnd']").addClass(errClass);
        $("input[name='resttimeFirst']").addClass(errClass);
        $("input[name='resttimeEnd']").addClass(errClass);
        //$("#shift").prepend(errMessage['shift']);
    }
}*/
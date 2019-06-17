var textLimit = 600;
var textLimitTitle = 60;

$(function () {
    /*
     * イベント定義
     */
    //初期化
    $(window).load(function () {
        /*
         if ($(".isResort").is(':checked')) {
         $('.jsResortParam').show();
         $('.jsGeneralParam').hide();
         } else {
         $('.jsResortParam').hide();
         $('.jsGeneralParam').show();
         }*/
    });

    //リゾートチェック制御
    /*
     $(".isResort").change(function () {
     if ($(this).is(':checked')) {
     $('.jsResortParam').show();
     $('.jsGeneralParam').hide();
     } else {
     $('.jsResortParam').hide();
     $('.jsGeneralParam').show();
     }
     });*/

    $(document).on('click', '.jsSortdateNowBtn', function (e) {
        var dateTimeNow = getNow();
        $('.sortDate').val(dateTimeNow);
        return false;
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
    $("input[name='companyNameHush']").keyup(function () {
        textCounter(this, 100, 'remainCompanyNameHush', '#777', '#f00');
    });
    $("input[name='hotelsName']").keyup(function () {
        textCounter(this, 60, 'remainHotelsName', '#777', '#f00');
    });
    $("input[name='city']").keyup(function () {
        textCounter(this, 12, 'remainCity', '#777', '#f00');
    });
    $("input[name='access']").keyup(function () {
        textCounter(this, 200, 'remainAccess', '#777', '#f00');
    });
    $("input[name='title']").keyup(function () {
        textCounter(this, 58, 'remainTitle', '#777', '#f00');
    });
    $("input[name='subTitle']").keyup(function () {
        textCounter(this, 58, 'remainSubTitle', '#777', '#f00');
    });
    $("textarea[name='jobPr']").keyup(function () {
        textCounter(this, 300, 'remainJobPr', '#777', '#f00');
    });
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
    $("textarea[name='trial']").keyup(function () {
        textCounter(this, 600, 'remainTrial', '#777', '#f00');
    });
    $("textarea[name='giftMoneyInfo']").keyup(function () {
        textCounter(this, 600, 'remainGiftMoneyInfo', '#777', '#f00');
    });
    $("textarea[name='dormInfo']").keyup(function () {
        textCounter(this, 600, 'remainDormInfo', '#777', '#f00');
    });

    $(document).on('click', '.jsDelBtn', function (e) {
        if (!confirm('削除します。よろしいですか？')) {
            return false;
        }
        //確認ダイアログ
        /*
         swal({
         title: "削除します",
         text: "よろしいですか？",
         type: "warning",
         showCancelButton: true,
         confirmButtonColor: "#e78a1c",
         confirmButtonText: "削除",
         closeOnConfirm: true,
         closeOnCancel: true
         },
         function () {
         
         });
         */
    });

    //エンター無効
    $("input").keydown(function (e) {
        if ((e.which && e.which === 13) || (e.keyCode && e.keyCode === 13)) {
            return false;
        } else {
            return true;
        }
    });
});

function getNow() {
    var now = new Date();
    var year = now.getFullYear();
    var mon = now.getMonth() + 1; //１を足すこと
    var day = now.getDate();
    var hour = now.getHours();
    var min = now.getMinutes();
    var sec = now.getSeconds();

    //出力用
    //var s = year + "-" + mon + "-" + day + " " + hour + ":" + min + ":" + sec;
    var s = year + "-" + (("0" + mon).slice(-2)) + "-" + (("0" + day).slice(-2)) + " " + (("0" + hour).slice(-2)) + ":" + (("0" + min).slice(-2)) + ":" + (("0" + sec).slice(-2));
    return s;
}
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
        location.href = "/forcom_bk/change";
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

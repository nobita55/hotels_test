$(function () {
    $(document).on('click', '.jsSearchBtn', function () {
        var keyword = $("input[name='keyword']").val();
        location.href = "/keyword/search?keyword="  + encodeURIComponent(keyword);
    });

});

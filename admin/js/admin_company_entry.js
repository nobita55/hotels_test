$(function () {
    //掲載制御
    $(document).on('click', '.jsContactBtn', function () {
        var selectedId = $(this).attr('data-eid');
        var manager = $("select[name=manager" + selectedId + "]").children(':selected').val();
        //確認ダイアログ
        swal({
            title: "連絡済にします",
            text: "よろしいですか？",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#e78a1c",
            confirmButtonText: "OK",
            closeOnConfirm: true
        },
                function () {
                    //OK時
                    location.href = './company_entry_old.php?mode=contact&id=' + selectedId + '&manager=' + manager;
                    return false;
                });
        return false;
    });

    $(document).on('click', '.jsContactBtn2', function () {
        var selectedId = $(this).attr('data-eid');
        var manager = $("select[name=manager" + selectedId + "]").children(':selected').val();
        //確認ダイアログ
        swal({
            title: "連絡済にします",
            text: "よろしいですか？",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#e78a1c",
            confirmButtonText: "OK",
            closeOnConfirm: true
        },
                function () {
                    //OK時
                    location.href = './company_entry.php?mode=contact&id=' + selectedId + '&manager=' + manager;
                    return false;
                });
        return false;
    });


    //HP掲載、求人票にチェックを入れた時   
    $('.jsCheck').change(function(){
        var checkedId = $(this).attr("id");        
        var id = $(this).attr('data-id');
        var mode = $(this).attr('data-type');
        var status = '';
        
        //チェック・非チェック
	if ($(this).is(':checked')) {
            status = '1';
	} else {
            status = '0';
	}
        
        //HW掲載・求人票

        if(mode == "released"){
            mode = 'changeReleased';
        } else if(mode == "jobcard"){
            mode = 'changeJobcard';
        }
        
        ajaxCheck(mode, status , id);
    });

    //HP掲載、求人票のチェックをDBに反映
    function ajaxCheck(mode, status , id) {
        var data = {mode: mode, status: status, id: id };
        $.ajax({
            type: "POST",
            url: "./ajax/ajax_company_entry.php",
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

            },
            //通信失敗
            error: function (XMLHttpRequest, textStatus, errorThrown)
            {
                swal('エラーが発生しました');
                return false;
            }
        });
    }
});
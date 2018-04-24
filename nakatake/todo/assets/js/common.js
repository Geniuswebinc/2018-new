// 登録ボタンdisabledの切り替え
$("#tabA").click(function() {
    $("#btnSubmit").prop("disabled", false);
});

$("#tabB").click(function() {
    $("#btnSubmit").prop("disabled", true);
});

// 登録ボタンdisabledの切り替え
$("#tabA").click(function() {
    $("#btnSubmit").prop("disabled", false);
});

$("#tabB").click(function() {
    $("#btnSubmit").prop("disabled", true);
});

//確認ダイアログ表示
function deletedChk () {
    var flag = confirm ("タスクを削除しても宜しいですか");
    return flag;
}

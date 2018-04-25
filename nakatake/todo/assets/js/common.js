// 登録ボタンdisabledの切り替え
$("#tabA").click(function() {
    $("#btnSubmit").prop("disabled", false);
});

$("#tabB").click(function() {
    $("#btnSubmit").prop("disabled", true);
});

function deletedChk () {
    /* 確認ダイアログ表示 */
    var flag = confirm ("タスクを削除しても宜しいですか");
    /* send_flg が TRUEなら送信、FALSEなら送信しない */
    return flag;
}

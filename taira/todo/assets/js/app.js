$("#test1").click(function () {
    $("#hoge").prop('disabled', false);
});
$("#test2").click(function () {
    $("#hoge").prop('disabled', true);
});
function submitChk () {
    /* 確認ダイアログ表示 */
    var flag = confirm ( "完了にしますがよろしいですか？\n");
    /* send_flg が TRUEなら送信、FALSEなら送信しない */
    return flag;
}
// $("#modal-save").click(function () {
//     $("#modal-result").append("<form action="index.php" method="post"><input type="hidden" name="complete" value="1"><input type="hidden" name="id" value="<?php echo $val['id'];?>"></form>");
// });
//
// <div class="modal fade" id="modal" tabindex="-1">
// <div class="modal-dialog">
// <div class="modal-content">
// <div class="modal-header">
// <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
// <h4 class="modal-title">確認</h4>
// </div>
// <div class="modal-body">
// 完了しますがよろしいですか？
// </div>
// <div class="modal-footer">
// <button type="button" class="btn btn-primary" id="modal-save" data-dismiss="modal">はい</button>
// <button type="button" class="btn btn-default" data-dismiss="modal">いいえ</button>
// </div>
// </div>
// </div>
// </div>

<?php
require_once dirname(__FILE__) .'/data/require.php';
$name= $_POST['select_name'];
$note= $_POST['note'];
$id= $_POST['id'];



// データベース接続のクラス
$conn = new DbConn();
if($id){
    $sql  = 'UPDATE contact_db . contacts';
    $sql .= '   SET note = "'.$note.'"';
    $sql .= '   WHERE id = '.$id.'';
    $sql .= '   ORDER BY created_at DESC';
    $conn->execute($sql);
}
$sql  = 'SELECT * FROM contacts';
if($name){
    $sql .= '   WHERE name LIKE "%'. $name .'%"';
}
$sql .= '   ORDER BY created_at DESC';
$contacts = $conn->fetch($sql);
//値の入った配列や変数の中身を表示
//var_dump($sql);
//var_dump($id);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/app.css">
    <script type='text/javascript' src="./assets/js/app.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="text-center">
                    <h1><strong>管理画面</strong></h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="text-right">
                    <form action="" method="post">
                        <input type="text" name="select_name" placeholder="検索する名前を入力">
                        <input type="submit" value="送信する">
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>名前</th>
                            <th>メール</th>
                            <th>内容</th>
                            <th>登録日</th>
                            <th>メモ</th>
                        </tr>
                    </head>
                    <tbody>
                        <?php
                        foreach($contacts as $val){
                            echo '<tr>';
                            echo '    <td>'.$val['id'].'</td>';
                            echo '    <td>'.$val['name'].'</td>';
                            echo '    <td>'.$val['mail'].'</td>';
                            echo '    <td>'.$val['content'].'</td>';
                            echo '    <td>'.$val['created_at'].'</td>';
                            echo '    <td>';
                            ?>
                            <form action="" method="post">
                                <textarea name="note" rows="2" cols="10" placeholder="<?php echo $val['note'];?>"></textarea>
                                <input type="submit" value="送信">
                                <input type="hidden" name="id" value="<?php echo $val['id'];?>">
                            </form>
                            <?php
                            echo '    </td>';//メモ欄を作る　UPDATE文を挿入　カラムを増やす
                            echo '<tr>';
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="text-center">
                    <a href="index.php" class="btn btn-default">TOPに戻る</a>
                </div>
            </div>
        </div>

    </div>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>

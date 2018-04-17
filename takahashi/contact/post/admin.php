<?php
    require_once dirname(__FILE__) .'/data/require.php';

    $name=$_POST['sentname'];
    $mail=$_POST['sentmail'];
    $content=$_POST['sentcontent'];
    $seach=$_POST['seach'];

    // データベース接続のクラス
    $conn = new DbConn();

    if(isset($_POST['seach'])){
        $sql  = 'SELECT * FROM contacts';
        $sql .= '   WHERE name LIKE "%'.$seach.'%"';
        $sql .= '   ORDER BY created_at desc;';
    }else{
        $sql  = 'SELECT * FROM contacts';
        $sql .= '   ORDER BY created_at desc;';
    }

    $contacts = $conn->fetch($sql);
    var_dump($contacts);
    var_dump($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>2018/04/06の課題</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" href="./assets/css/app.css">
</head>

<body>
    <div class="cantainer">

        <div class="row">
            <div class="col-xs-12 text-center topmsg">
                <h1>管理画面</h1>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-xs-offset-4 col-xs-4">
                <form method="post">
                    <div class="form-group">
                        <label for="InputSeachName">名前検索</label>
                        <input type="text" class="form-control" name="seach">
                    </div>
                    <input type="submit" class="btn btn-success" value="検索">
                </form>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-xs-12 text-center thanxsMsg">
                <table class="table" >
                    <tr>
                        <th>id</th>
                        <th>名前</th>
                        <th>メール</th>
                        <th>内容</th>
                        <th>登録日</th>
                        <th>メモ</th>
                    </tr>

                    <?php
                    foreach($contacts as $val){
                        echo '<tr>';
                        echo '<td>'.$val['id'].'</td>';
                        echo '<td>'.$val['name'].'</td>';
                        echo '<td>'.$val['mail'].'</td>';
                        echo '<td>'.$val['content'].'</td>';
                        echo '<td>'.$val['created_at'].'</td>';
                        echo '</tr>';
                    } ?>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 text-center">
                <input type="button" onclick="location.href='index.php'"value="TOPに戻る"　class="backbtn">
            </div>
        </div>
    </div>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./assets/js/apps.js"></script>
</body>

</html>

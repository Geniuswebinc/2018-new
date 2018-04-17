<?php
    require_once dirname(__FILE__) .'/data/require.php';

    // データベース接続のクラス
    $conn = new DbConn();

    $search =$_POST['search'];

    $sql  = 'SELECT * FROM contacts';
    $sql .= ' WHERE name LIKE "%'.$search.'%"';
    $sql .= ' ORDER BY created_at DESC';

    $contacts = $conn->fetch($sql);
    // var_dump($contacts);
    // var_dump($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/app.css">
</head>

<body>
    <h2>管理画面</h2>
        <form  method ="post">
            <input type="text" name="search">
            <button type="submit" class="btn-defaul">検索</button>
        </form>

        <table class="table">
            <tr>
                <th>id</th>
                <th>名前</th>
                <th>メール</th>
                <th>内容</th>
                <th>登録日</th>
            </tr>
                <?php
                    foreach ($contacts as $val) {
                        echo '<tr>';
                        echo '<td>'.$val['id'].'</td>';
                        echo '<td>'.$val['name'].'</td>';
                        echo '<td>'.$val['mail'].'</td>';
                        echo '<td>'.$val['content'].'</td>';
                        echo '<td>'.$val['created_at'].'</td>';
                        echo '</tr>';
                    }
                ?>
        </table>



    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./assets/js/app.js"></script>

</body>
</html>

<?php
    require_once dirname(__FILE__) .'/data/require.php';
    // データベース接続のクラス
    $conn = new DbConn();

    $search_name = $_POST['search_name'];
    $set_memo = $_POST['memo'];
    $id = $_POST['contacts_id'];

    if ($set_memo) {
        $sql = 'UPDATE contacts';
        $sql .= ' SET note ="'.$set_memo.'"';
        $sql .= ' WHERE id ='.$id;

        $conn->execute($sql);
    }

    $sql  = 'SELECT * FROM contacts';
    if ($search_name) {
        $sql .= ' WHERE name like "%'.$search_name.'%"';
    }
    $sql .= ' ORDER BY created_at DESC';
    $contacts = $conn->fetch($sql);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <title>管理画面</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
    <section>
        <h1>管理画面</h1>

        <div>
            <form method="post">
                <input type="text" name="search_name">
                <input type="submit" value="検索">
            </form>
        </div>

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
            </thead>
            <tbody>
                <?php foreach ($contacts as $value) {
                    echo '<tr>';
                    echo '<td>'.$value['id'].'</td>';
                    echo '<td>'.$value['name'].'</td>';
                    echo '<td>'.$value['mail'].'</td>';
                    echo '<td>'.$value['content'].'</td>';
                    echo '<td>'.$value['created_at'].'</td>';
                ?>
                <td>
                    <form method=post>
                        <textarea name="memo" rows="2" cols="30"><?php echo $value['note']; ?></textarea>
                        <input type="submit" value="送信" class="bnt btn-success">
                        <input type="hidden" name="contacts_id" value="<?php echo $value['id'] ?>">
                    </form>
                </td>
                <?php
                    echo '</tr>';
                }?>
            </tbody>
        </table>

        <a href="index.php" class="btn btn-default">TOPに戻る</a>

    </section>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>

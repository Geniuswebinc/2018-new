<?php
    require_once dirname(__FILE__) .'/data/require.php';
    $conn = new DbConn();

    $sql = 'UPDATE contacts';
    if($_POST['note']){
        $id=$_POST['id'];
        $note=$_POST['note'];
        $sql .= '   SET note="'.$note.'"';
        $sql .= '   WHERE id="'.$id.'"';
     }
    $conn->execute($sql);

    $sql  = 'SELECT * FROM contacts';
    if($_POST['search']){
        $search=$_POST['search'];
        $sql .= '   WHERE name LIKE "%'.$search.'%"';
    }
    $sql .= '   ORDER BY created_at desc;';

    $contacts = $conn->fetch($sql);

    //var_dump($contacts);
    var_dump($id);
    var_dump($_POST['note']);
    var_dump($sql);
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
                        <input type="text" class="form-control" name="search">
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
                        <th>note</th>
                    </tr>

                    <?php
                    foreach($contacts as $val){
                        echo '<tr>';
                        echo '<td>'.$val['id'].'</td>';
                        echo '<td>'.$val['name'].'</td>';
                        echo '<td>'.$val['mail'].'</td>';
                        echo '<td>'.$val['content'].'</td>';
                        echo '<td>'.$val['created_at'].'</td>';
                    ?>

                    <td>
                        <form method="post">
                            <textarea name="note"><?php echo $val['note']; ?></textarea>
                            <input type="submit" class="btn btn-success" value="送信">
                            <input type="hidden" name="id" value="<?php echo $val['id']; ?>">
                        </form>
                    </td>

                    <?php echo '</tr>';
                    } ?>
                </table>
            </div>
        </div>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./assets/js/apps.js"></script>
</body>

</html>

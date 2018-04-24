<?php
    require_once dirname(__FILE__) .'/data/require.php';

    // データベース接続のクラス
    $conn = new DbConn();

    $content = $_POST['content'];
    $priority = $_POST['priority'];
    $status = $_POST['status'];

    $sql  = 'INSERT INTO ';
    $sql .= '    tasks (containts, priority, status)';
    $sql .= '  VALUES ( ';
    $sql .= '   "'.$content.'", "'.$priority.'","'.$status.'" ';
    $sql .= '  )';

    $conn->fetch($sql);

    $sql  = 'SELECT * ';
    $sql .= ' FROM todo_lists';
    $sql .= ' WHERE status = "1"';
    $sql .= ' ORDER BY priority DESC, created_at DESC';

    foreach($todo_lists as $containts){
        echo $todolist['content'];

    }
    var_dump($sql);
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
    <div class="container">
        <div class="row">
            <h1>ToDoリスト</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <form class="form-inline" method="post">
                    <input class="form-control" type="text" placeholder="textbox" name="content">
                    <select class="form-control" name="priority">
                        <option value="0">高</option>
                        <option selected value="1">中</option>
                        <option value="2">低</option>
                        <input type="hidden" value="<?php echo $priority; ?>">
                    </select>
                    <input type="submit" value="登録" class="form-control btn-default">
                    <input type="hidden" name="status" value="1">
            </form>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <ul class="nav nav-tabs">
                <li role="presentation" class="active"><a href="incomplete.php">未完了</a></li>
                <li role="presentation" ><a href="complete.php">完了</a></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <table　class="table">
                <tr>
                    <td>優先度</td>
                    <td>リストの内容</td>
                    <td>完了ボタン</td>
                </tr>

            </table>
        </div>
    </div>


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./assets/js/app.js"></script>

</body>
</html>

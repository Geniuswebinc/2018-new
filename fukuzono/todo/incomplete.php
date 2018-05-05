<?php
    require_once dirname(__FILE__) .'/data/require.php';

    // データベース接続のクラス
    $conn = new DbConn();

    $content = $_POST['content'];
    $priority = $_POST['priority'];
    $status = $_POST['status'];
    $complete = $_POST['complete'];
    $tasks_id = $_POST['tasks_id'];


    $sql .= ' UPDATE tasks';
    $sql .= ' SET status = "'.$complete.'",update_at=CURRENT_TIMESTAMP';
    $sql .= ' WHERE tasks_id = "'.$tasks_id.'"';
    $conn->execute($sql);
        // var_dump($sql);


    if($content){
        $sql  = 'INSERT INTO ';
        $sql .= '    tasks (containts, priority, status)';
        $sql .= '  VALUES ( ';
        $sql .= '   "'.$content.'", "'.$priority.'","'.$status.'" ';
        $sql .= '  )';

        header('Location: http://192.168.33.10/todo/incomplete.php');

        // var_dump($sql);
    }





    $conn->fetch($sql);

    $sql  = 'SELECT  * ';
    $sql .= ' FROM tasks';
    $sql .= ' LEFT OUTER JOIN priorities';
    $sql .= ' ON tasks.priority = priorities.id';
    $sql .= ' WHERE status = "1"';
    $sql .= ' ORDER BY create_at DESC';



    $tasks = $conn->fetch($sql);
    $priorities = $conn->fetch($sql);



 ?>


<!DOCTYPE html>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <h1>ToDoリスト</h1>
        </div>
    </div>

    <br>

    <div class="container">
        <div class="row">
            <form class="form-inline" method="post">
                <input class="form-control" type="text" placeholder="textbox" name="content">
                <select class="form-control" name="priority">
                    <option value="1">高</option>
                    <option selected value="2">中</option>
                    <option value="3">低</option>
                    <input type="hidden" value="<?php echo $priority; ?>">

                </select>
                <input type="submit" value="登録" class="form-control btn-default">
                <input type="hidden" name="status" value="1">
            </form>
        </div>
    </div>

    <br>

    <div class="container">
        <div class="row">
            <ul class="nav nav-tabs">
                <li role="presentation" class="active"><a href="incomplete.php">未完了</a></li>
                <li role="presentation"><a href="complete.php">完了</a></li>
            </ul>

            <table class="table">
                <thead>
                    <tr>
                        <td class="text-center">優先度</td>
                        <td class="text-center">リストの内容</td>
                        <td class="text-center">完了ボタン</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($tasks as $val) {
                            echo '<tr>';
                    ?>
                        <td class="text-center <?php echo $val['color']; ?>">
                    <?php
                        echo $val['priority'];
                        echo '<td>'.$val['containts'].'</td>';
                        echo '<td class="text-center">';
                    ?>
                    <form  method="post">
                        <button type="submit" name="complete" value="2" class="btn-xs btn-success">完了</button>
                        <input type="hidden" name="tasks_id" value="<?php echo $val['tasks_id'];?>">
                    </form>
                    <?php
                            echo '</td>';
                            echo '</tr>';
                        }
                    ?>
            	</tbody>
            </table>
        </div>
    </div>


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./assets/js/app.js"></script>

</body>
</html>

<?php
require_once dirname(__FILE__) .'/data/require.php';
$contents = $_POST['contents'];
$priority_id = $_POST['priority'];
$complete = $_POST['complete'];
$id = $_POST['id'];
$delete = $_POST['delete'];
// データベース接続のクラス
$conn = new DbConn();
//ToDoリストの新規タスクの追加
if($contents){
    $sql  = 'INSERT INTO';
    $sql .= '    tasks (priority_id,contents)';
    $sql .= '  VALUES ( ';
    $sql .= '   '.$priority_id.', "'.$contents.'"';
    $sql .= '  )';
    $conn->fetch($sql);
}
//未完了タスクを完了タスクに変更
if($complete){
    $sql  = 'UPDATE todo_taira_db . tasks';
    $sql .= '   SET complete  = '.$complete.',updated_at  = NOW()';
    $sql .= '   WHERE id = '.$id.'';
    $conn->execute($sql);
}
//完了タスクの削除
if($delete){
    $sql  = 'DELETE FROM tasks';
    $sql .= '   WHERE id = '.$id.'';
    $conn->execute($sql);
}
//未完了タスクを取得
$sql  = 'SELECT tasks.id,contents,priority_id,name,colors FROM tasks';
$sql .= '   INNER JOIN priorities';
$sql .= '   ON tasks.priority_id = priorities.id';
$sql .= '   WHERE complete = 0 ';
$sql .= '   ORDER BY tasks.created_at DESC';
$tasks_priority= $conn->fetch($sql);
//完了タスクを取得
$sql  = 'SELECT tasks.id,contents,priority_id,name,colors FROM tasks';
$sql .= '   INNER JOIN priorities';
$sql .= '   ON tasks.priority_id = priorities.id';
$sql .= '   WHERE complete = 1 ';
$sql .= '   ORDER BY tasks.updated_at DESC';
$complete_tasks= $conn->fetch($sql);

//値の入った配列や変数の中身を表示
//var_dump($);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ToDoリスト</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/app.css">
    <meta name="Content-Style-Type" content="text/css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="text-center">
                    <h1><strong>ToDoリスト</strong></h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="text-right">
                    <form action="index.php" method="post">
                        <input type="text" name="contents" required>
                        <select name="priority">
                            <option value="1">高</option>
                            <option value="2" selected>中</option>
                            <option value="3">低</option>
                        </select>
                        <input type="submit" value="登録" class="btn btn-default" id="hoge">
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab1" data-toggle="tab" id="test1">未完了</a></li>
                    <li><a href="#tab2" data-toggle="tab" id="test2">完了</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="tab-content">
                    <div class="tab-pane active" id="tab1">
                        <table class="table text-center">
                            <tbody>
                                <?php
                                foreach($tasks_priority as $val) {
                                    echo '<tr>';
                                    echo '    <td><div style="background-color:'.$val['colors'].';" class="circle">'.$val['name'].'</div></td>';
                                    echo '    <td>'.$val['contents'].'</td>';
                                    echo '    <td>';
                                    ?>
                                    <form action="index.php" method="post" onsubmit="return submitChk()">
                                        <input type="submit" value="完了">
                                        <input type="hidden" name="complete" value="1">
                                        <input type="hidden" name="id" value="<?php echo $val['id']; ?>" class="btn btn-default">
                                    </form>
                                    <?php
                                    echo '    </td>';
                                    echo '</tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="tab2">
                        <table  class="table text-center">
                            <tbody>
                                <?php
                                foreach($complete_tasks as $val) {
                                    echo '<tr>';
                                    echo '    <td><div style="background-color:'.$val['colors'].';" class="circle">'.$val['name'].'</div></td>';
                                    echo '    <td>'.$val['contents'].'</td>';
                                    echo '<td>';
                                    ?>
                                    <form action="index.php" method="post" onsubmit="return submitChk()">
                                        <input type="submit" value="削除">
                                        <input type="hidden" name="delete" value="1">
                                        <input type="hidden" name="id" value="<?php echo $val['id']; ?>" class="btn btn-default">
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
            </div>
        </div>
    </div>
    <script type='text/javascript' src="./assets/js/app.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>

<?php
require_once dirname(__FILE__) .'/data/require.php';
// データベース接続のクラス
$conn = new DbConn();

$name = $_POST['taskdata'];
$priority = $_POST['priority'];
$nocomplete_id = $_POST['nocomplete_id'];
$complete_id = $_POST['complete_id'];

if ($name) {
    $sql = 'INSERT INTO';
    $sql .= ' todo_lists(task_name, priority)';
    $sql .= ' VALUES ( ';
    $sql .= ' "'.$name.'", "'.$priority.'"';
    $sql .= ' )';
    $conn->fetch($sql);

    $url = 'index.php';
    header('Location:' . $url, true, 301);
    exit;
}

if ($nocomplete_id) {
    $sql = 'UPDATE todo_lists';
    $sql .= ' SET states = 2, updated_at = CURRENT_TIMESTAMP';
    $sql .= ' WHERE id = '.$nocomplete_id;
    $conn->execute($sql);
}

if ($complete_id) {
    $sql = 'UPDATE todo_lists';
    $sql .= ' SET delete_flag = 1';
    $sql .= ' WHERE id = '.$complete_id;
    $conn->execute($sql);
}

// 優先度テーブル取得
$sql = 'SELECT * FROM priorities';
$sql .= ' ORDER BY numbers';
$priorities = $conn->fetch($sql);


$sql  = 'SELECT t.*, p.name, p.colors FROM todo_lists t';
$sql .= ' LEFT OUTER JOIN priorities p';
$sql .= ' ON t.priority = p.id';
// 未完了用
$sql2 = $sql.' WHERE t.states = 1';
$sql2 .= ' ORDER BY t.created_at DESC';
// 完了
$sql3 = $sql. ' WHERE t.states = 2';
$sql3 .= ' AND delete_flag = 0';
$sql3 .= ' ORDER BY t.updated_at DESC';

$tasks_nocomplate = $conn->fetch($sql2);
$tasks_complete = $conn->fetch($sql3);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <title>ToDoリスト</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1 class="mb20">ToDoリスト</h1>

        <div class="row mb20">
            <form method="post">
                <div class="col-xs-4">
                    <input type="text" name="taskdata" class="form-control" placeholder="タスクを入力して下さい">
                </div>
                <div class="col-xs-4">
                    <select class="form-control" name="priority">
                        <?php
                        foreach ($priorities as $priority) {
                            ?>
                            <option value="<?php echo $priority['id']; ?>" <?php if ($priority['name'] == "中") echo "selected"; ?>>
                                <?php echo $priority['name']; ?>
                            </option>
                            <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="col-xs-4">
                    <input type="submit" value="登録" class="btn btn-default" id="btnSubmit">
                </div>
            </form>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#A" data-toggle="tab" id="tabA">未完了</a></li>
                    <li><a href="#B" data-toggle="tab" id="tabB">完了</a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="A">
                        <table class="table text-center">
                            <?php
                            foreach ($tasks_nocomplate as $task) {
                                ?>
                                <tr>
                                    <?php
                                    echo '<td><div class="circle"';
                                    echo ' style="background-color:'.$task['colors'].';">';
                                    echo '<p>'.$task['name'].'</p></div></td>';
                                    echo '<td>'.$task['task_name'].'</td>';
                                    ?>
                                    <td>
                                        <form method="post">
                                            <input type="submit" value="完了" class="btn btn-primary">
                                            <input type="hidden" name="nocomplete_id" value="<?php echo $task['id']; ?>">
                                        </form>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </table>
                    </div>
                    <div class="tab-pane" id="B">
                        <table class="table">
                            <?php
                            foreach ($tasks_complete as $task2) {
                                ?>
                                <tr>
                                    <?php echo '<td class="text-left">'.$task2['task_name'].'</td>'; ?>
                                    <td class="text-center">
                                        <form method="post" onsubmit="return deletedChk()">
                                            <input type="submit" value="削除" class="btn btn-danger">
                                            <input type="hidden" name="complete_id" value="<?php echo $task2['id']; ?>">
                                        </form>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="./assets/js/common.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>

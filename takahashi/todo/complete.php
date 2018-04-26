<?php
    require_once dirname(__FILE__) .'/data/require.php';

    $conn = new DbConn();

    $sql  = 'SELECT * FROM tasks';
    $sql .= '   LEFT OUTER JOIN priorities';
    $sql .= '   ON  tasks.priority_number=priorities.id';
    $sql .= '   WHERE state=2';
    $sql .= '   ORDER BY update_at desc;';

    $tasks = $conn->fetch($sql);

    //var_dump($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>TODOリスト</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/app.css">
</head>
<body>
    <div class="container">
        <div class="row header">
            <div class="col-xs-12">

                <h1>ToDoリスト</h1>

                <form action="" method="get" class="form-inline">
                    <input type="text" name="contents" placeholder="登録する内容を入力"  class="form-control" id="usage1input2">
                    <select class="form-control" name="priority_number">
                        <option value="1">高</option>
                        <option selected value="2">中</option>
                        <option value="3">低</option>
                    </select>
                    <input type="submit" value="登録" class="btn btn-input" disabled="disabled">
                </form>
            </div>
        </div>

        <div class="row select-tub">
            <div class="col-xs-12">
                <form action="" method="post">
                    <ul class="nav nav-tabs">
                        <li role="presentation"><a href="todo.php">未完了</a></li>
                        <li class="active"><a href="complete.php">完了</a></li>
                    </ul>
                </form>
            </div>
        </div>

        <div class="row list">
            <div class="col-xs-12">
                <table>
                    <?php foreach($tasks as $val){ ?>
                        <tr>
                            <td width="50" height="60" class="text-center"><?php echo $val['name']; ?></td>
                            <td width="200" height="60" class="text-center"><?php echo $val['contents']; ?></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./assets/js/apps.js"></script>
</body>
</html>

<?php

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
    <div class="container header">
        <div class="row">
            <div class="col-xs-12">
                <h1>ToDoリスト</h1>

                <form action="" method="post">
                    <input type="text" name="contents" placeholder="登録する内容を入力">

                    <select class="form-control" name="priority_number">
                        <option value="<?php echo '1'; ?>">高</option>
                        <option selected value="<?php echo '2'; ?>">中</option>
                        <option value="<?php echo '3'; ?>">低</option>
                    </select>


                    <input type="submit" value="登録">
                </form>
            </div>
        </div>
    </div>
    <div class="container list">

    </div>



    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./assets/js/apps.js"></script>
</body>

</html>

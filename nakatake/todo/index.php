<!DOCTYPE html>
<html lang="ja">
<head>
    <title>ToDoリスト</title>
    <link href="./assets/css/style.css" rel="stylesheet" media="all">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
                        <option value="1">高</option>
                        <option value="2" selected>中</option>
                        <option value="3">低</option>
                    </select>
                </div>
                <div class="col-xs-4">
                    <input type="submit" value="登録">
                </div>
            </form>
        </div>

        <div class="row">
            <form method="post">

                <div class="col-xs-12">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#A" data-toggle="tab">未完了</a></li>
                        <li><a href="#B" data-toggle="tab">未完了</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="A">
                            <table class="table text-center">
                                <tr>
                                    <td>中</td>
                                    <td>内容</td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                        <div class="tab-pane" id="B">
                            <table class="table text-center">
                                <tr>
                                    <td>高</td>
                                    <td>内容2</td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>

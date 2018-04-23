<!-- 【問題１】 -->
<?php
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $a + $b;
?>
<!-- 【問題２】 -->
<?php
    $box1 = $_GET['box1'];
    $box2 = $_GET['box2'];
    $box3 = $_GET['box3'];
    $box4 = $_GET['box4'];
    $box5 = $_GET['box5'];
    $box6 = $_GET['box6'];
    $arr = $box1 + $box2 + $box3 + $box4 + $box5 + $box6;
    var_dump($box1);
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
            <h4>【問題１】</h4>
            <form method="get">
                 <div class="col-xs-2">
                    <input type="text" name="a" class="form-control" value="<?php echo $a; ?>">
                 </div>
                 <div class="col-xs-1 text-center">
                    +
                 </div>
                 <div class="col-xs-2">
                    <input type="text" name="b" class="form-control" value="<?php echo $b; ?>">
                 </div>
                 <div class="col-xs-1 text-center">
                    =
                 </div>
                 <div class="col-xs-2">
                    <b><?php echo $c; ?></b>
                 </div>
                 <div class="col-xs-2">
                    <input type="submit" class="form-control" name="c" value="計算する">
                 </div>
            </form>
        </div>
    </div>

<br>
<br>

    <div class="container">
        <div class="row">
            <h4>【問題２】</h4>
            <ul>
                <li>初回アクセス時・・・・・・・・・・・・「選択してください」</li>
                <li>全6コマ</ii>
                <li>全て出席・・・・・・・・・・・・・・・「出席」</li>
                <li>全て出席ではないが、３コマ以上出席・・「1/2出席」</li>
                <li>４コマ以上欠席・・・・・・・・・・・・「欠席」</li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <form method="get">
                <table class="table">
                    <tr>
                        <th></th>
                        <th>1コマ</th>
                        <th>2コマ</th>
                        <th>3コマ</th>
                        <th>4コマ</th>
                        <th>5コマ</th>
                        <th>6コマ</th>
                    </tr>

                    <tr>
                        <th>出欠</th>
                        <td>
                            <select name="box1" class="form-control">
                                <option value="1" <?php if($box1 == 1) echo 'selected'; ?>>◯</option>
                                <option value="0" <?php if($box1 == 0) echo 'selected'; ?>>✕</option>
                            </select>
                        </td>
                        <td>
                            <select name="box2" class="form-control">
                                <option value="1" <?php if($box2 == 1) echo 'selected'; ?>>◯</option>
                                <option value="0" <?php if($box2 == 0) echo 'selected'; ?>>✕</option>
                            </select>
                        </td>
                        <td>
                            <select name="box3" class="form-control">
                                <option value="1" <?php if($box3 == 1) echo 'selected'; ?>>◯</option>
                                <option value="0" <?php if($box3 == 0) echo 'selected'; ?>>✕</option>
                            </select>
                        </td>
                        <td>
                            <select name="box4" class="form-control">
                                <option value="1" <?php if($box4 == 1) echo 'selected'; ?>>◯</option>
                                <option value="0" <?php if($box4 == 0) echo 'selected'; ?>>✕</option>
                            </select>
                        </td>
                        <td>
                            <select name="box5" class="form-control">
                                <option value="1" <?php if($box5 == 1) echo 'selected'; ?>>◯</option>
                                <option value="0" <?php if($box5 == 0) echo 'selected'; ?>>✕</option>
                            </select>
                        </td>
                        <td>
                            <select name="box6" class="form-control">
                                <option value="1" <?php if($box6 == 1) echo 'selected'; ?>>◯</option>
                                <option value="0" <?php if($box6 == 0) echo 'selected'; ?>>✕</option>
                            </select>
                        </td>
                    </tr>
                </table>

                <input type="submit" class="form-control btn-success">
                <br>
                <input type="reset" class="form-control" onclick="location.href ='004.php'">

            </form>
            <h4>結果</h4>
            <p>結果・・・・
                <font size="80px">
                    <?php
                        if($_GET){
                            if($arr >=0 && $arr <= 2){
                                echo '欠席';
                            }
                            elseif($arr >=3 && $arr <= 5){
                                echo '1/2欠席';
                            }
                            elseif($arr >= 6){
                                echo '出席';
                            }
                        }else {
                            echo '選択してください';
                        }
                    ?>
                </font>
            </p>
        </div>
    </div>



    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./assets/js/app.js"></script>
</body>
</html>

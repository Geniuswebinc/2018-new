<?php
    $num1=$_GET['num1'];
    $num2=$_GET['num2'];

    if(ctype_digit($num1) && ctype_digit($num2)){
        $sum=$num1+$num2;
    }else if(empty($num1) && empty($num2)){
        $sum=0;
    }else{
        $num1='';
        $num2='';
        $sum='数字を入力してください(半角)';
    }

    $koma1=$_GET['koma1'];
    $koma2=$_GET['koma2'];
    $koma3=$_GET['koma3'];
    $koma4=$_GET['koma4'];
    $koma5=$_GET['koma5'];
    $koma6=$_GET['koma6'];
    $sum2=$koma1+$koma2+$koma3+$koma4+$koma5+$koma6;


    if(isset($koma1)){
        if($sum2==6){
            $rank='出席';
        }else if(3<=$sum2 && $sum2<6){
            $rank='1/2出席';
        }else if(0<=$sum2 && $sum2<3){
            $rank='欠席';
        }
    }else{
        $rank='選択してください';
    }
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>004.php</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" href="./assets/css/app.css">
</head>
<body>

    <div class="container text-center">

        <div class="row">
            <div class="col-xs-12">
                <div class="mon1">
                    <p>問題1（20161006/01.php）</p>
                    <div style="display:inline-flex">
                        <form class="form-inline" method="get">
                            <input type="text" name="num1" class="form-control" value="<?php echo $num1; ?>">
                            <p class="form-control-static">+</p>
                            <input type="text" name="num2" class="form-control" value="<?php echo $num2; ?>">
                            <p class="form-control-static">=</p>
                            <p class="form-control-static"><?php echo $sum; ?></p>
                            <input type="submit" value="計算する" class="form-control">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div>
                <div class="mon2">
                    <p>問題2（20161006/02.php）</p>
                    <form method="get">
                        <table  border="1" frame="hsides" rules="rows" width="100%" height="70" aligin="center">
                            <tr>
                                <td></td>
                                <td>1コマ</td>
                                <td>2コマ</td>
                                <td>3コマ</td>
                                <td>4コマ</td>
                                <td>5コマ</td>
                                <td>6コマ</td>
                            </tr>

                            <tr>
                                <td>出欠</td>
                                <?php
                                for($i=1;$i<=6;$i++){
                                    echo '<td>';
                                ?>
                                <select name="koma<?php echo $i; ?>">
                                    <option value="0" <?php if (${"koma".$i}== 0) { echo 'selected'; } ?>>×</option>
                                    <option value="1" <?php if (${"koma".$i}== 1) { echo 'selected'; } ?>>○</option>
                                </select></td>
                                <?php
                                }
                                ?>
                            </tr>
                        </table>
                        <button type="submit" class="btn btn-success btn-block">送信</button>
                        <input type="reset" class="btn btn-default btn-block" value="リセット" onclick="location.href='004.php'"">
                        <p>結果…</p>
                        <h2><?php echo $rank ?></h2>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./assets/js/apps.js"></script>
</body>

</html>

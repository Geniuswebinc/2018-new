<!DOCTYPE html>
<html>
<meta charset="utf-8">
<title>課題</title>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/app.css">
    <script type="text/javascript" src="./assets/js/app.js"></script>
</head>
<body>
    <!--問題1の記述  開始 -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <p>
                    問題1<br>
                    <?php
                    for($i=1;$i<=100;$i++){
                        echo $i;
                        echo nl2br("\n");//phpにおける改行
                    }
                    ?>
                </p>

            </div>
        </div>
    </div>
    <!--問題1の記述  終了 -->







    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <p>
                    問題2 「偶数」表示
                </p>
                <!-- 問題2の記述 -->
                <?PHP
                for($i=1;$i<=100;$i++){
                    if($i%2==0){
                        echo $i;
                        $sum=$i+$sum;
                        echo nl2br("\n");//phpにおける改行
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <!--問題2の記述  終了 -->

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <p>
                    問題3 「偶数の合計」表示
                </p>
                <!--問題3の記述  開始 -->
                <?php
                echo $sum;
                ?>
                <!--問題3の記述  終了 -->
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <p>
                    問題4 「テーブル」表示
                </p>
                <!--問題4の記述  開始 -->
                <table class="table">
                    <?php
                    $ans=0;
                    for($a = 1; $a <=5; $a++){
                        echo '<tr>';
                        for($i = 1; $i <= 7; $i++){
                            $ans++;
                            if($ans<=30){
                                echo '<td>'.$ans.'</td>';
                            }else{
                                echo "<td></td>"; //数値が出力されていなくても線を描画する
                            }
                        }
                        echo '</tr>';
                    }
                    ?>
                </table>

                <!--問題4の記述  終了 -->
            </div>
        </div>
    </div>



</body>
</html>

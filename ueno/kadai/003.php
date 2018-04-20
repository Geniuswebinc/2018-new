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

                <table class="table">
                    <?php
                    $ans=0;
                    for($a = 1; $a <=10; $a++){//縦軸
                        echo '<tr>';
                        for($i = 1; $i <= 10; $i++){//横軸
                            $ans=$a*$i;
                            if($ans<=100){
                                echo '<td>'.$ans.'</td>';
                            }else{
                                echo "<td></td>"; //数値が出力されていなくても線を描画する
                            }
                        }
                        echo '</tr>';
                    }

                    ?>
                </table>
            </div>
        </div>
    </div>

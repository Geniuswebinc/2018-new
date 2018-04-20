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
                    for($ans=0;$ans<=100;$ans++){
                        for($a = 1; $a <=11; $a++){//縦の軸
                            echo '<tr>';
                            for($i = 1; $i <= 11; $i++){//横軸
                                $ans=$a*$i;
                                if($a==11 || $i==11){
                                    echo '<td></td>';
                                }else{
                                    echo '<td>'.$ans.'</td>';
                                }

                            }
                        }

                    }
                    echo '</tr>';
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

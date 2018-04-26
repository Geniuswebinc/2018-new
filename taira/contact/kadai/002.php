
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/app.css">
    <link type="text/css" rel="stylesheet" href="./assets/css/app.php">
</head>
<body>
    <?php
    $sum = 0;
    echo '問題1'.'<br>';
    for($i = 1;$i <= 100;$i++){
        echo $i,' ';
    }

    echo '<br>'.'問題2'.'<br>';
    for($i = 2;$i <= 100;$i+=2){
        echo $i,' ';
    }

    echo '<br>'.'問題3'.'<br>';
    for($i = 2;$i <= 100;$i+=2){
        $sum +=$i;
        echo $sum,' ';
    }

    echo '<br>'.'問題4'.'<br>';
    ?>
    <table class="table">
        <tbody>
            <tr>
                <?php
                for($i = 1;$i <= 35;$i++){
                    if($i>30){
                        echo '<td>'.'</td>';
                    }else if(($i % 7) == 0 && $i != 35){
                        echo '<td>'.$i.'</td>';
                        echo '</tr>'.'<tr>';
                    }else if($i <= 30){
                        echo '<td>'.$i.'</td>';
                    }
                }
                ?>
            </tr>
            </tbody>
        </table>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
    </html>

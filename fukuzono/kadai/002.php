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
    <h4>【問題１】</h4>
    <?php
        for ($i = 1; $i <= 100; $i++ ){
            echo $i;
        }
    ?>

    <br>
    <br>
    <br>
    <h4>【問題２】</h4>
    <?php
        for ($i = 1; $i <= 100; $i++){
            if($i % 2 == 0){
                echo $i;
            }
        }
    ?>

    <br>
    <br>
    <br>
    <h4>【問題３】</h4>
    <?php
        $sum = 0;
        for ($i = 1; $i <= 100; $i++ ){
            if($i % 2 == 0){
                $sum = $sum + $i;
            }
        }
        echo $sum;
    ?>

    <br>
    <br>
    <br>
    <h4>【問題４】</h4>
    <div class="container">
        <div class="row col-xs-12">
            <table class="table">
        <?php
            for ($i = 1; $i <= 30; $i++){
                if ($i % 7 == 1 ) {
                    echo '<tr>';
                }
                echo "<td>".$i."</td>";
                if( $i % 7 == 0 ){
                }
            }
            for ($j = $i % 7 ; $j <= 7; $j++){
                echo '<td></td>';
                if ($j % 7 == 0 ) {
                }
            }
            echo '</tr>';
        ?>
            </table>
        </div>
    </div>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./assets/js/app.js"></script>
</body>
</html>

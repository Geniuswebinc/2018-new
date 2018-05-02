<?php
    $b = $_POST['b'];
    $stage = $_POST['stage'];


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
            <table class="table">
                <tr>
                    <th></th>
                    <?php
                        for($i = 1; $i <= 20; $i++){
                            echo '<th>'.$i.'</th>';
                        }
                    ?>
                </tr>
                <?php
                    for($a = 1; $a <=20; $a++){
                        echo '<tr>';
                        echo '<th>'.$a.'</th>';
                        for($i = 1; $i <= 20; $i++){
                            $ans = $a * $i;
                            echo '<td>'.$ans.'</td>';
                        }
                        echo '</tr>';
                    }
                ?>
            </table>
        </div>
    </div>

    <br>
    <br>

    <div class="container">
        <div class="row">

            <h4 id="pagelink">【問題2】</h4>
            <div class='col-xs-12'>
                <form method="post" action="#pagelink">
                    <select class="form-control" name="stage">
                        <?php
                            for ($b = 1; $b <=100; $b++) {
                                echo '<option ';
                                if ($stage == $b){
                                    echo 'selected ';
                                }
                                echo 'value="' . $b. '" >' . $b . '</option>';

                            }
                        ?>
                    </select>
                    <input type="submit" value="送信" class="form-control">
                </form>
                <table class="table">
                    <tr>
                    <?php
                        if ($stage == 0){
                            echo '<th>'.'</th>';
                            for($c = 1; $c <= 9; $c++){
                                $ans = $stage * $c;
                                echo '<td>'.$ans.'</td>';
                            }
                        } else{
                            echo '<th>'.$stage.'の段'.'</th>';
                            for($c = 1; $c <= 9; $c++){
                                $ans = $stage * $c;
                                echo '<td>'.$ans.'</td>';
                            }
                        }
                        echo '</tr>';
                    ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="./assets/js/app.js"></script>
</body>
</html>

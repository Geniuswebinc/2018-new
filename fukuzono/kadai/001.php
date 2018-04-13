<?php
    $id=$_GET['id'];
?>

<!DOCTYPE html>
<html>
<head>

</head>

<body>
    <div id="">
        <p>【問題１】</p>
        <?php
            echo $id;
        ?>

        <p>【問題２】</p>
        <?php
            if ($id >= 10) {
                echo '10以上の値です';
            }else {
                echo '9以下の値です';
            }
        ?>

        <p>【問題３】</p>
        <?php
            if ($id >= 10) {
                echo '10以上の値です';
            }else if ($id >= 1 && $id < 10) {
                echo '9以下の値です';
            }else {
                echo '無効の値です';
            }
        ?>
    </div>
</body>
</html>

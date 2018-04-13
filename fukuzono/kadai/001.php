<!DOCTYPE html>
<html>
<head>

</head>

<body>
    <div method="get" id="">
        <?php
            echo $_GET['id'];
        ?>

        <?php
            if ($_GET['id'] >= 10) {
            echo '10以上の値です';
            }else {
            echo '9以下の値です';
            }
        ?>

        <?php
            if ($_GET['id'] >= 10) {
            echo '10以上の値です';
            }else if ($_GET['id'] >= 1 && $_GET['id'] < 10) {
            echo '9以下の値です';
            }else {
            echo '無効の値です';
            }
        ?>
    </div>
</body>
</html>

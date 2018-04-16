<?php
$id=$_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>001.php</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" href="./assets/css/app.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <p>問題1</p>
                <p><?php echo "id=".$id; ?></p>

                <p>問題2</p>
                <?php if($id>=10): ?>
                    <p><?php echo "10以上の値です"; ?></p>
                <?php elseif($id<10): ?>
                    <p><?php echo "9以下の値です"; ?></p>
                <?php endif ?>

                <p>問題3</p>
                <?php if($id>=10): ?>
                    <p><?php echo "10以上の値です"; ?></p>
                <?php elseif($id<10 && $id>=1): ?>
                    <p><?php echo "9以下の値です"; ?></p>
                <?php else: ?>
                    <p><?php echo "無効の値です"; ?></p>
                <?php endif ?>

            </div>
        </div>
    </div>


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./assets/js/apps.js"></script>
</body>

</html>

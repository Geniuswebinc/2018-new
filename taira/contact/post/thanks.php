<?php
require_once dirname(__FILE__) .'/data/require.php';

// データベース接続のクラス
$conn = new DbConn();

$name=$_POST['name'];
$Email=$_POST['Email'];
$InputTextarea=$_POST['InputTextarea'];

$name = $_POST['name'];
$mail = $_POST['Email'];
$text = $_POST['InputTextarea'];

$sql  = 'INSERT INTO ';
$sql .= '    contacts (name, mail, content)';
$sql .= '  VALUES ( ';
$sql .= '   "'.$name.'", "'.$mail.'", "'.$text.'" ';
$sql .= '  )';
// var_dump($sql);
$conn->fetch($sql);
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/app.css">
    <script type='text/javascript' src="./assets/js/app.js"></script>
</head>
<body>
    <div class="container">

        <div class="row">
            <div class="col-xs-12">
                <div class="text-center">
                    <h1><strong>お問い合わせ　完了</strong></h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="text-center">
                    <p><?php echo $name; ?>様、お問い合わせありがとうございました。    <?php echo '<br>'.$Email.'<br>'.$InputTextarea; ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="text-center">
                    <a href="index.php" class="btn btn-default">TOPに戻る</a>
                </div>
            </div>
        </div>

    </div>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>

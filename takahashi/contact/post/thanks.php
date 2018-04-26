<?php
    require_once dirname(__FILE__) .'/data/require.php';


    // データベース接続のクラス
    $conn = new DbConn();

    $name=$_POST['sentname'];
    $mail=$_POST['sentmail'];
    $content=$_POST['sentcontent'];

    $sql  = 'INSERT INTO ';
    $sql .= '    contacts (name, mail, content)';
    $sql .= '  VALUES ( ';
    $sql .= '   "'.$name.'", "'.$mail.'", "'.$content.'" ';
    $sql .= '  )';
    // var_dump($sql);
    $conn->fetch($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>2018/04/06の課題</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" href="./assets/css/app.css">
</head>

<body>
    <div class="cantainer">

        <div class="row">
            <div class="col-xs-12 text-center topmsg">
                <h1>お問い合わせ　完了</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 text-center thanxsMsg">
                <p><?php echo $name."様、お問い合わせありがとうございました。";?></p>
                <p><?php echo $mail; ?></p>
                <p><?php echo $content; ?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 text-center">
                <input type="button" onclick="location.href='index.php'"value="TOPに戻る"　class="backbtn">
            </div>
        </div>
    </div>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./assets/js/apps.js"></script>
</body>

</html>

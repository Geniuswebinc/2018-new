<?php
    require_once dirname(__FILE__) .'/data/require.php';
    // データベース接続のクラス
    $conn = new DbConn();

    // 内容を取得
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $context = $_POST['context'];

    $sql  = 'INSERT INTO ';
    $sql .= '    contacts (name, mail, content)';
    $sql .= '  VALUES ( ';
    $sql .= '   "'.$name.'", "'.$mail.'", "'.$context.'" ';
    $sql .= '  )';
    $conn->fetch($sql);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <title>送信完了</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link type="stylesheet" src="./assets/css/style.css">
</head>
<body>
    <section class="text-center">
        <h1>お問い合わせ　完了</h1>

        <p><?php echo $name;?>さん、お問い合わせありがとうございました。</p>
        <p><?php echo $mail;?></p>
        <p><?php echo $context;?></p>

        <a href="index.php" class="btn btn-default">TOPに戻る</a>
    </section>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>

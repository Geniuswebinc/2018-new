<?php
$name1=$_POST['nameData'];
$name2=$_POST['mailData'];
$name3=$_POST['textData'];

session_start();
$_SESSION['ndate']=$name1;
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>2018/04/09の課題</title>

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <link rel="stylesheet" href="./assets/css/app.css">
  <script type="text/javascript" src="./assets/js/app.js"></script>
</head>
<body>
    <form method="post" action="thanks.php">


  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1>
  お問合わせ確認
</h1>
    </div>
  </div>
</div>

<!-- 名前 -->
<div class="container">
  <div class="row">
    <div class="col-xs-12">
    <p>
      名前
    </p>
    <?php echo $name1; ?>
        </div>
      </div>
  </div>

<!-- メールアドレス確認 -->
<div class="container">
  <div class="row">
    <div class="col-xs-12">
    <p>
      メールアドレス
    </p>
      <?php echo $name2; ?>
      </div>
    </div>
  </div>

<!-- 内容入力確認 -->
<div class="container">
  <div class="row">
    <div class="col-xs-12">
    <p>
      内容
    </p>
    <?php echo $name3; ?>
      </div>
    </div>
  </div>

<!-- 戻るボタン　送信ボタン -->
<div class="container">
  <div class="row">
    <div class="col-xs-12">

        <input type="button" value="戻る" onclick="history.back()">

        <input type="submit" value="送信" class="btn btn-success">

      </div>
    </div>
  </div>
    </form>
</body>
</html>

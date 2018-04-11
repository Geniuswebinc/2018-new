<?php $name1=$_GET['nameData']; echo $name1 ?>
<?php $name2=$_GET['mailData']; echo $name2 ?>
<?php $name2=$_GET['textData']; echo $name3 ?>

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
      </div>
    </div>
  </div>

<!-- 戻るボタン　送信ボタン -->
<div class="container">
  <div class="row">
    <div class="col-xs-12">

<INPUT type="button" value="戻る" onClick="location.href='index.php'">
<INPUT type="button" value="送信" onClick="location.href='thanks.php'">

      </div>
    </div>
  </div>

</body>
</html>

<?php
session_start();
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

    <form method="post" action="" >

  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1>
  お問合せ　完了
</h1>

<p>
  <?php
   echo $_SESSION['ndate'];
   unset($_SESSION['ndate']);
  ?>
  　様お問い合せありがとうございました。
</p>
    </div>
  </div>
</div>



<!-- TOPへ戻るボタン -->
<!-- <button type="submit" class="btn btn-default">TOPに戻る</button> -->

<div class="container">
  <div class="row">
    <div class="col-xs-12">

<input type="button" value="トップページへ" onClick="location.href='index.php'">

      </div>
    </div>
  </div>
 <!-- <div class="header">header</div>
 <div class="main-visual">main-visual</div>
 <div class="sidebar">sidebar</div>
 <div class="content">content</div>
 <div class="footer">footer</div> -->
</form>
</body>
</html>

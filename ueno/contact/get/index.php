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

  <form method="get" action="confirm.php">

  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1>
          お問合せフォーム
        </h1>
    </div>
  </div>
</div>

<!-- テキストボックス -->
<div class="container">
  <div class="row">
    <div class="col-xs-12">
    <p>
      名前
    </p>

    <input type="text" name="nameData" class="form-control" placeholder="">

      </div>
    </div>
  </div>

<!-- メールアドレス入力欄 -->
<div class="container">
  <div class="row">
    <div class="col-xs-12">
    <p>
      メールアドレス
    </p>
    <input type="text" name="mailData" class="form-control" placeholder="">
      </div>
    </div>
  </div>

<!-- 内容入力欄 -->
<div class="container">
  <div class="row">
    <div class="col-xs-12">
    <p>
      内容
    </p>
		<textarea   class="form-control"  id="InputTextarea" placeholder=""></textarea>
      </div>
    </div>
  </div>

<!-- 送信ボタン -->

<div class="container">
  <div class="row">
    <div class="col-xs-12">

<INPUT type="submit" value="送信" class="btn btn-success"  onClick="location.href='confirm.php'">

        </div>
      </div>
    </div>

</form>

 <!-- <div class="header">header</div>
 <div class="main-visual">main-visual</div>
 <div class="sidebar">sidebar</div>
 <div class="content">content</div>
 <div class="footer">footer</div> -->
</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/app.css">
</head>

<body>
  <div class="container text-center">
    <div class="row">
      <div class="col-xs-12">
        <h1>お問い合わせフォーム</h>
      </div>
    </div>
  </div>

  <form action="confirm.php" method="get">
    <div class="container form-group">
      <div class="row">
        <div class="col-xs-offset-1 col-xs-10">
          <label for="use_name">名前</label>
          <input type="user_name" name="name" class="form-control">
        </div>
      </div>

      <div class="row">
        <div class="col-xs-offset-1 col-xs-10">
          <label for="InputEmail">メールアドレス</label>
		      <input type="email" name="email" class="form-control" id="InputEmail">
        </div>
      </div>

      <div class="row">
        <div class="col-xs-offset-1 col-xs-10">
		      <label for="InputTextarea">内容</label>
		      <textarea class="form-control" name="content" id="InputTextarea"></textarea>
	      </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12 text-center">
        <button type="submit" class="btn btn-primary btn-lg btn-success">確認</button>
      </div>
    </div>
  </form>




<!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script type="text/javascript" src="./assets/js/app.js"></script>

</body>
</html>

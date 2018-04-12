<?php
    $name=$_POST['name'];
    $email=$_POST['email'];
    $content=$_POST['content'];
?>

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
        <h1>お問い合わせ　確認</h>
      </div>
    </div>
  </div>

    <form action="thanks.php" method="post">
        <div class="container form-group">
            <div class="row">
            <div class="col-xs-offset-1 col-xs-10">
                <label class="control-label">名前</label>
                <p class="form-control-static"><?php echo $name; ?></p>
                <input type="hidden" name="name" value="<?php echo $name; ?>">
            </div>
            </div>

            <div class="row">
            <div class="col-xs-offset-1 col-xs-10">
                <label class="control-label">メールアドレス</label>
                <p class="form-control-static"><?php echo $email; ?></p>
            </div>
            </div>

            <div class="row">
            <div class="col-xs-offset-1 col-xs-10">
                <label class="control-label">内容</label>
                <p class="form-control-static"><?php echo $content; ?></p>
            </div>
            </div>

            <div class="row">
            <div class="col-xs-offset-2 col-xs-4 col-sm-6">
                <button type="button" class="btn btn-default btn-lg" onclick="history.back()">戻る</button>
            </div>

            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-lg btn-success">送信</button>
            </div>
            </div>
        </div>
    </form>

<!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script type="text/javascript" src="./assets/js/app.js"></script>

</body>
</html>

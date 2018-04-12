<?php
 $name = $_POST['name'];
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
        <h1>お問い合わせ　完了</h>
        <p class="msg"><?php echo $name."様、お問い合わせありがとうございました。"; ?></p>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xs-12 text-center">
      <a href="index.php"><button type="button" class="btn btn-default btn-lg">TOPに戻る</button></a>
    </div>
  </div>


  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script type="text/javascript" src="./assets/js/app.js"></script>

</body>
</html>

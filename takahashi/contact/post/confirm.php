<?php
$name=$_POST['sentname'];
$mail=$_POST['sentmail'];
$msg=$_POST['sentmsg'];
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

    <link rel="stylesheet" href=".\assets\css\app.css">

  </head>

  <body>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 text-center topmsg">
          <h1>お問い合わせ　確認</h1>
        </div>
      </div>

      <form action="thanks.php" method="post">
      <div class="row">
        <div class="col-xs-offset-4 col-xs-4">
          <div class="allText textName">
            <p>名前</p>
            <p><?php echo $name;?></p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-offset-4 col-xs-4">
          <div class="allText textMail">
            <p>メールアドレス</p>
            <p><?php echo $mail;?></p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-offset-4 col-xs-4">
          <div class="allText textTextarea">
            <p>内容</p>
            <p><?php echo $msg;?></p>
          </div>
        </div>
      </div>



      <div class="row">
        <div class="col-xs-6 text-right">
          <botton type="botton" class="btn btn-default" onclick="history.back();">戻る</botton>
        </div>
        <div class="col-xs-6 text-left">
          <input type="hidden" name="sentname" value="<?php echo $name; ?>">
          <input type="submit" value="送信" class="btn btn-success">
        </div>
      </div>
    </form>
    </div>






    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src=".\assets\js\apps.js"></script>
  </body>

  </html>

<!-- フォームの内容を取得 -->
<?php
 $name = $_GET['name'];
 $mail = $_GET['mail'];
 $context = $_GET['context'];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <title>お問い合わせフォーム(確認)</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link type="stylesheet" src="./assets/css/style.css">
</head>
<body>
  <section>
  <h1 class="text-center">お問い合わせ　確認</h1>

  <form class="text-center" action="thanks.php" method="get">
    <div>
      <label>名前</label><br>
      <?php echo $name; ?>
    </div>

    <div>
      <label>メールアドレス</label><br>
      <?php echo $mail; ?>
    </div>

    <div>
      <label>内容</label><br>
      <?php echo $context; ?>
    </div>

    <div>
      <button type="button" onclick="history.back()" name="back" class="btn btn-default">戻る</button>
      <button type="submit" name="submit" class="btn btn-success">送信</button>
    </div>
  </form>

  </section>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>

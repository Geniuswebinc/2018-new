<!DOCTYPE html>
<html lang="ja">
<head>
  <title>お問い合わせフォーム</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link type="stylesheet" src="./assets/css/style.css">
</head>
<body>
  <section>
    <h1 class="text-center">お問い合わせフォーム</h1>

    <form class="text-center" action="confirm.php" method="get">
      <div>
        <label>名前</label><br>
        <input type="text" name="name">
      </div>

      <div>
        <label>メールアドレス</label><br>
        <input type="email" name="mail">
      </div>

      <div>
        <label>内容</label><br>
        <textarea name="context" rows="5" cols="40"></textarea><br>
      </div>

      <div>
        <button type="submit" name="submit" class="btn btn-success">確認</button>
      </div>
    </form>

  </section>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>

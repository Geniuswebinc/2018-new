<?php
require_once dirname(__FILE__) .'/data/require.php';

$name4=$_POST['nameDate2'];
$mail5=$_POST['mailDate2'];
$text6=$_POST['textDate2'];

$sql  = 'INSERT INTO ';
$sql .= '    contacts (name, mail, content)';
$sql .= '  VALUES ( ';
$sql .= ' "'.$name4.'", "'.$mail5.'", "'.$text6.'" );'

?>

<?php
// データベース接続
$conn = new DbConn();

$conn->fetch($sql);
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


    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>
                    お問合せ　完了
                </h1>

                <p>
                    <?php echo $name4;?> 様お問い合せありがとうございました。<br>
                    <?php echo $mail5;?><br>
                    <?php echo $text6; ?></br>
                </p>

            </div>
        </div>
    </div>



<!-- TOPへ戻るボタン -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">

                <input type="button" value="トップページへ" onClick="location.href='index.php'">

            </div>
        </div>
    </div>

</body>
</html>

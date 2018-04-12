<?php
$name=$_GET['name'];
$Email=$_GET['Email'];
$InputTextarea=$_GET['InputTextarea'];
?>
<!-- getとpostのconfirm.phpのフォームの検索結果に入れておく。 -->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <link rel="stylesheet" href="./assets/css/app.css">
  <script type='text/javascript' src="./assets/js/app.js"></script>
</head>
<body>
     <form action="thanks.php" method="get">
         <div class="container">
              <div class="row">
                  <div class="col-xs-12">
                      <div class="text-center">
                          <h1><strong>お問い合わせ　確認</strong></h1>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-xs-offset-2 col-xs-10">
                      <p class="label-all">名前</p>
                  </div>
              </div>
              <div class="row">
                  <div class="col-xs-offset-2 col-xs-10">
                      <?php
                      echo $name;
                      ?>
                  </div>
              </div>
              <div class="row">
                  <div class="col-xs-offset-2 col-xs-10">
                      <p class="label-all">メールアドレス</p>
                  </div>
              </div>
              <div class="row">
                  <div class="col-xs-offset-2 col-xs-10">
                      <?php
                      echo $Email;
                      ?>
                  </div>
              </div>
              <div class="row">
                  <div class="col-xs-offset-2 col-xs-10">
                      <p class="label-all">内容</p>
                  </div>
              </div>
              <div class="row">
                   <div class="col-xs-offset-2 col-xs-10">
                        <?php
                        echo $InputTextarea;
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="text-right">
                            <button class="btn btn-default btn-lg" onclick="history.back()">　　戻る　　</button>
                        </div>
                    </div>
                     <div class="col-xs-6">
                         <div class="text-left">
                              <button class="btn btn-success btn-lg" >　　送信　　</button>
                          </div>
                      </div>
                  </div>
                  
              </form>
          </div>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>

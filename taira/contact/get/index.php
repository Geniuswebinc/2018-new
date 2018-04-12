<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./assets/css/app.css">
    <script type='text/javascript' src="./assets/js/app.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
    <div class="container">


        <div class="row">
            <div class="col-xs-12">
                <div class="text-center">
                    <h1><strong>お問い合わせフォーム</strong></h1>
                </div>
            </div>
        </div>


        <form  action="confirm.php" method="get">
          <div class="row">
            <div class="col-xs-12">
            <div class="form-group">
                <label for="InputName">名前</label>
                <input type="text" class="form-control input-lg" id="InputName">
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12">
            <div class="form-group">
                <label for="InputEmail">メールアドレス</label>
                <input type="text" class="form-control input-lg" id="InputEmail">
              </div>
            </div>
            </div>

            <div class="form-group">
                <label for="InputTextarea">内容</label>
                <textarea rows="5" name="InputTextarea" class="form-control input-lg" ></textarea>
            </div>



            <div class="row">
                <div class="col-xs-offset-4 col-xs-4 col-xs-offset-4">
                    <div class="text-center">
                        <button type="submit"class="btn btn-success btn-lg">お問い合わせはこちら</button>
                    </div>
                </div>
            </div>
        </form>

    </div>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>

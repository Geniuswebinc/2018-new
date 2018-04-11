<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>2018/04/09の課題</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" href=".\assets\css\app.css">

  </head>

  <body>
    <div class="container">

      <div class="row">
        <div class="col-xs-12 topmsg">
          <h1 class="text-center">お問い合わせフォーム</h1>
        </div>
      </div>


      <form action="confirm.php" method="get">

        <div class="row">
          <div class="col-xs-offset-4 col-xs-4">
            <div class="form-group">
              <label for="InputEmail">名前</label>
              <input type="text" class="form-control" name="sentname">
	           </div>
           </div>


           <div class="col-xs-offset-4 col-xs-4">
             <div class="form-group">
		             <label for="Inputmail">メールアドレス</label>
		             <input type="text" class="form-control" name="sentmail">
	            </div>
            </div>



            <div class="col-xs-offset-4 col-xs-4">
	             <div class="form-group">
		               <label for="InputTextarea">内容</label>
		               <textarea class="form-control" name="sentmsg"></textarea>
	              </div>
            </div>
          </div>

      </div>


      <div class="row">
        <div class="col-xs-12 text-center">
          <input type="submit" value="送信" class="inputBtn">
        </div>
      </div>

      </form>

      </div>


    </div>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src=".\assets\js\apps.js"></script>
  </body>

  </html>

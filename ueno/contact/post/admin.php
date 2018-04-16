<?php
require_once dirname(__FILE__) .'/data/require.php';
$conn = new DbConn();
$sql  = 'SELECT * FROM contacts
         ORDER BY created_at DESC';
$contacts = $conn->fetch($sql);

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
                <table class="table">
                	<thead>
                		<tr>
                			<th>id</th>
                			<th>名前</th>
                			<th>メール</th>
                			<th>内容</th>
                            <th>登録日</th>
                            <th>メモ欄</th>
                		</tr>
                        <?php
                        foreach ($contacts as $val) {
                            echo'<tr>';
                            echo'   <td>'.$val['id'].'</td>';
                            echo'   <td>'.$val['name'].'</td>';
                            echo'   <td>'.$val['mail'].'</td>';
                            echo'   <td>'.$val['content'].'</td>';
                            echo'   <td>'.$val['created_at'].'</td>';
                            echo'</tr>';
                        }
                        ?>
                	</thead>
                	<tbody>
                	</tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

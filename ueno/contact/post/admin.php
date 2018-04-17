<?php
    $name=$_POST['nameData'];
    $memo=$_POST['memoData'];
    $id=$_POST['id'];

    require_once dirname(__FILE__) .'/data/require.php';
    $conn = new DbConn();

    if($memo){
    $sql = 'UPDATE contacts';
    $sql.= ' SET note = "'.$memo.'"';
    $sql.= ' WHERE id = "'.$id.'"';
    //var_dump("update入ってます");

    //var_dump($id);

    }
    $id = $conn->execute($sql);
    //var_dump($sql);

    if($name){
    $sql  = 'SELECT * FROM contacts';
    $sql.=  ' WHERE name LIKE  "%'.$name.'%"';
    $sql.=  ' ORDER BY created_at DESC';
    //var_dump("ifの方");
        }else{
            $sql  = 'SELECT * FROM contacts';
            //var_dump("elseの方");
        }
    // var_dump($sql);
    $contacts = $conn->fetch($sql);
    // var_dump($memo);

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
    <form method="post">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="input-group">
	                       <input type="text" name="nameData" class="form-control" placeholder="">
	                            <span class="input-group-btn">
		                            <button type="submit" class="btn btn-success">検索</button>
                            	</span>
                    </div>
                </div>
            </div>
        </div>
　　</form>


    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <table class="table">
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
                        ?>
                                <form method="post">
                                    <td>
                                    <textarea name="memoData"class="form-control"  id="InputTextarea" placeholder="<?php echo $val['note'];?>"></textarea><input type="submit" value="更新" class="btn btn-primary btn-xs">
                                    <input type="hidden" name="id" value= <?php echo $val['id']; ?> >

                                    </td>';
                                </form>
                                    <?php
                                    echo'</tr>';
                            }
                        ?>

                </table>
            </div>
        </div>
    </div>

</body>
</html>

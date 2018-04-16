<?php
    $id=$_GET['id'];
?>
<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <title>2018/04/09の課題</title>
<head>
    <title>課題001</title>
</head>
<body>
    <!--問題1の記述  開始 -->
    <p>
        URLは<?php print $_SERVER["REQUEST_URI"] ?>です。<br>
        id <?php print  $id; ?>です</p>
    </p>
    <!--問題1の記述  終了 -->
    <p>
        問題2
    </p>
    <!-- 問題2の記述 -->
    <?php
        if($id>=10){
            echo "「10以上の値です」";
                }else if($id<10){
                    echo "「9以下の値です」";
                }
    ?>
    <!--問題2の記述  終了 -->

    <p>
        問題3
    </p>

    <!-- 問題3の記述 -->
    <?php
        if($id>=10){
            echo "「10以上の値です」";
                }else if($id<10 && $id>=1){
                    echo "「9以下の値です」";
                        }else if($id<1){
                            echo "「無効の値です」";
                        }
    ?>
    <!--問題3の記述  終了 -->

</body>
</html>

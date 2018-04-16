<?php
$Question = $_GET['id'];
?>
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
<?php
echo '問題1'.'<br>'.$Question.'<br>';

echo '問題2'.'<br>';
if($Question>=10){
    echo '10以上の値です'.'<br>';
}else if($Question<10){
    echo '9以下の値です'.'<br>';
};

echo '問題3'.'<br>';
if(is_numeric($Question)==false || $Question==null){
    echo "無効の値です";
}else if($Question>=10){
    echo '10以上の値です'.'<br>';
}else if($Question<10 && $Question>=1){
    echo '9以下の値です'.'<br>';
};
?>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>

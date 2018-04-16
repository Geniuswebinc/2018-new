<?php
$Question = $_GET['id'];

echo '問題1'.nl2br("\n").$Question.nl2br("\n");

echo '問題2'.nl2br("\n");
if($Question>=10){
    echo '10以上の値です'.nl2br("\n");
}else if($Question<=9){
    echo '9以下の値です'.nl2br("\n");
};

echo '問題3'.nl2br("\n");
if(ctype_digit($Question)==false || $Question==null){
    echo "無効の値です";
    break;
}else if($Question>=10){
    echo '10以上の値です'.nl2br("\n");
}else if($Question<=9){
    echo '9以下の値です'.nl2br("\n");
};
?>

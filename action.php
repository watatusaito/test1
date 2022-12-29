<?php

$mail=$_POST['mail'];
echo $mail;
echo "<br>";

try{
$pdo = new PDO('mysql:host=localhost;dbname=test;charset=utf8','root','pass');

echo "SQL接続成功<br>";
} catch (PDOException $e) {
    echo "SQL接続失敗: " . $e->getMessage() . "<br>";

}


$qry = $pdo->prepare("select * from user where mail = '$mail'");
$qry->execute();
$result = $qry->fetchAll();




if($result){
    echo "<br>";
    print_r ($result[0][3]);
    echo "でログイン成功";
}else{
    echo "ログイン失敗";
}


?>


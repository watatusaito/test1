

<?php


$ID = $_POST['ID'];
$pass = $_POST['pass'];
$name = $_POST['name'];


try{
$pdo = new PDO('mysql:host=localhost;dbname=test;charset=utf8','root','pass');



} catch (PDOException $e) {
    echo "SQL接続失敗: " . $e->getMessage() . "<br>";

}




$qry = $pdo->prepare("select * from account where mail = '$ID'");
$qry->execute();
$IDresult = $qry->fetchAll();




if($IDresult){
    echo "既にIDが使用されています";


}else{
    $qry = $pdo->prepare("INSERT INTO account ( `name`,  `mail`, `pass`) VALUES ('$name', '$ID', '$pass');");
    $qry->execute();
    $newresult = $qry->fetchAll();

    echo "ようこそ" . $name ."さん";
    echo "<br>";
    echo "あなたのID：" . $ID;
    echo "<br>";
    echo "あなたのパスワード：" . $pass;




    try{
        $pdo = new PDO('mysql:host=localhost;dbname=follow;charset=utf8','root','pass');
        
        
        
    } catch (PDOException $e) {
            echo "SQL接続失敗: " . $e->getMessage() . "<br>";
        
    }

    $qry = $pdo->prepare("CREATE TABLE  $ID(
        id int(11) unsigned NOT NULL AUTO_INCREMENT,
        followid varchar(255) DEFAULT NULL,
       PRIMARY KEY (`id`)
      );");
    $qry->execute();
    $result = $qry->fetchAll();


}






?>

<html>
    <head>
　　</head>
　　<body>
<br>  <a href="already.php">ログインする</a>

　　</form>
　　</body>
</html>

<pre>

<?php

$ID=$_POST['ID'];
$pass=$_POST['pass'];

try{
$pdo = new PDO('mysql:host=localhost;dbname=test;charset=utf8','root','pass');


} catch (PDOException $e) {
    echo "SQL接続失敗: " . $e->getMessage() . "<br>";

}


$qry = $pdo->prepare("select * from account where mail = '$ID'");
$qry->execute();
$IDresult = $qry->fetchAll();

if($IDresult){
    $qry = $pdo->prepare("select * from account where pass = '$pass'");
    $qry->execute();
    $passresult = $qry->fetchAll();

    if($IDresult[0][3] == $pass){
        echo "ログイン成功";
        echo "<br><br>";
        echo "あなたは" . $IDresult[0]['name'] ."でログインしています。";
        $name = $IDresult[0]['name'];
        


        ?>
        <html>
        <head>
        <title></title>
　　</head>
　　<body>
    
    <form action = "new_timeline.php" method = "post">
<?php
    print   '<input type="hidden" name="ID" value="'.$ID.'">';
    print   '<input type="hidden" name="name" value="'.$name.'">';
?>
        
        <input type ="submit" value = "つぶやく">

　　</form>

        </html>
        <?php


    }else{
        echo "IDまたはパスワードが違います";
    }
}

?>

</pre>











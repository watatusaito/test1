<?php
$id = $_POST['ID'];
$name = $_POST['name'];

try{
$pdo = new PDO('mysql:host=localhost;dbname=test;charset=utf8','root','pass');

} catch (PDOException $e) {
    echo "SQL接続失敗: " . $e->getMessage() . "<br>";
}



$qry = $pdo->prepare("select * from timeline");
$qry->execute();
$result2 = $qry->fetchAll();




foreach($result2 as $results){
   echo "<br><br>";
   print_r($results['accountid']);
   echo " ";
   print_r($results['name']);
   echo "<br>";
   print_r($results['message']);
   
   echo "<br><br>";
   print_r($results['tim']);
   echo "<br><br>";
   
}
?>
<html>
   <head>
       <title>タイムライン</title>
　　</head>
　　<body>
   
   <form action = "new_timeline.php" method = "post">


<?php
   print   '<input type="hidden" name="ID" value="'.$id.'">';
   print   '<input type="hidden" name="name" value="'.$name.'">';
?>
       
       <input type ="submit" value = "つぶやく">

　　</form>


　　</body>
</html>


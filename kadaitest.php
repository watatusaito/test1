<pre>

<?php
echo "接続";
$pdo = new PDO('mysql:host=localhost;dbname=test;charset=utf8','root','pass');

$qry = $pdo->prepare('select * from user');
$qry->execute();
$result = $qry->fetchAll();

foreach($result as $q){
    print_r($q);
    echo "<br>";
}

?>

</pre>
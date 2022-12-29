<pre>
    <?php

try{
    $pdo = new PDO('mysql:host=localhost;dbname=test;charset=utf8','root','pass');
    
    } catch (PDOException $e) {
        echo "SQL接続失敗: " . $e->getMessage() . "<br>";
    }



    
?>

</pre>
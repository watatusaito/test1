

<?php

$id = $_POST['ID'];
$name = $_POST['name'];
?>



<html>
    <head>
        <title>タイムライン</title>
　　</head>
　　<body>
    
    <form action = "TLdata.php" method = "post">

        <input type = "text" name = "message" placeholder="文字を入力"><br>
<?php
    print   '<input type="hidden" name="ID" value="'.$id.'">';
    print   '<input type="hidden" name="name" value="'.$name.'">';
?>
        
        <input type ="submit" value = "つぶやく">

　　</form>

<form action = "TimeLine.php" method = "post">
<?php
    print   '<input type="hidden" name="ID" value="'.$id.'">';
    print   '<input type="hidden" name="name" value="'.$name.'">';
?>
        <input type ="submit" value = "TLをみる">
</form>


　　</body>
</html>

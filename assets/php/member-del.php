<?php
    $name = $_POST['name'];
    $db = new PDO("mysql:dbname=webapp;host=localhost", "root", "root");
    $query1 = 'delete from members where name = "'.$name.'"';
    $query2 = 'delete from careers where name = "'.$name.'"';
    echo $query1;
    echo $query2;
    $db->exec($query1);
    $db->exec($query2);
    echo "<script>window.location.replace('../../member.php');</script>";
?>
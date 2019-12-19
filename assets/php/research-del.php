<?php
    $title = $_POST['title'];
    $db = new PDO("mysql:dbname=webapp;host=localhost", "root", "root");
    $query1 = 'delete from research where title = "'.$title.'"';
    $query2 = 'delete from info_research where title = "'.$title.'"';
    echo $query1;
    echo $query2;
    $db->exec($query1);
    $db->exec($query2);
    echo "<script>window.location.replace('../../research.php');</script>";
?>
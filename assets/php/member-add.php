<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $rank = $_POST['rank'];
    $web = $_POST['web'];
    $db = new PDO("mysql:dbname=webapp;host=localhost", "root", "root");
    $query = 'insert into members values("'.$name.'","'.$email.'","'.$web.'","'.$comment.'","'.$rank.'")';
    $db->exec($query);
    echo "<script>window.location.replace('../../member.php');</script>";
?>
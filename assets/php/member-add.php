<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $rank = $_POST['rank'];
    $web = $_POST['web'];
    $db = new PDO("mysql:dbname=webapp;host=localhost", "root", "root");
    $query = 'insert into members values("'.$name.'","'.$email.'","'.$web.'","'.$comment.'","'.$rank.'")';
    $path = '../../images/'.$name.'.png';
    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
        move_uploaded_file($_FILES["image"]["tmp_name"], $path);
        echo 'done';
    }
    $db->exec($query);
    echo "<script>window.location.replace('../../member.php');</script>";
?>
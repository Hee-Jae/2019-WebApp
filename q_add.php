<?php
    $db = new PDO("mysql:dbname=webapp;host=localhost", "root", "root");
    $id = $_POST['id'];
    $pw = $_POST['pw'];
    $content = $_POST['content'];
    $l_idm = $_POST['l_id'];
    if(!isset($_POST['id']) || !isset($_POST['pw']) || !isset($_POST['content'])){
        die("NO input");
    }
    else {
        $query1 = "INSERT INTO Question(name,content,password,lecture_id,slide,time) values('$id', '$content', '$pw', '$l_idm', 0,NULL)";
        print $query1;
        $db->exec($query1);
    }
?>
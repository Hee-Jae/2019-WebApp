<?php
    $db = new PDO("mysql:dbname=webapp;host=localhost", "root", "root");
    $id = $_POST['id'];
    $pw = $_POST['pw'];
    $content = $_POST['content'];
    $q_idm = $_POST['q_id'];
    if(!isset($_POST['id']) || !isset($_POST['pw']) || !isset($_POST['content'])){
        die("NO input");
    }
    else {
        $query1 = 'INSERT INTO Answer(q_id,name,content,password, time) VALUES ('.$q_idm.', "'.$id.'", '.$content.', '.$pw.', NULL)';
        print $query1;
        $db->exec($query1);
    }
?>
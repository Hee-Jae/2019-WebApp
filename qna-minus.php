<?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $db = new PDO("mysql:dbname=webapp;host=localhost", "root", "root");
        $query1 = 'delete from question where id = "'.$id.'"';
        $query2 = 'delete from answer where q_id = "'.$id.'"';
        $db->exec($query1);
        $db->exec($query2);
    }
    else {
        $id = $_GET['a_id'];
        $db = new PDO("mysql:dbname=webapp;host=localhost", "root", "root");
        $query2 = 'delete from answer where id = "'.$id.'"';
        $db->exec($query2);
    }
?>
<?php
    $title = $_POST['otitle'];
    $infos = $_POST['info'];
    $db = new PDO("mysql:dbname=webapp;host=localhost", "root", "root");
    foreach($infos as $info){
        $query = 'insert into info_research values("'.$title.'","'.$info.'")';
        $db->exec($query);
    }
    echo "<script>window.location.replace('../../research.php');</script>";
?>
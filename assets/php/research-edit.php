<?php
    $title = '';
    if($_POST['title'] == ''){
        $title = $_POST['otitle'];
    }
    else {
        $title = $_POST['title'];
    }
    $path1 = '../../images/'.$_POST['otitle'].'.png';
    $path2 = '../../images/'.$title.'.png';
    // echo $path1;
    // echo is_uploaded_file($path2);
    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
        move_uploaded_file($_FILES["image"]["tmp_name"], $path2);
    } else if (is_file($path1)){
        rename($path1, $path2);
    }
    $db = new PDO("mysql:dbname=webapp;host=localhost", "root", "root");
    // echo $_POST['otitle'];
    // echo 123;
    // echo $_POST['title'];
    $query1 = 'update research set title="'.$title.'" where title="'.$_POST['otitle'].'"';
    $query2 = 'update info_research set title="'.$title.'" where title="'.$_POST['otitle'].'"';
    $db->exec($query1);
    $db->exec($query2);
    echo "<script>window.location.replace('../../research.php');</script>";
?>
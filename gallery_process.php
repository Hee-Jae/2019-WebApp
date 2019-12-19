<?php
    if(!empty($_POST["title"])) $title=$_POST["title"];
    else{
        echo "<script> alert('ERROR');</script>";
        header("Location:gallary.php");
    }

    if (is_uploaded_file($_FILES["gallery"]["tmp_name"])) {
        move_uploaded_file($_FILES["gallery"]["tmp_name"], "images/gallery/".$_FILES['gallery']['name']);
    }
    else {
        echo "<script> alert('ERROR');</script>";
        header("Location:gallary.php");
    }

    $path = "".$_FILES['gallery']['name'];
    $db = new PDO("mysql:dbname=webapp; host=localhost", "root", "root");
    $title = $db -> quote($title);
    $path = $db -> quote($path);
    $db -> exec("INSERT INTO gallery(title,src) VALUES ($title, $path)");
    header("Location:gallary.php");

?>
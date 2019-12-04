<?php
    $name = '';
    if($_POST['name'] == ''){
        $name = $_POST['oname'];
    }
    else {
        $name = $_POST['name'];
    }
    if($_POST['email']  == ''){
        $email = $_POST['oemail'];
    }
    else {
        $email = $_POST['email'];
    }
    if($_POST['website']  == ''){
        $website = $_POST['owebsite'];
    }
    else {
        $website = $_POST['website'];
    }
    if($_POST['comment']  == ''){
        $comment = $_POST['ocomment'];
    }
    else {
        $comment = $_POST['comment'];
    }
    if($_POST['rank']  == ''){
        $rank = $_POST['orank'];
    }
    else {
        $rank = $_POST['rank'];
    }
    $path = '../../images/'.$name.'.png';
    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
        move_uploaded_file($_FILES["image"]["tmp_name"], $path);
        echo 'done';
    }
    $db = new PDO("mysql:dbname=webapp;host=localhost", "root", "root");
    $query = 'update members set name="'.$name.'", email="'.$email.'", web="'.$website.'", comment="'.$comment.'", rank="'.$rank.'" where name="'.$_POST['oname'].'"';
    echo $query;
    $db->exec($query);
    echo $query;
    echo "<script>window.location.replace('../../member.php');</script>";
?>
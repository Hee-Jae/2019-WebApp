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
    $path1 = '../../images/'.$_POST['oname'].'.png';
    $path2 = '../../images/'.$name.'.png';
    // echo $path1;
    // echo is_uploaded_file($path2);
    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
        move_uploaded_file($_FILES["image"]["tmp_name"], $path2);
    } else if (is_file($path1)){
        rename($path1, $path2);
        // echo $path2;
    }
    $db = new PDO("mysql:dbname=webapp;host=localhost", "root", "root");
    $query = 'update members set name="'.$name.'", email="'.$email.'", web="'.$website.'", comment="'.$comment.'", rank="'.$rank.'" where name="'.$_POST['oname'].'"';
    $query2 = 'update careers set name="'.$name.'" where name="'.$_POST["oname"].'"';
    print $query2;
    $db->exec($query);
    $db->exec($query2);
    echo "<script>window.location.replace('../../member.php');</script>";
?>
<?php
    $db = new PDO("mysql:dbname=webapp;host=localhost", "root", "root");
    $userdata = $db->query("select * from users");

    $username = $_POST['username'];
    $password = $_POST['password'];

    $bool_id = false;
    $bool_pw = false;

    foreach ($userdata as $data){
        if($data['user_id'] == $username){
            $bool_id = true;
        }
        if($data['user_pw'] == $password){
            $bool_pw = true;
        }
    }
    
    if($bool_id && $bool_pw){
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header("Content-Type: text/html; charset=UTF-8");
        echo "<script>alert('환영합니다.');";
        echo "window.location.replace('../../index.php');</script>";
    }
    else {
        header("Content-Type: text/html; charset=UTF-8");
        echo "<script>alert('아이디 또는 비밀번호가 잘못되었습니다.');";
        echo "window.location.replace('../../login.php');</script>";
        exit;
    }
?>
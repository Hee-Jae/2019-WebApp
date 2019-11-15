<?php
    // $db = new PDO("mysql:dbname=idpw;host=localhost", "root", "root");
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username == 'admin' && $password == 'root'){
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
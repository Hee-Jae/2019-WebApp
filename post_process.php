<?php
include('assets/php/password.php');
$name = $_POST["name"];
$content = $_POST["content"];
$password = $_POST["password"];
$lecture_id = $_POST["lecture_id"];

$db = new PDO("mysql:dbname=webapp; host=localhost", "root", "root");
$name = $db -> quote($name);
$content = $db -> quote($content);
$password = $db -> quote($password);
$lecture_id = $db -> quote($lecture_id);


$db -> exec("INSERT INTO Question(name,content,password,lecture_id,slide,time) VALUES ($name, $content, $password, $lecture_id, 1,NULL)");

header('Location: qna-slide.php');
?>
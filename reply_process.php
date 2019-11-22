<?php
include('assets/php/password.php');
$name = $_POST["name"];
$content = $_POST["content"];
$password = $_POST["password"];
$q_id = $_POST["id"];

$db = new PDO("mysql:dbname=webapp; host=localhost", "root", $your_password);
$q_id = $db -> quote($q_id);
$name = $db -> quote($name);
$content = $db -> quote($content);
$password = $db -> quote($password);

$db -> exec("INSERT INTO Answer(q_id,name,content,password, time) VALUES ($q_id, $name, $content, $password, NULL)");

header('Location: lecture.php');
?>
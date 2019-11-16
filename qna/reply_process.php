<?php
require('lib/idreset.php');
$name = $_POST["name"];
$content = $_POST["content"];
$password = $_POST["password"];
$q_id = $_POST["id"];

$db = new PDO("mysql:dbname=webapp; host=localhost", "root", "your password");
$q_id = $db -> quote($q_id);
$name = $db -> quote($name);
$content = $db -> quote($content);
$password = $db -> quote($password);

$db -> exec("INSERT INTO Answer(q_id,name,content,password) VALUES ($q_id, $name, $content, $password)");
ans_id_reset();

header('Location: qna.php');
?>
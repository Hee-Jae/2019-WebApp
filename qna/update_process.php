<?php
	require("lib/password.php");
    $content = $_POST['content'];
	$password = $_POST["password"];
	$id = $_POST["id"];
	
	$db = new PDO("mysql:dbname=webapp; host=localhost", "root", $your_password);
    $id = $db -> quote($id);
    $content = $db -> quote($content);
	$db_pw = $db -> query("SELECT password FROM Question WHERE id=$id");
	foreach($db_pw as $pw){
		$origin_pw = $pw["password"];
	}

	if((string)$password == $origin_pw){
		$db -> exec("UPDATE Question SET content=$content WHERE id=$id");
		header('Location:qna.php');
	}
	else{
		header('Location:alert.php');
	}
?>
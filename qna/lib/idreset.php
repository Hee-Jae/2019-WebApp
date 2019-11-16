<?php
function que_id_reset(){
    $db = new PDO("mysql:dbname=webapp; host=localhost", "root", "satigofk12");
    $db -> exec("ALTER TABLE Question AUTO_INCREMENT = 1");
    $db -> exec("SET @COUNT=0");
    $db -> exec("UPDATE Question SET ID = @COUNT:=@COUNT+1");
}

function ans_id_reset(){
    $db = new PDO("mysql:dbname=webapp; host=localhost", "root", "satigofk12");
    $db -> exec("ALTER TABLE Answer AUTO_INCREMENT = 1");
    $db -> exec("SET @COUNT=0");
    $db -> exec("UPDATE Answer SET ID = @COUNT:=@COUNT+1");
}
?>
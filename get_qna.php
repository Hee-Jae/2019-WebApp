<?php 
    if(isset($_GET['lecture_id'])){
        $db = new PDO("mysql:dbname=webapp;host=localhost", "root", "root");
        $query1 = "select * from question where lecture_id = '".$_GET["lecture_id"]."'";
        $datas = $db->query($query1);
        $answers = $db->query("select * from answer");
        $jsondata = array();
        $jsondata[] = array();
        $jsondata[] = array();
        foreach ($datas as $data){
            $jsondata[0][] = $data;
        }
        foreach ($answers as $answer){
            $jsondata[1][] = $answer;
        }
        $output = json_encode($jsondata);
        print urldecode($output);
    }
    
?>
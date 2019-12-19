<?php
    $db = new PDO("mysql:dbname=webapp;host=localhost", "root", "root");
    $info = $_POST['info'];
    $title = $_POST['title'];
    $query = 'delete from info_research where title="'.$title.'" AND info="'.$info.'"';
    $db->exec($query);
?>
<form id="redirect" action="../../research-edit.php" method="POST">
    <input type="hidden" name='title' value="<?php echo $title; ?>">
</form>
<?php
    echo '<script>document.getElementById("redirect").submit();</script>';
?>
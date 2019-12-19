<?php
    $db = new PDO("mysql:dbname=webapp;host=localhost", "root", "root");
    $info = $_POST['info'];
    $title = $_POST['title'];
    $query = 'insert into info_research values("'.$title.'","'.$info.'")';
    $db->exec($query);
?>
<form id="redirect" action="../../research-edit.php" method="POST">
    <input type="hidden" name='title' value="<?php echo $title; ?>">
</form>
<?php
    echo '<script>document.getElementById("redirect").submit();</script>';
?>
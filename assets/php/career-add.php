<?php
    $db = new PDO("mysql:dbname=webapp;host=localhost", "root", "root");
    $career = $_POST['career'];
    $name = $_POST['name'];
    $query = 'insert into careers values("'.$name.'","'.$career.'")';
    $db->exec($query);
?>
<form id="redirect" action="../../member-edit.php" method="POST">
    <input type="hidden" name='name' value="<?php echo $name; ?>">
</form>
<?php
    echo '<script>document.getElementById("redirect").submit();</script>';
?>
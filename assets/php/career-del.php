<?php
    $db = new PDO("mysql:dbname=webapp;host=localhost", "root", "root");
    $career = $_POST['career'];
    $name = $_POST['name'];
    $query = 'delete from careers where name="'.$name.'" AND career="'.$career.'"';
    $db->exec($query);
?>
<form id="redirect" action="../../member-edit.php" method="POST">
    <input type="hidden" name='name' value="<?php echo $name; ?>">
</form>
<?php
    echo '<script>document.getElementById("redirect").submit();</script>';
?>
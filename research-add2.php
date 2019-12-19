<!DOCTYPE HTML>

<html lang="ko">
<?php include('./assets/php/head.php'); ?>
<?php $currentpage = 'RESEARCH'; ?>

<body>
    <!-- Navbar -->
    <?php include('assets/php/navbar.php'); ?>
    <!-- Article -->
    <div class="login-article">
        <h1>Add Research</h1>
        <?php
            $title = $_POST['title'];
            (int)$n_infos = $_POST['n_infos'];
            $db = new PDO("mysql:dbname=webapp;host=localhost", "root", "root");
            $query = 'insert into research(title) values("'.$title.'")';
            $path = './images/'.$title.'.png';
            if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                move_uploaded_file($_FILES["image"]["tmp_name"], $path);
            }
            $db->exec($query);
        ?>
        <h2><?=$title?></h2>
        <form action="./assets/php/research-add.php" method="POST" enctype="multipart/form-data">
            <?php
            for($i=1;$i<=$n_infos;$i++){?>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Information</span>
                    </div>
                    <input type="hidden" name="otitle" value="<?=$title?>";>
                    <input type="text" class="form-control" id="info" name="info[]" aria-describedby="infoHelp"
                        placeholder="Info <?=$i?>" required>
                </div>
            </div>
            <?php } ?>
            <div class="input-group">
                <button class="btn btn-primary col">Add</button>
            </div>
        </form>
    </div>
    <!-- Footer -->
    <?php include('assets/php/footer.php'); ?>
</body>
</html>
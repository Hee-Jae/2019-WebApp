<?php
    $title = $_POST['title'];
    if(!isset($_POST)){
        echo "404 Bad Request";
    }
    $db = new PDO("mysql:dbname=webapp;host=localhost", "root", "root");
    $query = 'select * from info_research where title="'.$title.'"';
    $infos = $db->query($query);
?>
<!DOCTYPE HTML>

<html lang="ko">
<?php include('./assets/php/head.php'); ?>
<?php $currentpage = 'RESEARCH'; ?>

<body>
    <!-- Navbar -->
    <?php include('assets/php/navbar.php'); ?>
    <!-- Article -->
    <div class="login-article">
        <h1><?=$title?></h1>
        <form action="./assets/php/research-edit.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Title</span>
                    </div>
                    <input type="hidden" name="otitle" value="<?=$title?>">
                    <input type="text" class="form-control" id="title" name="title" aria-describedby="titleHelp"
                        placeholder="<?=$title?>">
                </div>
                <small id="titleHelp" class="form-text text-muted"><?=$title?></small>
            <div class="form-group">
                <input type="file" class="form-control-file" name="image">
            </div>
            <div class="input-group">
                <button class="btn btn-primary form-control">Edit</button>
            </div>
        </form>
        <label for="info">Information</label>
        <?php
            foreach($infos as $info){?>
        <form action="./assets/php/info-del.php" method="POST">
            <div class="form-group">
                <div class="input-group">
                    <?php echo '<input class="form-control" value="'.$info['info'].'" disabled>';?>
                    <input type="hidden" name="info" value="<?php echo $info['info']?>">
                    <input type="hidden" name="title" value="<?php echo $title?>">
                    <div class="input-group-append">
                        <button class="fas fa-minus btn btn-danger" style="color: white;"></button>
                    </div>
                </div>
            </div>
        </form>
        <?php } ?>
        <form action="./assets/php/info-add.php" method="POST">
            <div class="input-group">
                <input type="text" class="form-control" id="info" name="info" placeholder="Add Info" required>
                <input type="hidden" name="title" value="<?php echo $title?>">
                <div class="input-group-append">
                    <button class="btn btn-info">Add</button>
                </div>
            </div>
        </form>
    </div>
    <!-- Footer -->
    <?php include('assets/php/footer.php'); ?>
</body>
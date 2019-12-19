<!DOCTYPE HTML>

<html lang="ko">
    <?php include('./assets/php/head.php'); 
    $db = new PDO("mysql:dbname=webapp;host=localhost", "root", "root");?>
    <?php $currentpage = 'GALLARY'; ?>
    <body>
        <!-- Navbar -->
        <?php include('assets/php/navbar.php'); ?>
        <!-- Article -->
        <div class="article">
            <div id="gallery-top">
                <h1 id="gallery-h1"><span class="h1-border gallery-h1-border">PHOTO</span></h1>
                <form action="gallery_process.php" method="post" enctype="multipart/form-data">
                    <div id="gallery-upload">
                    <input type="text" name="title" placeholder="제목">
                    <input type="file" name="gallery">
                    <input type="submit" value="등록">
                    </div>
                </form>
            </div>
            <div id="gallery">
                <div>
                <?php
                $rows = $db -> query("SELECT * FROM gallery");
                foreach($rows as $row){
                ?>
                <div class="one_photo">
                    <a target="_blank" href="images/gallery/<?=$row["src"]?>"><img class="photo" src="images/gallery/<?=$row["src"]?>"></a>
                    <p class="photo_inf"><?= $row["title"]?></p>
                </div>
                <?php } ?>
            </div>
        </div>
        <!-- Footer -->
        <?php include('assets/php/footer.php'); ?>
    </body>
</html>

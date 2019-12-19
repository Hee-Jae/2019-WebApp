<?php
    $db = new PDO("mysql:dbname=webapp;host=localhost", "root", "root");
?>

<!DOCTYPE HTML>

<html lang="ko">
    <?php include('./assets/php/head.php'); ?>
    <?php $currentpage = 'RESEARCH'; ?>
    <body>
        <!-- Navbar -->
        <?php include('assets/php/navbar.php'); ?>
        <!-- Article -->
        <div class="member-article">
            <h1><span class="h1-border">RESEARCH
            <?php
                if(isset($_SESSION['username']) && isset($_SESSION['password'])){
                    echo '<span class="right-align"><a href="./research-add.php "class="btn fas fa-plus"></a></span>';
                }
            ?>
            </span></h1>
                <!-- <h2 class="intro">introduction</h2> -->
            <?php
            $maxid = $db->query("select max(id) from research")->fetchColumn();
            for(;$maxid>0;$maxid--){
                $title = $db->query("select * from research where id = $maxid")->fetchColumn(1);
                if($title != ""){
            ?>
            <div class="member-position">
                <h2><?=$title?>
                <?php
                    if(isset($_SESSION['username']) && isset($_SESSION['password'])){?>
                        <form action="./assets/php/research-del.php" method="POST">
                            <button class="fas fa-minus btn fa-pull-right" name="title" value="<?=$title?>"></button>
                        </form>
                        <form action="./research-edit.php" method="POST">
                            <button class="fas fa-edit btn fa-pull-right" name="title" value="<?=$title?>"></button>
                        </form>
                    <?php } ?>
                </h2>
                <div class="member-human">
                    <img class="member-photo" src="images/<?=$title?>.png" />
                    <div class="member-human-contents">
                        <ul class="research-ul">
                            <?php
                            $info_s = $db->query("select * from info_research where title = '$title'");
                            foreach($info_s as $info){
                                $content = $info['info'];?>
                                <li><?=$content?></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
                <?php } ?>
            <?php } ?>
        </div>
        <!-- Footer -->
        <?php include('assets/php/footer.php'); ?>
    </body>
</html>
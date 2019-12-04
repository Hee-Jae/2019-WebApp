<?php
    $name = $_POST['name'];
    if(!isset($_POST)){
        echo "404 Bad Request";
    }
    $db = new PDO("mysql:dbname=webapp;host=localhost", "root", "root");
    $query1 = 'select * from members where name="'.$name.'"';
    $query2 = 'select * from careers where name="'.$name.'"';
    $member = $db->query($query1);
    $careers = $db->query($query2);
    foreach($member as $aa){
        $member = $aa;
    }
?>
<!DOCTYPE HTML>

<html lang="ko">
<?php include('./assets/php/head.php'); ?>
<?php $currentpage = 'MEMBER'; ?>

<body>
    <!-- Navbar -->
    <?php include('assets/php/navbar.php'); ?>
    <!-- Article -->
    <div class="login-article">
        <h1><?php echo $member['name']?></h1>
        <form action="./assets/php/member-edit.php" method="POST">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Name</span>
                    </div>
                    <input type="hidden" name="oname" value="<?php echo $member['name']; ?>">
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp"
                        placeholder="<?php echo $member['name']?>">
                </div>
                <small id="nameHelp" class="form-text text-muted"><?php echo $member['name']?></small>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Email</span>
                    </div>
                    <input type="hidden" name="oemail" value="<?php echo $member['email']; ?>">
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                        placeholder="<?php echo $member['email']?>">
                </div>
                <small id="emailHelp" class="form-text text-muted"><?php echo $member['email']?></small>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Website</span>
                    </div>
                    <input type="hidden" name="owebsite" value="<?php echo $member['web']; ?>">
                    <input type="text" class="form-control" id="website" name="website" aria-describedby="webHelp"
                        placeholder="<?php echo $member['web']?>">
                </div>
                <small id="webHelp" class="form-text text-muted"><?php echo $member['web']?></small>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Comment</span>
                    </div>
                    <input type="hidden" name="ocomment" value="<?php echo $member['comment']; ?>">
                    <input type="text" class="form-control" id="comment" name="comment" aria-describedby="commentHelp"
                        placeholder="<?php echo $member['comment']?>">
                </div>
                <small id="commentHelp" class="form-text text-muted"><?php echo $member['comment']?></small>
            </div>
            <div class="form-group">
                <input type="hidden" name="orank" value="<?php echo $member['rank']; ?>">
                <label>Rank</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="rank" value="PHD" id="PHD"
                        <?php if($member['rank'] == "Prof") {echo 'disabled';}?>>
                    <label class="form-check-label" for="PHD">PH.D.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="rank" value="ME" id="ME"
                        <?php if($member['rank'] == "Prof") {echo 'disabled';}?>>
                    <label class="form-check-label" for="ME">M.E.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="rank" value="alumni" id="alumni"
                        <?php if($member['rank'] == "Prof") {echo 'disabled';}?>>
                    <label class="form-check-label" for="alumni">Alumni</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="rank" value="intern" id="intern"
                        <?php if($member['rank'] == "Prof") {echo 'disabled';}?>>
                    <label class="form-check-label" for="intern">Intern</label>
                </div>
                <small id="rankHelp"
                    class="form-text text-muted"><?php if($member['rank'] == "Prof") {echo 'Professor';} else {echo$member['rank'];}?></small>
            </div>
            <div class="input-group">
                <button class="btn btn-primary form-control">Edit</button>
            </div>
        </form>
        <label for="career"><br>Carrer</label>
        <?php
            foreach($careers as $career){?>
        <form action="./assets/php/career-del.php" method="POST">
            <div class="form-group">
                <div class="input-group">
                    <?php echo '<input class="form-control" value="'.$career['career'].'" disabled>';?>
                    <input type="hidden" name="career" value="<?php echo $career['career']?>">
                    <input type="hidden" name="name" value="<?php echo $member['name']?>">
                    <div class="input-group-append">
                        <button class="fas fa-minus btn btn-danger" style="color: white;"></button>
                    </div>
                </div>
            </div>
        </form>
        <?php } ?>
        <form action="./assets/php/career-add.php" method="POST">
            <div class="input-group">
                <input type="text" class="form-control" id="career" name="career" placeholder="Add Career" required>
                <input type="hidden" name="name" value="<?php echo $member['name']?>">
                <div class="input-group-append">
                    <button class="btn btn-info">Add</button>
                </div>
            </div>
        </form>
    </div>
    <!-- Footer -->
    <?php include('assets/php/footer.php'); ?>
</body>
<script>
    function addCareer() {

    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYQwQiBBWhq0i7Oe1aedxgE4rHiTrlo74&callback=myMap">
</script>

</html>
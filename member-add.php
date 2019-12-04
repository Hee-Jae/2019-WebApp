<!DOCTYPE HTML>

<html lang="ko">
<?php include('./assets/php/head.php'); ?>
<?php $currentpage = 'MEMBER'; ?>

<body>
    <!-- Navbar -->
    <?php include('assets/php/navbar.php'); ?>
    <!-- Article -->
    <div class="login-article">
        <h1>Add Member</h1>
        <form action="./assets/php/member-add.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Name</span>
                    </div>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp"
                        placeholder="Name" required>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Email</span>
                    </div>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                        placeholder="Email" required>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Website</span>
                    </div>
                    <input type="text" class="form-control" id="web" name="web" aria-describedby="webHelp"
                        placeholder="Website" required>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Comment</span>
                    </div>
                    <input type="text" class="form-control" id="comment" name="comment" aria-describedby="commentHelp"
                        placeholder="Comment" required>
                </div>
            </div>
            <div class="form-group">
                <label>Rank</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="rank" value="PHD" id="PHD" required>
                    <label class="form-check-label" for="PHD">PH.D.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="rank" value="ME" id="ME">
                    <label class="form-check-label" for="ME">M.E.</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="rank" value="alumni" id="alumni">
                    <label class="form-check-label" for="alumni">Alumni</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="rank" value="intern" id="intern">
                    <label class="form-check-label" for="intern">Intern</label>
                </div>
            </div>
            <div class="form-group">
                <input type="file" class="form-control-file" name="image" accept="image/*" required>
            </div>
            <div class="input-group">
                <button class="btn btn-primary col">Add</button>
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
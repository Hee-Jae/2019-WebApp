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
        <form action="./research-add2.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Title</span>
                    </div>
                    <input type="text" class="form-control" id="title" name="title" aria-describedby="titleHelp"
                        placeholder="Title" required>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Number of Information</span>
                    </div>
                    <select name="n_infos">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <input type="file" class="form-control-file" name="image" accept="image/*" required>
            </div>
            <div class="input-group">
                <button class="btn btn-primary col">Next</button>
            </div>
        </form>
    </div>
    <!-- Footer -->
    <?php include('assets/php/footer.php'); ?>
</body>
</html>
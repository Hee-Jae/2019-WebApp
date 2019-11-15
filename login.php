<!DOCTYPE HTML>

<html lang="ko">
    <?php include('./assets/php/head.php'); ?>
    <?php $currentpage = 'LOGIN'; ?>
    <body>
        <!-- Navbar -->
        <?php include('assets/php/navbar.php'); ?>
        <!-- Article -->
        <div class="login-article">
            <h1><span class="h1-border">Login</span></h1>
            <form action="./assets/php/login.php" method='post'>
                <div class="form-group">
                    <input class="form-control" name="username" placeholder="Username"/>
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Password"/>
                </div>
                <button class="btn-primary btn btn-lg pull-right" type="submit"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Login</button>
            </form>
        </div>
        <!-- Footer -->
        <!-- <?php include('assets/php/footer.php'); ?> -->
    </body>
</html>
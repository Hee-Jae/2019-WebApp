<!DOCTYPE HTML>

<html lang="ko">
    <?php include('./assets/php/head.php'); ?>
    <?php $currentpage = 'MEMBER'; ?>
    <body>
        <!-- Navbar -->
        <?php include('assets/php/navbar.php'); ?>
        <!-- Article -->
        <div class="member-article">
			<h1><span class="h1-border">Members</span></h1>
			<div class="member-position">
    			<h2> Professor </h2>
            	<?php include('member_lib.php'); ?>
			</div> <!-- member-position -->

            <div class="member-position">
            	<h2>Ph.D.</h2>
				<?php include('member_lib.php'); ?>
				<?php include('member_lib.php'); ?>
				<?php include('member_lib.php'); ?>
				<?php include('member_lib.php'); ?>
			</div>
                
            <div class="member-position">
                <h2>M.E.</h2>
				<?php include('member_lib.php'); ?>
				<?php include('member_lib.php'); ?>
				<?php include('member_lib.php'); ?>
				<?php include('member_lib.php'); ?>
            </div>

			<div class="member-position">
				<h2>Alumni</h2>
				<?php include('member_lib.php'); ?>
				<?php include('member_lib.php'); ?>
				<?php include('member_lib.php'); ?>
				<?php include('member_lib.php'); ?>
            </div> <!--position -->
        </div> <!--article -->
   

        
        <!-- Footer -->
        <?php include('assets/php/footer.php'); ?>
    </body>
</html>
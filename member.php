<?php
	$db = new PDO("mysql:dbname=webapp;host=localhost", "root", "root");
?>

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
    			<h2> Professor 
				<!-- <?php
					if(isset($_SESSION['username']) && isset($_SESSION['password'])){
						echo '<span class="right-align"><a href="./member-add.php "class="btn fas fa-edit"></a></span>';
					}
				?> -->
				</h2> 
				<?php
					$members = $db->query("select * from members where rank = 'Prof'");
					foreach($members as $member){
						$name = $member['name'];
						$email = $member['email'];
						$web = $member['web'];
						$comment = $member['comment'];
						include('member_lib.php');
					}
				?>
			</div> <!-- member-position -->

            <div class="member-position">
            	<h2>Ph.D.
				<?php
					if(isset($_SESSION['username']) && isset($_SESSION['password'])){
						echo '<span class="right-align"><a href="./member-add.php "class="btn fas fa-plus"></a></span>';
					}
				?>
				</h2>
				<?php
					$members = $db->query("select * from members where rank = 'PHD'");
					foreach($members as $member){
						$name = $member['name'];
						$email = $member['email'];
						$web = $member['web'];
						$comment = $member['comment'];
						include('member_lib.php');
					}
				?>
			</div>
                
            <div class="member-position">
                <h2>M.E.
				<?php
					if(isset($_SESSION['username']) && isset($_SESSION['password'])){
						echo '<span class="right-align"><a href="./member-add.php "class="btn fas fa-plus"></a></span>';
					}
				?>
				</h2>
				<?php
					$members = $db->query("select * from members where rank = 'ME'");
					foreach($members as $member){
						$name = $member['name'];
						$email = $member['email'];
						$web = $member['web'];
						$comment = $member['comment'];
						include('member_lib.php');
					}
				?>
            </div>
			<div class="member-position">
				<h2>Alumni
				<?php
					if(isset($_SESSION['username']) && isset($_SESSION['password'])){
						echo '<span class="right-align"><a href="./member-add.php "class="btn fas fa-plus"></a></span>';
					}
				?>
				</h2>
				<?php
					$members = $db->query("select * from members where rank = 'alumni'");
					foreach($members as $member){
						$name = $member['name'];
						$email = $member['email'];
						$web = $member['web'];
						$comment = $member['comment'];
						include('member_lib.php');
					}
				?>
            </div> <!--position -->
			<div class="member-position">
				<h2>Intern
				<?php
					if(isset($_SESSION['username']) && isset($_SESSION['password'])){
						echo '<span class="right-align"><a href="./member-add.php "class="btn fas fa-plus"></a></span>';
					}
				?>
				</h2>
				<?php
					$members = $db->query("select * from members where rank = 'intern'");
					foreach($members as $member){
						$name = $member['name'];
						$email = $member['email'];
						$web = $member['web'];
						$comment = $member['comment'];
						include('member_lib.php');
					}
				?>
            </div> <!--position -->
        </div> <!--article -->
   

        
        <!-- Footer -->
        <?php include('assets/php/footer.php'); ?>
    </body>
</html>
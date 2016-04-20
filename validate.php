<?php

// connect to database

session_start();

mysql_connect("localhost", "nomanssky", "wondering");
mysql_select_db("nms_users");

if (isset($_SESSION['login'])) {
	header('Location: http://localhost:8888/nmsuniverse/');
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Register | NMS Universe</title>
		<?php include('scripts/meta.php'); ?>
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="css/mobile.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<style>
			.nav-item, .nav-item a {
				color: black;
			}
		</style>
	</head>
	<body style="background-color: #eee;">
		<?php include('scripts/mob-nav.php') ?>
		<div class="icon-page"><a href="/"><img id="icon" src="img/nmsu.png" style="position: absolute; left: 20px; top: 32px; width: 64px; height: 64px;" /></a></div>
		<?php include('scripts/nav.php'); ?>
		<div class="container" style="position: absolute; top: 10vh; background-color: #eee;">
			<!-- Not sure if this will be needed... -->
			
			<div class="content" id="registration" style="width: 100%; text-align: center; background-color: #eee;">
				<h1 style="margin: 0; padding: 20px;">Validation</h1>
				
				<?php
				
				$str = $_GET['str'];
								
				$sql = "SELECT * FROM users WHERE validate = '$str'";
				$res = mysql_query($sql);
				
				if (mysql_num_rows($res) == 1) {
					$me = mysql_fetch_array($res);
				
					$id = $me['id'];
					
					echo 'Validation complete!';
					
					$sql = "UPDATE users SET validate = 'success' WHERE id = $id";
					mysql_query($sql);
				} else {
					echo 'Validation code not recognized.';
				}
				?>
			
			
			<div id="footer" class="content" style="background-color: #ccc; position: relative; text-align: center; padding: 60px 8vw;">
				<?php include('footer.php'); ?>
				<?php include('scripts/mob-foot.php'); ?>
			</div>
		</div>
		<script src="js/home.js"></script>
		<script src="js/mobile.js"></script>
		<script src="js/register.js"></script>
	</body>
</html>
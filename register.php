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
				<h1 style="margin: 0; padding: 20px;">Register</h1>
				<?php
				
				include('scripts/registration.php')
				
				?>
				<form action="" method="POST">
					<table style="width: 60%; margin-left: 20%; margin-right: 20%; font-size: 1.2em;" cellpadding="5">
						<tr>
							<td style="text-align: right; vertical-align: middle;">
								Full Name*
							</td>
							<td style="text-align: left;">
								<input style="border-bottom: 1px solid black; width: 200px;" type="text" name="fullname" />
							</td>
						</tr>
						<tr>
							<td style="text-align: right; vertical-align: middle;">
								Username*
							</td>
							<td style="text-align: left;">
								<input style="border-bottom: 1px solid black; width: 200px;" type="text" name="username" />
							</td>
						</tr>
						<tr>
							<td style="text-align: right; vertical-align: middle;">
								Email*
							</td>
							<td style="text-align: left;">
								<input style="border-bottom: 1px solid black; width: 200px;" type="email" name="email" />
							</td>
						</tr>
						<tr>
							<td style="text-align: right; vertical-align: middle;">
								Password*
							</td>
							<td style="text-align: left;">
								<input style="border-bottom: 1px solid black; width: 200px;" type="password" name="password" />
							</td>
						</tr>
						<tr>
							<td style="text-align: right; vertical-align: middle;">
								Short Bio (140 chars or less)
							</td>
							<td style="text-align: left;">
								<textarea class="bio-ta" rows="4" style="border-bottom: 1px solid black; width: 200px;" type="text" name="bio"></textarea>
								<p class="count" style="width: 200px; font-size: 0.5em; text-align: right;">140</p>
							</td>
						</tr>
						<tr>
							<td style="text-align: right; vertical-align: middle;">
								YouTube URL
							</td>
							<td style="text-align: left;">
								<input style="border-bottom: 1px solid black; width: 200px;" type="text" name="youtube" />
							</td>
						</tr>
						<tr>
							<td style="text-align: right; vertical-align: middle;">
								Twitch URL
							</td>
							<td style="text-align: left;">
								<input style="border-bottom: 1px solid black; width: 200px;" type="text" name="twitch" />
							</td>
						</tr>
						<tr>
							<td style="text-align: right; vertical-align: middle;">
								No Man's Sky Username
							</td>
							<td style="text-align: left;">
								<input style="border-bottom: 1px solid black; width: 200px;" type="text" name="nms" />
							</td>
						</tr>
						<tr>
							<td colspan="2" style="text-align: center;">
								<input class="btn-black" type="submit" name="submit" style="margin-top: 30px;" />
							</td>
						</tr>
					</table>
				</form>
							
			</div>
			<br><br><br>
			
			
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
<?php

// connect to database

session_start();

mysql_connect("localhost", "nomanssky", "wondering");
mysql_select_db("nms_users");

$user = $_GET['username'];

$sql = "SELECT * FROM users WHERE username = '$user'";
$result = mysql_query($sql);
$exists = mysql_num_rows($result);

if ($exists == 1) {
	// it works!
	$me = mysql_fetch_array($result);
	
	/* check for uploads by user
	$id = $me['id'];
	
	mysql_select_db("screenshots");
	
	$sql = "SELECT * FROM screenshots WHERE userid = '$id'";
	$result = mysql_query($sql);
	$myuploads = mysql_fetch_array($result);
	$numuploads = mysql_num_rows($result);
	*/
	
} else {
	header("Location: /404.php");
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $me['username'] . ' | ' . 'NMS Universe'; ?></title>
		<?php include('scripts/meta.php'); ?>
		<link rel="stylesheet" href="../css/style.css"/>
		<link rel="stylesheet" href="../css/mobile.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<style>
			.nav-item, .nav-item a {
				color: black;
			}
		</style>
	</head>
	<body style="background-color: white;">
		<?php include('scripts/mob-nav.php') ?>
		<div class="back" style="position: absolute; top: 20vh; width: 100%; height: 100%; <?php include('scripts/determineback.php'); ?> background-size: cover; background-repeat: no-repeat; background-position: center center;"></div>
		<div class="home-cover" style="width: 100%; height: 100%; position: absolute; top: 20vh; background-color: rgba(0,0,0,0.4);"></div>
		<div class="icon-page"><a href="/"><img id="icon" src="../img/nmsu.png" style="position: absolute; left: 20px; top: 32px; width: 64px; height: 64px;" /></a></div>
		<?php include('scripts/nav.php'); ?>
		<div class="container" style="position: absolute; top: 0;">
			<!-- Not sure if this will be needed... -->
			
			<div class="content" id="avatar" style="background-color: white; background-image: url(<?php echo $me['avatar'] ?>); background-size: cover; background-repeat: no-repeat; background-position: center center; position: absolute; top: calc(20vh - 64px); left: calc(50vw - 64px); width: 128px; height: 128px; overflow: hidden; border-radius: 5px; border: 1px solid black; text-align: center; z-index: 5;">
			</div>
			
			<div class="content" id ="main" style="margin-top: 20vh; background-color: rgba(256,256,256,0.5); width: 100%; height: 80vh;">
				<div style="padding-top: 64px;">
					<h1 style="text-align: center;"><?php echo $me['username']; ?></h1>
					<p style="text-align: center; width: 60%; margin-left: 20%; margin-right: 20%;"><strong>Bio: </strong><?php echo $me['bio']; ?></p>
					HEY<br>
					HEY<br>
					HEY<br>
					
					<span class="lkj" style="width: 20%;">
						<p>HEH</p>
						<p>HAH</p>
						<p>HOH</p>
						<p>HUH</p>
					</span>
					<span class="jkl" style="width: 80%;">
						OINK!
					</span>
					
				</div>
			</div>
			
			<div id="footer" class="content" style="background-color: #ccc; position: relative; text-align: center; padding: 60px 8vw;">
				<table id="foot" cellpadding="5" style="width: 90%; margin-left: 5%;">
					<tr>
						<td rowspan="3" style="padding: 0; margin: 0;">
							<img src="../img/nmsu.png" style="width: 70px; height: 70px;" />
						</td>
						<td>
							<strong>No Man's Sky</strong>
						</td>
						<td>
							<strong>Contact</strong>
						</td>
						<td>
							<strong>NMSU Social Media</strong>
						</td>
						<td>
							<strong>User Tools</strong>
						</td>
					</tr>
					<tr>
						<td style="vertical-align: top;">
							<a target="_blank" href="http://www.nomanssky.com">Official Website</a>
						</td>
						<td>
							<a href="mailto:contact@nmsuniverse.org">General Email</a>
						</td>
						<td>
							<a target="_blank" href="http://www.facebook.com/thenmsuniverse">Facebook</a>
						</td>
						<td>
							<p class="btn-log" style="text-decoration: underline; margin: 0;">Log In</p>
						</td>
					</tr>
					<tr>
						<td style="vertical-align: top;">
							<a target="_blank" href="http://www.hellogames.org">Hello Games Website</a>
						</td>
						<td rowspan="2" style="vertical-align: top;">
							<a href="mailto:support@nmsuniverse.org">Report a Bug</a>
						</td>
						<td>
							<a target="_blank" href="http://www.twitter.com/thenmsuniverse">Twitter</a>
						</td>
						<td style="vertical-align: top;">
							<a target="_blank" href="/register">Register</a>
						</td>
					</tr>
					<tr>
						<td>
							&copy;<?php echo date('Y'); ?> NMSU.
						</td>
						<td>
							<a target="_blank" href="https://www.twitch.tv/directory/game/No%20Man's%20Sky">NMS on Twitch</a>
						</td>
						<td style="vertical-align: top;">
							<a target="_blank" href="http://www.instagram.com/thenmsuniverse">Instagram</a>
						</td>
					</tr>
					<tr>
						<td style="vertical-align: top;">
							No affiliation with Hello Games or No Man's Sky.
						</td>
						<td style="vertical-align: top;">
							<a target="_blank" href="https://www.youtube.com/user/HelloGamesTube">NMS on YouTube</a>
						</td>
					</tr>
				</table>
				<?php include('../scripts/mob-foot.php'); ?>
			</div>
		</div>
		<script src="../js/home.js"></script>
		<script src="../js/mobile.js"></script>
	</body>
</html>
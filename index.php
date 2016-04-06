<?php
include('scripts/grabVideo.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<title>NMS Universe</title>
		<?php include('meta.php'); ?>
		<link rel="stylesheet" href="css/style.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	</head>
	<body>
		<div class="back" style="position: absolute; top: 0; width: 100%; height: 100%; background-image: url(img/home.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center;"></div>
		<div class="home-cover" style="width: 100%; height: 100%; position: absolute; background-color: rgba(0,0,0,0.4);"></div>
		<div class="icon" style="position: absolute; z-index: 3; width: 20%; padding-left: 40%; margin-left: 20px; text-align: center; margin-top: 30px;"><a href=""><img src="img/nmsu_white.png" style="width: 100px; height: 100px; margin-left: -40px;" /></a></div>
		<div class="nav" style="position: absolute; top: 5vh; right: 20px; z-index: 3; width: 100%; text-align: right;">
			<div class="nav-item">
				<a href="/about">About</a>
			</div>
			<div class="nav-item">
				<a href="/uploads">Recent Uploads</a>
			</div>
			<div class="nav-item">
				<a href="/forums">Forums</a>
			</div>
			<div class="btn-log nav-item" style="text-decoration: underline;">
				Log In
			</div>
			<div class="login" style="position: absolute; right: 15px; top: 5vh; padding: 0 15px; border: 1px solid white; width: 200px; text-align: left; color: white; display: none; background-color: rgba(0,0,0,0.2);">
				<form action="" method="POST">
					<h4 style="margin: 0; margin-top: 15px; text-align: center;">Log In</h4>
					<table cellpadding="2">
						<tr>
							<td style="width: 30px; vertical-align: bottom;">
								Username: 
							</td>
							<td style="width: 30px;">
								<input type="text" id="user" name="username" style="width: 90px;" />
							</td>
						</tr>
						<tr>
							<td style="width: 30px; vertical-align: bottom;">
								Password: 
							</td>
							<td>
								<input type="password" name="password" style="width: 90px;" />
							</td>
						</tr>
						<tr>
							<td colspan="2" style="text-align: center;">
								<input type="button" name="submit" value="Submit" style="margin-top: 5px; width: 40%;" /><br>
								<p style="font-size: 0.8em;">Or <a style="color: #c58550" href="/register">Register Here</a>.</p>
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
		<div id="home" class="content" style="position: absolute; top: 0; width: 100%; height: 100%; color: white;">
			<div class="home-cover2" style="width: 100%; height: 100%; position: absolute; z-index: 5; display: none; background-color: rgba(0,0,0,0.7);"></div>
			<img src="img/logo.png" style="width: 40%; margin-left: 30%; margin-top: 160px; text-align: center;"/>
			<div class="vid" style="position: absolute; top: 42vh; width: 100%; text-align: center;">
				<h3>Watch the Trailer</h3>
				<img id="play" src="img/NMS_Play.png" style="width: 70px; height: 70px;" />
			</div>
			<div class="video" style="position: absolute; top: 20vh; width: 100%; text-align: center; display: none;">
				<iframe class="YT" style="position: relative; z-index: 10; width: 50%;" src="https://www.youtube.com/embed/eBERVWYa-1Y" frameborder="0" allowfullscreen></iframe>
			</div>
			<div style="position: absolute; bottom: 3vh; width: 100%; text-align: center;">
				<p style="font-size: 0.9em">Click to Scroll Down</p>
				<img id="down" style="height: 5vh; width: 5vh;" src="img/down.png" />
			</div>
		</div>
		<div class="container" style="position: absolute; top: 100vh;">
			<div class="map" style="position: fixed; right: 0; padding: 0 15px; top: 30vh; z-index: 3; display: none; border: 1px dashed #000; border-right: 0;">
				<h3 style="text-align: center;">Map</h3>
				<div id="home" class="key">
					<img src="img/dot.png" style="height: 1em; width: 1em;"/><span style="padding-left: 5px; vertical-align: top;">Home</span>
				</div>
				<div id="description" class="key">
					<img src="img/dot.png" style="height: 1em; width: 1em;"/><span style="padding-left: 5px; vertical-align: top;">Description</span>
				</div>
				<div id="highlights" class="key">
					<img src="img/dot.png" style="height: 1em; width: 1em;"/><span style="padding-left: 5px; vertical-align: top;">Highlights</span>
				</div>
				<div id="twitch" class="key">
					<img src="img/dot.png" style="height: 1em; width: 1em;"/><span style="padding-left: 5px; vertical-align: top;">Twitch</span>
				</div>
			</div>
			<div id="description" class="content" style="background-color: white; position: relative; padding: 60px 20vw;">
				<h1>Welcome to No Man's Sky Universe!</h1><br>
				The No Man's Sky Universe website was created as a result of inspiration from the game creators itself. Conceived as a game about exploration 
				and discovery, No Man's Sky appeals the Minecrafty and FPS players alike, but its original and current design gives the most benefit to the 
				explorers of the infinite, procedurally-generated universe. With this in mind, this website was designed as a user-compiled gallery of the 
				most breathtaking views, obscure animal life, and intriguing interactions we players experience in No Man's Sky.<br><br>
				
				Among other things, users of the site will be able to upload their screenshots, describe their discoveries, and vote on a series of weekly 
				competitions: 1) Most Breathtaking View, 2) Most Interesting Life, 3) Most Hilarious Moment. Occasionally, a surprise poll will be created 
				for the enjoyment of the users as well. Please note that voting and uploading is limited to registered members only, and that anonymous users 
				have only the ability to view the uploads. But don't worry! Registration is easy and free! To learn more about how the website works, visit 
				the <a href="/about">About Page</a>. Thanks for visiting and enjoy your stay!<br><br><br>
			</div>
			<div id="highlights" class="content" style="background-color: #ddd; position: relative; text-align: center;">
				<div id="mbv" class="highlight" style="color: white; text-align: center; width: 100%; height: 33.3vh; margin: 0; position: relative; background-image: url(img/bg2.jpg); background-size: cover; background-attachment: fixed; background-repeat: no-repeat; background-position: center center;">
					<div class="cover" style="width: 100%; height: 33.3vh; position: absolute; top: 0; margin: 0; background-color: rgba(0,0,0,0.5);">
						<h1>Most Breathtaking View</h1><br><h4>Uploaded by Mo</h4>
					</div>
				</div>
				<div id="mil" class="highlight" style="color: white; text-align: center; width: 100%; height: 33.3vh; margin: 0; position: relative; background-image: url(img/bg3.jpg); background-size: cover; background-attachment: fixed; background-repeat: no-repeat; background-position: center center;">
					<div class="cover" style="width: 100%; height: 33.3vh; position: absolute; top: 0; margin: 0; background-color: rgba(0,0,0,0.5);">	
						<h1>Most Interesting Life</h1><br><h4>Uploaded by Joey454</h4>
					</div>
				</div>
				<div id="mhm" class="highlight" style="color: white; text-align: center; width: 100%; height: 33.3vh; margin: 0; position: relative; background-image: url(img/bg1.png); background-size: cover; background-attachment: fixed; background-repeat: no-repeat; background-position: center center;">
					<div class="cover" style="width: 100%; height: 33.3vh; position: absolute; top: 0; margin: 0; background-color: rgba(0,0,0,0.5);">
						<h1>Most Hilarious Moment</h1><br><h4>Uploaded by NMSWorld</h4>
					</div>
				</div>
			</div>
			<div id="twitch" class="content" style="background-color: white; position: relative; text-align: center; padding: 60px 10vw;">
				<h1>Twitch Stream: <span style="font-family: 'Trebuchet MS', Helvetica, sans-serif"><strong><?php echo $twitchurl; ?></strong></span></h1>
				<p style="font-size: 8pt;"><a href="/twitchstream">How is this determined?</a></p>
				<br>
				<?php
				if (strcmp($twitchurl, "") == 0) {
					echo 'There are currently no twitch streams available that are not marked for mature audiences. Visit the Twitch website to see other options.';
				} else {
					?>
					<p class="p-button" style="display: inline; text-decoration: underline;" onClick="toggleChat()">Open Stream Chat</p>&nbsp;&nbsp; | &nbsp;&nbsp;<a style="text-color: black;" target="_blank" href="https://www.twitch.tv/<?php echo $twitchurl; ?>">Watch on Twitch TV</a><br><br>
					<iframe class="t-vid"
						src="http://player.twitch.tv/?channel=<?php echo $twitchurl; ?>&!autoplay" 
						frameborder="0"
						scrolling="no"
						allowfullscreen="true"
						style="width: 100%; position: relative;">
					</iframe>
					<iframe class="t-chat"
						frameborder="0" 
						scrolling="yes" 
						id="chat_embed" 
						src="http://www.twitch.tv/<?php echo $twitchurl; ?>/chat"
						style="width: 34%; position: relative; display: none;">
					</iframe>
					<?php
				}
				?>
			</div>
			
			<div id="footer" class="content" style="background-color: #ccc; position: relative; text-align: center; padding: 60px 8vw;">
				<table cellpadding="5" style="width: 80%; margin-left: 10%;">
					<tr>
						<td rowspan="3" style="padding: 0; margin: 0;">
							<img src="img/nmsu.png" style="width: 70px; height: 70px;" />
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
			</div>
		</div>
		<script src="js/home.js"></script>
	</body>
</html>
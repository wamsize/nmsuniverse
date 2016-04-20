<?php

if (isset($_POST['submit'])) {
	
	$fullname = addslashes($_POST['fullname']);
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$bio = addslashes($_POST['bio']);
	$youtube = addslashes($_POST['youtube']);
	$twitch = addslashes($_POST['twitch']);
	$nms = addslashes($_POST['nms']);
	
	$sql = "SELECT * FROM users WHERE username = '$username'";
	$user_res = mysql_query($sql);
	
	$sql = "SELECT * FROM users WHERE email = '$email'";
	$email_res = mysql_query($sql);
	
	$sql = "SELECT * FROM users WHERE youtube = '$youtube'";
	$youtube_res = mysql_query($sql);
	
	$sql = "SELECT * FROM users WHERE twitch = '$twitch'";
	$twitch_res = mysql_query($sql);
	
	$sql = "SELECT * FROM users WHERE nms = '$nms'";
	$nms_res = mysql_query($sql);
	
	
	if (mysql_num_rows($user_res) > 0) {
		echo 'This username is already in use.';
	} else if (mysql_num_rows($email_res) > 0) {
		echo 'This email is already in use.';
	} else if (mysql_num_rows($youtube_res) > 0) {
		echo 'This YouTube is already in use.';
	} else if (mysql_num_rows($twitch_res) > 0) {
		echo 'This Twitch is already in use.';
	} else if (mysql_num_rows($nms_res) > 0) {
		echo 'This No Man\'s Sky account is already registered on this website.';
	} else {
		// no one else exists like
		
		if (empty($fullname) or empty($username) or empty($email) or empty($password)) {
			echo 'You failed to fill in a required field.';
		} else {
			// generate validation code
			
			$str = '';
			$keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			
			$length = 25;
			
			$max = mb_strlen($keyspace, '8bit') - 1;
			for ($i = 0; $i < $length; ++$i) {
				$str .= $keyspace[rand(0, $max)];
			}
			
			$sql = "INSERT INTO users (username, password, email, bio, name, twitch, youtube, nms, validate) VALUES ('$username', '$password', '$email', '$bio', '$fullname', '$twitch', '$youtube', '$nms', '$str')";
			$res = mysql_query($sql) or die('Noooo');
			
			//mail doesn't work until on an official host
			
			/*
			
			mail($email, "Registration with NMS UNIVERSE", 
			"Hi, " . $username . "!\n\n
			
			Welcome to NMS Universe! Please click <a href='localhost:8888/nmsuniverse/validate?str=" . $str . "'>Here</a> to validate your account and start using the site!\n\n
			
			Thanks for your time,\n\n
			
			The NMS Universe team			
			"
			, "From: no-reply@nmsuniverse.com");
			
			echo 'Registration successful! Please check your email.';
			
			*/
			
		}
		
	}
	
}

?>
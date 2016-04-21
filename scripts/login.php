<?php
session_start();
mysql_connect("localhost", "nomanssky", "wondering");
mysql_select_db("nms_users");

$user = $_GET['username'];
$pass = md5($_GET['pass']);

$sql = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
$result = mysql_query($sql);

$num = mysql_num_rows($result);

if ($num == 1) {
	// login
	$_SESSION['login'] = $user;
	echo '0';
} else {
	echo '-1';
}
?>
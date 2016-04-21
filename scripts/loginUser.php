<?php

$user = $_SESSION['login'];

$sql = "SELECT * FROM users WHERE username = '$user'";
$res = mysql_query($sql);

$me = mysql_fetch_array($res);

$id = $me['id'];

$sql = "SELECT * FROM notifications WHERE user = '$id'";
$res = mysql_query($sql);

$num_of_notifs = mysql_num_rows($res);

$notif = mysql_fetch_array($res);



?>
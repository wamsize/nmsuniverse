<?php

session_start();

if (isset($_SESSION['login'])) {
	unset($_SESSION['login']);
	header("Location: http://localhost:8888/nmsuniverse");
}

?>

<html>
	
	<head>
		<title>Logging Out...</title>
	</head>
	
	<body>
		
	</body>
	
</html>
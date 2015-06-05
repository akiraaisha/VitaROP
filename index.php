<?php
$vita_180 = strpos($_SERVER['HTTP_USER_AGENT'],"Vita 1.80");
$vita_181 = strpos($_SERVER['HTTP_USER_AGENT'],"Vita 1.81");

if ($vita_180 == true) { 
	header('Location: ./180/index.php');
}
elseif ($vita_181 == true) {
	header('Location: ./180/index.php');
}

if ($_GET['launch'] == "pkg-installer") {
	if ($vita_180 == true) {
		header('Location: ./180/pkg-installer.html');
	}
	elseif ($vita_181 == true) {
		header('Location: ./180/pkg-installer.html');
	}
}
if ($_GET['launch'] == "signup") {
	if ($vita_180 == true) {
		header('Location: ./180/signup.html');
	}
	elseif ($vita_181 == true) {
		header('Location: ./180/signup.html');
	}
}
?>
<html>
<style>
	body {
		color:white;
		background:black;
	}
</style>
<body>
<center>
<img src="./head.png"/>
<h1>
	Either you are not on a PSVita, or this firmware is not supported.<br/>
	This tool currently supports firmwares 1.80 & 1.81<br/>
</h1>
</center>
</body>
</html>
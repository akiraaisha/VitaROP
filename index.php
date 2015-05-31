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
	Either you are not on a PSVita, or this firmware is not yet supported.<br/>
	The WebKit exploit currently supports up to 3.18<br/>
	If your PSVita is on 3.18 or below and you are seeing this screen, it is likely that I have not made anything for your particular firmware.<br/>
	Contact <a href="https://twitter.com/SMOKE587">@SMOKE587</a> on Twitter for more details.
</h1>
</center>
</body>
</html>
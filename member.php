<?php 

session_start();


if($_SESSION['username'])
	echo "";
else
	header('location: login_fout.html');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Niveau</title>
<link rel="stylesheet" href="normalize.css" />
<link rel="stylesheet" href="style.css" />
<script src="inc/js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="inc/js/poll.js" type="text/javascript"></script>
</head>
<body>
<header>
<div id="header_text"><a href="index.html">Home</a><a> | </a> 
<a href="gameverslaving.html">Gameverslaving</a><a> | </a> 
<a href="robwijnberg.html">Rob Wijnberg</a><a> | </a> 
<a href="login.html">Login</a></div>
</header>


<section id="content">
<section id="shout">
<a id="logintekst"href="logout.php">Uitloggen</a></br></br>


<form method="post" id="form" action="shoutbox.php">
	<label for="message_box">Message</label></br>
	<textarea id="message_box" name="message" type="text" MAXLENGTH="255"></textarea>
	<input type="hidden" name="action" value="insert" /></br>
	<input id="send" type="submit" value="Shout" />
</form>
	<div id="container">
		
		<span class="clear"></span>
		<div class="content">
			<a>Bericht</a></br>
			<ul>
			<ul>
		</div>
	</div>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="shoutbox.js"></script>
</section>
</section>

<footer></footer>



</body>
</html>
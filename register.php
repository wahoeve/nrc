<?php


if (isset($_POST['username'] , $_POST['password'] , $_POST['passwordrepeat']))
{
	$connect = mysql_connect("localhost","root","");

	$username = mysql_real_escape_string (strip_tags ($_POST['username']));
	$password = mysql_real_escape_string (strip_tags ($_POST['password']));
	$passwordrepeat = mysql_real_escape_string (strip_tags ($_POST['passwordrepeat']));
	$date = date("Y-m-d");

	$password = md5($password);
	$passwordrepeat = md5($passwordrepeat);
	
	if($password == $passwordrepeat)
	{
		mysql_select_db("phplogin");
		$queryreg = mysql_query("INSERT INTO users VALUES('','$username','$password','$date') ");
		header('location: login.html');
	}
	else
		echo "Uw wachtwoorden komen niet overeen.";
	
	
	

}

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Niveau</title>
<link rel="stylesheet" href="normalize.css" />
<link rel="stylesheet" href="style.css" />
</head>
<header>
<div id="header_text"><a href="index.html">Home</a><a> | </a> 
<a href="gameverslaving.html">Gameverslaving</a><a> | </a> 
<a href="robwijnberg.html">Rob Wijnberg</a><a> | </a> 
<a href="login.html">Login</a></div>
</header>
<body>

<section id="content">
<section id="formulier2">
<form name="form1" method="POST" action="register.php">

<a id="logintekst">Registreren: </br></a></br></br>

<a id="logintekst">Naam</a></br>
<input name="username" type="text" id="username"></td></br></br>

<a id="logintekst">Wachtwoord:</a></br>
<input name="password" type="password" id="password"></td></br></br>

<a id="logintekst">Herhaal wachtwoord:</a></br>
<input name="passwordrepeat" type="password" id="passwordrepeat"></td></br></br>

<input type="submit" name="submit" value="Registreer"></td>
</section>

<footer></footer>



</body>
</html>
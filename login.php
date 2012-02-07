<?php

session_start();

$connect = mysql_connect("localhost","root","");
mysql_select_db("phplogin");

$username = mysql_real_escape_string( $_POST['username'] );
$password = mysql_real_escape_string( $_POST['password'] );


$query = mysql_query("SELECT * FROM users WHERE username='$username' AND password=MD5('$password')");

$numrows = mysql_num_rows($query);

if ( 1 !== $numrows )
{
	header('location: login_fout.html');
	die;
}

while ($row = mysql_fetch_assoc($query))
{
	$dbusername = $row['username'];
	$dbpassword = $row['password'];
}

$_SESSION['username'] = $dbusername;
header( 'Location: member.php' ) ;


<?php
ob_start();
$host="localhost";
$username="root";
$password="";
$db_name="members";
$tbl_name="members";

mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

$count=mysql_num_rows($result);

if($count==1){
session_register("myusername");
session_register("mypassword");
header("location:member.html");
}
else {
header("location:inlog_fout.html");
}

ob_end_flush();
?>
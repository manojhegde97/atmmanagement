<?php
require ('sql_connect.php');
if (isset($_POST['submit'])){
$username=mysql_escape_string($_POST['uname']);
$password=mysql_escape_string($_POST['pass']);
if(!$_POST['uname'] | !$_POST['pass'])
{
	echo("<script language='javascript'>
			window.alert('field empty')
			window.location.href='new 1.html'
			</script>");
	exit();
}
$sql= mysql_query("SELECT * FROM `login` WHERE `username` = '$username' AND `password` = '$password'");
if(mysql_num_rows($sql) > 0)
{
	echo("<script language='javascript'>
			window.alert('login success')
			window.location.href='edit.html'
			</script>");
	exit();
}
else
{
	echo("<script language='javascript'>
			window.alert('wrong u name r pass')
			window.location.href='new 1.html'
			</script>");
	exit();
}
}
?>

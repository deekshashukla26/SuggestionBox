<?php

require 'connect.php';

$query = 'select count(email) from user where email = "'.$_POST['uname'].'" and password = "'.md5($POST_['psw']).'"';
$find_dept = 'select department from user where email = "'.$_POST['uname'].'" and password = "'.md5($POST_['psw']).'"';
$flag = 0;
$count = mysql_query($query);
if($count == 1)
{
	session_start();
	$_SESSION['email'] = $_POST['uname'];
	$_SESSION['department'] = $dept;
	$flag = 1;
}
else
{
	header("home.html");
}

if($flag == 1)
{
	header(user_home.php);
}

?>
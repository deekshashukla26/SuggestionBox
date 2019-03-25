<?php

require 'connect.php';
require 'login.php';

$email = $_POST['uname'];
$psw = md5($_POST['psw']);

$query = 'select email from user where email = "'.$email.'" and password = "'.$psw.'"';
//echo $query;
$result = mysql_query($query);
$count = mysql_num_rows($result);

$find_dept = 'select * from user where email = "'.$email.'" and password = "'.$psw.'"';

$flag = 0;
//echo $find_dept;

if($count == 1)
{
	echo "password match";
	session_start();
	$_SESSION['email'] = $email;
	echo $find_dept;
	$result = mysql_query($find_dept);
	$d = mysql_fetch_assoc($result);
	$_SESSION['department'] = $d['department'];
	$flag = 1;
}

if($flag == 1)
{
	header('Location: user_home.php');
}
else
{
	echo "<script>alert('Incorrect details! Try again.')</script>";
	

}

?>
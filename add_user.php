<?php


require 'connect.php';

$email = $_POST['email'];
$dept = $_POST['dept'];
if($_POST['psw'] === $_POST['psw-repeat'])
{
	$password = md5($_POST['psw']);
}
else
{
	die("Passwords don't match.");
	header("signup.php");
}

$insert_query = 'insert into user(`email`, `department`, `password`) values("'.$email.'","'.$dept.'","'.$password.'")';
#echo $insert_query.'<br>';
mysql_query($insert_query);


?>
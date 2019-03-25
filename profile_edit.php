<?php

require "connect.php";
require "profile.php";
session_start();
$email = $_POST['email'];
$dept = $_POST['department'];

if($_SESSION['email'] !== $email)
{
	echo "<script>alert('Can't edit email.')</script>";
}
else if($_SESSION['department'] === $dept)
{
	echo "<script>alert('No Change Made.')</script>";
}
else
{
	$query = 'update `user` set `department` = "'.$dept.'" where `email` = "'.$email.'"';
	//echo $query;
	if(mysql_query($query))
	{
		echo "<script>alert('Successfully Updated.')</script>";
		$_SESSION['department'] = $dept;
		header("location:profile.php");
	}
	else
	{
		echo "<script>alert('Could not update.')</script>";
	}
}




?>
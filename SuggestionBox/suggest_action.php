<?php

require 'connect.php';
require 'suggestion.php';
session_start();
$abt = $_POST['about'];
$desc = $_POST['desc'];
$email = $_SESSION['email'];
$insert_query = 'INSERT INTO `suggestion`(`about`, `description`, `useremail`) VALUES ("'.$abt.'","'.$desc.'","'.$email.'")';

echo $insert_query."\n";

$result = mysql_query($insert_query);
if($result)
{
	header('Location: user_home.php');
}
else
{
	echo "<script>alert('Could not register! Try again.')</script>";
}

?>
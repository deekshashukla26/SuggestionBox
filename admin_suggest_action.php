<?php
require "connect.php";
require "admin_suggest.php";
session_start();

$act = $_POST['act'];
$desc = $_POST['desc'];
echo $act;
echo $desc;

$query = 'update `suggestion` set `action` = "'.$act.'" where `description` = "'.$desc.'"';
echo $query;
if(mysql_query($query))
{
	echo "<script>alert('Successfully Updated.')</script>";
	header("location:admin_suggest.php");
}
else
{
	echo "<script>alert('Could not update.')</script>";
}

?>
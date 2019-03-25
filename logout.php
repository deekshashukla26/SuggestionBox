<?php
session_start();
unset($_SESSION["email"]);
unset($_SESSION["department"]);
header("Location:index.php");
?>
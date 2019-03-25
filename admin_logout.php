<?php
session_start();
unset($_SESSION["mail"]);
unset($_SESSION["designation"]);
unset($_SESSION["name"]);

header("Location:admin_login.php");
?>
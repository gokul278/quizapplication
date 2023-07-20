<?php
session_start();
unset($_SESSION["userid"]);
unset($_SESSION["username"]);
unset($_SESSION["name"]);
unset($_SESSION["type"]);
header("location:index.php");
?>
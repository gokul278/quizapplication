<?php
session_start();

unset($_SESSION["topic"]);
header("location:facultypage.php");
?>
<?php
session_start();


$value = $_POST["buttonValue"];

$_SESSION["topic"] = $value;

echo "success";
?>
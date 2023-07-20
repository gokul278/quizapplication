<?php
session_start();

$quizname = $_POST["quizname"];
$staus = $_POST["status"];

if($quizname){
    $_SESSION["topic"] = $quizname;
    echo $staus;
}
?>
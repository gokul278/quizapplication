<?php
session_start();

include "../requiredfiles/dbconnection.php";

$questionid = $_POST["questionIds"];
$answers = $_POST["answers"];
$result = 0;
$userid = $_SESSION["userid"]."_answer";

foreach($answers as $key => $value){
    $sql = "UPDATE `questions_details` SET `{$userid}`='$value' WHERE id = '{$questionid[$key]}'";
    $res = $con->query($sql);
    $result++;
}



if($result>=1){
    $sql2 = "UPDATE `topics_details` SET `{$_SESSION["userid"]}`='yes' WHERE topic_name = '{$_SESSION["topic"]}'";
    $res2 = $con->query($sql2);
    echo "success";
}


?>
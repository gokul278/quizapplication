<?php

include "../requiredfiles/dbconnection.php";

$questions = $_POST["questions"];
$correctoptions = $_POST["correctoption"];
$quizname = $_POST["quizname"];
$optiona = $_POST["optiona"];
$optionb = $_POST["optionb"];
$optionc = $_POST["optionc"];
$optiond = $_POST["optiond"];

$questionsvalue = 0;
$correctoptionsvalue = 0;
if(isset($questions)){
    foreach($questions as $value){
        if(!$value == ""){
            $questionsvalue++;
        }
    }
}else{
    echo "Please Add the Quiz";
}

if(isset($correctoptions)){
    foreach($correctoptions as $value){
        if(!$value== ""){
            $correctoptionsvalue++;
        }
        
    }
}else{
    echo "Please Choose the Answer For All thw Quiz";
}


if($questionsvalue>=1){
    if(!($questionsvalue > $correctoptionsvalue)){
        if($questionsvalue>=1){
            foreach($questions as $key => $value){
                $sql = "INSERT INTO `questions_details`(`quiz_name`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `correct-option`) VALUES ('$quizname','$questions[$key]','$optiona[$key]','$optionb[$key]','$optionc[$key]','$optiond[$key]','$correctoptions[$key]')";
                $res = $con->query($sql);
            }
            $sql1 = "INSERT INTO `topics_details`(`topic_name`, `1001`, `1002`, `1003`) VALUES ('$quizname','no','no','no')";
            $res1 = $con->query($sql1);
        }else{
            echo "Please Add Atleast 5 Quiz";
        }
    }else{
        echo "Please Choose the Answer for all Question";
    }
}else{
    echo "Please fill the Question filed";
}
?>
<?php
    session_start();
    include "../requiredfiles/dbconnection.php";
    $username = $_POST["username"];
    $password = $_POST["password"];
    $logintype = $_POST["logintype"];

    $sql = "select * from login_details where username = '{$username}'";

    $res = $con->query($sql);

    foreach($res as $row){
        if($row["username"]){
            if($username == $row["username"]){
                echo "upass";
                if($logintype == $row["type"]){
                    echo "tpass";
                    $_SESSION["userid"] = $row["userid"];
                    $_SESSION["username"] = $row["username"];
                    $_SESSION["name"] = $row["name"];
                    $_SESSION["type"] = $row["type"];
                    $_SESSION["login"] = 1;
                }
            }else{
                echo false;
            }
        }else{
            echo false;
        }
    
        if($row["password"]){
            if($password == $row["password"]){
                echo "ppass";
            }
        }else{
            echo false;
        }

        if($row["type"]){
            echo $row["type"];
        }
    }
?>
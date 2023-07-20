<?php
session_start();
include("./requiredfiles/dbconnection.php");
if(isset($_SESSION["topic"])){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rewards For Quiz</title>
    <?php
    include("./requiredfiles/required.php")
    ?>
    <link rel="stylesheet" href="css/answerquiz.css">
</head>
<body>
    <div class="page">
        <div style="position: fixed; margin-left:10px">
            <a href="./questionchange.php" class="btn" style="background-color:#E8CCC7;color:#46496a"><i class="fa-solid fa-arrow-left"></i></a>
        </div>
        <div class="container mt-3 p-4">
            <div class="answerrow row p-4">
                <div class="col-12" align="center">
                    <h5><?php echo $_SESSION["topic"]?></h5>
                </div>
            </div>
            <div class="row p-4 mt-2" align="center">
                <div class="col-12 col-md-5 col-lg-4 " align="center">
                    <div class="p-3" style="background-color:#7D8BAE;border-radius:10px;font-size:20px">
                        Reward Ponits :

                    <?php
                    $sql = "SELECT * FROM `questions_details` WHERE quiz_name = '{$_SESSION["topic"]}'";
                    $res = $con->query($sql);

                    $totalmark = 0;
                    $correctmark = 0;

                    $userid = $_SESSION["userid"].'_answer';

                    foreach($res as $key => $value){
                        if($value[$userid] == $value[$value['correct-option']]){
                            $correctmark++;
                        }
                        $totalmark++;
                    }

                    echo '<b class="p-2" style="color:#46496a;background-color:#E8CCC7;border-radius:5px">'.$correctmark.'/'.$totalmark.'</b>';
                    ?>
                    </div>
                </div>
            </div>
            <?php
                $sql = "SELECT * FROM `questions_details` WHERE quiz_name = '{$_SESSION['topic']}'";
                $res = $con->query($sql);
                foreach($res as $key => $value){
                    $questionno = $key+1;
                    echo '<div class="answerrow row p-4 mt-4">
                            <div class="col-12" align="center">
                                <div class="row">
                                    <div class="col-12" align="start">
                                        <h6>'.$questionno.'.&nbsp;&nbsp;&nbsp;'.$value["question"];
                                        
                    echo '</h6>
                                    </div>
                                </div>
                                <div class="row mt-2" align="center">
                                    <div class="col-12" style="color: #46496a;">
                                        <b>Answer :</b> &nbsp;'.$value[$value["correct-option"]];
                    echo '</div>';

                    if($value[$value["correct-option"]] != $value[$userid]){
                        echo '<div class="col-12 mt-3" style="color: #F1B2B2;">
                            <b>Your Option :</b> &nbsp;'.$value[$userid].'<b style="color: #af0505">&nbsp;&nbsp;( Incorrect )</b></div>';
                    }else{
                        echo '<div class="col-12 mt-3" style="color: #F1B2B2;">
                            <b>Your Option :</b> &nbsp;'.$value[$userid].'<b style="color:green">&nbsp;&nbsp;( Correct )</b></div>';
                    }
                    

                     echo "</div>
                            </div>                
                        </div>";
                }
            ?>
        </div>  
    </div>
</body>
</html>

<?php
}else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rewards For Quiz</title>
    <?php
    include("./requiredfiles/required.php")
    ?>
    <link rel="stylesheet" href="css/facultypage.css">
</head>
<body>
<div class="page">
<div class="container-fluid">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4" style="margin-top:15%">
                <center>
                    <h1 style="color:black">Please Choose Quiz Again</h1>
                    <br>
                    <button onclick="logout()" class="btn btn-warning">BACK</button>
                </center>
            </div>
            <div class="col-lg-4"></div>
        </div>
    </div>
</div>
</body>
<script>
    logout = () =>{
            window.location.href = "./questionchange.php";
        }
</script>
</html>

<?php
}
?>
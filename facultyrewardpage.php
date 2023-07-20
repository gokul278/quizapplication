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
    include("./requiredfiles/required.php");
    ?>
    <link rel="stylesheet" href="css/answerquiz.css">
</head>
<body>
    <div class="page">
        <div style="position: fixed; margin-left:10px" >
            <a href="topicchange.php" class="btn" style="background-color:#E8CCC7;color:#46496a"><i class="fa-solid fa-arrow-left"></i></a>
        </div>
        <div class="container mt-3 p-3" align="center">
            <div class="answerrow row p-4">
                <div class="col-12" align="center">
                    <h5><?php echo $_SESSION["topic"]?></h5>
                </div>
            </div>
            <div class="col-8">
            <div class="row mt-4 mb-4" align="start">
                <!-- Button trigger modal -->
            <button type="button" value="<?php echo $_SESSION["topic"]?>" class="viewmark btn" style="background-color:#E8CCC7;color:#46496a" data-bs-toggle="modal" data-bs-target="#exampleModal">
            View Student Marks
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" >
                <div class="modal-content" style="background-color: #7D8BAE;border-radius:20px">
                <div class="modal-header" >
                    <h5 class="modal-title" id="exampleModalLabel" style="color:white">Student Marks</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color:#E8CCC7;color:#46496a"></button>
                </div>
                <div class="modal-body">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal" style="background-color:#E8CCC7;color:#46496a">Close</button>
                </div>
                </div>
            </div>
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
                                    <div class="col-12" style="color: #45496A;">
                                        <b>Answer :</b> &nbsp;'.$value[$value["correct-option"]];
                    echo '</div>
                                </div>
                            </div>                
                        </div>';
                }
            ?>
            
        </div>  
    </div>
</body>
<script src="./js/facultyrewardpage.js"></script>
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
            window.location.href = "./topicchange.php";
        }
</script>
</html>

<?php
}
?>
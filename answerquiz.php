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
    <title>Answer Quiz</title>
    <?php
    include("./requiredfiles/required.php")
    ?>
    <link rel="stylesheet" href="css/answerquiz.css">
</head>
<body>
    <div class="page">
        <div style="position: fixed; margin-left:10px">
            <a onclick="questionchange()" class="btn" style="background-color:#E8CCC7;color:#46496a"><i class="fa-solid fa-arrow-left"></i></a>
        </div>
        <div class="container mt-3">
            <div class="answerrow row p-4">
                <div class="col-12" align="center">
                    <h5><?php echo $_SESSION["topic"]?></h5>
                </div>
            </div>
            <form id="frm">
            <?php
            $sql = "SELECT * FROM `questions_details` WHERE quiz_name = '{$_SESSION['topic']}'";
            $res = $con ->query($sql);
            $questionno =0;
            foreach($res as $value){
                $questionno++;
                echo '<div class="answerrow row p-4 mt-4">
                <div class="col-12" align="center" >
                    <div class="row">
                        <div class="col-12" align="start">
                            <h6>'.$questionno.'.&nbsp;&nbsp;'.$value["question"].'</h6>
                        </div>
                    </div>
                    <div class="row mt-2" align="center" style="color: #46496a">
                        <div class="col-6">
                            <input class="form-check-input" questionid="'.$value["id"].'" name="answer'.$questionno.'" type="radio" value="'.$value["option_a"].'" id="quiz'.$questionno.'optiona">
                            &nbsp;
                            <label class="form-check-label" for="quiz'.$questionno.'optiona">
                              '.$value["option_a"].'
                            </label>
                        </div>
                        <div class="col-6">
                            <input class="form-check-input" questionid="'.$value["id"].'" name= "answer'.$questionno.'" type="radio" value="'.$value["option_b"].'" id="quiz'.$questionno.'optionb">
                            &nbsp;
                            <label class="form-check-label" for="quiz'.$questionno.'optionb">
                            '.$value["option_b"].'
                            </label>
                        </div>
                    </div>
                    <div class="row mt-2" align="center" style="color: #46496a">
                        <div class="col-6">
                            <input class="form-check-input" questionid="'.$value["id"].'" name = "answer'.$questionno.'" type="radio" value="'.$value["option_c"].'" id="quiz'.$questionno.'optionc">
                            &nbsp;
                            <label class="form-check-label" for="quiz'.$questionno.'optionc">
                            '.$value["option_c"].'
                            </label>
                        </div>
                        <div class="col-6">
                            <input class="form-check-input" questionid="'.$value["id"].'" name = "answer'.$questionno.'" type="radio" value="'.$value["option_d"].'" id="quiz'.$questionno.'optiond">
                            &nbsp;
                            <label class="form-check-label" for="quiz'.$questionno.'optiond">
                            '.$value["option_d"].'
                            </label>
                        </div>
                    </div>
                </div>
            </div>';
            } 
            echo "<input id='totalvalue' type='hidden' value='$questionno'>"
            ?>
            
        <div class="row mt-5" align="end">
            <div class="col-12">
                <button type="submit" class="btn btn-success mb-5" style="background-color:#E8CCC7;color:#46496a">Submit</button>
            </div>
        </div>
        </form>
    </div>  
    </div>
</body>
<script src="./js/answerquiz.js"></script>
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
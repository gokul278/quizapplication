<?php
session_start();

if(isset($_SESSION["userid"]) && $_SESSION["type"] == "faculty" ){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Quiz</title>
    <?php
    include("./requiredfiles/required.php")
    ?>
    <link rel="stylesheet" href="css/createquiz.css">
</head>
<body>
    <div class="page">
        <div class="navbarbc">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" style="display: flex;"><div style="font-weight: 600;">Welcome !</div>&nbsp;&nbsp;<div style="color:black;background-color:White;padding-left:2px;padding-right:4px;border-radius:5px">&nbsp;<?php echo $_SESSION["name"]?>&nbsp;</div></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav" align="center">
                    <ul class="navbar-nav">
                        <li class="nav-item mt-3 mt-lg-0 p-1">
                        <a class="nav-link active" href="facultypage.php" style="color:white;font-weight:400"><i class="fa-solid fa-house"></i>&nbsp;Home</a>
                        </li>
                        &nbsp;
                        <li class="nav-item mt-lg-0 p-1" style="background-color:black;border-radius:100px">
                        <a class="nav-link active" href="createquiz.php" style="color:White;"><i class="fa-solid fa-plus"></i>&nbsp;Create Quiz&nbsp;</a>
                        </li>
                        &nbsp;
                        <li class="nav-item mt-lg-1" p-1>
                        <a class="nav-link active" onclick="logout()" style="color:white;cursor:pointer"><i class="fa-solid fa-arrow-right-from-bracket"></i>&nbsp;Logout</a>
                        </li>
                    </ul>
                    </div>
                </div>
                </nav>
        </div>
        <div class="add pt-5">
            <div class="pt-5"><button type="button" class="btn " style="background-color:#E8CCC7;color:#46496a"><i class="fa-solid fa-plus"></i></button></div>
        </div>
        <form id="frm">
            <div class="container pt-5 pb-5">
                <div class="allquestions pt-5 mb-4">
                    <div class="noquiz">
                        <div class="row questions p-4" align="center">
                            <!-- <div class="col-12">Add Questions</div> -->
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6 col-12">
                                <div class="input-group">
                                    <span class="input-group-text" >Name</span>
                                    <input type="text" class="form-control" id="quizname" name="quizname" placeholder="Enter the Name of Quiz" aria-describedby="quizname">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container pb-5">
                <div class="row">
                    <div class="col-12" align="end">
                        <button type="submit" class="btn btn-success" style="background-color:#E8CCC7;color:#46496a">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
<script src="./js/createquiz.js"></script>
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
    <title>Faculty</title>
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
                    <h1 style="color:black">Error Accquired</h1>
                    <h2 style="color:black">Try again to Login</h2>
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
            window.location.href = "logout.php";
        }
</script>
</html>
<?php
}
?>
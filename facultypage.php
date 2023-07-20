<?php
session_start();

include "./requiredfiles/dbconnection.php";

if(isset($_SESSION["userid"]) && $_SESSION["type"] == "faculty"){
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
        <div class="navbarbc">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" style="display: flex;"><div style="font-weight: 600;color:white">Welcome !</div>&nbsp;&nbsp;<div style="color:black;background-color:white;padding-left:2px;padding-right:4px;border-radius:5px">&nbsp;<?php echo $_SESSION["name"]?>&nbsp;</div></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav" align="center">
                    <ul class="navbar-nav">
                      <li class="nav-item mt-3 mt-lg-0 p-1" style="background-color:black;border-radius:100px">
                        <a class="nav-link active" href="facultypage.php" style="color:white;font-weight:500">&nbsp;<i class="fa-solid fa-house"></i>&nbsp;Home&nbsp;</a>
                      </li>
                      &nbsp;
                      <li class="nav-item mt-lg-0 p-1">
                        <a class="nav-link active" href="createquiz.php" style="color:white;"><i class="fa-solid fa-plus"></i>&nbsp;Create Quiz</a>
                      </li>
                      &nbsp;
                      <li class="nav-item  mt-lg-0 p-1">
                        <a class="nav-link active" onclick="logout()"  style="color:white;cursor:pointer"><i class="fa-solid fa-arrow-right-from-bracket"></i>&nbsp;Logout</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </div>        
        <div class="pagebody pt-5">
          <div class="cards pt-5">
            <!-- <div class="card"> -->
                <?php
                $sql = "SELECT * FROM `topics_details`";
                $res = $con->query($sql);
              
                foreach($res as $value){
                  echo "<div class='card'><p class='tip'>{$value['topic_name']}</p><button value='{$value['topic_name']}' class='viewbtn second-text btn' style='background-color:white'><i class='fa-solid fa-eye'></i>&nbsp; view</button></div>";
                }
                ?>
                <!-- <p class="tip"></p>
                <button class="second-text btn btn-warning"><i class="fa-solid fa-eye"></i>&nbsp; view</button> -->
            <!-- </div> -->
          </div>
        </div>
        
    </div>
</body>
<?php
if($_SESSION["login"] == 1){
?>
<script>

    new Notify ({
        status: 'success',
        title: 'Success',
        text: 'Logged in Successfully',
        effect: 'fade',
        speed: 300,
        customClass: '',
        customIcon: '',
        showIcon: true,
        showCloseButton: true,
        autoclose: true,
        autotimeout: 3000,
        gap: 20,
        distance: 20,
        type: 1,
        position: 'right bottom',
        customWrapper: '',
      })
</script>
<?php
$_SESSION["login"] = 0;
  }
?>
<script src="./js/facultypage.js"></script>
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
  function logout(){
    location.replace("logout.php")
  }
</script>
</html>
<?php
}
?>
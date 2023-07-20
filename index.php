<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php
    include "./requiredfiles/required.php";
    ?>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

    <div class="login">
        <div class="container-fluid">
            <div class="row" style="justify-content:center">
                <div class="col-lg-6 col-md-12 mt-3 mt-lg-5 title">
                    <div class="col-12 mt-lg-5" style="color: white;" >
                        <h1 style="font-size: 70px;font-weight:700">Create Your Quiz</h1>
                        <h5 style="font-size:30px;font-weight:400;line-height: 40px; ">Our quiz management application provides a user-friendly interface for creating and managing quizzes.</h5>
                    </div>
                </div>
                <div class="col-lg-5 col-md-8 mt-5 col-11 mb-5 loginpanel">
                    <div class="row mt-lg-5 mt-md-5 mt-sm-5 mt-5">
                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-1"></div>
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-10" align="center">
                            <div class="mt-lg-5 mt-md-5 mb-lg-2 mb-md-2 mt-5 mb-2">
                                <div class="row" align="center">
                                    <div class="col-2 mt-2" style="font-size: 35px;">
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                    <div class="col-9 col-sm-10">
                                        <div  <div class="mt-lg-2 mt-md-2 mb-lg-2 mb-md-2 mt-sm-2 mb-sm-2 mt-2 mb-2">
                                            <div class="form__group">
                                                <input type="text" class="form__input" id="username" placeholder="Username" required="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="col-11" id="errormessageuser">
                                
                            </p>
                            <div class="row" align="center">
                                <div class="col-2 mt-2" style="font-size: 35px;">
                                    <div class="mt-lg-2 mt-md-2 mb-lg-2 mb-md-2 mt-sm-2 mb-sm-2 mt-2 mb-2">
                                        <i class="fa-solid fa-key"></i>
                                    </div>
                                </div>
                                <div class="col-9 col-sm-10">
                                    <div class="mt-lg-2 mt-md-2 mb-lg-2 mb-md-2 mt-sm-2 mb-sm-2 mt-2 mb-2">
                                        <div class="form__group">
                                            <input type="password" class="form__input" id="password" placeholder="Password" required="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="col-11" id="errormessagepass">
                                
                            </p>
                            
                            <div class="mt-lg-4 mt-md-4 mb-lg-2 mb-md-2 mt-sm-4 mb-sm-2 mt-4 mb-2">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                        <input class="form-check-input" name="type" type="radio" id="student" checked>
                                        <label class="form-check-label" for="student">
                                           &nbsp;Student
                                        </label>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" style="align-content: center;">
                                        <input class="form-check-input" type="radio" name="type" id="faculty">
                                        <label class="form-check-label " for="faculty">
                                            &nbsp;Faculty
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1"></div>
                            <div class="col-10" align="center">
                            <div class="mt-lg-5 mt-md-5 mb-lg-2 mb-md-2 mt-sm-5 mb-sm-2 mt-5 mb-2">
                                <button class="btn mb-lg-5 mb-md-5 mb-sm-5 mb-5 p-3 loginbtn" style="background-color: #E45F2B; width:100%;font-size:20px;border-radius:100px;border:transparent">
                                    <i class="fa-sharp fa-solid fa-arrow-right-to-bracket"></i>&nbsp;&nbsp;&nbsp;Login
                                </button>
                            </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
if($_SESSION["login"] == 0){
?>
<script>
    console.log("helsa");
    new Notify ({
        status: 'error',
        title: 'Success',
        text: 'Logged out Successfully',
        effect: 'fade',
        speed: 300,
        customClass: '',
        customIcon: '<i class="fa-solid fa-right-from-bracket"></i>',
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
$_SESSION["login"] = 1;
  }
?>
<script src="./js/login.js"></script>
</html>
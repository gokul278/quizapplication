$(".loginbtn").click(()=>{
    var username = $("#username").val();
    var password = $("#password").val();
    var logintype;
    var count = 0;

    if(username){
        if(username.length>=8 && username.length<=12){
            if(/^[A-Za-z0-9]*$/.test(username)){
                count++
            }else{
                $("#errormessageuser").html("Please enter valid username");
                $("#errormessageuser").addClass("errormessage")
            }
        }else{
            $("#errormessageuser").html("Please enter valid username");
            $("#errormessageuser").addClass("errormessage")
        }
    }
    else{
        $("#errormessageuser").html("Please enter the username");
        $("#errormessageuser").addClass("errormessage")
    }

    if(password){
        if(password.length>=8){
            count++
        }else{
            $("#errormessagepass").html("Please enter the valid passowrd");
            $("#errormessagepass").addClass("errormessage")
        }
    }else{
        $("#errormessagepass").html("Please enter the passowrd");
        $("#errormessagepass").addClass("errormessage")
    }

    $("#username").click(()=>{
        $("#errormessageuser").html("")
        $("#errormessageuser").removeClass("errormessage")
    })

    $("#password").click(()=>{
        $("#errormessagepass").html("")
        $("#errormessagepass").removeClass("errormessage")
    })

    if($("#student").is(':checked')){
        logintype = "student"
    }else{
        logintype = "faculty"
    }

    if(count == 2){
        $.ajax({
            url: "./ajax/loginajax.php",
            type: "POST",
            data: {"username":username,"password":password,"logintype":logintype},
            success:(res)=>{
                console.log(res)
                if(res == "upasstpassppassstudent"){
                    location.replace("studentpage.php");
                }else if(res == "upasstpassppassfaculty"){
                    location.replace("facultypage.php");
                }else if(res == "upassppassstudent" || res == "upassstudent"){
                    $("#errormessagepass").html("Please Choose Student login");
                    $("#errormessagepass").addClass("errormessage")
                }else if(res == "upassppassfaculty" || res == "upassfaculty"){
                    $("#errormessagepass").html("Please Choose Faculty login");
                    $("#errormessagepass").addClass("errormessage")
                }else if(res == "upasstpassstudent"){
                    $("#errormessagepass").html("Incorrect Password");
                    $("#errormessagepass").addClass("errormessage")
                }else if(res == "upasstpassfaculty"){
                    $("#errormessagepass").html("Incorrect Password");
                    $("#errormessagepass").addClass("errormessage")
                }else{
                    $("#errormessageuser").html("Incorrect Username");
                    $("#errormessageuser").addClass("errormessage")
                    $("#errormessagepass").html("Incorrect Password");
                    $("#errormessagepass").addClass("errormessage")
                }
            }
        })
    }
    
})
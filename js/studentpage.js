$(".viewbtn").click(function (){
    var quizname = $(this).attr('value');
    var status = $(this).attr('status');
    $.ajax({
        url: "./ajax/studentpageajax.php",
        type: "POST",
        data: {"quizname": quizname,"status": status},
        success: (res)=>{
            if(res == "no"){
                location.replace("answerquiz.php");
            }else if(res == "yes"){
                location.replace("studentrewardpage.php");
            }
        }
    })
})

function logout(){
    Swal.fire({
        title: 'Are you sure?',
        text: "Logout !",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, Exit !'
      }).then((result) => {
        if (result.isConfirmed) {
          location.replace("logout.php")
        }
      })
}


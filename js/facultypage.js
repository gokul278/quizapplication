
$('.viewbtn').click(function() {
    var buttonValue = $(this).attr('value');
    $.ajax({
        url: "./ajax/facultypageajax.php",
        type: "POST",
        data: {"buttonValue" : buttonValue},
        success: (res) =>{
            if(res == "success"){
                location.replace("./facultyrewardpage.php")
            }
        }
    })
});

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
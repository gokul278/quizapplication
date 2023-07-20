$("#frm").submit((event)=>{
    event.preventDefault();
    var form = $('#frm')[0];
    var formData = new FormData(form);
    var totalquestion = $("#totalvalue").val();
    var answers = [];
    var questionIds = [];
    for( var i = 1;i<=totalquestion;i++){
        if(formData.get("answer"+i)){
            answers.push(formData.get("answer"+i))
            var questionId = $('input[name="answer' + i + '"]').attr('questionid');
            questionIds.push(questionId);
        }
    }

    if(totalquestion == answers.length){
        $.ajax({
            url: "./ajax/answerquizajax.php",
            type: "POST",
            data: {"answers":answers,"questionIds": questionIds},
            success:(res)=>{
                console.log(res);
                if(res == "success"){
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Done !',
                        confirmButtonColor: '#198754',
                        confirmButtonText: 'Completed&nbsp;&nbsp;<i class="fa-solid fa-face-laugh-wink"></i>'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.replace("questionchange.php")
                        }
                      })
                   
                }
            }
        })
    }else{
        //alert("Answer all the Questions")
        new Notify ({
            status: 'error',
            title: 'Error',
            text: 'Answer all the Questions',
            effect: 'fade',
            speed: 300,
            customClass: '',
            customIcon: '<i class="fa-sharp fa-solid fa-circle-xmark"></i>',
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
    }
    
})

function questionchange(){
    Swal.fire({
        title: 'Are you sure?',
        text: "Exit the Test",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, I Exit!'
      }).then((result) => {
        if (result.isConfirmed) {
          location.replace("questionchange.php")
        }
      })
}
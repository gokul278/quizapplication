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

var questionid = 0;
    $(".add").click(()=>{
        questionid++;
        $(".allquestions").append("\
        <div class='row questions questionno"+questionid+" mt-3 p-3'>\
            <div class='col-12' align='center'>\
                <div class='row mt-3' align='center'>\
                    <div class='col-1 mt-3'>\
                        <h5><b>"+questionid+".</b></h5>\
                    </div>\
                    <div class='col-10 questioninputtext'>\
                        <textarea class='form-control .questions' name='questions[]' aria-label='With textarea' placeholder='Enter the Question'></textarea>\
                    </div>\
                    <div class='col-1 mt-2'>\
                        <button class='btn btn-danger deletebtn' style='background-color:#E45F2B' value='questionno"+questionid+"'><i class='fa-sharp fa-solid fa-trash'></i></button>\
                    </div>\
                </div>\
                <div class='row mt-3'>\
                    <div class='col-6'>\
                        <div class='row'>\
                            <div class='col-1'>a)</div>\
                            <div class='col-10'>\
                                <textarea class='form-control' name='optiona[]' aria-label='With textarea'></textarea>\
                            </div>\
                        </div>\
                    </div>\
                    <div class='col-6'>\
                        <div class='row'>\
                            <div class='col-1'>b)</div>\
                            <div class='col-10'>\
                                <textarea class='form-control' name='optionb[]' aria-label='With textarea'></textarea>\
                            </div>\
                        </div>\
                    </div>\
                </div>\
                <div class='row mt-3'>\
                    <div class='col-6'>\
                        <div class='row'>\
                            <div class='col-1'>c)</div>\
                            <div class='col-10'>\
                                <textarea class='form-control' name='optionc[]' aria-label='With textarea'></textarea>\
                            </div>\
                        </div>\
                    </div>\
                    <div class='col-6'>\
                        <div class='row'>\
                            <div class='col-1'>d)</div>\
                            <div class='col-10'>\
                                <textarea class='form-control' name='optiond[]' aria-label='With textarea'></textarea>\
                            </div>\
                        </div>\
                    </div>\
                </div>\
                <div class='row mb-2'>\
                    <div class='col-6 mt-4' align='end'>\
                        Choose a Correct answer\
                    </div>\
                    <div class='col-6 mt-3' align='start'>\
                        <select class='form-select' aria-label='Default select example' name='correctoption[]'>\
                            <option value='' selected>Choose</option>\
                            <option value='option_a'>A option</option>\
                            <option value='option_b'>B option</option>\
                            <option value='option_c'>C option</option>\
                            <option value='option_d'>D option</option>\
                        </select>\
                    </div>\
                </div>\
            </div>\
        </div>")
    })

    $(".allquestions").on("click", ".deletebtn", function(event) {
        var questionNo = $(this).val();
        $("."+questionNo).remove();
    });

    


    $("#frm").submit((event)=>{
        event.preventDefault();
        var quizname = $("#quizname").val()
        if(quizname){
            if(quizname.length<=60){
                var form = $('#frm')[0];
                var formData = new FormData(form);

                $.ajax({
                    url: "./ajax/createquizajax.php",
                    type: "POST",
                    data :formData,
                    processData: false,
                    contentType: false,
                    cache:false,  
                    success:function(res){
                        console.log(res);
                        if(res == "Please Add Atleast 5 Quiz"){
                            new Notify ({
                                status: 'error',
                                title: 'Error',
                                text: 'Please Add Atleast 5 Quiz',
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
                            //alert("Please Add Atleast 5 Quiz");
                        }else if(res == "Please fill the Question filed"){
                            new Notify ({
                                status: 'error',
                                title: 'Error',
                                text: 'Please fill the Question filed',
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
                            //alert("Please fill the Question filed")
                        }else if(res == "Please Choose the Answer For All the Quiz"){
                            new Notify ({
                                status: 'error',
                                title: 'Error',
                                text: 'Please Choose the Answer For All the Quiz',
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
                            //alert("Please Choose the Answer For All the Quiz")
                        }else if(res == "Please Choose the Answer for all Question"){
                            new Notify ({
                                status: 'error',
                                title: 'Error',
                                text: 'Please Choose the Answer for all Question',
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
                            //alert("Please Choose the Answer for all Question")
                        }else if(res == ""){
                            //alert("Submitted")
                            Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Done !',
                                confirmButtonColor: '#198754',
                                confirmButtonText: 'Created&nbsp;&nbsp;<i class="fa-solid fa-face-laugh-wink"></i>'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.replace("facultypage.php")
                                }
                              })
                        }else{
                            new Notify ({
                                status: 'error',
                                title: 'Error',
                                text: 'Add a Question',
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
                    }
                })
            }else{
                new Notify ({
                    status: 'error',
                    title: 'Error',
                    text: 'Enter the Name of the quiz between 50 letters',
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
                //alert("Enter the Name of the quiz between 50 letters")
            }
        }else{
            new Notify ({
                status: 'error',
                title: 'Error',
                text: 'Enter the Name of the quiz',
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
            //alert("Enter the Name of the quiz")
        }
        
    })


    
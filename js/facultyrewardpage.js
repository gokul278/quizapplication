$(".viewmark").click(()=>{
    $(".modal-body").empty();
    var topic = $(".viewmark").val();
    $.ajax({
        url: "./ajax/facultyrewardpageajax.php",
        type: "POST",
        data: {"topic":topic},
        success: (res)=>{
            console.log(res);
            $(".modal-body").append(res);
        }
    })
})
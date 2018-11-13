function enviarEmail(nombre,tema,email,mensaje){

    var parametros ={
        "nombre" : nombre,
        "tema" : tema,
        "email" : email,
        "mensaje" : mensaje
    };



    $.ajax({
       url: "./send-mail.php",
       type: "post",
       data: parametros,
       success: function(data){
           $("#alerta-correo").show();
           $('#contact-form').trigger("reset");
           console.log(data);
       }

    });


}



/*
$(document).ready(function (e) {
    $("#contact-form").on('submit', function (e) {
        e.preventDefault();
        $.ajax({
            url: './send-cv.php',
            type: 'POST',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                $("#alerta-correo").show();
                $('#contact-form').trigger("reset");
            },
            error: function () {
            }
        });
    });

});

*/











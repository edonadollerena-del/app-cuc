const music = new Audio('tecla.mp3');

let usuarioexiste = localStorage.getItem("usuariocuenta");
let passwordexiste = localStorage.getItem("clavecuenta");

$(document).ready(function(){

    escribir("JS CARGADO");

    $("#btn_p").click(function(e){

        e.preventDefault();

        music.play();

        // VALIDAR GPS
        if(navigator.geolocation){

            navigator.geolocation.getCurrentPosition(

                function(position){

                    let latitud  = position.coords.latitude;
                    let longitud = position.coords.longitude;

                    console.log("LATITUD:", latitud);
                    console.log("LONGITUD:", longitud);

                    enviarAlerta(latitud, longitud);

                },

                function(error){

                    console.log("ERROR GPS:", error);

                    alert("No se pudo obtener la ubicación");

                }

            );

        }else{

            alert("Tu navegador no soporta GPS");
        }


    });

});

/* ====================================== */
/* FUNCION ENVIAR ALERTA */
/* ====================================== */

function enviarAlerta(latitud, longitud){

    escribir("ENVIANDO ALERTA...");

    $.ajax({

        url:"bd/login.php",

        type:"POST",

        data:{

            usuario:usuarioexiste,
            password:passwordexiste,
            latitud:latitud,
            longitud:longitud

        },

        success:function(respuesta){

            escribir("AJAX OK");

            escribir(respuesta);

            // ANIMACION BOTON
            $("#btn_p")
            .css("background","#28a745");

            setTimeout(function(){

                $("#btn_p")
                .css("background","#ff1a1a");

            },2000);

        },

        error:function(xhr,status,error){

            escribir("ERROR AJAX");

            escribir(xhr.responseText);

        }

    });

}

/* ====================================== */
/* FUNCION DEBUG */
/* ====================================== */

function escribir(texto){

    console.log(texto);

    $("#debug").append(texto + "<br>");

}
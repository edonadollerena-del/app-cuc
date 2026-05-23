const music = new Audio('tecla.mp3');

let usuarioexiste = localStorage.getItem("usuariocuenta");
let passwordexiste = localStorage.getItem("clavecuenta");

$(document).ready(function(){

    console.log("comando_asalto.js cargado");

    $("#btn_p").on("click", function(e){

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

    $.ajax({

        url:"bd/login.php",

        type:"POST",

        dataType:"json",

        data:{

            usuario:usuarioexiste,
            password:passwordexiste,
            latitud:latitud,
            longitud:longitud
        },

        success:function(respuesta){

            console.log("RESPUESTA:", respuesta);

        },

        error:function(xhr,status,error){

            console.log("ERROR AJAX");

            console.log(xhr.responseText);

        }

    });

}
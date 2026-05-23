const music = new Audio('tecla.mp3');

let usuarioexiste = localStorage.getItem("usuariocuenta");
let passwordexiste = localStorage.getItem("clavecuenta");

$(document).ready(function(){

    escribir("JS CARGADO");

    $("#btn_p").click(function(e){

        e.preventDefault();

        escribir("BOTON PRESIONADO");

        music.play();

        // VARIABLES DE PRUEBA
        // DESPUES LAS CAMBIAS POR GPS REAL
        let latitud = 10;
        let longitud = 20;

        escribir("LATITUD => " + latitud);
        escribir("LONGITUD => " + longitud);

        // MOSTRAR EN HTML
        $("#latitud_texto").html(latitud);
        $("#longitud_texto").html(longitud);

        enviarAlerta(latitud, longitud);

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
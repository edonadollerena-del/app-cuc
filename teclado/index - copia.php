<!doctype html>
<html lang="es">

<head>

    <!-- META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title>APP BOTÓN EMERGENCIA</title>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- FONT AWESOME -->
    <link rel="stylesheet"
          href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap"
          rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{

            font-family:'Poppins',sans-serif;

            background:
            linear-gradient(
            135deg,
            #0f172a,
            #1e3a8a,
            #2563eb
            );

            min-height:100vh;

            display:flex;
            justify-content:center;
            align-items:center;

            overflow:hidden;
        }

        /* CONTENEDOR */

        .main-container{

            width:90%;
            max-width:550px;

            padding:40px;

            border-radius:30px;

            background:rgba(255,255,255,0.08);

            backdrop-filter:blur(10px);

            border:1px solid rgba(255,255,255,0.2);

            box-shadow:0 8px 32px rgba(0,0,0,0.35);

            text-align:center;
        }

        /* TITULOS */

        .title{

            color:white;

            font-size:40px;

            font-weight:700;

            margin-bottom:15px;
        }

        .subtitle{

            color:#e2e8f0;

            font-size:22px;

            font-weight:600;

            margin-bottom:10px;
        }

        .barrio{

            color:#ffffff;

            font-size:28px;

            font-weight:700;

            margin-bottom:50px;
        }

        /* BOTON */

        #btn_p{

            width:280px;
            height:280px;

            border-radius:50%;

            border:none;

            cursor:pointer;

            color:white;

            font-size:32px;

            font-weight:700;

            background:
            radial-gradient(circle at top,
            #ff4d4d,
            #cc0000);

            box-shadow:
            0 0 0 0 rgba(255,0,0,0.7),
            0 15px 35px rgba(0,0,0,0.4);

            transition:all 0.3s ease;

            animation:pulse 1.5s infinite;
        }

        #btn_p:hover{

            transform:scale(1.05);
        }

        #btn_p:active{

            transform:scale(0.95);
        }

        @keyframes pulse{

            0%{

                box-shadow:
                0 0 0 0 rgba(255,0,0,0.7);
            }

            70%{

                box-shadow:
                0 0 0 45px rgba(255,0,0,0);
            }

            100%{

                box-shadow:
                0 0 0 0 rgba(255,0,0,0);
            }
        }

        .icon-alert{

            font-size:70px;

            margin-bottom:15px;

            display:block;
        }

        .footer-text{

            margin-top:40px;

            color:#dbeafe;

            font-size:15px;
        }

        @media(max-width:768px){

            .title{

                font-size:28px;
            }

            .subtitle{

                font-size:18px;
            }

            .barrio{

                font-size:22px;
            }

            #btn_p{

                width:220px;
                height:220px;

                font-size:24px;
            }

            .icon-alert{

                font-size:55px;
            }
        }

    </style>

</head>

<body>

<form class="main-container"
      id="formTeclado"
      action=""
      method="post">

    <h1 class="title">
        APP BOTÓN DE EMERGENCIA
    </h1>

    <h2 class="subtitle">
        FRENTE DE SEGURIDAD
    </h2>

    <h3 class="barrio">
        Barrio El Silencio
    </h3>

    <!-- BOTON -->

    <button type="button"
            id="btn_p"
            class="btn btn-danger">

        <span class="icon-alert">
            <i class="fas fa-exclamation-triangle"></i>
        </span>

        BOTÓN<br>DE PÁNICO

    </button>

    <div class="footer-text">
        Sistema inteligente de alertas comunitarias
    </div>

</form>

<!-- JQUERY -->
<script src="jquery/jquery-3.3.1.min.js"></script>

<!-- POPPER -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- BOOTSTRAP -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<!-- ====================================== -->
<!-- ARCHIVO ORIGINAL -->
<!-- ====================================== -->

<script src="comando_asalto.js"></script>

<!-- ====================================== -->
<!-- EFECTOS VISUALES -->
<!-- ====================================== -->

<script>

$(document).ready(function(){

    $("#btn_p").on("click", function(){

        let boton = $(this);

        // DESACTIVAR MIENTRAS ENVIA
        boton.prop("disabled", true);

        // CAMBIO A VERDE
        boton.removeClass("btn-danger");
        boton.addClass("btn-success");

        // EFECTOS VISUALES
        boton.css({

            "transform":"scale(0.93)",

            "box-shadow":"0 0 80px rgba(0,255,0,0.9)",

            "transition":"all 0.3s ease",

            "background":
            "radial-gradient(circle at top,#22c55e,#15803d)"
        });

        // CAMBIO TEXTO
        boton.html(`

            <span class="icon-alert">
                <i class="fas fa-check-circle"></i>
            </span>

            ALERTA<br>ENVIADA

        `);

        // RESTAURAR
        setTimeout(() => {

            boton.removeClass("btn-success");
            boton.addClass("btn-danger");

            boton.css({

                "transform":"scale(1)",

                "box-shadow":
                "0 15px 35px rgba(0,0,0,0.4)",

                "background":
                "radial-gradient(circle at top,#ff4d4d,#cc0000)"
            });

            boton.html(`

                <span class="icon-alert">
                    <i class="fas fa-exclamation-triangle"></i>
                </span>

                BOTÓN<br>DE PÁNICO

            `);

            // ACTIVAR NUEVAMENTE
            boton.prop("disabled", false);

        },3000);

    });

});

</script>

</body>
</html>
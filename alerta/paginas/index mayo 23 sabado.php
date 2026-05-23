<?php
include_once '../bd/conexion.php';
?>

<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>DASHBOARD ALERTAS</title>

    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>

        body{

            background:#0f172a;
            color:white;

        }

        .card-alerta{

            padding:20px;
            border-radius:15px;
            margin-bottom:15px;

            animation:fadeIn 0.5s;

        }

        .rojo{

            background:#dc3545;

        }

        .amarillo{

            background:#ffc107;
            color:black;

        }

        .verde{

            background:#28a745;

        }

        @keyframes fadeIn{

            from{

                opacity:0;

                transform:translateY(-10px);

            }

            to{

                opacity:1;

                transform:translateY(0);

            }

        }

    </style>

</head>

<body>

<div class="container mt-4">

    <h1>
        PANEL CENTRAL DE ALERTAS
    </h1>

    <hr>

    <div id="contenedor_alertas">

    </div>

</div>

<script>

/* ===================================== */
/* CARGAR ALERTAS */
/* ===================================== */

function cargarAlertas(){

    $("#contenedor_alertas").load(

        "obtener_alertas.php"

    );

}

/* ===================================== */
/* INICIO */
/* ===================================== */

cargarAlertas();

/* ===================================== */
/* ACTUALIZAR CADA 2 SEGUNDOS */
/* ===================================== */

setInterval(function(){

    cargarAlertas();

},2000);

</script>

</body>

</html>
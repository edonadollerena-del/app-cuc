<?php

include_once '../bd/conexion.php';

$conexion = Conexion::Conectar();

$id = $_GET['id'];

/* ========================================= */
/* TRAER ALERTA */
/* ========================================= */

$consulta = "
SELECT * FROM alerta
WHERE id='$id'
";

$resultado = $conexion->prepare($consulta);

$resultado->execute();

$alerta = $resultado->fetch(PDO::FETCH_ASSOC);

/* ========================================= */
/* TRAER USUARIO */
/* ========================================= */

$cuenta = $alerta['numero_cuenta'];

$consulta2 = "
SELECT * FROM usuario_boton
WHERE user_id='$cuenta'
";

$resultado2 = $conexion->prepare($consulta2);

$resultado2->execute();

$usuario = $resultado2->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>DETALLE ALERTA</title>

    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <style>

        body{

            background:#0f172a;
            color:white;

        }

        .contenedor{

            background:#1e293b;

            padding:30px;

            border-radius:15px;

            margin-top:30px;

        }

        .card-info{

            background:#334155;

            padding:15px;

            border-radius:10px;

            margin-bottom:15px;

        }

        textarea{

            resize:none;

        }

    </style>

</head>

<body>

<div class="container">

    <div class="contenedor">

        <h2>
            DETALLE ALERTA #<?php echo $alerta['id']; ?>
        </h2>

        <hr>

        <!-- ALERTA -->

        <div class="card-info">

            <h4>INFORMACIÓN ALERTA</h4>

            <p>

                <b>Cuenta:</b>

                <?php echo $alerta['numero_cuenta']; ?>

            </p>

            <p>

                <b>Fecha:</b>

                <?php echo $alerta['fecha_act']; ?>

            </p>

            <p>

                <b>Latitud:</b>

                <?php echo $alerta['latitud']; ?>

            </p>

            <p>

                <b>Longitud:</b>

                <?php echo $alerta['longitud']; ?>

            </p>

            <p>

                <b>Estado:</b>

                <?php echo $alerta['estado']; ?>

            </p>

        </div>

        <!-- USUARIO -->

        <div class="card-info">

            <h4>DATOS DEL USUARIO</h4>

            <p>

                <b>Usuario:</b>

                <?php echo $usuario['user_name']; ?>

            </p>

            <p>

                <b>Celular:</b>

                <?php echo $usuario['celular']; ?>

            </p>

            <p>

                <b>IMEI:</b>

                <?php echo $usuario['imei']; ?>

            </p>

            <p>

                <b>Dirección:</b>

                <?php echo $usuario['direccion']; ?>

            </p>

            <p>

                <b>Barrio:</b>

                <?php echo $usuario['barrio']; ?>

            </p>

            <p>

                <b>Celular Emergencia 1:</b>

                <?php echo $usuario['celularemergencia1']; ?>

            </p>

            <p>

                <b>Celular Emergencia 2:</b>

                <?php echo $usuario['celularemergencia2']; ?>

            </p>

            <p>

                <b>Celular Emergencia 3:</b>

                <?php echo $usuario['celularemergencia3']; ?>

            </p>

        </div>

        <hr>

        <!-- FORMULARIO -->

        <form
        action="guardar_alerta.php"
        method="POST">

            <input
            type="hidden"
            name="id"
            value="<?php echo $alerta['id']; ?>">

            <div class="form-group">

                <label>

                    ESTADO

                </label>

                <select
                name="estado"
                class="form-control">

                    <option>PENDIENTE</option>

                    <option>EN PROCESO</option>

                    <option>ATENDIDA</option>

                </select>

            </div>

            <div class="form-group">

                <label>

                    DESCRIPCIÓN

                </label>

                <textarea
                name="descripcion"
                class="form-control"
                rows="6"></textarea>

            </div>

            <button
            class="btn btn-success">

                GUARDAR DOCUMENTACIÓN

            </button>

            <a
            href="index.php"
            class="btn btn-danger">

                VOLVER

            </a>

        </form>

    </div>

</div>

</body>

</html>
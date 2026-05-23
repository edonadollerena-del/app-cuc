<?php

include_once '../bd/conexion.php';

$conexion = Conexion::Conectar();

/* ========================================= */
/* RECIBIR ID */
/* ========================================= */

$id = isset($_GET['id']) ? $_GET['id'] : '';

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
/* VALIDAR */
/* ========================================= */

if(!$alerta){

    die("ALERTA NO EXISTE");

}

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

            margin-bottom:30px;

        }

        .card-info{

            background:#334155;

            padding:20px;

            border-radius:10px;

            margin-bottom:20px;

        }

        textarea{

            resize:none;

        }

        h4{

            margin-bottom:20px;

            color:#38bdf8;

        }

        .btn{

            min-width:180px;

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

        <!-- INFORMACION ALERTA -->

        <div class="card-info">

            <h4>

                INFORMACIÓN ALERTA

            </h4>

            <p>

                <b>ID ALERTA:</b>

                <?php echo $alerta['id']; ?>

            </p>

            <p>

                <b>Cuenta:</b>

                <?php echo $alerta['numero_cuenta']; ?>

            </p>

            <p>

                <b>Fecha Alerta:</b>

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

            <p>

                <b>Fecha Atención:</b>

                <?php echo $alerta['fecha_atencion']; ?>

            </p>

        </div>

        <!-- INFORMACION USUARIO -->

        <div class="card-info">

            <h4>

                DATOS DEL USUARIO

            </h4>

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

                <b>Celular Cuadrante:</b>

                <?php echo $usuario['celularcuadrante']; ?>

            </p>

            <p>

                <b>Emergencia 1:</b>

                <?php echo $usuario['celularemergencia1']; ?>

            </p>

            <p>

                <b>Emergencia 2:</b>

                <?php echo $usuario['celularemergencia2']; ?>

            </p>

            <p>

                <b>Emergencia 3:</b>

                <?php echo $usuario['celularemergencia3']; ?>

            </p>

        </div>

        <!-- FORMULARIO -->

        <div class="card-info">

            <h4>

                DOCUMENTAR ALERTA

            </h4>

            <form
            action="guardar_alerta.php"
            method="POST">

                <!-- ID ALERTA -->

                <input
                type="hidden"
                name="id"
                value="<?php echo $alerta['id']; ?>">

                <!-- ESTADO -->

                <div class="form-group">

                    <label>

                        ESTADO

                    </label>

                    <select
                    name="estado"
                    class="form-control">

                        <option
                        <?php if($alerta['estado']=="PENDIENTE"){echo "selected";} ?>>

                            PENDIENTE

                        </option>

                        <option
                        <?php if($alerta['estado']=="EN PROCESO"){echo "selected";} ?>>

                            EN PROCESO

                        </option>

                        <option
                        <?php if($alerta['estado']=="ATENDIDA"){echo "selected";} ?>>

                            ATENDIDA

                        </option>

                    </select>

                </div>

                <!-- DESCRIPCION -->

                <div class="form-group">

                    <label>

                        DESCRIPCIÓN DE ATENCIÓN

                    </label>

                    <textarea
                    name="descripcion"
                    class="form-control"
                    rows="6"><?php echo $alerta['descripcion']; ?></textarea>

                </div>

                <!-- BOTONES -->

                <button
                type="submit"
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

</div>

</body>

</html>
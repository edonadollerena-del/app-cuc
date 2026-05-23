<?php

include_once '../bd/conexion.php';

$conexion = Conexion::Conectar();

/* ========================================= */
/* RECIBIR ID */
/* ========================================= */

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
WHERE id='$cuenta'
";

$resultado2 = $conexion->prepare($consulta2);

$resultado2->execute();

$usuario = $resultado2->fetch(PDO::FETCH_ASSOC);

/* ========================================= */
/* COLOR ESTADO */
/* ========================================= */

$estado = trim(strtoupper($alerta['estado']));

if($estado == "PENDIENTE"){

    $color = "red";

}
else if($estado == "EN PROCESO"){

    $color = "orange";

}
else if($estado == "ATENDIDA"){

    $color = "green";

}
else{

    $color = "gray";

}

?>

<div class="container-fluid">

    <div class="card-dashboard">

        <h2>

            DETALLE ALERTA #<?php echo $alerta['id']; ?>

        </h2>

        <hr>

        <!-- ====================================== -->
        <!-- INFORMACION ALERTA -->
        <!-- ====================================== -->

        <div class="card-dashboard">

            <h4>

                INFORMACIÓN ALERTA

            </h4>

            <p>

                <b>ID:</b>

                <?php echo $alerta['id']; ?>

            </p>

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

                <span

                style="

                display:inline-block !important;
                background:<?php echo $color; ?> !important;
                color:white !important;
                padding:10px 20px !important;
                border-radius:12px !important;
                font-weight:bold !important;
                font-size:15px !important;

                ">

                    <?php echo $estado; ?>

                </span>

            </p>

            <p>

                <b>Descripción:</b>

                <?php echo $alerta['descripcion']; ?>

            </p>

            <p>

                <b>Fecha Atención:</b>

                <?php echo $alerta['fecha_atencion']; ?>

            </p>

        </div>

        <!-- ====================================== -->
        <!-- DATOS USUARIO -->
        <!-- ====================================== -->

        <div class="card-dashboard">

            <h4>

                DATOS DEL USUARIO

            </h4>

            <p>

                <b>Nombre:</b>

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

        </div>

        <!-- ====================================== -->
        <!-- FORMULARIO -->
        <!-- ====================================== -->

        <div class="card-dashboard">

            <h4>

                DOCUMENTAR ALERTA

            </h4>

            <form id="formGuardarAlerta">

                <input
                type="hidden"
                name="id"
                value="<?php echo $alerta['id']; ?>">

                <div class="mb-3">

                    <label>

                        ESTADO

                    </label>

                    <select
                    name="estado"
                    class="form-control">

                        <option
                        value="PENDIENTE"

                        <?php
                        if($estado=="PENDIENTE"){
                            echo "selected";
                        }
                        ?>

                        >

                            PENDIENTE

                        </option>

                        <option
                        value="EN PROCESO"

                        <?php
                        if($estado=="EN PROCESO"){
                            echo "selected";
                        }
                        ?>

                        >

                            EN PROCESO

                        </option>

                        <option
                        value="ATENDIDA"

                        <?php
                        if($estado=="ATENDIDA"){
                            echo "selected";
                        }
                        ?>

                        >

                            ATENDIDA

                        </option>

                    </select>

                </div>

                <div class="mb-3">

                    <label>

                        DESCRIPCIÓN

                    </label>

                    <textarea
                    name="descripcion"
                    class="form-control"
                    rows="6"><?php echo $alerta['descripcion']; ?></textarea>

                </div>

                <button
                type="submit"
                class="btn btn-success">

                    GUARDAR DOCUMENTACIÓN

                </button>

                <button
                type="button"
                class="btn btn-danger"
                id="btnVolver">

                    VOLVER

                </button>

            </form>

        </div>

    </div>

</div>

<script>

/* ========================================= */
/* GUARDAR */
/* ========================================= */

$("#formGuardarAlerta").submit(function(e){

    e.preventDefault();

    $.ajax({

        url:"paginas/guardar_alerta.php",

        type:"POST",

        data:$(this).serialize(),

        success:function(respuesta){

    alert("DOCUMENTACIÓN GUARDADA");

    $("#contenido").load("paginas/alerta.php");

    },

        error:function(){

            alert("ERROR AL GUARDAR");

        }

    });

});

/* ========================================= */
/* BOTON VOLVER */
/* ========================================= */

$("#btnVolver").click(function(){

    $("#contenido").load("paginas/alerta.php");
    

});

</script>
<?php

include_once '../bd/conexion.php';

$conexion = Conexion::Conectar();

/* ===================================== */
/* CONSULTAR ALERTAS */
/* ===================================== */

$consulta = "
SELECT * FROM alerta
ORDER BY id DESC
";

$resultado = $conexion->prepare($consulta);

$resultado->execute();

?>

<div class="card-dashboard">

    <h2>

        ALERTAS ACTIVAS

    </h2>

    <table class="table table-dark table-hover">

        <thead>

            <tr>

                <th>ID</th>

                <th>CUENTA</th>

                <th>FECHA</th>

                <th>LATITUD</th>

                <th>LONGITUD</th>

                <th>ESTADO</th>

                <th>ACCION</th>

            </tr>

        </thead>

        <tbody>

        <?php

        while($fila = $resultado->fetch(PDO::FETCH_ASSOC)){

            $estado = trim(strtoupper($fila['estado']));

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

            <tr>

                <td>

                    <?php echo $fila['id']; ?>

                </td>

                <td>

                    <?php echo $fila['numero_cuenta']; ?>

                </td>

                <td>

                    <?php echo $fila['fecha_act']; ?>

                </td>

                <td>

                    <?php echo $fila['latitud']; ?>

                </td>

                <td>

                    <?php echo $fila['longitud']; ?>

                </td>

                <td>

                    <span

                    style="

                    display:inline-block !important;
                    background:<?php echo $color; ?> !important;
                    color:white !important;
                    padding:10px 20px !important;
                    border-radius:12px !important;
                    font-weight:bold !important;
                    font-size:14px !important;
                    text-align:center !important;

                    ">

                        <?php echo $estado; ?>

                    </span>

                </td>

                <td>

                    <button

                    class="btn btn-primary btn-sm"

                    onclick="cargarPagina(
                    'paginas/detalle_alerta.php?id=<?php echo $fila['id']; ?>'
                    )">

                        VER DETALLE

                    </button>

                </td>

            </tr>

        <?php } ?>

        </tbody>

    </table>

</div>
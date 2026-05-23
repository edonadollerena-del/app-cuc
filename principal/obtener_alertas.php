<?php

include_once '../bd/conexion.php';

$conexion = Conexion::Conectar();

$consulta = "
SELECT * FROM alerta
ORDER BY id DESC
";

$resultado = $conexion->prepare($consulta);

$resultado->execute();

$alertas = $resultado->fetchAll(PDO::FETCH_ASSOC);

if(count($alertas)>0){

    foreach($alertas as $fila){

        $color = "rojo";

        if($fila['estado']=="EN PROCESO"){

            $color = "amarillo";

        }

        if($fila['estado']=="ATENDIDA"){

            $color = "verde";

        }

?>

<div class="card-alerta <?php echo $color; ?>">

    <h3>

        ALERTA #<?php echo $fila['id']; ?>

    </h3>

    <p>

        Cuenta:
        <?php echo $fila['numero_cuenta']; ?>

    </p>

    <p>

        Fecha:
        <?php echo $fila['fecha_act']; ?>

    </p>

    <p>

        Estado:
        <?php echo $fila['estado']; ?>

    </p>

    <a
    href="detalle_alerta.php?id=<?php echo $fila['id']; ?>"
    class="btn btn-dark">

        VER DETALLE

    </a>

</div>

<?php

    }

}else{

?>

<div class="alert alert-warning">

    NO HAY ALERTAS REGISTRADAS

</div>

<?php

}

?>
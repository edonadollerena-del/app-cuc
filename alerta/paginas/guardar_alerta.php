<?php

include_once '../bd/conexion.php';

$conexion = Conexion::Conectar();

date_default_timezone_set('America/Bogota');

/* ===================================== */
/* RECIBIR DATOS */
/* ===================================== */

$id = $_POST['id'];

$estado = $_POST['estado'];

$descripcion = $_POST['descripcion'];

$fecha_atencion = date('Y-m-d H:i:s');

/* ===================================== */
/* ACTUALIZAR ALERTA */
/* ===================================== */

$consulta = "
UPDATE alerta
SET

estado='$estado',
descripcion='$descripcion',
fecha_atencion='$fecha_atencion'

WHERE id='$id'
";

$resultado = $conexion->prepare($consulta);

if($resultado->execute()){

    echo "OK";

}
else{

    echo "ERROR";

}
?>
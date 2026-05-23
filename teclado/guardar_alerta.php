<?php

/*========================================
  CONEXION A LA BASE DE DATOS
========================================*/

$servidor = "localhost";
$usuario  = "root";
$password = "";
$bd       = "boton_panico";

$conn = mysqli_connect($servidor,$usuario,$password,$bd);

/*========================================
  VALIDAR CONEXION
========================================*/

if(!$conn){

    die("Error de conexión: " . mysqli_connect_error());
}

/*========================================
  RECIBIR DATOS AJAX
========================================*/

$latitud  = $_POST['latitud'];
$longitud = $_POST['longitud'];

/*========================================
  FECHA Y HORA COLOMBIA
========================================*/

date_default_timezone_set("America/Bogota");

$fecha = date("Y-m-d");
$hora  = date("H:i:s");

/*========================================
  ESTADO ALERTA
========================================*/

$estado = "PENDIENTE";

/*========================================
  INSERTAR ALERTA
========================================*/

$sql = "INSERT INTO alertas(
            latitud,
            longitud,
            fecha,
            hora,
            estado
        )

        VALUES(
            '$latitud',
            '$longitud',
            '$fecha',
            '$hora',
            '$estado'
        )";

/*========================================
  EJECUTAR QUERY
========================================*/

if(mysqli_query($conn,$sql)){

    echo "ok";

}else{

    echo "error";
}

/*========================================
  CERRAR CONEXION
========================================*/

mysqli_close($conn);

?>
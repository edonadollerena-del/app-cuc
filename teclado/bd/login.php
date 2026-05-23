<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

include_once 'conexion.php';

$objeto = new Conexion();
$conexion = $objeto->Conectar();

date_default_timezone_set('America/Bogota');

$time = date('Y-m-d H:i:s');

$cuenta = "0055";
$comando = "S";

$usuario  = isset($_POST['usuario']) ? $_POST['usuario'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

$latitud  = isset($_POST['latitud']) ? $_POST['latitud'] : '';
$longitud = isset($_POST['longitud']) ? $_POST['longitud'] : '';


echo "usuario RECIBIDA JULIO: ".$usuario."<br>";
echo "password RECIBIDA JULIO: ".$password."<br>";
echo "LATITUD RECIBIDA JULIO: ".$latitud."<br>";
echo "LONGITUD RECIBIDA JULIO: ".$longitud."<br>";

if ($usuario != "null")
{

    $mysqli = new mysqli(
        "localhost",
        "JULIORDA",
        "504971055JULIOrda$",
        "DSC_TECLADO"
    );

    if ($mysqli->connect_errno) {

        die("ERROR MYSQL");

    }

    $resultado = $mysqli->query(
        "SELECT * FROM usuario_boton
         WHERE user_id='$usuario'
         AND password='$password'"
    );

    // VERIFICAR SI EXISTE
    if($resultado->num_rows > 0)
    {

        echo "USUARIO OK<br>";

        $consulta = "INSERT INTO alerta
        (
            numero_cuenta,
            cadena_contaid,
            fecha_act,
            latitud,
            longitud
        )
        VALUES
        (
            '$usuario',
            '$password',
            '$time',
            '$latitud',
            '$longitud'
        )";

        echo $consulta."<br>";

        $resultado2 = $conexion->prepare($consulta);

        if($resultado2->execute()){

            echo "GUARDO CORRECTAMENTE";

        }else{

            echo "ERROR INSERT";

            print_r($resultado2->errorInfo());

        }

    }
    else
    {

        echo "USUARIO NO EXISTE";

    }

}
else
{

    echo "USUARIO NULL";

}

?>
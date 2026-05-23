<?php

session_start();

include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$time = time();
$time = $time - 1500000;

$dat = time();
$dat = $dat - 1500000;

//$time = date("H:i:s", $time);

$time = date('Y-m-d H:i:s');
//$time = date('Y-m-d H:i:s', strtotime($time) + 2 * 3600); // 2 horas en segundos
$time = date('Y-m-d H:i:s', strtotime($time) + (2 * 3600 - (20 * 60))); // Restamos 2 horas y 20 minutos en segundos

$cuenta = "0055";
$comando = "S";


$usuario  = isset($_POST['usuario']) ? $_POST['usuario'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

$latitud  = isset($_POST['latitud']) ? $_POST['latitud'] : '';
$longitud = isset($_POST['longitud']) ? $_POST['longitud'] : '';

console.log("AQUI FUNCIONA");

console.log("usuario");
console.log("password");

    

if ($usuario != "null") 
{


    //empieza codigo buscar nombre          
        $mysqli = new mysqli("localhost", "JULIORDA", "504971055JULIOrda$", "DSC_TECLADO");
        if ($mysqli->connect_errno) {
            echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        $resultado = $mysqli->query("SELECT * FROM usuario_boton WHERE user_id='$usuario' AND password='$password' ");                    
	                 
        $fila = mysqli_fetch_row($resultado);    
        $usuario2 = $fila[2];    
	$password2 = $fila[1];   	
    //termina nuevo codigo buscar nombre usuario
    if ($usuario = $usuario2) {
    
        //$consulta = "INSERT INTO alerta (numero_cuenta, cadena_contaid) VALUES('$cuenta', '$comando') ";	
        
        $consulta2 = "INSERT INTO alerta
            (
                numero_cuenta,
                cadena_contaid,
                latitud,
                longitud,
                fecha_act
            )
            VALUES
            (
                :cuenta,
                :comando,
                :latitud,
                :longitud,
                :fecha
            )";

        
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
       
   }

}

?>


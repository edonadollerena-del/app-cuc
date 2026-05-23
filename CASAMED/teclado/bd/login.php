<?php
session_start();

include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

//recepción de datos enviados mediante POST desde ajax
$comando = (isset($_POST['comando'])) ? $_POST['comando'] : '';
$cuenta = (isset($_POST['cuenta'])) ? $_POST['cuenta'] : '';

console.log("$comando"); 
console.log("$cuenta"); 

if ($cuenta == "0054")
{
    $consulta = "INSERT INTO comando_equipowifi0054 (numero_cuenta, cadena_comando) VALUES('$cuenta', '$comando') ";			
    $resultado = $conexion->prepare($consulta);
    $resultado->execute(); 
}

if ($cuenta == "0045")
{
    $consulta = "INSERT INTO comando_equipowifi0045 (numero_cuenta, cadena_comando) VALUES('$cuenta', '$comando') ";			
    $resultado = $conexion->prepare($consulta);
    $resultado->execute(); 
}

if ($cuenta == "0027")
{
    $consulta = "INSERT INTO comando_equipowifi0027 (numero_cuenta, cadena_comando) VALUES('$cuenta', '$comando') ";			
    $resultado = $conexion->prepare($consulta);
    $resultado->execute(); 
}

if ($cuenta == "0028")
{
    $consulta = "INSERT INTO comando_equipowifi0028 (numero_cuenta, cadena_comando) VALUES('$cuenta', '$comando') ";			
    $resultado = $conexion->prepare($consulta);
    $resultado->execute(); 
}

if ($cuenta == "0029")
{
    $consulta = "INSERT INTO comando_equipowifi0029 (numero_cuenta, cadena_comando) VALUES('$cuenta', '$comando') ";			
    $resultado = $conexion->prepare($consulta);
    $resultado->execute(); 
}

// if ($cuenta == "0030")
// {
//     $consulta = "INSERT INTO comando_equipowifi0030 (numero_cuenta, cadena_comando) VALUES('$cuenta', '$comando') ";			
//     $resultado = $conexion->prepare($consulta);
//     $resultado->execute(); 
// }


if ($cuenta == "0015")
{
    $consulta = "INSERT INTO comando_equipowifi0015 (numero_cuenta, cadena_comando) VALUES('$cuenta', '$comando') ";			
    $resultado = $conexion->prepare($consulta);
    $resultado->execute(); 
}

if ($cuenta == "0016")
{
    $consulta = "INSERT INTO comando_equipowifi0016 (numero_cuenta, cadena_comando) VALUES('$cuenta', '$comando') ";			
    $resultado = $conexion->prepare($consulta);
    $resultado->execute(); 
}

if ($cuenta == "0017")
{
    $consulta = "INSERT INTO comando_equipowifi0017 (numero_cuenta, cadena_comando) VALUES('$cuenta', '$comando') ";			
    $resultado = $conexion->prepare($consulta);
    $resultado->execute(); 
}

if ($cuenta == "0019")
{
    $consulta = "INSERT INTO comando_equipowifi0019 (numero_cuenta, cadena_comando) VALUES('$cuenta', '$comando') ";			
    $resultado = $conexion->prepare($consulta);
    $resultado->execute(); 
}

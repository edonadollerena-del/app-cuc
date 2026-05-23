<!DOCTYPE html>

<html lang="es">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1">

<title>SISTEMA ALERTAS</title>

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>

body{

    background:#0f172a;

    color:white;

    overflow-x:hidden;

}

.sidebar{

    width:260px;

    height:100vh;

    background:#111827;

    position:fixed;

    left:0;

    top:0;

    padding-top:20px;

}

.sidebar h3{

    text-align:center;

    margin-bottom:30px;

}

.sidebar a{

    display:block;

    color:white;

    padding:15px;

    text-decoration:none;

    transition:0.3s;

}

.sidebar a:hover{

    background:#2563eb;

}

.content{

    margin-left:260px;

    padding:20px;

}

.card-dashboard{

    background:#1e293b;

    border-radius:15px;

    padding:20px;

    margin-bottom:20px;

}

.tabla-alertas{

    background:#1e293b;

    border-radius:15px;

    padding:20px;

}

.estado-pendiente{

    background:red;

    color:white;

    padding:5px 10px;

    border-radius:10px;

}

.estado-proceso{

    background:orange;

    color:white;

    padding:5px 10px;

    border-radius:10px;

}

.estado-atendida{

    background:green;

    color:white;

    padding:5px 10px;

    border-radius:10px;

}

table{

    color:white !important;

}

</style>

</head>

<body>
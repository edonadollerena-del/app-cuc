<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>

        CENTRAL ALERTAS DSC

    </title>

    <!-- BOOTSTRAP -->

    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <!-- FONT AWESOME -->

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- JQUERY -->

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <style>

        *{

            margin:0;
            padding:0;
            box-sizing:border-box;

        }

        body{

            background:#0f172a;

            color:white;

            overflow-x:hidden;

            font-family:Arial, Helvetica, sans-serif;

        }

        /* ====================================== */
        /* SIDEBAR */
        /* ====================================== */

        .sidebar{

            width:260px;

            height:100vh;

            background:#111827;

            position:fixed;

            left:0;

            top:0;

            overflow-y:auto;

            padding-top:20px;

            z-index:1000;

            box-shadow:2px 0px 10px rgba(0,0,0,0.5);

        }

        .sidebar h3{

            text-align:center;

            margin-bottom:30px;

            color:#38bdf8;

            font-weight:bold;

        }

        .sidebar a{

            display:block;

            color:white;

            text-decoration:none;

            padding:15px 20px;

            transition:0.3s;

            border-left:4px solid transparent;

        }

        .sidebar a:hover{

            background:#1e293b;

            border-left:4px solid #38bdf8;

            color:#38bdf8;

        }

        .sidebar i{

            margin-right:10px;

        }

        /* ====================================== */
        /* CONTENT */
        /* ====================================== */

        .content{

            margin-left:260px;

            padding:20px;

            min-height:100vh;

        }

        /* ====================================== */
        /* TARJETAS */
        /* ====================================== */

        .card-dashboard{

            background:#1e293b;

            border-radius:15px;

            padding:20px;

            margin-bottom:20px;

            box-shadow:0px 0px 10px rgba(0,0,0,0.3);

        }

        /* ====================================== */
        /* TABLAS */
        /* ====================================== */

        .table{

            color:white !important;

        }

        .table-dark{

            background:#1e293b !important;

        }

        /* ====================================== */
        /* ESTADOS ALERTAS */
        /* ====================================== */

        .estado-pendiente{

            background:red;

            color:white;

            padding:8px 15px;

            border-radius:10px;

            font-weight:bold;

            display:inline-block;

        }

        .estado-proceso{

            background:orange;

            color:white;

            padding:8px 15px;

            border-radius:10px;

            font-weight:bold;

            display:inline-block;

        }

        .estado-atendida{

            background:green;

            color:white;

            padding:8px 15px;

            border-radius:10px;

            font-weight:bold;

            display:inline-block;

        }

        /* ====================================== */
        /* FORMULARIOS */
        /* ====================================== */

        .form-control{

            background:#334155;

            border:none;

            color:white;

        }

        .form-control:focus{

            background:#334155;

            color:white;

            box-shadow:none;

            border:1px solid #38bdf8;

        }

        textarea{

            resize:none;

        }

        /* ====================================== */
        /* BOTONES */
        /* ====================================== */

        .btn-primary{

            background:#2563eb;

            border:none;

        }

        .btn-success{

            background:#16a34a;

            border:none;

        }

        .btn-danger{

            background:#dc2626;

            border:none;

        }

        /* ====================================== */
        /* TITULOS */
        /* ====================================== */

        h1,h2,h3,h4,h5{

            font-weight:bold;

        }

        /* ====================================== */
        /* RESPONSIVE */
        /* ====================================== */

        @media(max-width:768px){

            .sidebar{

                width:100%;

                height:auto;

                position:relative;

            }

            .content{

                margin-left:0;

            }

        }

    </style>

</head>

<body>
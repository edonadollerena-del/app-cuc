<!doctype html>
<html>
    <head>
        <link rel="shortcut icon" href="#" />
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>APP BOTON EMERGENCIA</title>

        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="estilos.css">
        <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">        
        
        <link rel="stylesheet" type="text/css" href="fuentes/iconic/css/material-design-iconic-font.min.css">
        
    </head>
    <div class="container-login">
        <div class="wrap-login">
            <form class="login-form validate-form" id="formLogin" action="" method="post">
                <span class="login-form-title">LISTADO DE EVENTOS DE ALARMA RECIENTES</span>              
                <P>
                </P>                                
                <span class="login-form-title">FRENTE DE SEGURIDAD SAN ISIDRO 24 - 22</span>              
                <P>
                </P>  
                <P>
                </P> 
                <P>
                </P>                               
            </form>
        </div>
    </div>     
    <body>
    </body>
</html>        
        <?php
        
        

       //Creas una variable de tipo objeto mysqli con los datos de la bd y el charset que quieras
                $mysqli = new mysqli('localhost', 'JULIORDA', '504971055JULIOrda$', 'DSC_TECLADO');
                $mysqli->set_charset("utf8");
                //Y hacer las consultas de esta manera:

                $res = $mysqli->query("SELECT * FROM EventosSolReal55 ORDER BY fecha DESC");

                
                $I = 1;
                while($f = $res->fetch_object()){
                    // echo $f->usuario.' <br/>';
                    //echo $f->fecha.' <br/>';
                    echo $I;
                    echo " ";
                    echo $f->usuario;
                    echo " ";
                    echo $f->fecha.' <br/>'.' <br/>';
                    echo " ";
                    $I = $I + 1;
                }
       
               
         
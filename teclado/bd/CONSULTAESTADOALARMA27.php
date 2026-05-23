<?php
//ini_set('display_errors',1);
//ini_set('display_startup_errors',1);
//error_reporting(E_ALL);
	//$host = "electronicasistemasintegrales.com";
    
    $server = "localhost";
    $db = "DSC_TECLADO";
    $user = "JULIORDA";
    $pass = "504971055JULIOrda$";    
    

	$conDB = new mysqli($server, $user, $pass, $db);
	$conDB->set_charset("utf8");

    $cuenta = (isset($_POST['cuenta'])) ? $_POST['cuenta'] : '';

    // $action =  $_GET["act"];
    switch ($cuenta) {    
    case '0027':  // leeemnos todo
        $sql = "Select `conexionequipo`,`estadoequipo`,`realequipo`,`armadoequipo`,`trblequipo`,`fireequipo`,`memequipo`,`bypequipo`,`pgmequipo`,`estadozona1`,`estadozona2`,`estadozona3`,`estadozona4`,`estadozona5`,`estadozona6`,`estadozona7`,`estadozona8` From `equiposwifi0027` ;";
        $q =$conDB->query($sql); // ejecuta peticion
		$rows = array();
		while($r = mysqli_fetch_assoc($q)) // lee cada fila
		{
			$rows[] = $r;
		}
        print json_encode($rows); // envia datos devuelta        
        break;   
    
        case '0028':  // leeemnos todo
            $sql = "Select `conexionequipo`,`estadoequipo`,`realequipo`,`armadoequipo`,`trblequipo`,`fireequipo`,`memequipo`,`bypequipo`,`pgmequipo`,`estadozona1`,`estadozona2`,`estadozona3`,`estadozona4`,`estadozona5`,`estadozona6`,`estadozona7`,`estadozona8` From `equiposwifi0028` ;";
            $q =$conDB->query($sql); // ejecuta peticion
            $rows = array();
            while($r = mysqli_fetch_assoc($q)) // lee cada fila
            {
                $rows[] = $r;
            }
            print json_encode($rows); // envia datos devuelta        
            break;   

            case '0029':  // leeemnos todo
                $sql = "Select `conexionequipo`,`estadoequipo`,`realequipo`,`armadoequipo`,`trblequipo`,`fireequipo`,`memequipo`,`bypequipo`,`pgmequipo`,`estadozona1`,`estadozona2`,`estadozona3`,`estadozona4`,`estadozona5`,`estadozona6`,`estadozona7`,`estadozona8` From `equiposwifi0029` ;";
                $q =$conDB->query($sql); // ejecuta peticion
                $rows = array();
                while($r = mysqli_fetch_assoc($q)) // lee cada fila
                {
                    $rows[] = $r;
                }
                print json_encode($rows); // envia datos devuelta        
                break;  
                case '0030':  // leeemnos todo
                    $sql = "Select `conexionequipo`,`estadoequipo`,`realequipo`,`armadoequipo`,`trblequipo`,`fireequipo`,`memequipo`,`bypequipo`,`pgmequipo`,`estadozona1`,`estadozona2`,`estadozona3`,`estadozona4`,`estadozona5`,`estadozona6`,`estadozona7`,`estadozona8` From `equiposwifi0030` ;";
                    $q =$conDB->query($sql); // ejecuta peticion
                    $rows = array();
                    while($r = mysqli_fetch_assoc($q)) // lee cada fila
                    {
                        $rows[] = $r;
                    }
                    print json_encode($rows); // envia datos devuelta        
                    break; 
    
    case '0015':  // leeemnos todo
        $sql = "Select `conexionequipo`,`estadoequipo`,`realequipo`,`armadoequipo`,`trblequipo`,`fireequipo`,`memequipo`,`bypequipo`,`pgmequipo`,`estadozona1`,`estadozona2`,`estadozona3`,`estadozona4`,`estadozona5`,`estadozona6`,`estadozona7`,`estadozona8` From `equiposwifi0015` ;";
        $q =$conDB->query($sql); // ejecuta peticion
        $rows = array();
        while($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
           $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta        
        break;    
    case '0016':  // leeemnos todo
        $sql = "Select `conexionequipo`,`estadoequipo`,`realequipo`,`armadoequipo`,`trblequipo`,`fireequipo`,`memequipo`,`bypequipo`,`pgmequipo`,`estadozona1`,`estadozona2`,`estadozona3`,`estadozona4`,`estadozona5`,`estadozona6`,`estadozona7`,`estadozona8` From `equiposwifi0016` ;";
        $q =$conDB->query($sql); // ejecuta peticion
        $rows = array();
        while($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta        
        break;    
    case '0017':  // leeemnos todo
        $sql = "Select `conexionequipo`,`estadoequipo`,`realequipo`,`armadoequipo`,`trblequipo`,`fireequipo`,`memequipo`,`bypequipo`,`pgmequipo`,`estadozona1`,`estadozona2`,`estadozona3`,`estadozona4`,`estadozona5`,`estadozona6`,`estadozona7`,`estadozona8` From `equiposwifi0017` ;";
        $q =$conDB->query($sql); // ejecuta peticion
        $rows = array();
        while($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta        
        break;    
    case '0019':  // leeemnos todo
        $sql = "Select `conexionequipo`,`estadoequipo`,`realequipo`,`armadoequipo`,`trblequipo`,`fireequipo`,`memequipo`,`bypequipo`,`pgmequipo`,`estadozona1`,`estadozona2`,`estadozona3`,`estadozona4`,`estadozona5`,`estadozona6`,`estadozona7`,`estadozona8` From `equiposwifi0019` ;";
        $q =$conDB->query($sql); // ejecuta peticion
        $rows = array();
        while($r = mysqli_fetch_assoc($q)) // lee cada fila
        {
            $rows[] = $r;
        }
        print json_encode($rows); // envia datos devuelta        
        break;    
     }

	
    //mysqli_close($conDB);
   
?>

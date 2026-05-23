<?php

    
    $server = "localhost";
    $db = "DSC_TECLADO";
    $user = "JULIORDA";
    $pass = "504971055JULIOrda$";      
   

	$conDB = new mysqli($server, $user, $pass, $db);
	$conDB->set_charset("utf8");   

    // $comando = (isset($_POST['comando'])) ? $_POST['comando'] : '';
    $cuenta = (isset($_POST['cuenta'])) ? $_POST['cuenta'] : '';

    // console.log("$comando"); 
    //console.log("$cuenta"); 

    switch ($cuenta) {    
        case '0027':  // leeemnos todo
            $sql = "Select `pantalla1`,`pantalla2`,`pantalla3` From `pantallaapp0027` ;";     
            break;  
            case '0028':  // leeemnos todo
                $sql = "Select `pantalla1`,`pantalla2`,`pantalla3` From `pantallaapp0028` ;";     
                break;       
                case '0029':  // leeemnos todo
                    $sql = "Select `pantalla1`,`pantalla2`,`pantalla3` From `pantallaapp0029` ;";     
                    break;  
                    case '0030':  // leeemnos todo
                        $sql = "Select `pantalla1`,`pantalla2`,`pantalla3` From `pantallaapp0030` ;";     
                        break;            
        case '0015':  // leeemnos todo
            $sql = "Select `pantalla1`,`pantalla2`,`pantalla3` From `pantallaapp0015` ;";       
            break;    
        case '0016':  // leeemnos todo
            $sql = "Select `pantalla1`,`pantalla2`,`pantalla3` From `pantallaapp0016` ;";  
            break;    
        case '0017':  // leeemnos todo
            $sql = "Select `pantalla1`,`pantalla2`,`pantalla3` From `pantallaapp0017` ;"; 
            break;    
        case '0019':  // leeemnos todo
            $sql = "Select `pantalla1`,`pantalla2`,`pantalla3` From `pantallaapp0019` ;";
            break;    
         }
   

    //$sql = "Select `pantalla1`,`pantalla2`,`pantalla3` From `pantallaapp0027` ;";

        $q =$conDB->query($sql) or die($con->error); // ejecuta peticion
		$rows = array();
		while($r = mysqli_fetch_assoc($q)) // lee cada fila
		{
			$rows[] = $r;
        }
        
        print json_encode($rows); // envia datos devuelta
        $sql = "DELETE FROM pantallaapp";
        
        if ($conDB->query($sql) === TRUE) {
       
        }    
        $conDB->close();      
       
	

?>

<?php
//incluyo la clase
require 'DataGrid.php';

    $server = "localhost";
    $db = "DSC_TECLADO";
    $user = "JULIORDA";
    $pass = "504971055JULIOrda$";
    
      
    $conn = new mysqli($server, $user, $pass, $db);
    $conn->set_charset("utf8");
    
    $uid = $_GET["serial"];
    $pwd = $_GET["serial2"];
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

   
    $sql = "SELECT usuario, fecha FROM EventosSolReal55 ORDER BY fecha DESC";
   

    $q =$conn->query($sql); // ejecuta peticion
		$rows = array();
		while($r = mysqli_fetch_assoc($q)) // lee cada fila
		{
			$rows[] = $r;
		}
        print json_encode($rows); // envia datos devuelta        
        
        

        $dg = new C_DataGrid("SELECT * FROM orders", "orderNumber", "orders");
        $dg = new C_DataGrid("SELECT * FROM EventosSolReal55 ORDER BY fecha DESC", "usuario", "fecha"); 

        // change column titles
        $dg->set_col_title("usuario", "usuario.");
        $dg->set_col_title("fecha", "fechac");        

        // hide a column
        $dg -> set_col_hidden("requiredDate");

        // change default caption
        $dg -> set_caption("Orders List");

        $dg -> display();

    ?>
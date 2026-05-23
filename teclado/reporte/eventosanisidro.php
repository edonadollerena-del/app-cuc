<?php
//incluyo la clase
require 'DataGrid.php';

    $server = "localhost";
    $db = "DSC_TECLADO";
    $user = "JULIORDA";
    $pass = "504971055JULIOrda$";
    
    //$host = "mysql16.000webhost.com";
    //$db = "a1438837_db";
    //$user = "a1438837_id";
    //$pw = "a1438837";
    
    //$con = mysql_connect($server,$user,$pass) or die(mysql_error());
    $conn = new mysqli($server, $user, $pass, $db);
    $conn->set_charset("utf8");
    // mysql_select_db($db) or die(mysql_error());
    // mysql_query("SET CHARACTER SET utf8");
    // mysql_query("SET NAMES 'utf8'");
    
    $uid = $_GET["serial"];
    $pwd = $_GET["serial2"];
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    //user_name
    //$consulta = "SELECT user_name,  FROM tbl_user WHERE user_id = '$uid' AND password = '$pwd'";
    
    //$consulta = "SELECT user_name, sesion FROM tbl_user WHERE user_id = '$uid' AND imei = '$uid'";
    //$consulta = "SELECT imei,sesion, FROM tbl_user WHERE imei = '$uid'";
    //$resultado = $conn->query($consulta);
    //$sql = "Select `imei`,`sesion`,`user_name` From `tbl_user` ;";

    $sql = "SELECT usuario, fecha FROM EventosSolReal55 ORDER BY fecha DESC";
    //$sql = "SELECT imei,sesion,user_name,celular,direccion FROM tbl_user ORDER BY user_name";

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
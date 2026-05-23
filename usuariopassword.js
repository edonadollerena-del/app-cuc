
//   $('#formLogin').submit(function(e){
//    e.preventDefault();
    
    let usuarioexiste =  localStorage.getItem("usuariocuenta"); 
    let passwordexiste = localStorage.getItem("clavecuenta"); 
    
    console.log("usuario");
    console.log(usuarioexiste); 
    console.log("password");
    console.log(passwordexiste);   
    if(usuarioexiste != "null"){   
        $.ajax({
            url:"bd/loginboton.php",
            type:"POST",
            datatype: "json",
            data: {usuario:usuarioexiste, password:passwordexiste}, 
            success:function(data){  
                //console.log("lo encontratado...");
                //console.log(data);             
                if(data == "null"){
                    
                }else{
                    localStorage.setItem("usuariocuenta", usuarioexiste);                 
                    localStorage.setItem("clavecuenta", passwordexiste);   
                    window.location.href = "teclado/index.php";
                            
                }
            }    
        });
    }   
   
 //});

  

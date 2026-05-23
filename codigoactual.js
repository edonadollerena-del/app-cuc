$('#formLogin').submit(function(e){
   e.preventDefault();
   var usuario = $.trim($("#usuario").val());    
   var password =$.trim($("#password").val()); 
   
   let usuarioexiste = localStorage.getItem("usuariocuenta"); 
   let passwordexiste = localStorage.getItem("clavecuenta"); 
   
    console.log("entro por codigo actual");
    console.log(usuario);
    console.log(usuarioexiste); 
    console.log("password");
    console.log(password); 

   if(usuario.length == "" || password == ""){
      Swal.fire({
          type:'warning',
          title:'Debe ingresar un usuario y/o password',
      });
      return false; 
    }else{
        console.log("ingresa a login boton");
        $.ajax({        
           url:"bd/loginboton.php",
           type:"POST",
           datatype: "json",
           data: {usuario:usuario, password:password}, 
           success:function(data){               
               if(data == "null"){
                   Swal.fire({
                       type:'error',
                       title:'Usuario y/o password incorrecta',
                   });
               }else{
                   Swal.fire({
                       type:'success',
                       title:'¡Conexión exitosa funciona!',
                       confirmButtonColor:'#3085d6',
                       confirmButtonText:'Ingresar'
                   }).then((result) => {
                       if(result.value){                                                                        
                        

                           localStorage.setItem("usuariocuenta", usuario);                 
                           localStorage.setItem("clavecuenta", password);                         
                           //localStorage.setItem("clavecuenta", data.substr(16,4));                         
                           //console.log(data.substr(16,4));                              
                           window.location.href = "teclado/index.php";
                           //window.location.href = 'teclado/index.php?' + params(data.substr(16,2));
                        
                       }
                   })
                   
               }
           }    
        });
    }     
});
$('#formLogin').submit(function(e){
   e.preventDefault();
   var usuario = $.trim($("#usuario").val());    
   var password =$.trim($("#password").val());    
    
   if(usuario.length == "" || password == ""){
      Swal.fire({
          type:'warning',
          title:'Debe ingresar un usuario y/o password',
      });
      return false; 
    }else{
        $.ajax({
           url:"bd/login.php",
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
                       title:'¡Conexión exitosa!',
                       confirmButtonColor:'#3085d6',
                       confirmButtonText:'Ingresar'
                   }).then((result) => {
                       if(result.value){                                                                                        
                           //export var cuentaCliente = data.substr(16,2);  
                           //var obj = jQuery.parseJSON (data);
                           //var json_str = JSON.stringify(data); 

                        // To decode (This produces an object)
                           //var obj = JSON.parse(json_str);
                           //var obj = JSON.parse(data);
                           //console.log(obj);                               
                           //console.log(obj.id_usuario);       
                                            
                           localStorage.setItem("clavecuenta", data.substr(16,4));                         
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
const music = new Audio('tecla.mp3');
//music.play();
//music.loop =true;
//music.playbackRate = 2;
//music.pause();qqazszdgfbgtyj
let cuentacliente = localStorage.getItem("clavecuenta");    
let usuarioexiste = localStorage.getItem("usuariocuenta"); 
let passwordexiste = localStorage.getItem("clavecuenta"); 

$(".btn").click(function(e) {
  action = {
    'btn_single_click': $(this).attr("id")    
  };    
  
  boton = $(this).attr("id");        
  music.play();
                  
if (boton == "btn_p")    
   
   console.log("usuario")
   console.log(usuarioexiste); 
   console.log("password")
   console.log(passwordexiste);
    console.log("ingreso a resolver lo del usuario")
     {
    //   $.ajax({
    //     url:"bd/login.php",
    //     type:"POST",
    //     datatype: "json",
    //     data: {cuenta:"0042", comando:"S"},                   
    //   });
      
      $.ajax({
        url:"bd/login.php",
        type:"POST",
        datatype: "json",
        data: {usuario:usuarioexiste},                   
      });
      //fin codigo adiciona comando
    }
     console.log($(this).attr("id"));
  });   

 


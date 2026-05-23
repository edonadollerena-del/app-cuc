    const music = new Audio('tecla.mp3');
    //music.play();
    //music.loop =true;
    //music.playbackRate = 2;
    //music.pause();qqazszdgfbgtyj
    let cuentacliente = localStorage.getItem("clavecuenta");    
    
    setInterval('contador()',1000);

    function contador(){     
      $("#first_line").html("TECLADO DSC" + " " + cuentacliente);
      //$("#second_line").html(cuentacliente);
      $.ajax({
        url:"bd/CONSULTAPANTALLACELULAR27.php",
        type:"POST",
        datatype: "json",
        data: {cuenta: cuentacliente, comando:"B"},
        success: function(res){
          var js= JSON.parse(res);        
          $("#second_line").html(js[0].pantalla2);  
        }    
      });

      $.ajax({
        url:"bd/CONSULTAESTADOALARMA27.php",
        type:"POST",
        datatype: "json",
        data: {cuenta: cuentacliente, comando:"B"},
        success: function(res){
          var js= JSON.parse(res);        
          
          //ready icon logic
          if (js[0].realequipo == 1) 
          {
             $("#ready_icon").addClass("green_circle");
          } 
          else if (js[0].realequipo == 0) {
             $("#ready_icon").removeClass("green_circle");
          } 
          
           //armed icon logic
           if (js[0].armadoequipo == 1) 
           {
            $("#armed_icon").addClass("red_circle");
           } 
           else if (js[0].armadoequipo == 0) {
            $("#armed_icon").removeClass("red_circle");
           } 

            //trouble light logic
            if (js[0].trblequipo == 1) 
            {
              $("#trouble_icon").addClass("orange_color");
            } 
            else if (js[0].trblequipo == 0) {
              $("#trouble_icon").removeClass("orange_color");
            } 
            
            //memory light logic
            if (js[0].memequipo == 1) 
            {
              $("#memory_icon").removeClass("far").addClass("fas").addClass("orange_color");
            } 
            else if (js[0].memequipo == 0) {
              $("#memory_icon").removeClass("fas").addClass("far").removeClass("orange_color");
            } 

            //bypass light logic
            if (js[0].bypequipo == 1) 
            {
              $("#bypass_icon").removeClass("far").addClass("fas").addClass("orange_color");
            } 
            else if (js[0].bypequipo == 0) {
              $("#bypass_icon").removeClass("fas").addClass("far").removeClass("orange_color");
            }  

            //program light logic
            // if (js[0].pgmequipo == 1) 
            // {
            //   $("#program_icon").addClass("green_circle");
            // } 
            // else if (js[0].pgmequipo == 0) {
            //   $("#program_icon").removeClass("green_circle");
            // } 
            
            //fire light logic            
            // if (js[0].fireequipo == 1) 
            // {
            //   $("#fire_icon").addClass("green_circle");
            // } 
            // else if (js[0].fireequipo == 0) {
            //   $("#fire_icon").removeClass("green_circle");
            // }  


        }    
      });
    }

    $(".btn").click(function(e) {
    action = {
      'btn_single_click': $(this).attr("id")    
    };    
    
    boton = $(this).attr("id");        
    music.play();
    
    if (boton == "btn_2")
    {     
      $.ajax({
        url:"bd/login.php",
        type:"POST",
        datatype: "json",
        data: {cuenta: cuentacliente, comando:"B"},                   
      });  
      
      
      //fin codigo adiciona comando

    } 
    
    
    if (boton == "btn_1")
    {     
       $.ajax({
        url:"bd/login.php",
        type:"POST",
        datatype: "json",
        data: {cuenta:cuentacliente, comando:"A"},                   
      });      
      //fin codigo adiciona comando
    } 

    if (boton == "btn_3")
    {    
      $.ajax({
        url:"bd/login.php",
        type:"POST",
        datatype: "json",
        data: {cuenta:cuentacliente, comando:"C"},                   
      });      
      //fin codigo adiciona comando
    }  

    if (boton == "btn_4")
    {
      $.ajax({
        url:"bd/login.php",
        type:"POST",
        datatype: "json",
        data: {cuenta:cuentacliente, comando:"D"},                   
      });      
      //fin codigo adiciona comando
    }  
    
    if (boton == "btn_5")
    {
      
      $.ajax({
        url:"bd/login.php",
        type:"POST",
        datatype: "json",
        data: {cuenta:cuentacliente, comando:"E"},                   
      });      
      //fin codigo adiciona comando
    }  
    
    if (boton == "btn_6")
    {      
      $.ajax({
        url:"bd/login.php",
        type:"POST",
        datatype: "json",
        data: {cuenta:cuentacliente, comando:"F"},                   
      });      
      //fin codigo adiciona comando
    }  
    
    if (boton == "btn_7")
    {      
      $.ajax({
        url:"bd/login.php",
        type:"POST",
        datatype: "json",
        data: {cuenta:cuentacliente, comando:"G"},                   
      });      
      //fin codigo adiciona comando
    }  

    if (boton == "btn_8")
    {      
      $.ajax({
        url:"bd/login.php",
        type:"POST",
        datatype: "json",
        data: {cuenta:cuentacliente, comando:"H"},                   
      });      
      //fin codigo adiciona comando
    }  
    
    if (boton == "btn_9")
    {
      console.log("presiono 9");
      //codigo adiciona comando
      $.ajax({
        url:"bd/login.php",
        type:"POST",
        datatype: "json",
        data: {cuenta:cuentacliente, comando:"I"},                   
      });      
      //fin codigo adiciona comando
    }  

    if (boton == "btn_0")
    {      
      $.ajax({
        url:"bd/login.php",
        type:"POST",
        datatype: "json",
        data: {cuenta:cuentacliente, comando:"0"},                   
      });      
      //fin codigo adiciona comando
    }  

    if (boton == "btn_#")
    {
      $.ajax({
        url:"bd/login.php",
        type:"POST",
        datatype: "json",
        data: {cuenta:cuentacliente, comando:"J"},                   
      });      
      //fin codigo adiciona comando
    }

    if (boton == "btn_*")
    {
      $.ajax({
        url:"bd/login.php",
        type:"POST",
        datatype: "json",
        data: {cuenta:cuentacliente, comando:"*"},                   
      });      
      //fin codigo adiciona comando
    }

    if (boton == "btn_s")
    {
      $.ajax({
        url:"bd/login.php",
        type:"POST",
        datatype: "json",
        data: {cuenta:cuentacliente, comando:"S"},                   
      });      
      //fin codigo adiciona comando
    }

    if (boton == "btn_w")
    {
      $.ajax({
        url:"bd/login.php",
        type:"POST",
        datatype: "json",
        data: {cuenta:cuentacliente, comando:"W"},                   
      });      
      //fin codigo adiciona comando
    }

    if (boton == "btn_f")
    {
      $.ajax({
        url:"bd/login.php",
        type:"POST",
        datatype: "json",
        data: {cuenta:cuentacliente, comando:"F"},                   
      });      
      //fin codigo adiciona comando  
    }

    if (boton == "btn_a")
    {
      $.ajax({
        url:"bd/login.php",
        type:"POST",
        datatype: "json",
        data: {cuenta:cuentacliente, comando:"A"},                   
      });      
      //fin codigo adiciona comando
    }

    if (boton == "btn_p")
    {
      $.ajax({
        url:"bd/login.php",
        type:"POST",
        datatype: "json",
        data: {cuenta:cuentacliente, comando:"P"},                   
      });      
      //fin codigo adiciona comando
    }

    if (boton == "btn_p1")
    {
      $.ajax({
        url:"bd/login.php",
        type:"POST",
        datatype: "json",
        data: {cuenta:cuentacliente, comando:"X"},                   
      });      
      //fin codigo adiciona comando
    }

    if (boton == "btn_p2")
    {
      $.ajax({
        url:"bd/login.php",
        type:"POST",
        datatype: "json",
        data: {cuenta:cuentacliente, comando:"Y"},                   
      });      
      //fin codigo adiciona comando
    }
   

    //console.log($(this).attr("id"));
    

  });



   $(".btn").click(function(e) {
    action = {
      'btn_single_click': $(this).attr("id")
    };    
    
    boton = $(this).attr("id");
    
    if (boton == "btn_2")
    {
      console.log("presiono 2");
      
      //codigo adiciona comando
      $.ajax({
        url:"bd/login.php",
        type:"POST",
        datatype: "json",
        data: {cuenta:"0027", comando:"2"},                   
      });      
      //fin codigo adiciona comando

    } 
    
    
    if (boton == "btn_1")
    {
      console.log("presiono 1");
      //codigo adiciona comando
      $.ajax({
        url:"bd/login.php",
        type:"POST",
        datatype: "json",
        data: {cuenta:"0027", comando:"1"},                   
      });      
      //fin codigo adiciona comando
    } 

    if (boton == "btn_3")
    {
      console.log("presiono 3");
      //codigo adiciona comando
      $.ajax({
        url:"bd/login.php",
        type:"POST",
        datatype: "json",
        data: {cuenta:"0027", comando:"3"},                   
      });      
      //fin codigo adiciona comando
    }  

    if (boton == "btn_4")
    {
      console.log("presiono 4");
      //codigo adiciona comando
      $.ajax({
        url:"bd/login.php",
        type:"POST",
        datatype: "json",
        data: {cuenta:"0027", comando:"4"},                   
      });      
      //fin codigo adiciona comando
    }  
    
    if (boton == "btn_5")
    {
      console.log("presiono 5");
      //codigo adiciona comando
      $.ajax({
        url:"bd/login.php",
        type:"POST",
        datatype: "json",
        data: {cuenta:"0027", comando:"5"},                   
      });      
      //fin codigo adiciona comando
    }  
    
    if (boton == "btn_6")
    {
      console.log("presiono 6");
      //codigo adiciona comando
      $.ajax({
        url:"bd/login.php",
        type:"POST",
        datatype: "json",
        data: {cuenta:"0027", comando:"6"},                   
      });      
      //fin codigo adiciona comando
    }  
    
    if (boton == "btn_7")
    {
      console.log("presiono 7");
      //codigo adiciona comando
      $.ajax({
        url:"bd/login.php",
        type:"POST",
        datatype: "json",
        data: {cuenta:"0027", comando:"7"},                   
      });      
      //fin codigo adiciona comando
    }  

    if (boton == "btn_8")
    {
      console.log("presiono 8");
      //codigo adiciona comando
      $.ajax({
        url:"bd/login.php",
        type:"POST",
        datatype: "json",
        data: {cuenta:"0027", comando:"8"},                   
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
        data: {cuenta:"0027", comando:"9"},                   
      });      
      //fin codigo adiciona comando
    }  

    if (boton == "btn_0")
    {
      console.log("presiono 0");
      //codigo adiciona comando
      $.ajax({
        url:"bd/login.php",
        type:"POST",
        datatype: "json",
        data: {cuenta:"0027", comando:"0"},                   
      });      
      //fin codigo adiciona comando
    }  

    if (boton == "btn_#")
    {
      console.log("presiono #");
      //codigo adiciona comando
      $.ajax({
        url:"bd/login.php",
        type:"POST",
        datatype: "json",
        data: {cuenta:"0027", comando:"#"},                   
      });      
      //fin codigo adiciona comando
    }

    if (boton == "btn_*")
    {
      console.log("presiono *");
      //codigo adiciona comando
      $.ajax({
        url:"bd/login.php",
        type:"POST",
        datatype: "json",
        data: {cuenta:"0027", comando:"*"},                   
      });      
      //fin codigo adiciona comando
    }

    if (boton == "btn_s")
    {
      console.log("presiono s");
      //codigo adiciona comando
      $.ajax({
        url:"bd/login.php",
        type:"POST",
        datatype: "json",
        data: {cuenta:"0027", comando:"S"},                   
      });      
      //fin codigo adiciona comando
    }

    if (boton == "btn_w")
    {
      console.log("presiono w");
      //codigo adiciona comando
      $.ajax({
        url:"bd/login.php",
        type:"POST",
        datatype: "json",
        data: {cuenta:"0027", comando:"W"},                   
      });      
      //fin codigo adiciona comando
    }

    if (boton == "btn_f")
    {
      console.log("presiono F");
      //codigo adiciona comando
      $.ajax({
        url:"bd/login.php",
        type:"POST",
        datatype: "json",
        data: {cuenta:"0027", comando:"F"},                   
      });      
      //fin codigo adiciona comando  
    }

    if (boton == "btn_a")
    {
      console.log("presiono a");
      //codigo adiciona comando
      $.ajax({
        url:"bd/login.php",
        type:"POST",
        datatype: "json",
        data: {cuenta:"0027", comando:"A"},                   
      });      
      //fin codigo adiciona comando
    }

    if (boton == "btn_p")
    {
      console.log("presiono p");
      //codigo adiciona comando
      $.ajax({
        url:"bd/login.php",
        type:"POST",
        datatype: "json",
        data: {cuenta:"0027", comando:"P"},                   
      });      
      //fin codigo adiciona comando
    }
   

    console.log($(this).attr("id"));
    

  });


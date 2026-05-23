
 $(".btn").click(function(e) {
  action = {
    'btn_single_click': $(this).attr("id")
  };    
  
  boton = $(this).attr("id");
      
    

    if (boton == "btn_p")
    {
      console.log("presiono p");
      //codigo adiciona comando
      $.ajax({
        url:"bd/login.php",
        type:"POST",
        datatype: "json",
        data: {cuenta:"0042", comando:"P"},                   
      });      
      //fin codigo adiciona comando
    }
   

    console.log($(this).attr("id"));
    

  });
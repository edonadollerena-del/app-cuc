
<!doctype html>
<html lang="en">


  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">        
    <link rel="stylesheet" type="text/css" href="fuentes/iconic/css/material-design-iconic-font.min.css">

       


    <title>APP BOTON EMERGENCIA</title>

    <style rel="stylesheet/scss" type="text/css">
      .btn {
        &:hover {
          background-color: red; !important;
          }
        }
    </style>

    <link rel="stylesheet" href="style.css" />


    <style type="text/css" media="screen">
     


      html {
        font-size: 16px;
      }

      @media screen and (min-width: 955px) {
        body {
          font-size: 1.265rem !important;
        }
        button.keypad_button {
          width: 5rem !important;
          font-size: 1.2rem !important;
        }
        button.keypad_button_small {
          width: 2.3rem !important;
        }
        div.virtual_lcd {
          font-size: 2.36rem !important;
        }
        div#zones_list {
          font-size: 0.75rem !important;
        }
        i.dsc-icon.icon-star {
          font-size: 1.0rem !important;
        }

      }

      body {
        font-family: 'IBM Plex Sans', sans-serif;
        font-size: calc(0.38rem + 1.5vw);
      }

      .greenbullet {
        color: #28a745;
      }

      .redbullet {
        color: #dc3545;
      }

      p.state_title {
        display: inline-block;
      }

      p.state_title:not(:first-child) {
        margin-left: 10px;
      }

      button.keypad_button {
        width: calc(0.6rem + 10vw);
        border-radius: 1.5rem;
        font-weight: bold;
        font-size: calc(0.6rem + 1vw);
        padding: 0.2rem;
        max-width: 5rem;
      }

      button.keypad_button_small {
        width: 7.0vw;
        padding: 2px;
        max-width: 2.2rem;
        line-height: 1 !important;
      }

      button.keypad_button_slim {
        margin: 0 auto;
        font-size:20px;
        font-family:Verdana,Helvetica;
        font-weight:bold;
        width:340px;
        height:200px;              
      }

      button.container-fluid{
        width: 50px;
        height: 50px;
        background-color: red;
        /* centrar vertical y horizontalmente */
        position: absolute;
        top: 50%;
        left: 50%;
        margin: -50px 0 0 -175px;

        

        font-size:20px;
        font-family:Verdana,Helvetica;
        font-weight:bold;
        color: white;
        width:340px;
        height:200px;   


        -webkit-border-radius: 50px;
        -moz-border-radius: 50px;
        border-radius: 50px;
      }  

      button.keypad_button_control {
        width:80px;
        height:19px;        
        padding: 2px;
        font-size: calc(0.6rem + 1vw);
        line-height: 1 !important;
        
      }


      div.virtual_lcd {
        background-color: #5f7cd8;
        color: #ffffff;
        font-family: 'Codystar', cursive;
        font-size: calc(1.3rem + 1.8vw);
        font-weight: bold;
        padding: 2px 10px;
        border-radius: 8px;
        flex: 1;
      }

      div#lcd_container {
        width: 100%;
        margin: 0 auto;
        border: 1px solid lightgrey;
        padding: 7px;
        background-color: whitesmoke;
        border-radius: 10px;
        white-space: nowrap;
        margin-bottom: 10px;
        display: flex;
      }

      div.keypad_button_row {
        margin: 12px 10px;
        text-align: center;
        white-space: nowrap;
      }

      div.container {
        border: 1px solid #939393;
        border-radius: 20px;
        padding: 10px;
        width: 100vw;
        background-color: #cacaca;
        max-width: 500px;
        min-width: 320px;
        margin-bottom: 10px;
      }

      div.inline_container {
        display: inline-block;
      }

      div.status_icons {
        text-align: center;
        padding: 0px;
        margin: 0px 0px 0px 5px;
        flex: 0;
        color: grey;
      }

      div.status_icons i {
        display: block;
        padding: 4px 0px;
        margin: 0px;
      }

      button.btn {
        background-color: red;;
        border: 2px solid #898e94;
      }

      button.btnP {
        background-color: red;;
        border: 2px solid #FF0000;
      }



      div#left_buttons,
      div#right_buttons,
      div#keypad_container {
        border: 1px solid lightgrey;
        padding: 7px 0px;
        border-radius: 8px;
        background-color: whitesmoke;
      }

      div#left_buttons {
        flex: 1;
        max-width: 5.9rem;
        line-height: 1 !important;
      }

      div#right_buttons div.keypad_button_row {
        margin: 8px 10px;
      }

      div#keypad_container {
        flex: 2;
        margin: 0px 10px;
        max-width: 17.5rem;
        line-height: 1.5 !important;
      }

      div#right_buttons {
        flex: 0;
        max-width: 5.8rem;
        line-height: 1 !important;
      }

      div#buttons_area {
        display: flex;
      }

      div.zones {
        background-color: whitesmoke;
      }

      div#zones_list {
        border-top: 1px solid grey;
        margin-top: 5px;
        padding-top: 5px;

        display: grid;
        grid-template-rows: repeat(16, auto);
        grid-gap: 10px;
        grid-auto-flow: column;
        font-size: 0.75rem;
      }

      div#regular_icons {
        display: flex;
        justify-content: space-between;
      }

      .green_circle {
        color: green;
      }

      .red_circle {
        color: red;
      }

      .orange_color {
        color: orange;
      }
      i.dsc-icon.icon-star {
        font-size: calc(0.45rem + 0.8vw);
        padding: 1rem 0px;

      }

      .alarm_zone {
        color: red;
      }
    </style>


  </head>

  <body>
  
  <form class="login-form validate-form" id="formTeclado" action="" method="post">                                
        <div  class="container-login">           
            <span class="login-form-title">APP BOTON DE EMERGENCIA</span>          
            <H5 style="text-align:center">FRENTE DE SEGURIDAD PARQUE EL LIMONCITO</H5> 
            <H5 style="text-align:center">CARRERAS ENTRE 73 Y 74 CON CALLES ENTRE 86B Y 87</H5>            
        </div>                    
        
        <div  class="container-login">
              <button type="button" id="btn_p" class="btn container-fluid">BOTON DE EMERGENCIA</button>                                              
        </div>           
  </form>
   
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <script src="jquery/jquery-3.3.1.min.js"></script>    
  <script src="comando_asalto.js"></script>         
  </body>

</html>

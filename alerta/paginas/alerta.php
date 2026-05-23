<div id="contenedor_alertas">

</div>

<script>

function cargarAlertas(){

    $("#contenedor_alertas")
    .load("ajax/obtener_alertas.php");

}

/* AUTO ACTUALIZA */

setInterval(function(){

    cargarAlertas();

},3000);

/* INICIAL */

cargarAlertas();

</script>
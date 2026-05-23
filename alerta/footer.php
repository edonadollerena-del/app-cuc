<!-- JQUERY -->

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- BOOTSTRAP -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>

/* ========================================= */
/* CARGAR PAGINAS */
/* ========================================= */

function cargarPagina(url){

    $("#contenido").load(url);

}

/* ========================================= */
/* ABRIR DASHBOARD EN ALERTAS */
/* ========================================= */

$(document).ready(function(){
    
    $("#contenido").load("paginas/alerta.php");

});

</script>

</body>

</html>
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
/* CARGA INICIAL */
/* ========================================= */

$(document).ready(function(){

    cargarPagina('paginas/alertas.php');

});

</script>

</body>

</html>
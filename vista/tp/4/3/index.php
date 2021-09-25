<?php
$titulo = "TP4 - EJ3";
include_once '../../../estructura/cabecera.php';
?>

<div class="main-container">
    <p class="text-center mt-4">
    Crear una pagina php “VerAutos.php”, en ella usando la capa de control correspondiente mostrar todos los datos de los autos que se encuentran cargados, de los dueños mostrar nombre y apellido. En caso de que no se encuentre ningún auto cargado en la base mostrar un mensaje indicando que no hay autos cargados.
    </p>

    <form class="text-center mt-4" action="accionAutos.php">
        <input type="submit" value="Listar">
    </form>
</div>

<?php
include_once '../../../estructura/pie.php';
?>
<?php
include_once '../../../../configuracion.php';
$sesion = new Session();

$datos = data_submitted();

if (!$sesion->activa()) {
    header('Location: index.php');
} else {
    include_once '../../../estructura/cabecera.php';
}
?>
<div class="container mt-3">
    <?php
    echo "<h3 class='text-center'>BIENVENIDO {$_SESSION['username']}</h3>";
    ?>

    <form action="cerrarSesion.php">
        <button type="submit" id="cerrarSesion" value="cerrarSesion">CERRAR SESION</button>
    </form>
</div>



<?php
include_once '../../../estructura/pie.php';
?>
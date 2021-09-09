<?php
include_once '../../../estructura/cabecera_tp2.php';
include '../../../../control/2/control_ej4.php';

$control = new control_ej4();
$texto = $control->crearTexto($_POST);
?>

<div class="container-main">

    <?php
    echo $texto;
    ?>

</div>

<?php
include_once '../../../estructura/pie.php';
?>